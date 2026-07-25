<?php
//
// _LANGCODE: zh_CN
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

$content = '
<p>
    <abbr title="eXtensible Object-Oriented Portal System">XOOPS</abbr> 是一个开源的
    用 PHP 编写的面向对象的 Web 发布系统。它是一个理想的工具
    开发从小到大的动态社区网站、公司内部门户、企业门户、博客等等。
</p>
<p>
    XOOPS 根据以下条款发布
    <a href="https://www.gnu.org/licenses/gpl-2.0.html" rel="external">GNU 通用公共许可证 (GPL)</a>
    版本 2 或更高版本，并且可以免费使用和修改。
    只要您遵守 GPL 的分发条款，就可以免费重新分发。
</p>
<h3>要求</h3>
<ul>
    <li>WWW 服务器（<a href="https://www.apache.org/" rel="external">Apache</a>, <a href="https://www.nginx.com/" rel="external">NGINX</a>、IIS 等）</li>
    <li><a href="https://www.php.net/" rel="external">PHP</a> 8.2 或更高，推荐 8.4+</li>
    <li><a href="https://www.mysql.com/" rel="external">MySQL</a> 5.7.8 或更高，推荐 8.4.5+ </li>
</ul>
<h3>安装前准备</h3>
<ol>
    <li>正确设置 WWW 服务器、PHP 和数据库服务器。</li>
    <li>为您的 XOOPS 站点准备一个数据库。</li>
    <li>准备用户帐户并授予用户访问数据库的权限。</li>
    <li>使这些目录和文件可写：%s</li>
    <li>出于安全考虑，强烈建议您将以下两个目录移出 <a href="https://privacyaustralia.net/phpsec/projects/guide/php-security-guide-databases-and-sql/" rel="external">文档根目录</a> 并更改文件夹名称：%s</li>
    <li>创建（如果尚不存在）并使这些目录可写：%s</li>
    <li>打开浏览器的 cookie 和 JavaScript。</li>
</ol>
<h3>特别说明</h3>
<ol>
    <li>某些特定的系统软件组合可能需要一些额外的配置才能工作
    与 XOOPS。如果这些主题中的任何一个适用于您的环境，请参阅完整的
    <a href="https://xoops.gitbook.io/xoops-install-upgrade/" rel="external">XOOPS
    安装手册</a> 了解更多信息。<br><br>

    <li><strong>SELinux</strong> 启用的系统（例如 <strong>CentOS</strong>  和 <strong>RHEL</strong>）可能需要更改安全上下文
    对于 XOOPS 目录，除了使目录可写的正常文件权限之外。
    请咨询您的系统文档和/或系统管理员。
</ol>
';

return $content;
