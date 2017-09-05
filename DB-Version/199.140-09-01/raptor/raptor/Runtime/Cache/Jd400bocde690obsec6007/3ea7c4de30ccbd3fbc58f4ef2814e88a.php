<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <title>匠迪云</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link rel="shortcut icon" href="images/favicon.ico"/>

    <link rel="stylesheet" href="/Public/admin/Css/bootstrap.css">
    <link rel="stylesheet" href="/Public/admin/Css/iframe-usecreat.css">
    <link rel="stylesheet" href="/Public/admin/Css/table.css">
    <link rel="stylesheet" href="/Public/admin/Css/pop-up.css">



</head>
<body>

<div class="creat-user "><p>用户创建<span class="user-add btn" data-toggle = "modal"  data-target="#creatrole_add_modal"></span></p></div>

<!--------------滚动条----------->
<div class="scroll-container">
    <div class="scroll">
        <table class="table table-bordered" id = "table">
        </table>
    </div>
</div>

<!--添加用户弹框-->

<div class="modal fade" id="creatrole_add_modal"  aria-labelledby="creatrole_add_title" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="creatrole_add_title">
                    新建
                </h4>
            </div>
            <form action="" type="" id="form_reg" onsubmit="return false">
                <div class="modal-body" style="margin-top: 20px">
                    <p>
                        <span>用&nbsp;&nbsp;户&nbsp;&nbsp;名</span>
                        <input type="text" name="nickname" class="message-input" placeholder="请输入用户名 中文 数字 字母（3-15）">
                        <label style="display:none;" class="warning nickname"></label>
                    </p>
                    <p>
                        <span>公&nbsp;&nbsp;司&nbsp;&nbsp;名</span>
                        <input type="text" name="corporate_name" class="message-input" placeholder="请输入公司名称">
                        <label style="display:none;" class="warning corporate_name"></label>
                    </p>
                    <p>
                        <span>密&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;码</span>
                        <input type="password" name="password" class="message-input" placeholder="请输入密码 数字 字母 标点（6-20）">
                        <label style="display:none;" class="warning password"></label>
                    </p>
                    <p>
                        <span>确认密码</span>
                        <input type="password" name="password_ok" class="message-input" placeholder="请输入密码 数字 字母 标点（6-20）">
                        <label style="display: none" class="warning password_ok"></label>
                    </p>

                    <p>
                        <span>邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;件</span>
                        <input type="email" name="email" class="message-input" placeholder="请输入邮箱">
                        <label style="display: none" class="warning email"></label>
                    </p>
                    <p>
                        <span>电&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;话</span>
                        <input type="tel" name="phone" class="message-input" placeholder="请输入手机号码">
                        <label style="display: none" class="warning phone"></label>
                    </p>
                    <p>
                        <span>扫描次数</span>
                        <input type="text" name="upload_num" value="10">
                    </p>
                    <p>
                        <span>扫描大小</span>
                        <input type="text" name="upload_size" value="20">
                    </p>
                    <p>
                        <span>是否启用</span>
                        <select name="switch_type">
                            <option value="1" selected = "selected">是</option>
                            <option value="2">否</option>
                        </select>
                    </p>
                    <div class="remark">
                        <span>备&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;注</span>
                        <textarea name="content"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-pri-def add_form">
                        确定
                    </button>
                    <button type="button" class="btn btn-default btn-pri-def" data-dismiss="modal">
                        取消
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--编辑用户弹窗-->
<div class="modal fade" id="edit_modal"  aria-labelledby="edit_title" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="edit_title">
                    编辑
                </h4>
            </div>
            <form action="" type="" id = "form" onsubmit="return false">
                <div class="modal-body" style="margin-top: 20px">
                    <p class="scan_cs">
                        <span>扫描次数</span>
                        <input type="hidden" class="user_id" name="user_id" value="">
                        <input type="number" name="upload_num" value="" placeholder="(次/天)" class="upload_num">

                    </p>
                    <p>
                        <span>扫描大小</span>
                        <input type="number" name="upload_size" value="" placeholder="(M/次)" class="upload_size">
                    </p>
                    <p>
                        <span>是否启用</span>
                        <select name="switch_type">
                            <option value="1" class="switch_type_y">是</option>
                            <option value="2" class="switch_type_n">否</option>
                        </select>
                    </p>
                    <div class="remark">
                        <span >备&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;注</span>
                        <textarea name="content" class="content"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-pri-def user_form">
                        确定
                    </button>
                    <button type="button" class="btn btn-default btn-pri-def" data-dismiss="modal">
                        取消
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<!--删除弹框-->
<div class="modal fade" id="del_modal"  aria-labelledby="del_title" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                    &times;
                </button>
                <h4 class="modal-title" id="del_title">
                    信息提示
                </h4>
            </div>
            <form action="" type=""  onsubmit="return false">
                <div class="modal-body" style="margin-top: 20px">
                    <p>
                        是否删除该用户？
                    </p>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary btn-pri-def del_ok">
                        确定
                    </button>
                    <button type="button" class="btn btn-default btn-pri-def" data-dismiss="modal">
                        取消
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
<script src="/Public/admin/Js/jquery-3.1.1.min.js"></script>
<script src="/Public/admin/Js/bootstrap.min.js"></script>
<script src="/Public/admin/Js/bootstrap-table.js"></script>
<script src="/Public/admin/Js/usecreat.js"></script>
</body>
</html>