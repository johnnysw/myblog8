<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="zh-CN" xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="Content-Language" content="zh-CN">
	<title>博客文章管理 Johnny的博客 - 唯创个人博客</title>
    <base href="<?php echo site_url();?>">
    <link rel="stylesheet" href="css/space2011.css" type="text/css" media="screen">
	<style type="text/css">
		body,
		table,
		input,
		textarea,
		select {
			font-family: Verdana, sans-serif, 宋体;
		}
	</style>
</head>

<body>
	<!--[if IE 8]>
<style>ul.tabnav {padding: 3px 10px 3px 10px;}</style>
<![endif]-->
	<!--[if IE 9]>
<style>ul.tabnav {padding: 3px 10px 4px 10px;}</style>
<![endif]-->
	<div id="OSC_Screen">
        <?php include 'admin_top.php';?>
        <div id="OSC_Content">
			<div id="AdminScreen">
				<div id="AdminPath">
					<a href="index_logined.htm">返回我的首页</a>&nbsp;»
					<span id="AdminTitle">博客文章管理</span>
				</div>
                <?php include "admin_menu.php";?>
                <div id="AdminContent">
					<div class="MainForm BlogArticleManage">
						<h3 class="title">共有 3 篇博客，每页显示 40 个，共 1 页</h3>
						<div id="BlogOpts">
							<a href="javascript:;" onclick="select_all();">全选</a>&nbsp;|
							<a href="javascript:;" onclick="unselect_all();">取消</a>&nbsp;|
							<a href="javascript:;" onclick="select_other();">反向选择</a>&nbsp;|
							<a href="javascript:;" id="btn-selected">删除选中</a>
						</div>
						<ul>
                            <?php
                                foreach ($blogs as $blog){
                            ?>
                                    <li class="row_1">
                                        <input name="blog_id" value="<?php echo $blog->blog_id;?>" type="checkbox">
                                        <a href="blog/view_post?blog_id=<?php echo $blog->blog_id;?>" target="_blank">
                                            <?php
                                                echo $blog->title;
                                            ?>
                                        </a>
                                        <small><?php echo $blog->post_date;?></small>
                                    </li>
                            <?php
                                }
                            ?>


						</ul>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
		<div id="OSC_Footer">© 唯创网讯</div>
	</div>
</body>
<script src="js/jquery-3.3.1.min.js"></script>
<script>
    $('#btn-selected').click(function () {
        if(confirm('确定删除这些文章吗，不可恢复!')){
            var ids = "";
            $('[name=blog_id]:checked').each(function(index, elem){
                ids += elem.value + ',';
            });
            ids = ids.substring(0, ids.length - 1);
            location.href = "admin/delete_blog?ids="+ids;
        }
    });
</script>
</html>