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
<link rel="stylesheet" href="/Public/umeditor/themes/default/css/umeditor.css">
 <link rel="stylesheet" href="/Public/layui/css/layui.css" media="all">
<style type="text/css">
    .edui-container{
        margin-left: 120px;
    }
    #editor{
        width:960px;
        height:320px;
        margin-top:0;
    }
</style>

<section class="rt_wrap content mCustomScrollbar">
    <div class="rt_content">
        <div class="page_title" style="margin-top: 5px;">
            <h2 class="fl">添加新闻</h2>
            <a class="fr top_rt_btn" href="<?php echo U('News/newslist');?>">返回新闻列表</a>
        </div>
        <section>
            <form method="post" action="" id="publishnews">
            <ul class="ulColumn2">
                <li>
                    <span class="item_name" style="width:120px;">标题：</span>
                    <input type="text" name="title" id="title" class="textbox textbox_295" placeholder="新闻标题..." required="true" />
                </li>
                <li>
                    <span class="item_name" style="width:120px;vertical-align:top;">简介：</span>
                    <textarea placeholder="新闻简介..." id="remark" class="textarea" style="width:600px;height:50px;" name="remark"></textarea>
                </li>
               
                <li>
                    <span class="item_name" style="width:120px;">封面图片：</span>
                    <label class="single_selection">
                        <button type="button" class="layui-btn" id="uploadImage">上传封面</button> 
                    </label>
                    <label class="single_selection">
                        <div style="width: 320px;height: 200px;border:1px solid #eee;"><img id="showbox" style="width: 100%;" /></div>
                    </label> 
                    <input type="hidden" id="showboxurl" name="image" value="">
                </li>
                <li>
                    <span class="item_name" style="width:120px;">新闻正文：</span>
                    <script id="editor" name="content" type="text/plain"></script>
                </li>

                 <li>
                    <span class="item_name" style="width:120px;">状态：</span>
                    <label class="single_selection"><input type="radio" name="status" checked="true" value="1" />发布</label>
                    <label class="single_selection"><input type="radio" name="status" value="0" />草稿箱</label>
                </li>
                <li>
                    <span class="item_name" style="width:120px;"></span>
                    <input type="button" class="link_btn" value="提交" id="sub" />
               </li>
            </ul>
            </form>
        </section>
    </div>
</section>
<script type="text/javascript" src="/Public/umeditor/third-party/template.min.js"></script>
<script type="text/javascript" src="/Public/umeditor/umeditor.config.js"></script>
<script type="text/javascript" src="/Public/umeditor/umeditor.min.js"></script>
<script type="text/javascript" src="/Public/layui/layui.js"></script>
<script type="text/javascript">
        var um = UM.getEditor('editor');
</script>
<script type="text/javascript">
    $(function(){
        $('#sub').click(function(event) {
            var image = $('#showboxurl').val()
            var title = $('#title').val()
           

            if (image.length<1 ) {
                layer.alert("请上传封面", 
                {
                    skin: 'layui-layer-lan',
                    closeBtn: 0,
                    anim: 1 ,
                });
                return 
            }
            if (title.length<5) {
                layer.alert("标题不能少于5个字", 
                {
                    skin: 'layui-layer-lan',
                    closeBtn: 0,
                    anim: 1 ,
                });
                return
            }
            $('#publishnews').submit();
        });
    })
</script>
<script type="text/javascript">
    layui.use(['upload','layer'], function(){
        var upload = layui.upload;
        var layer = layui.layer; 
        var uploadIn = upload.render({
            elem: '#uploadImage' ,
            url: "<?php echo U('News/uploadImage');?>",
            accept:'images',
            exts:"jpg|png|gif|bmp|jpeg",
            size:'2048',
            before: function(obj){ 
                layer.load();
            },
            done: function(res){
                layer.closeAll('loading');
                if (res.code ==0) {
                    $('#showbox').attr('src',res.data);
                    $('#showboxurl').val(res.data);
                }else{
                    layer.alert(res.msg, 
                    {
                        skin: 'layui-layer-lan',
                        closeBtn: 0,
                        anim: 4 ,
                    });
                }
            },
            error: function(){
                layer.closeAll('loading');
                layer.alert("服务器错误", 
                {
                    skin: 'layui-layer-lan',
                    closeBtn: 0,
                    anim: 4 ,
                });
            }
        });
    });
</script>
</body>
</html>