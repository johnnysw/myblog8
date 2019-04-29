<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xml:lang="zh-CN" xmlns="http://www.w3.org/1999/xhtml" lang="zh-CN">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="Content-Language" content="zh-CN">
    <title>发表博客 Johnny的博客 - 唯创个人博客</title>
    <base href="<?php echo site_url(); ?>">

    <link rel="stylesheet" href="css/space2011.css" type="text/css" media="screen">
    <style type="text/css">
        body, table, input, textarea, select {
            font-family: Verdana, sans-serif, 宋体;
        }
    </style>
</head>
<body>
<!--[if IE 8]>
<style>ul.tabnav {
    padding: 3px 10px 3px 10px;
}</style>
<![endif]-->
<!--[if IE 9]>
<style>ul.tabnav {
    padding: 3px 10px 4px 10px;
}</style>
<![endif]-->
<div id="OSC_Screen"><!-- #BeginLibraryItem "/Library/OSC_Banner.lbi" -->
    <?php include 'admin_top.php';?>
    <div id="OSC_Content">
        <div id="AdminScreen">
            <div id="AdminPath">
                <a href="index_logined.htm">返回我的首页</a>&nbsp;»
                <span id="AdminTitle">发表博客</span>
            </div>
            <?php include "admin_menu.php";?>
            <div id="AdminContent">
                <div class="MainForm">
                    <form id="BlogForm" action="admin/post_blog" method="POST">
                        <table>
                            <tbody>
                            <tr>
                                <td class="t">标题（必填）</td>
                            </tr>
                            <tr>
                                <td>
                                    <input name="title" id="f_title" class="TEXT" style="width: 400px;" type="text">
                                    存放于
                                    <select name="type_id">
                                        
                                        <?php
                                            foreach ($types as $type){
                                        ?>
                                            <option value="<?php echo $type->type_id;?>">
                                                <?php echo $type->type_name;?>
                                            </option>
                                        <?php
                                            }
                                        ?>

                                    </select>
                                    <a href="blogCatalogs.htm" onclick="return confirm('是否放弃当前编辑进入分类管理？');">分类管理»</a>
                                </td>
                            </tr>
                            <tr>
                                <td class='t'>内容（必填）
                                    <span id='save_draft_msg' style='display:none;color:#666;'></span>

                                </td>
                            </tr>

                            <tr>

                                <td><textarea name="content" id="ta_blog_content"
                                              style="width:750px;height:300px;"></textarea></td>
                            </tr>

                            <tr>
                                <td>&nbsp;</td>
                            </tr>
                            <tr class="submit">
                                <td>
                                    <input value=" 发 表 " class="BUTTON SUBMIT" type="submit">
                                    <input name="as_top" value="1" type="checkbox">
                                    设置为置顶
                                    <span id="ajax_processing" style="margin-left:10px;">正在提交，请稍候...</span>
                                    <span id="submit_msg" style="display:none;"></span>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </form>
                </div>

                <div class="clear"></div>
                <div id="OSC_Footer">© 唯创网讯</div>
            </div>
            <script src="js/jquery-3.3.1.min.js"></script>
            <script charset="utf-8" src="kindeditor/kindeditor-all-min.js"></script>
            <script charset="utf-8" src="kindeditor/lang/zh-CN.js"></script>
            <script>
                KindEditor.ready(function(K) {
                    window.editor = K.create('#ta_blog_content');
                });
            </script>

</body>
</html>