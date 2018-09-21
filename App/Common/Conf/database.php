<?php

$db_type = "mysql";
$hostname = "127.0.0.1";
$port = "3306";
$username = "root";
$password = "root";
$dbname = "demo";
$table_prefix = "d_";

return array(

//*************************************数据库设置*************************************
    'DB_TYPE'               =>  $db_type,                 // 数据库类型
    'DB_HOST'               =>  $hostname,     // 服务器地址
    'DB_NAME'               =>  $dbname ,     // 数据库名
    'DB_USER'               =>  $username,     // 用户名
    'DB_PWD'                =>  $password,      // 密码
    'DB_PORT'               =>  $port,     // 端口
    'DB_PREFIX'             =>  $table_prefix,   // 数据库表前缀
    'RBAC_DB_DSN'  =>   array(
        'DB_TYPE'       =>  $db_type,      
        'DB_HOST'       =>  $hostname,  
        'DB_NAME'       =>  $dbname ,           
        'DB_USER'       =>  $username,      
        'DB_PWD'        =>  $password,     
        'DB_PORT'       =>  $port,       
        'DB_PREFIX'     =>  $table_prefix,  
    ),    //数据库连接DSN
    
    'RBAC_ROLE_TABLE'   => $table_prefix.'role' ,     //角色表名称
    'RBAC_USER_TABLE'   => $table_prefix.'role_user',     //用户表名称
    'RBAC_ACCESS_TABLE' => $table_prefix.'access' ,       //权限表名称
    'RBAC_NODE_TABLE'   => $table_prefix.'node' ,   //节点表名称
);