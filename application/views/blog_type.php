<!DOCTYPE html
	PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="zh-CN" xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta http-equiv="Content-Language" content="zh-CN">
	<title>博客设置/分类管理 Johnny的博客 - 唯创个人博客</title>
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
					<span id="AdminTitle" d>博客设置/分类管理</span>
				</div>
                <?php include "admin_menu.php";?>
				<div id="AdminContent">
					<div class="MainForm BlogCatalogManage">
						<form id="CatalogForm" action="admin/add_type" method="post">
							<h3> 添加博客分类 </h3>
							<div id="error_msg" class="error_msg" style="display:none;"></div>
							<label>分类名称:</label><input id="txt_link_name" name="type_name" size="15" tabindex="1" type="text">
							<span class="submit">
								<input value="添加&nbsp;»" tabindex="3" class="BUTTON SUBMIT" type="submit">
							</span>
						</form>
						<form class="BlogCatalogs">
							<h3>博客分类 <span>(点击分类名编辑)</span></h3>
							<table cellpadding="1" cellspacing="1">
								<tbody>
									<tr>
										<th>分类名</th>
										<th>文章</th>
										<th>操作</th>
									</tr>
                                    <?php
                                        foreach ($types as $type){
                                    ?>
                                    <tr id="catalog_92334">
                                        <td class="name"><a href="editCatalog.htm" title="点击修改博客分类"><?php echo $type->type_name;?></a></td>
                                        <td class="num"><?php echo $type->blog_count;?></td>
                                        <td class="opts">
                                            <a href="editCatalog.htm" title="点击修改博客分类">修改</a>
                                            <a class="delete-type" href="admin/delete_type?type_id=<?php echo $type->type_id;?>">删除</a>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    ?>


								</tbody>
							</table>
						</form>
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
    $('.delete-type').click(function () {
        if(confirm('确定要删除该文章类型吗，不可恢复!')){
            return true;
        }
        return false;
    });
</script>
</html>