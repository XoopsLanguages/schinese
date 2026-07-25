<?php
// _LANGCODE: zh_CN
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('LEGEND_XOOPS_PATHS', 'XOOPS物理路径');
define('LEGEND_DATABASE', '数据库字符集');

define('XOOPS_LIB_PATH_LABEL', 'XOOPS 库目录');
define('XOOPS_LIB_PATH_HELP', 'Physical path to the XOOPS library directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');
define('XOOPS_DATA_PATH_LABEL', 'XOOPS 数据文件目录');
define('XOOPS_DATA_PATH_HELP', 'Physical path to the XOOPS datafiles (writable) directory WITHOUT trailing slash, for forward compatibility. Locate the folder out of ' . XOOPS_ROOT_PATH . ' to make it secure.');

define('DB_COLLATION_LABEL', '数据库字符集和排序规则');
define('DB_COLLATION_HELP', "从 4.12 MySQL 开始，支持自定义字符集和排序规则。然而，它比预期的更复杂，所以除非您对自己的选择有信心，否则不要进行任何更改。");
define('DB_COLLATION_NOCHANGE', '不要改变');

define('XOOPS_PATH_FOUND', '已找到路径。');
define('ERR_COULD_NOT_ACCESS', '无法访问指定的文件夹。请验证它是否存在并且可以被服务器读取。');
define('CHECKING_PERMISSIONS', '检查文件和目录权限...');
define('ERR_NEED_WRITE_ACCESS', '必须向服务器授予对以下文件和文件夹<br>（即 UNIX/LINUX 服务器上的 <em>chmod 777 Directory_name</em>）的写入权限');
define('IS_NOT_WRITABLE', '%s 不可写。');
define('IS_WRITABLE', '%s 是可写的。');
define('ERR_COULD_NOT_WRITE_MAINFILE', '将内容写入mainfile.php时出错，请手动将内容写入mainfile.php。');
