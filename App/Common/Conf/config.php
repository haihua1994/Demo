<?php

$b = include_once (dirname(__FILE__)."/database.php");

$a = array(
    
    'URL_MODEL'         =>  1, 
    
    'SHOW_PAGE_TRACE'   =>true,

    'USER_AUTH_ON'      => true,
    'USER_AUTH_TYPE'    => 2 ,
    'USER_AUTH_KEY'     =>'id',

    'NOT_AUTH_MODULE'   =>'Login',
    'USER_AUTH_GATEWAY' =>'/Admin/Login/login' ,
    'ADMIN_AUTH_KEY'    => 'supper_admin',
 
    'ADMIN'             => 'admin',

    'URL_ROUTER_ON'     =>  false,
    'URL_ROUTE_RULES'   =>  array(
            'admin'  =>'Admin/Login/login' 
        ), 
    'PASSWORD_SALT'     => 'ishaiua@163.com',
);

return array_merge($a,$b);