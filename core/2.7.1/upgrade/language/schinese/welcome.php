<?php

// _LANGCODE: zh_CN
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define(
    '_XOOPS_UPGRADE_WELCOME',
    <<<'EOT'
<h2>XOOPS 升级器</h2>

<p>
<em>升级</em> 将检查此 XOOPS 安装并应用任何所需的补丁以使其兼容 
使用新的 XOOPS 代码。补丁可能包括数据库更改，添加新的默认设置
配置项、文件和数据更新等等。
<p>
每次打补丁后，升级程序都会报告状态，并等待您的输入继续。在
升级结束后，控制权将传递给系统模块更新功能。

<div class="alert alert-warning">
升级完成后，不要忘记：
<ul class="fa-ul">
 <li><span class="fa-li fa-solid fa-folder-open"></span> 删除升级文件夹</li>
 <li><span class="fa-li fa-solid fa-arrows-rotate"></span> 更新所有已更改的模块</li>
</div>

EOT,
);
