<?php

namespace Admin\Controller;

use think\Controller;

class LoginController extends Controller
{
    public function login()
    {
        if (session('isLogin')) {
             redirect(U('Admin/Index/index'));
        }
        if (IS_POST) {
            $postData = I('post.');
            if (session('loginErrorNum')>5) $this->error('登录错误次数过多，请勿再尝试~');
            if (!empty($postData['email']) && !empty($postData['password'])) {
                $salt= C("PASSWORD_SALT");
                $map['email']=$postData['email'];
                $map['password']=md5(md5($postData['password'].$salt));
                $map['is_active']=0;
                $result=D('Admin')->doLogin($map);
                if ($result) {
                    $_SESSION['isLogin']  = 1;
                    $_SESSION['id'] = $result['id'];
                    $_SESSION['name'] = $result['name'];
                    $_SESSION['mail'] = $result['mail'];
                    session('isLogin','1');
                    session('id',$result['id']);
                    session('name',$result['name']);
                    session('email',$result['email']);
                    /*如果是超级管理员,给true*/
                    if( $result['name']===C('ADMIN') ){
                        session(C('ADMIN_AUTH_KEY'),true);
                    }
                    
                    /*登录行为记录*/
                    B('\Admin\Behaviors\LoginLog','',$result['id']);
                    redirect(U('Admin/Index/index'));
                }else{
                    $_SESSION['loginErrorNum'] += 1;
                    $this->error('用户名或密码错误.');
                }
            }else{
                $this->error('登录邮箱和密码不能为空.');
            }
        }
        $this->display();
    }

    public function logout()
    {
        session_destroy();
        redirect(U('/'));
    }
}