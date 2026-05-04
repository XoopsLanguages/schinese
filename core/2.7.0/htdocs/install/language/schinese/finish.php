<?php
//
// _LANGCODE: zh_CN
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content .= "<h3>您的网站</h3>
<p>您现在可以访问 <a href='../index.php'>您网站的主页</a>.</p>
<h3>支持</h3>
<p>访问 <a href='https://xoops.org/' rel='external'>XOOPS 项目</a></p>
<p><strong>注意力 ：</strong> 您的网站当前包含最低限度的功能。 
请访问 <a href='https://xoops.org/' rel='external' title='XOOPS Web Application System'>xoops.org</a> 
了解有关扩展 XOOPS 以呈现文本页面、照片库、论坛等的更多信息， 
与 <em>模块</em> 以及自定义 XOOPS 的外观 <em>主题</em>.</p>
";

$content .= "<h3>安全配置</h3>
<p>出于安全考虑，安装程序将尝试配置您的站点。请仔细检查以确保：
<div class='confirmMsg'>
这 <em>mainfile.php</em> 是只读的。<br>
删除文件夹 <em>{$installer_modified}</em> （或者 <em>install</em> 如果安装程序没有自动重命名）从您的服务器。
</div>
</p>
";
