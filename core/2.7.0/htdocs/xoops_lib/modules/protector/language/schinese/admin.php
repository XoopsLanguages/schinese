<?php
// mymenu
define('_MD_A_MYMENU_MYTPLSADMIN','');
define('_MD_A_MYMENU_MYBLOCKSADMIN','权限');
define('_MD_A_MYMENU_MYPREFERENCES','首选项');
// index.php
define('_AM_TH_DATETIME', '时间');
define('_AM_TH_USER', '用户');
define('_AM_TH_IP', 'IP');
define('_AM_TH_代理', 'AGENT');
define('_AM_TH_TYPE', '类型');
define('_AM_TH_DESCRIPTION', '描述');
define('_AM_TH_BADIPS','坏IP<br><br><span style="font-weight:normal;">每个IP写一行<br>空白表示允许所有IP</span>');
define('_AM_TH_GROUP1IPS','组允许的 IP=1<br><br><span style="font-weight:normal;">为每个 IP 写一行.<br>192.168。表示 192.168。*<br> 空白表示允许所有 IP</span>');
define('_AM_LABEL_COMPACTLOG', '紧凑日志');
define('_AM_BUTTON_COMPACTLOG', '压缩！');
define('_AM_JS_COMPACTLOGCONFIRM', '重复的 (IP,Type) 记录将被删除');
define('_AM_LABEL_REMOVEALL', '删除所有记录');
define('_AM_BUTTON_REMOVEALL', '删除所有！');
define('_AM_JS_REMOVEALLCONFIRM', '所有日志都被绝对删除。你真的好吗？');
define('_AM_LABEL_REMOVE', '删除选中的记录：');
define('_AM_BUTTON_REMOVE', '删除！');
define('_AM_JS_REMOVECONFIRM', '删除可以吗？');
define('_AM_MSG_IPFILESUPDATED', 'IP 文件已更新
所有帖子中都允许使用');
define('_AM_MSG_BADIPSCANTOPEN', '无法打开错误 IP 的文件');
define('_AM_MSG_GROUP1IPSCANTOPEN', '允许group=1的文件打不开');
define('_AM_MSG_REMOVED', '记录已删除');
define('_AM_MSG_DELFAILED', '删除记录失败');
define('_AM_FMT_CONFIGSNOTWRITABLE', '将 configs 目录设置为可写：%s');
// prefix_manager.php
define('_AM_H3_PREFIXMAN', '前缀管理器');
define('_AM_MSG_DBUPDATED', '数据库更新成功！');
define('_AM_CONFIRM_DELETE', '所有数据都将被删除。好的？');
define('_AM_TXT_HOWTOCHANGEDB',"如果您想更改前缀，<br> 手动编辑 %s/data/secure.php.<br><br>define('XOOPS_DB_PREFIX', '<b>%s</b>');");
// advisory.php
define('_AM_ADV_NOTSECURE', '不安全');
define('_AM_ADV_TRUSTPATHPUBLIC', '如果您可以看到图像 -NG- 或链接返回正常页面，则您的 XOOPS_TRUST_PATH 放置不正确。 XOOPS_TRUST_PATH 的最佳位置是 DocumentRoot 之外。如果您无法做到这一点，则必须将 .htaccess (DENY FROM ALL) 放在 XOOPS_TRUST_PATH 下，这是第二个最佳方法。');
define('_AM_ADV_TRUSTPATHPUBLICLINK', '检查TRUST_PATH内的PHP文件是否设置为只读（必须是404,403或500错误）');
define('_AM_ADV_REGISTERGLOBALS',"如果“打开”，此设置会引发各种注入攻击。如果可以，请在 php.ini 中设置“register_globals off”，或者如果不可能，请在 XOOPS 目录中创建或编辑 .htaccess：");
define('_AM_ADV_ALLOWURLFOPEN',"如果“打开”，此设置允许攻击者在远程服务器上执行任意脚本。<br>只有管理员可以更改此选项。<br>如果您是管理员，请编辑 php.ini 或 httpd.conf。<br><b>httpd.conf 示例：<br> php_admin_flag &nbsp;允许_url_fopen off</b><br>Else，请向您的管理员索取。");
define('_AM_ADV_USETRANSSID',"如果“ON”，您的会话 ID 将显示在锚标记等中。<br>为了防止会话劫持，请在 XOOPS_ROOT_PATH 中的 .htaccess 中添加一行。<br><b>php_flag session.use_trans_sid off</b>");
define('_AM_ADV_DBPREFIX',"此设置会邀请“SQL 注入”。<br>不要忘记在此模块的首选项中打开“强制清理*”。");
define('_AM_ADV_LINK_TO_PREFIXMAN', '转到前缀管理器');
define('_AM_ADV_MAINUNPATCHED', '你应该像自述文件中写的那样编辑你的 mainfile.php 。');
define('_AM_ADV_DBFACTORYPATCHED', '您的数据库工厂已准备好进行 DBLayer 陷阱反 SQL 注入');
define('_AM_ADV_DBFACTORYUNPATCHED', '您的数据库工厂尚未准备好进行 DBLayer 陷阱反 SQL 注入。需要一些补丁。');
define('_AM_ADV_SUBTITLECHECK', '检查保护器是否正常工作');
define('_AM_ADV_CHECKCONTAMI', '污染');
define('_AM_ADV_CHECKISOCOM', '隔离评论');
//XOOPS 2.5.4
define('_AM_ADV_REGISTERGLOBALS2', '并将以下行放入其中：');
//XOOPS 2.5.8
define('_AM_PROTECTOR_PREFIX', '前缀');
define('_AM_PROTECTOR_TABLES', '数据库表');
define('_AM_PROTECTOR_UPDATED', '已更新');
define('_AM_PROTECTOR_COPY', '复制');
define('_AM_PROTECTOR_ACTIONS', '操作');
// XOOPS 2.5.10 v Protector 3.60
define('_AM_LABEL_BAN_BY_IP', '禁止检查记录中的IP：');
define('_AM_BUTTON_BAN_BY_IP', 'IP 禁令！');
define('_AM_JS_BANCONFIRM', 'IP 禁止好吗？');
define('_AM_MSG_BANNEDIP', 'IP已被封禁');
define('_AM_ADMINSTATS_TITLE', 'Protector日志摘要');
// XOOPS 2.5.11
define('_AM_ADMINSTATS_LAST_MONTH', '上个月');
define('_AM_ADMINSTATS_LAST_WEEK', '上周');
define('_AM_ADMINSTATS_LAST_DAY', '昨天');
define('_AM_ADMINSTATS_LAST_HOUR', '最后一小时');
