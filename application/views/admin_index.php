<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="zh-CN" xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="Content-Language" content="zh-CN">
	<title>Johnny的博客 - 唯创个人博客</title>
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
					<span id="AdminTitle">管理首页</span>
				</div>
				<?php include "admin_menu.php";?>
				<div id="AdminContent">
					<p style="margin-top:150px;text-align:center;color:#666;">欢迎来到个人空间管理页面，请从左边菜单中选择</p>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div class="clear"></div>
		<div id="OSC_Footer">© 唯创网讯</div>
	</div>
</body>

</html>