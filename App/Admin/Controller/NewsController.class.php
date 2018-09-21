<?php

namespace Admin\Controller;

class NewsController extends BaseController
{
    public function newslist()
    {
        $model = M('News');
        $count      = $model->count();
        $Page       = new \Think\Page($count,10);
        $show       = $Page->show();
        $data = $model->order('create_time')->limit($Page->firstRow.','.$Page->listRows)->select();

        $this->assign('data',$data);
        $this->assign('page',$show);
        $this->display();
    }

    public function addnews()
    {
        if (IS_POST) {
            $postData =I('post.');
            $postData['create_time'] =time();
            $postData["update_time"] =time();
            $res = M('News')->add($postData);
            if ($res) {
                redirect("newslist", 2, '页面跳转中...');
            }else{
                $this->error("添加失败".$res);
            }
        }
        $this->display();
    }
    public function deletenews()
    {
        if (IS_POST && IS_AJAX) {
            $id=I('post.id');
            $result=M('News')->delete($id);
            if ($result) {
                echo 'success';
            }else{
                echo 'faile';
            }
        }else{
            die('sorry');
        }
    }

    public function updatenews()
    {
        if (IS_POST) {
            $postData=I('post.');
            
            $result = M("News")->where("id =%d",$postData["id"])->save($postData);

            if ($result) {
                 $this->error("修改完成");
            }else{
                $this->error("修改失败，或未发生修改");
            }

        }
        $id=I('get.id');
        $news = M('News')->where("id =%d",$id)->find();
        if (! $news) {
            $this->error("没有找到该新闻");
        }
        $this->assign('news',$news);
        $this->display();
    }

    public function uploadImage()
    {
        $config = array(
            'maxSize'    =>    3145728,
            'rootPath'   =>    './Uploads/',
            'savePath'   =>    'news/',
            'saveName'   =>    array('uniqid',''),
            'exts'       =>    array('jpg', 'gif', 'png', 'jpeg'),
            'autoSub'    =>    true,
            'subName'    =>    array('date','Ymd'),
        );

        $upload = new \Think\Upload($config);
        $info   =   $upload->upload();
        if(!$info) {// 上传错误提示错误信息
            $this->ajaxReturn([
                'code'=>-1,
                'msg'=>$upload->getError(),
                'data' =>"",
            ]);
        }else{// 上传成功
            $imgUrl= '/Uploads/'.$info['file']['savepath'].$info['file']['savename'];
            $this->ajaxReturn([
                'code'=>0,
                'msg'=> "success",
                'data' =>$imgUrl,
            ]);
        }  
    }
}