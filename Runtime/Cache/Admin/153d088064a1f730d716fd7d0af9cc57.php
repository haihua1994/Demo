<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
<meta charset="utf-8"/>
<title>后台管理系统</title>
<meta name="author" content="DeathGhost" />
<link rel="shortcut icon" href="/favicon.png">
<link rel="stylesheet" type="text/css" href="/Public/css/style.css" />
<!--[if lt IE 9]>
<script src="/Public/js/html5.js"></script>
<![endif]-->
<script src="http://libs.baidu.com/jquery/2.1.3/jquery.min.js"></script>
<script src="/Public/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script>
    (function($){
        $(window).load(function(){
            
            $("a[rel='load-content']").click(function(e){
                e.preventDefault();
                var url=$(this).attr("href");
                $.get(url,function(data){
                    $(".content .mCSB_container").append(data); //load new content inside .mCSB_container
                    //scroll-to appended content 
                    $(".content").mCustomScrollbar("scrollTo","h2:last");
                });
            });
            $(".content").delegate("a[href='top']","click",function(e){
                e.preventDefault();
                $(".content").mCustomScrollbar("scrollTo",$(this).attr("href"));
            });
        });
    })(jQuery);
</script>

<script type="text/javascript">
    $(function(){
        $('#<?php echo CONTROLLER_NAME; ?>').nextAll('dd').css('display','block');
        $('.lt_aside_nav dt').on('click',function(){
            var show =  $(this).nextAll('dd').css('display');
            if(show=='block'){
                $(this).nextAll('dd').slideUp();    
            }else{
                 $(this).nextAll('dd').slideDown();    
            }
        });
    });
</script>
<style type="text/css">
    .lt_aside_nav dd{display:none;}
 
    header .group_btn,header .group_btn:hover{
        background:#2a8467;
        margin-top: 20px; margin-left: 20px; 
        letter-spacing:2px;
        border-radius:3px;
        border: 1px solid rgba(0,0,0,0.2);
    }
  
    header .btn_active{
        box-shadow:1px 1px 3px white;
        background:#366a59;border:1px #0e8f61 solid;
        border: 1px solid rgba(0,0,0,0.2);
    }
     header .btn_active:hover{
       background:#366a59;
    }
</style>
    

</head>
<body>
<!--header-->
<header>
 <h1><img src="/Public/images/admin_logo.png"/></h1>

 <a href="<?php echo U('Admin/Index/index');?>"><input type="button" value="系统管理" name="" class="group_btn btn_active"></a>

 
 <ul class="rt_nav">
  
  <li><a href="<?php echo U('Admin/Index/index');?>" class="admin_icon">权限管理</a></li>
  <li><a href="<?php echo U('Admin/Index/index');?>" class="set_icon">账号设置</a></li>
  <li><a href="<?php echo U('Admin/Login/logout');?>" class="quit_icon">安全退出</a></li>
</ul>
</header>

<!--aside nav-->
<aside class="lt_aside_nav content mCustomScrollbar">
 <ul>

 
    <?php if(session(C('ADMIN_AUTH_KEY'))==true && MODULE_NAME=='Admin' ): ?><li>
       <dl>
        <dt id="Index">系统管理</dt>
        <!--当前链接则添加class:active-->
           <?php if(session(C('ADMIN_AUTH_KEY'))==true): ?><dd><a href="<?php echo U('Index/adminlist');?>" >用户管理</a></dd>
              <dd><a href="<?php echo U('Index/rolelist');?>" >角色管理</a></dd>
              <dd><a href="<?php echo U('Index/nodelist');?>" >节点管理</a></dd><?php endif; ?> 
          <dd><a href="<?php echo U('Index/index');?>" >账号设置</a></dd>
       </dl>
      </li><?php endif; ?>
        <?php if(is_array($menu)): $i = 0; $__LIST__ = $menu;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v): $mod = ($i % 2 );++$i;?><li>
           <dl>
            <dt id="<?php echo ($v['name']); ?>"><?php echo ($v["title"]); ?></dt>
              <?php if(is_array($v['child'])): $i = 0; $__LIST__ = $v['child'];if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$v1): $mod = ($i % 2 );++$i;?><dd><a href='<?php echo U("$v[name]/$v1[name]");?>' id="<?php echo ($v['name']); echo ($v1['name']); ?>"><?php echo ($v1["title"]); ?></a></dd><?php endforeach; endif; else: echo "" ;endif; ?>
           </dl>
          </li><?php endforeach; endif; else: echo "" ;endif; ?>
    

    <li>
      <p class="btm_infor">© 版权所有</p>
    </li>

 </ul>
</aside>

<style type="text/css">
    .v_update{
            border:1px solid #19a97b;
            padding:2px 10px;
            color:#19a97b;
            cursor: pointer;
            transition:background 0.8s;
        }
        .v_update:hover{
          background:#19a97b;
          color:white;
        }

        .v_delete{
          border:1px solid red;
          padding:2px 10px;
          color:red;
          cursor: pointer;
          transition:background 0.8s; 
        }

        .v_delete:hover{
          background:red;
          color:white;
        }
      
</style>


<section class="rt_wrap content mCustomScrollbar">
    <div class="rt_content">
        <section style="margin:15px;">

            <a href="<?php echo U('News/addnews');?>"><input type="button" value="添加新闻" class="group_btn" id="sub"/></a>
        </section>
        <section>


            <table class="table">
                <tr>
                    <td>ID</td>
                    <td>标题</td>
                    <td>发布日期</td>
                    <td>操作</td>
                </tr>

                <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$value): $mod = ($i % 2 );++$i;?><tr class="dataList">
                    <td><?php echo ($value['id']); ?></td>
                    <td><?php echo ($value['title']); ?></td>
                    <td><?php echo (date("Y-m-d H:i:s",$value['create_time'])); ?></td>
                   
                    <td>
                  
                    <a href="<?php echo U('News/updatenews',array('id'=>$value['id']));?>"><span class="v_update">修改</span></a>
                    <span class="v_delete" data="<?php echo ($value['id']); ?>">删除</span>
                  
                    </td>
                    </tr><?php endforeach; endif; else: echo "" ;endif; ?>
            </table>

        </section>
    </div>
</section>
<script type="text/javascript">
      $(function(){

       $('.v_delete').on('click',function(){
           
            var id = $(this).attr('data');
            var userLine = $(this);

            $.ajax({
              type:'post',
              url: "<?php echo U('News/deletenews');?>",
              data: 'id='+id,
              success:function(e){
                  if(e=='success'){
                    userLine.parent().parent().css('display','none');
                  }else{
                    alert('删除失败.请重试');
                  }
              }
            });
       });
     });
</script>
</body>
</html>