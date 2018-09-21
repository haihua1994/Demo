<?php
namespace Admin\Controller;

class IndexController extends BaseController {

    public function index(){
        $id = I('session.id');
       
        $data = D('Admin')->getUserById($id);

        $this->assign('data',$data);
        $this->display();
    }

    public function adminlist()
    {
        $name='';
        if (IS_GET) {
            $name=I('get.name');
        }
        $data=D('Admin','Logic')->allUsers($name);
        $this->assign('data',$data);
        $this->display();
    }

    public function rolelist()
    {
        $data = D('Role','Logic')->roleList();
        $this->assign('data',$data);
        $this->display();
    }

    public function updateUserPassword()
    {
        if (IS_POST && IS_AJAX) {
            $id=session('id');
            $password=I('post.password');
            $result=D('Admin')->updatePassword($id,$password);
            if ($result) {
                $this->ajaxReturn(['status'=>0]);
            }else{
                $this->ajaxReturn(['status'=>1]);
            }
        }else{
            $this->ajaxReturn(['status'=>1]);
        }

    }

    public function clearcache(){

        $uidArr = D('Admin','Logic')->allUserId();

        foreach($uidArr as $uid){
            S('admin'.$uid,null);
            S('admin',null);
        }
        redirect(U('Index/adminlist'));
    }

    public function addadmin()
    {
        if (IS_POST) {
            $postData=I('post.');
            $result=D('Admin')->addNewAdmin($postData);
            if ($result) {
                redirect(U('Admin/Index/adminlist'));
            }else{
                $this->error('系统错误');
            }
            
        }
        $roleList = D('Role','Logic')->roleList();
        $this->assign('roleList',$roleList);
        $this->display();
    }

    public function checkEmail()
    {
        if (IS_POST && IS_AJAX) {
            $email=I('post.email');
            $result=D('User')->checkEmail($email);
            if ($result) {
                $this->ajaxReturn(['status'=>1]);
            }else{
                $this->ajaxReturn(['status'=>0]);
            }
        }else{
            die('sorry');
        }
    }

    public function deleteuser()
    {
       if (IS_POST && IS_AJAX) {
            $id=I('post.id');
            $result=D('Admin')->delUserById($id);
            if ($result) {
                echo 'success';
            }else{
                echo 'faile';
            }
        }else{
            die('sorry');
        }
    }

    public function updateadmin()
    {
        if (IS_POST) {
            $postData=I('post.');
            $result=D('Admin')->updateAdmin($postData);
            if ($result) {
                redirect(U('Admin/Index/adminlist'));
            }else{
                $this->error('系统错误');
            }
        }
        $id=I('get.id');
        $data = D('Admin')->getUserById($id);
        $roleList = D('Role','Logic')->roleList();
        $this->assign('roleList',$roleList);
        $this->assign('data',$data);
        $this->display();
    }

    public function deleterole()
    {
        $role_id=I('get.role_id');
        $result=M('Role')->where('id='.$role_id)->delete();
        redirect(U('Index/rolelist'));
    }

    public function addrole()
    {
        if(IS_POST){
            $postData = I('post.');
            D('Role','Logic')->addRole($postData);
            redirect(U('Index/roleList'));
            exit;
        }
        $node = D('Node','Logic')->where(array('status'=>1))->getNodeList();

        $this->assign('node',$node);
        $this->display();
    }

    public function updaterole()
    {
        if( IS_POST ){

            $post = I('post.');

            /*更新角色、角色节点表*/
            D('Role','Logic')->saveRole($post);
            redirect(U('Index/rolelist'));
            exit;
        }


        $role_id = I('get.role_id');
        $data = D('Role','Logic')->getRoleInfo($role_id);
        $this->assign('data',$data);
        $this->display();
    }

    public function nodelist()
    {
        $data= D('Node','Logic')->getNodeList();
          
        $this->assign('data',$data);
        $this->display();
    }

    public function addNode(){
        if(IS_POST){
            $post = I('post.');
            
            $res = D('Node','Logic')->addNode($post);
            if($res){
                S('admin',null);
                redirect(U('Index/nodeList'));
            }else{
                $this->error('添加失败,请重试');
            }
            exit;
        }
        $this->display();
    }

    /*删除节点*/
    public function deleteNode(){
        $nodeId = I('get.dataid');
        D('Node','Logic')->deleteNode($nodeId);
        S('admin',null);
        redirect(U('Index/nodeList'));
    }


    public function updateNode()
    {
        if(IS_POST){
            $postData = I('post.');
            D('Node','Logic')->updateNode($postData);
            S('admin',null);
            redirect(U('Index/nodeList'));
        }

        $node_id = I('get.id');
        $data = D('Node','Logic')->findNode($node_id);
        $this->assign('data',$data);
        $this->display();
    }   
}