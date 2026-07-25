<?php
/**
 * Installer main english strings declaration file
 *
 * @copyright    (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license          GNU GPL 2.0 or later (https://www.gnu.org/licenses/gpl-2.0.html)
 * @package          installer
 * @since            2.3.0
 * @author           Haruki Setoyama  <haruki@planewave.org>
 * @author           Kazumi Ono <webmaster@myweb.ne.jp>
 * @author           Skalpa Keo <skalpa@xoops.org>
 * @author           Taiwen Jiang <phppp@users.sourceforge.net>
 * @author           dugris <dugris@frxoops.org>
 */
// _LANGCODE: zh_CN
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('SHOW_HIDE_HELP', '显示/隐藏帮助文本');
// License
//define('LICENSE_NOT_WRITEABLE', '许可证文件“%s”不可写！');
//define('LICENSE_IS_WRITEABLE', '%s 许可证可写。');
// Configuration check page
define('SERVER_API', '服务器API');
define('PHP_EXTENSION', '%s 扩展名');
define('CHAR_ENCODING', '字符编码');
define('XML_PARSING', 'XML解析');
define('REQUIREMENTS', '要求');
define('_PHP_VERSION', 'PHP版本');
define('RECOMMENDED_SETTINGS', '推荐设置');
define('RECOMMENDED_EXTENSIONS', '推荐扩展');
define('SETTING_NAME', '设置名称');
define('RECOMMENDED', '推荐');
define('CURRENT', '当前');
define('RECOMMENDED_EXTENSIONS_MSG', '正常使用不需要这些扩展，但可能需要探索
某些特定功能（例如多语言或RSS支持）。因此，建议安装它们。');
define('NONE', '无');
define('SUCCESS', '成功');
define('WARNING', '警告');
define('FAILED', '失败');
// Titles (main and pages)
define('XOOPS_INSTALL_WIZARD', 'XOOPS安装向导');
define('LANGUAGE_SELECTION', '语言选择');
define('LANGUAGE_SELECTION_TITLE', '选择您的语言');        // L128
define('INTRODUCTION', '简介');
define('INTRODUCTION_TITLE', '欢迎来到XOOPS安装向导');        // L0
define('CONFIGURATION_CHECK', '配置检查');
define('CONFIGURATION_CHECK_TITLE', '检查您的服务器配置');
define('PATHS_SETTINGS', '路径设置');
define('PATHS_SETTINGS_TITLE', '路径设置');
define('DATABASE_CONNECTION', '数据库连接');
define('DATABASE_CONNECTION_TITLE', '数据库连接');
define('DATABASE_CONFIG', '数据库配置');
define('DATABASE_CONFIG_TITLE', '数据库配置');
define('CONFIG_SAVE', '保存配置');
define('CONFIG_SAVE_TITLE', '保存您的系统配置');
define('TABLES_CREATION', '创建数据表');
define('TABLES_CREATION_TITLE', '创建数据库表');
define('INITIAL_SETTINGS', '初始设置');
define('INITIAL_SETTINGS_TITLE', '请输入您的初始设置');
define('DATA_INSERTION', '数据插入');
define('DATA_INSERTION_TITLE', '将您的设置保存到数据库');
define('WELCOME', '欢迎');
define('WELCOME_TITLE', '欢迎来到您的 XOOPS 网站');        // L0
// Settings (labels and help text)
define('XOOPS_PATHS', 'XOOPS物理路径');
define('XOOPS_URLS', 'Web位置');
define('XOOPS_ROOT_PATH_LABEL', 'XOOPS 文件根物理路径');
define('XOOPS_ROOT_PATH_HELP', 'XOOPS 文档（提供的）目录的物理路径，不带尾部斜杠');
define('XOOPS_LIB_PATH_LABEL', 'XOOPS 库目录');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS 数据文件目录');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS data files (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH_LABEL . ' to make it secure.');
define('XOOPS_URL_LABEL', '网站位置 (URL)'); // L56
define('XOOPS_URL_HELP', '主 URL 将用于访问您的 XOOPS 安装'); // L58
define('LEGEND_CONNECTION', '服务器连接');
define('LEGEND_DATABASE', '数据库'); // L51
define('DB_HOST_LABEL', '服务器主机名');    // L27
define('DB_HOST_HELP', '数据库服务器的主机名。如果您不确定，<em>localhost</em> 在大多数情况下都有效'); // L67
define('DB_USER_LABEL', '用户名');    // L28
define('DB_USER_HELP', '将用于连接到数据库服务器的用户帐户的名称'); // L65
define('DB_PASS_LABEL', '密码');    // L52
define('DB_PASS_HELP', '您的数据库用户帐户的密码'); // L68
define('DB_NAME_LABEL', '数据库名称');    // L29
define('DB_NAME_HELP', '主机上的数据库名称。如果数据库不存在，安装程序将尝试创建数据库'); // L64
define('DB_CHARSET_LABEL', '数据库字符集');
define('DB_CHARSET_HELP', 'MySQL 包括字符集支持，使您能够使用各种字符集存储数据并根据各种排序规则执行比较。');
define('DB_COLLATION_LABEL', '数据库排序规则');
define('DB_COLLATION_HELP', '排序规则是用于比较字符集中字符的一组规则。');
define('DB_PREFIX_LABEL', '表前缀');    // L30
define('DB_PREFIX_HELP', '此前缀将添加到所有创建的新表中，以避免数据库中的名称冲突。如果您不确定，请保留默认值'); // L63
define('DB_PCONNECT_LABEL', '使用持久连接');    // L54
define('DB_PCONNECT_HELP', "默认为“否”。如果您不确定，请将其留空"); // L69
define('DB_DATABASE_LABEL', '数据库');
define('LEGEND_ADMIN_ACCOUNT', '管理员账户');
define('ADMIN_LOGIN_LABEL', '管理员登录'); // L37
define('ADMIN_EMAIL_LABEL', '管理员邮箱'); // L38
define('ADMIN_PASS_LABEL', '管理员密码'); // L39
define('ADMIN_CONFIRMPASS_LABEL', '确认密码'); // L74
// Buttons
define('BUTTON_PREVIOUS', '上一步'); // L42
define('BUTTON_NEXT', '继续'); // L47
// Messages
define('XOOPS_FOUND', '%s 找到');
define('CHECKING_PERMISSIONS', '检查文件和目录权限...'); // L82
define('IS_NOT_WRITABLE', '%s 不可写。'); // L83
define('IS_WRITABLE', '%s 是可写的。'); // L84
define('XOOPS_PATH_FOUND', '已找到路径。');
//define('READY_CREATE_TABLES', '未检测到 XOOPS 表。<br> 安装程序现在已准备好创建 XOOPS 系统表。');
define('XOOPS_TABLES_FOUND', 'XOOPS 系统表已存在于您的数据库中。'); // L131
define('XOOPS_TABLES_CREATED', 'XOOPS 系统表已创建。');
//define('READY_INSERT_DATA', '安装程序现在已准备好将初始数据插入数据库。');
//define('READY_SAVE_MAINFILE', '安装程序现在已准备好将指定的设置保存到 <em>mainfile.php</em>。');
define('SAVED_MAINFILE', '设置已保存');
define('SAVED_MAINFILE_MSG', '安装程序已将指定的设置保存到 <em>mainfile.php</em> 和 <em>secure.php</em>。');
define('DATA_ALREADY_INSERTED', 'XOOPS 在数据库中找到数据。');
define('DATA_INSERTED', '初始数据已插入数据库。');
// %s is database name
define('DATABASE_CREATED', '数据库 %s 已创建！'); // L43
// %s is table name
define('TABLE_NOT_CREATED', '无法创建表 %s'); // L118
define('TABLE_CREATED', '表 %s 已创建。'); // L45
define('ROWS_INSERTED', '%d 条目插入到表 %s 中。'); // L119
define('ROWS_FAILED', '将 %d 条目插入表 %s 失败。'); // L120
define('TABLE_ALTERED', '表 %s 已更新。'); // L133
define('TABLE_NOT_ALTERED', '更新表 %s 失败。'); // L134
define('TABLE_DROPPED', '表 %s 已删除。'); // L163
define('TABLE_NOT_DROPPED', '删除表 %s 失败。'); // L164
// Error messages
define('ERR_COULD_NOT_ACCESS', '无法访问指定的文件夹。请验证它是否存在并且可以被服务器读取。');
define('ERR_NO_XOOPS_FOUND', '在指定文件夹中找不到 XOOPS 安装。');
define('ERR_INVALID_EMAIL', '无效的电子邮件'); // L73
define('ERR_REQUIRED', '信息是必填的。'); // L41
define('ERR_PASSWORD_MATCH', '两个密码不匹配');
define('ERR_NEED_WRITE_ACCESS', '服务器必须具有对以下文件和文件夹的写入权限<br>（即 UNIX/LINUX 服务器上的 <em>chmod 775 Directory_name</em>）<br>如果它们不可用或未正确创建，请手动创建并设置适当的权限。');
define('ERR_NO_DATABASE', '无法创建数据库。详细信息请联系服务器管理员。'); // L31
define('ERR_NO_DBCONNECTION', '无法连接到数据库服务器。'); // L106
define('ERR_WRITING_CONSTANT', '写入常量 %s 失败。'); // L122
define('ERR_COPY_MAINFILE', '无法将分发文件复制到 %s');
define('ERR_WRITE_MAINFILE', '无法写入 %s。请检查文件权限并重试。');
define('ERR_READ_MAINFILE', '无法打开 %s 进行读取');
define('ERR_INVALID_DBCHARSET', "不支持字符集“%s”。");
define('ERR_INVALID_DBCOLLATION', "不支持排序规则“%s”。");
define('ERR_CHARSET_NOT_SET', '未为 XOOPS 数据库设置默认字符集。');
define('_INSTALL_CHARSET', 'UTF-8');
define('SUPPORT', '支持');
define('LOGIN', '身份验证');
define('LOGIN_TITLE', '身份验证');
define('USER_LOGIN', '管理员登录');
define('USERNAME', '用户名：');
define('PASSWORD', '密码 :');
define('ICONV_CONVERSION', '字符集转换');
define('ZLIB_COMPRESSION', 'Zlib压缩');
define('IMAGE_FUNCTIONS', '图像函数');
define('IMAGE_METAS', '图像元数据 (exif)');
define('FILTER_FUNCTIONS', '过滤函数');
define('ADMIN_EXIST', '管理员帐户已存在。');
define('CONFIG_SITE', '网站配置');
define('CONFIG_SITE_TITLE', '网站配置');
define('MODULES', '模块安装');
define('MODULES_TITLE', '模块安装');
define('THEME', '选择主题');
define('THEME_TITLE', '选择默认主题');
define('INSTALLED_MODULES', '以下模块已安装。');
define('NO_MODULES_FOUND', '未找到模块。');
define('NO_INSTALLED_MODULES', '没有安装任何模块。');
define('THEME_NO_SCREENSHOT', '未找到截图');
define('IS_VALOR', ' => ');
// password message
define('PASSWORD_LABEL', '密码强度');
define('PASSWORD_DESC', '未输入密码');
define('PASSWORD_GENERATOR', '密码生成器');
define('PASSWORD_GENERATE', '生成');
define('PASSWORD_COPY', '复制');
define('PASSWORD_VERY_WEAK', '非常弱');
define('PASSWORD_WEAK', '弱');
define('PASSWORD_BETTER', '较强');
define('PASSWORD_MEDIUM', '中等');
define('PASSWORD_STRONG', '强');
define('PASSWORD_STRONGEST', '最强');
//2.5.7
define('WRITTEN_LICENSE', '写入 XOOPS %s 许可证密钥：<strong>%s</strong>');
//2.5.8
define('CHMOD_CHGRP_REPEAT', '重试');
define('CHMOD_CHGRP_IGNORE', '仍然使用');
define('CHMOD_CHGRP_ERROR', '安装程序可能无法写入配置文件 %1$s.<p>PHP 正在用户 %2$s 和组 %3$s.<p> 下写入文件 目录 %4$s/ 具有用户 %5$s 和组 %6$s');
//2.5.9
define("CURL_HTTP", "客户端 URL 库 (cURL)");
define('XOOPS_COOKIE_DOMAIN_LABEL', '网站的 Cookie 域');
define('XOOPS_COOKIE_DOMAIN_HELP', '设置 cookie 的域。可以为空、来自 URL (www.example.com) 的完整主机，或没有子域 (example.com) 的注册域以跨子域（www.example.com 和 blog.example.com）共享。');
define('INTL_SUPPORT', '国际化函数');
define('XOOPS_SOURCE_CODE', "XOOPS 在 GitHub");
define('XOOPS_INSTALLING', '正在安装');
define('XOOPS_ERROR_ENCOUNTERED', '错误');
define('XOOPS_ERROR_SEE_BELOW', '请参阅下面的消息。');
define('MODULES_AVAILABLE', '可用模块');
define('INSTALL_THIS_MODULE', '添加%s');
//2.5.11
define('ERR_COPY_CONFIG_FILE', '无法复制配置文件 %s');
//2.7.0
// website name and slogan
define('_WEBSITE_NAME', 'XOOPS 网站');
define('_WEBSITE_SLOGAN', '就用它吧！');
define('_WEBSITE_META_KEYWORDS', 'xoops，Web应用程序框架，cms，内容管理系统');
define('_WEBSITE_FOOTER', "技术支持 XOOPS © 2001-{X_YEAR} <a href='https://xoops.org' rel='external' title='The XOOPS Project'>XOOPS 项目</a>");
define('_WEBSITE_COPYRIGHT', '版权所有© 2001-{X_YEAR}');
define('_WEBSITE_DESCRIPTION', 'XOOPS 是一个用 PHP 编写的动态面向对象的开源门户脚本。');
define('_WEBSITE_CENSOR_REPLACE', '哎呀');
// 2.7.1
define('MISSING_REQUIRED_EXTENSIONS', 'Required PHP extensions are missing');
define('MISSING_REQUIRED_EXTENSIONS_MSG', 'XOOPS cannot be installed because the following mandatory PHP extension(s) are not available: %s. Enable them in your PHP configuration (php.ini) and restart your web server, then reload this page.');
