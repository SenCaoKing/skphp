<?php
/* Smarty version 3.1.32, created on 2018-07-23 12:37:16
  from 'E:\WWW\mytest\github\skphp.\app\smarty\templates\bookmark\user\login.html' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b55cbfc83fce4_39813691',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8e208ce3043ca26d7b8e0f3417a998321bc07c65' => 
    array (
      0 => 'E:\\WWW\\mytest\\github\\skphp.\\app\\smarty\\templates\\bookmark\\user\\login.html',
      1 => 1532349416,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b55cbfc83fce4_39813691 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="/assets/css/login.css" />
    <title>SKPHP-Bookmark登录注册</title>
</head>

<body>
<h1>SKPHP-Bookmark登录注册</h1>
<div class="login" style="margin-top: 50px;">
    <div class="header">
        <div class="switch" id="switch">
            <a class="switch_btn_focus" id="switch_qlogin" href="javascript:void(0);" tabindex="7">
                快速登录
            </a>
            <a class="switch_btn" id="switch_login" href="javascript:void(0);" tabindex="8">
                快速注册
            </a>
            <div class="switch_bottom" id="switch_bottom" style="position: absolute; width: 64px; left: 0px;"></div>
        </div>
    </div>
    <div class="web_qr_login" id="web_qr_login" style="display: block; height: 235px;">
        <!--登录-->
        <div class="web_login" id="web_login">
            <div class="login_form">
                <form action="" name="loginform" accept-charset="UTF-8" id="login_form" class="loginForm" method="post">
                    <div class="uinArea" id="uinArea">
                        <label class="input-tips" for="username">
                            账号:
                        </label>
                        <div class="inputOuter" id="uArea">
                            <input type="text" name="username" class="inputstyle" />
                        </div>
                    </div>
                    <div class="pwdArea" id="pwdArea">
                        <label class="input-tips" for="password">
                            密码:
                        </label>
                        <div class="inputOuter" id="pArea">
                            <input type="password" name="password" class="inputstyle" />
                        </div>
                    </div>
                    <div style="padding-left: 50px; margin-top: 20px;">
                        <input type="sumbit" value="登 录" style="width: 150px;" class="button_blue">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--登录end-->
</div>
<!--注册-->
<div class="qlogin" id="qlogin" style="display: none;">
    <div class="web_login">
        <form name="form2" id="reg_form" accept-charset="UTF-8" action="" method="post">
            <input type="hidden" name="to" value="reg" />
            <input type="hidden" name="did" value="0" />
            <ul class="reg_form" id="reg-ul">
                <div id="userCue" class="cue">
                    快速注册请注意格式
                </div>
                <li>
                    <label for="username" class="input-tips2">
                        用户名:
                    </label>
                    <div class="inputOuter2">
                        <input type="text" name="username" maxlength="16" class="inputstyle2" />
                    </div>
                </li>
                <li>
                    <label for="password" class="input-tips2">
                        密码:
                    </label>
                    <div class="inputOuter2">
                        <input type="password" name="password" maxlength="16" class="inputstyle2" />
                    </div>
                </li>
                <li>
                    <label for="repassword" class="input-tips2">
                        确认密码:
                    </label>
                    <div class="inputOuter2">
                        <input type="password" name="repassword" maxlength="16" class="inputstyle2" />
                    </div>
                </li>
                <li>
                    <div class="inputArea">
                        <input type="submit" id="reg" style="margin-top: 10px; margin-left: 50px; width: 200px;" class="button_blue" value="注册" />
                        <a href="#" class="zcxy" target="_blank"></a>
                    </div>
                </li>
                <div class="cl"></div>
            </ul>
        </form>
    </div>
</div>
<!--注册end-->
<input type="text" id="basepath" value="">
<?php echo '<script'; ?>
 type="text/javascript" src="/assets/lib/jquery/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/assets/lib/layer/layer.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/assets/js/login.js"><?php echo '</script'; ?>
>

</body>
</html><?php }
}
