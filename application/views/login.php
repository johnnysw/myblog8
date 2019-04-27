<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="zh-CN" xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="Content-Language" content="zh-CN">
	<title>登录 - 唯创个人博客</title>
    <base href="<?php echo site_url();?>">

    <link rel="stylesheet" href="css/oschina2011.css" type="text/css" media="screen">
	<style type="text/css">
		body,
		table,
		input,
		textarea,
		select {
			font-family: Verdana, Simsun, sans-serif;
		}
	</style>
</head>

<body>
	<div id="OSC_Screen">
		<div id="OSC_Content" class="CenterDiv">
			<style>
				#OSC_Footer {
					border: 0;
				}

				.MainForm tr.hl th {
					border: 1px solid #C00;
					border-right: 0;
					background: #FEE;
				}

				.MainForm tr.hl td {
					border: 1px solid #C00;
					border-left: 0;
					background: #FEE;
				}

				.MainForm td .nodisp {
					display: none;
					padding-left: 20px;
				}

				.MainForm tr.hl td .nodisp {
					display: inline;
					color: #C00;
					font-size: 11pt;
				}

				#OSChinaLoginTip {
					font-size: 10.5pt;
					padding: 0 0 20px 10px;
					color: #060;
				}

				#OSChinaLoginTip ul {
					margin: 10px 0 0 0;
				}

				#OSChinaLoginTip ul li {
					float: left;
					width: 90px;
					margin-right: 30px;
				}

				#OSChinaLoginTip ul li#openid_gmail img {
					margin-top: 8px;
				}

				#OSChinaLoginTip ul li#openid_yahoo img {
					margin-top: 15px;
				}

				#OSChinaLoginTip ul li#openid_msn img {}

				#OSChinaLoginTip ul li a {
					display: block;
					height: 40px;
				}

				#OSChinaLoginTip ul li a {
					border: 1px solid #fff;
					padding: 2px;
				}

				#OSChinaLoginTip ul li a:hover {
					border: 1px solid #40AA53;
					background: #cfc;
				}
			</style>

			<div class="MainForm" id="login_page">
				<form id="frm_login" action="user/check_login" method="POST" style="float:left; width:620px;">
					<h2>登录个人博客，如果尚未加入的请点击<a href="user/reg">注册新会员</a></h2>
					<div id="error_msg" class="error_msg" style="display:none;"></div>
					<table>
						<tbody>
							<tr>
								<th nowrap="nowrap">邮箱 或 账号：</th>
								<td><input name="email" id="f_email" class="TEXT" style="width: 200px;" type="text"></td>
							</tr>
							<tr>
								<th>登录密码：</th>
								<td><input name="pwd" id="f_pwd" class="TEXT" style="width: 200px;" type="password"></td>
							</tr>
							<tr>
								<th>&nbsp;</th>
								<td><input name="save_login" value="1" checked="checked" type="checkbox"> 记住我的登录信息</td>
							</tr>
							<tr class="buttons">
								<th>&nbsp;</th>
								<td>
									<input value="现在登录" class="BUTTON SUBMIT" type="submit" />
								</td>
							</tr>
							<tr height="40">
								<th></th>
								<td></td>
							</tr>
						</tbody>
					</table>
				</form>
				<div id="login_tip" class="tipbox" style="float:right;width:300px;">
					<h3>登录后可以？</h3>
					<ol>
						<li>参与博客的讨论和评论</li>
						<li>和别人分享心得</li>
					</ol>
				</div>
				<div class="clear"></div>
			</div>
		</div>
		<div id="OSC_Footer">© 唯创网讯</div>
	</div>
	</div>
</body>

</html>