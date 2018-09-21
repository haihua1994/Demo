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
    
    .table td{text-align:center;}
    .table th{letter-spacing:4px;}
    .table .dataList:hover{
      background:#FFE4B5;
    }
    .lt_aside_nav dt{
      cursor:pointer;
    }

    #addMan{
        border:1px #19a97b solid;padding:8px 10px;
        transition:background 0.6s;
    }
    #addMan:hover{
      background:#139667;
      color:white;
    }

    #AccountSettinggetnodelist{
       color: #19a97b;
      background: #f8f8f8;
    }
</style>

      <section class="rt_wrap content mCustomScrollbar">
      <div class="rt_content">
          <form action="" method="post">
            <!-- PID -->
            <input type="hidden" name="pid" value="<?php echo ($data['pid']); ?>"/>
            <!-- ID -->
            <input type="hidden" name="id" value="<?php echo ($data['id']); ?>"/>
              <section>
                <h2><strong style="color:grey;">更新节点</strong></h2>
                <ul class="ulColumn2">
                 <li>
                  <span class="item_name" style="width:120px;">功能标题　</span>
                  <input type="text" class="textbox textbox_295" placeholder="简短描述" name="title" value="<?php echo ($data['title']); ?>"/>
                 </li>

                <li>
                  <span class="item_name" style="width:120px;">节点名　</span>
                  <input type="text" class="textbox textbox_295" name="name" value="<?php echo ($data['name']); ?>"/>
                   <span class="errorTips">请注意此选项为相应模块、控制器、方法名称...</span>
                </li>

                 <li>
                  <span class="item_name" style="width:120px;">类型　</span>
                  <select class="select" name="level">
                    <option value="1" id='name1'>　　　模块　　　</option>
                    <option value="2" id='name2'>　　　控制器　　　</option>
                    <option value="3" id='name3'>　　　方法　　　</option>
                  </select>
                 </li>
                 <li>
                  <span class="item_name" style="width:120px;">是否不显示：</span>
                  <label class="single_selection"><input type="radio" name="show" value="1" id="show1"/>显示</label>
                  <label class="single_selection"><input type="radio" name="show" value="0" id="show0"/>不显示</label>
                 </li>
                 <li>
                  <span class="item_name" style="width:120px;vertical-align:top;">备注　</span>
                  <textarea placeholder="备注信息" class="textarea" style="width:500px;height:100px;" name="remark"><?php echo ($data['remark']); ?></textarea>
                 </li>
                 <li>
                  <span class="item_name" style="width:120px;"></span>
                  <input type="submit" class="link_btn" value="更新"/>
                 </li>
                </ul>
               </section>
             </div>
            </section>
        </form>
  </div>
  </section>
 <script type="text/javascript">
    $(function(){
        $('#name<?php echo ($data["level"]); ?>').attr('selected',true);
        $('#show<?php echo ($data["show"]); ?>').attr('checked',true);
    });

 </script>


</body>
</html>