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
		<!-- #BeginLibraryItem "/Library/OSC_Banner.lbi" -->
		<div id="OSC_Banner">
			<div id="OSC_Slogon">Johnny's Blog</div>
			<div id="OSC_Channels">
				<ul>
					<li><a href="#" class="project">心情 here...</a></li>
				</ul>
			</div>
			<div class="clear"></div>
		</div><!-- #EndLibraryItem -->
		<div id="OSC_Topbar">
			<div id="VisitorInfo">
				当前访客身份：
				Johnny [ <a href="#">退出</a> ]
				<span id="OSC_Notification">
					<a href="#" class="msgbox" title="进入我的留言箱">你有<em>0</em>新留言</a>
				</span>
			</div>
			<div id="SearchBar">
				<form action="#">
					<input name="user" value="154693" type="hidden">
					<input id="txt_q" name="q" class="SERACH" value="在此空间的博客中搜索"
						onblur="(this.value=='')?this.value='在此空间的博客中搜索':this.value"
						onfocus="if(this.value=='在此空间的博客中搜索'){this.value='';};this.select();" type="text">
					<input class="SUBMIT" value="搜索" type="submit">
				</form>
			</div>
			<div class="clear"></div>
		</div>
		<div id="OSC_Content">
			<div id="AdminScreen">
				<div id="AdminPath">
					<a href="index_logined.htm">返回我的首页</a>&nbsp;»
					<span id="AdminTitle">管理首页</span>
				</div>
				<div id="AdminMenu">
					<ul>
						<li class="caption">个人信息管理
							<ol>
								<li><a href="inbox.htm">站内留言(0/1)</a></li>
								<li><a href="profile.htm">编辑个人资料</a></li>
								<li><a href="chpwd.htm">修改登录密码</a></li>
								<li><a href="userSettings.htm">网页个性设置</a></li>
							</ol>
						</li>
					</ul>
					<ul>
						<li class="caption">博客管理
							<ol>
								<li><a href="newBlog.htm">发表博客</a></li>
								<li><a href="blogCatalogs.htm">博客设置/分类管理</a></li>
								<li><a href="blogs.htm">文章管理</a></li>
								<li><a href="blogComments.htm">博客评论管理</a></li>
							</ol>
						</li>
					</ul>
				</div>
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