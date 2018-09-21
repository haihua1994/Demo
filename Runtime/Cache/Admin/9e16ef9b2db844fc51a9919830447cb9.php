<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>登陆</title>
<meta name="author" content="Haiua" />
<link rel="shortcut icon" href="./favicon.png">
<link rel="stylesheet" type="text/css" href="/Public/css/style.css" />
<style>
body{height:100%;background:#16a085;overflow:hidden;}
canvas{z-index:-1;position:absolute;}
</style>
<script src="/Public/js/jquery.js"></script>
<script src="/Public/js/Particleground.js"></script>
<script>
$(document).ready(function() {
//粒子背景特效
    $('body').particleground({
        dotColor: '#5cbdaa',
        lineColor: '#5cbdaa'
        });

    });
</script>
<style type="text/css">
    input:-webkit-autofill,
    input:-webkit-autofill:hover,
    input:-webkit-autofill:focus {     
      border: none;    
      -webkit-text-fill-color: white;    
      -webkit-box-shadow: 0 0 0px 1000px #5CBDA8 inset;    
      transition: background-color 5000s ease-in-out 0s;    
      font-weight: 500;
    }
</style>
</head>
<body>
    <dl class="admin_login">
    <dt>
        <strong>后台管理系统</strong>
        <em>Management System</em>
    </dt>

    <form action="" method="post"  autocomplete="off">
        <dd class="user_icon">
            <input type="text" placeholder="邮箱" class="login_txtbx" name="email"  />
        </dd>
        <dd class="pwd_icon">
            <input type="password" placeholder="密码" class="login_txtbx" name="password" autocomplete="new-password" />
        </dd>


        <dd>
            <input type="submit" value="立即登陆" class="submit_btn"/>
        </dd>
    </form> 

    <dd>
        <p>© 2017-2026 ishaiua@163.com 版权所有</p>
        <p></p>
    </dd>
    </dl>
</body>
</html>