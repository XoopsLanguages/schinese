<?php
//
// _LANGCODE: zh-CN
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team
define('_PLEASEWAIT', '请等候');
define('_FETCHING', '加载中...');
define('_TAKINGBACK', '正在返回您之前的位置....');
define('_LOGOUT', '注销');
define('_SUBJECT', '主题');
define('_MESSAGEICON', '消息图标');
define('_COMMENTS', '评论');
define('_POSTANON', '匿名发布');
define('_DISABLESMILEY', '禁用表情符号');
define('_DISABLEHTML', '禁用HTML');
define('_PREVIEW', '预览');
define('_GO', '前往！');
define('_NESTED', '嵌套');
define('_NOCOMMENTS', '无评论');
define('_FLAT', '平铺');
define('_THREADED', '线程');
define('_OLDESTFIRST', '最旧优先');
define('_NEWESTFIRST', '最新优先');
define('_MORE', '更多...');
define('_MULTIPAGE', '要使您的文章跨越多个页面，请在文章中插入单词 <span color=red>[pagebreak]</span> （带方括号）。');
define('_IFNOTRELOAD', '如果页面没有自动重新加载，请点击<a href=\'%s\'>这里</a>');
// Error messages issued by XoopsObject::cleanVars()
define('_XOBJ_ERR_REQUIRED', '%s 为必填项');
define('_XOBJ_ERR_SHORTERTHAN', '%s 必须少于 %d 个字符。');
// %%%%%%    File Name themeuserpost.php     %%%%%
define('_PROFILE', '个人资料');
define('_POSTEDBY', '发布者');
define('_VISITWEBSITE', '访问网站');
define('_SENDPMTO', '向 %s 发送私信');
define('_SENDEMAILTO', '向 %s 发送电子邮件');
define('_ADD', '添加');
define('_REPLY', '回复');
define('_DATE', '日期'); // Posted date
// %%%%%%    File Name admin_functions.php     %%%%%
define('_MAIN', '主页');
define('_MANUAL', '手册');
define('_INFO', '信息');
define('_CPHOME', '控制面板首页');
define('_YOURHOME', '首页');
// %%%%%%    File Name misc.php (who's-online popup)    %%%%%
define('_WHOSONLINE', '在线用户');
define('_GUESTS', '访客');
define('_MEMBERS', '会员');
define('_ONLINEPHRASE', '<strong>%s</strong> 用户在线');
define('_ONLINEPHRASEX', '<strong>%s</strong> 用户正在浏览 <strong>%s</strong>');
define('_CLOSE', '关闭'); // Close window
// %%%%%%    File Name module.textsanitizer.php     %%%%%
define('_QUOTEC', '引用：');
// %%%%%%    File Name admin.php     %%%%%
define('_NOPERM', '抱歉，您没有访问此区域的权限。');
// %%%%%        Common Phrases        %%%%%
define('_NO', '否');
define('_YES', '是');
define('_EDIT', '编辑');
define('_DELETE', '删除');
define('_SUBMIT', '提交');
define('_MODULENOEXIST', '所选模块不存在！');
define('_ALIGN', '对齐');
define('_LEFT', '左对齐');
define('_CENTER', '居中');
define('_RIGHT', '右对齐');
define('_FORM_ENTER', '请输入 %s');
define('_MUSTWABLE', '文件 %s 必须可由服务器写入！'); // %s represents file name
// Module info
define('_PREFERENCES', '首选项');
define('_VERSION', '版本');
define('_DESCRIPTION', '描述');
define('_AUTHOR', '作者');
define('_CREDITS', '致谢');
define('_LICENCE', '许可证');
define('_ERRORS', '错误');
define('_NONE', '无');
define('_ON', '开');
define('_READS', '次阅读');
define('_WELCOMETO', '欢迎来到 %s');
define('_SEARCH', '搜索');
define('_ALL', '全部');
define('_TITLE', '标题');
define('_OPTIONS', '选项');
define('_QUOTE', '引用');
define('_LIST', '列表');
define('_LOGIN', '用户登录');
define('_USERNAME', '用户名：');
define('_PASSWORD', '密码：');
define('_SELECT', '选择');
define('_IMAGE', '图片');
define('_SEND', '发送');
define('_CANCEL', '取消');
define('_ASCENDING', '升序');
define('_DESCENDING', '降序');
define('_BACK', '返回');
define('_NOTITLE', '无标题');
/**
 * Image manager
 */
define('_MD_ADDIMGCAT', '添加分类');
define('_MD_IMGCATNAME', '类别名称');
define('_MD_IMGCATRGRP', '选择图像管理器使用的组');
define('_MD_IMGCATWGRP', '选择允许上传图片的群组');
define('_MD_IMGCATWEIGHT', '图像管理器中的显示顺序');
define('_MD_IMGCATDISPLAY', '显示');
define('_MD_IMGCATSTRTYPE', '图片上传至：');
define('_MD_STRTYOPENG', '此后无法更改！');
define('_MD_ASFILE', '存储为文件（在上传目录中）');
define('_MD_INDB', "存储在数据库中（作为二进制“blob”数据）");
define('_MD_IMGMAIN', '分类');
define('_MD_EDITIMGCAT', '图像设置');
define('_IMGMANAGER', '图片管理器');
define('_NUMIMAGES', '%s 张图片');
define('_ADDIMAGE', '添加图片文件');
define('_IMAGENAME', '名称：');
define('_IMGMAXSIZE', '允许的最大大小（字节）：');
define('_IMGMAXWIDTH', '允许的最大宽度（像素）：');
define('_IMGMAXHEIGHT', '允许的最大高度（像素）：');
define('_IMAGECAT', '类别：');
define('_IMAGEFILE', '图片文件：');
define('_IMGWEIGHT', '图像管理器中的显示顺序：');
define('_IMGDISPLAY', '显示此图片？');
define('_IMAGEMIME', 'MIME 类型：');
define('_FAILFETCHIMG', '无法获取上传的文件 %s');
define('_FAILSAVEIMG', '无法将图像 %s 存储到数据库中');
define('_NOIMAGESAVAILABLE', '没有可用的图片类别。');
define('_NOCACHE', '无缓存');
define('_CLONE', '克隆');
/**
 * fineupload
 */
define('_UPLOAD', '上传');
define('_SELECTFILES', '选择文件');
define('_DROPFILESHERE', '将文件拖放到此处');
define('_RETRY', '重试');
define('_OK', '确定');
define('_FORMATPROGRESS', '{total_size} 的 {percent}%');
define('_FAILUPLOAD', '上传失败！');
define('_WAITINGFORRESPONSE', '处理中...');
define('_PAUSED', '已暂停');
define('_PROCESSINGDROPPEDFILES', '处理删除的文件...');
define('_TYPEERROR', '{file} 的扩展名无效。有效扩展名：{extensions}！');
define('_SIZEERROR', '{file} 太大，最大文件大小为 {sizeLimit}！');
define('_MINSIZEERROR', '{file} 太小，最小文件大小为 {minSizeLimit}！');
define('_EMPTYERROR', '{file} 为空，请重新选择没有它的文件！');
define('_NOFILESERROR', '没有要上传的文件！');
define('_TOOMANYITEMSERROR', '上传的项目 ({netItems}) 过多。  物品限制为 {itemLimit}！');
define('_MAXHEIGHTIMAGEERROR', '图片太高了！');
define('_MAXWIDTHIMAGEERROR', '图片太宽了！');
define('_MINHEIGHTIMAGEERROR', '图片不够高！');
define('_MINWIDTHIMAGEERROR', '图片不够宽！');
define('_RETRYFAILTOOMANYITEMS', '重试失败 - 您已达到文件限制！');
define('_ONLEAVE', '文件正在上传中，如果您现在离开，上传将被取消！');
define('_UNSUPPORTEDBROWSERIOS8SAFARI', '不可恢复的错误 - 由于 iOS8 Safari 中的严重错误，此浏览器不允许上传任何类型的文件。  请使用 iOS8 Chrome，直到 Apple 修复这些问题！');

// %%%%%    For xoopsform files %%%%%
define('_STARTSWITH', '开头为');
define('_ENDSWITH', '结尾为');
define('_MATCHES', '匹配');
define('_CONTAINS', '包含');
define('_REQUIRED', '必填');
// %%%%%%    File Name commentform.php     %%%%%
define('_REGISTER', '注册');
// %%%%%%    File Name xoopscodes.php     %%%%%
define('_SIZE', '大小'); // font size
define('_FONT', '字体'); // font family
define('_COLOR', '颜色'); // font color
define('_EXAMPLE', '样本');
define('_ENTERURL', '输入您要添加的链接的 URL：');
define('_ENTERWEBTITLE', '输入网站标题：');
define('_ENTERIMGURL', '输入您要添加的图像的 URL。');
define('_ENTERIMGPOS', '现在，输入图像的位置。');
define('_IMGPOSRORL', '\'R\' 或 \'r\' 表示右， \'L\' 或 \'l\' 表示左，或将其留空。');
define('_ERRORIMGPOS', '错误！输入图像的位置。');
define('_ENTEREMAIL', '输入您要添加的电子邮件地址。');
define('_ENTERCODE', '输入您要添加的代码。');
define('_ENTERQUOTE', '输入您想要引用的文本。');
define('_ENTERTEXTBOX', '请在文本框中输入文字。');
define('_ALLOWEDCHAR', '最大允许字符数：');
define('_CURRCHAR', '当前字符数：');
define('_PLZCOMPLETE', '请填写主题和消息字段。');
define('_MESSAGETOOLONG', '您的消息太长。');
/**
 * xoops smilie
 */
define('_AM_ADDSMILE', '添加新表情');
define('_AM_SMILECODE', '代码');
define('_AM_SMILEEMOTION', '描述');
define('_AM_DISPLAYF', '在表单中显示');
// %%%%%        TIME FORMAT SETTINGS   %%%%%
define('_SECOND', '1秒');
define('_SECONDS', '%s秒');
define('_MINUTE', '1分钟');
define('_MINUTES', '%s分钟');
define('_HOUR', '1小时');
define('_HOURS', '%s小时');
define('_DAY', '1天');
define('_DAYS', '%s天');
define('_WEEK', '1周');
define('_MONTH', '1个月');
define('_DATESTRING', 'Y/m/d G:i:s');
//define('_MEDIUMDATESTRING', 'Y/m/d G:i');
define('_MEDIUMDATESTRING', 'Y/m/d G:i');
//define('_SHORTDATESTRING','n/j/Y');
define('_SHORTDATESTRING', 'Y/m/d');
/**
 * The following characters are recognized in the format string:
 * a - 'am' or 'pm'
 * A - 'AM' or 'PM'
 * d - day of the month, 2 digits with leading zeros; i.e. '01' to '31'
 * D - day of the week, textual, 3 letters; i.e. 'Fri'
 * F - month, textual, long; i.e. 'January'
 * h - hour, 12-hour format; i.e. '01' to '12'
 * H - hour, 24-hour format; i.e. '00' to '23'
 * g - hour, 12-hour format without leading zeros; i.e. '1' to '12'
 * G - hour, 24-hour format without leading zeros; i.e. '0' to '23'
 * i - minutes; i.e. '00' to '59'
 * j - day of the month without leading zeros; i.e. '1' to '31'
 * l (lowercase 'L') - day of the week, textual, long; i.e. 'Friday'
 * L - boolean for whether it is a leap year; i.e. '0' or '1'
 * m - month; i.e. '01' to '12'
 * n - month without leading zeros; i.e. '1' to '12'
 * M - month, textual, 3 letters; i.e. 'Jan'
 * s - seconds; i.e. '00' to '59'
 * S - English ordinal suffix, textual, 2 characters; i.e. 'th','nd'
 * t - number of days in the given month; i.e. '28' to '31'
 * T - Timezone setting of this machine; i.e. 'MDT'
 * U - seconds since the epoch
 * w - day of the week, numeric, i.e. '0' (Sunday) to '6' (Saturday)
 * Y - year, 4 digits; i.e. '1999'
 * y - year, 2 digits; i.e. '99'
 * z - day of the year; i.e. '0' to '365'
 * Z - timezone offset in seconds (i.e. '-43200' to '43200')
 */
// %%%%%        LANGUAGE SPECIFIC SETTINGS   %%%%%
define('_CHARSET', 'UTF-8');
define('_LANGCODE', 'zh_CN');
// change 0 to 1 if this language is a multi-bytes language
define('XOOPS_USE_MULTIBYTES', '1');
/**
 * Additions to 2.4.0
 **/
define('_RESET', '重置');
define('_RE', '回复:');
/**
 * Additions to 2.5.5
 **/
define('_DBDATESTRING', 'Y-m-d');
define('_DBTIMESTRING', 'H:i:s');
define('_DBTIMESTAMPSTRING', 'Y-m-d H:i:s');

//2.5.8

//define('_XOBJ_ERR_INVALID_EMAIL', '无效的电子邮件');
//define('_XOBJ_ERR_INVALID_ENUMERATION', '无效枚举');

//XOOPS 2.5.9
define('_AM_MODULEADMIN_MISSING','错误：缺少 ModuleAdmin 类。请将 ModuleAdmin 类安装到 /Frameworks 中（请参阅 /docs/readme.txt）');
define('_MD_MESSAGEC', '消息：');


//XOOPS 2.5.11
define('_PRINT', '打印');
define('_PDF', 'PDF');
define('_OFF', '关');
define('_DB_QUERY_ERROR', '查询失败！SQL：%s - 错误：');

//XOOPS 2.7.0
// Guards allow RTL language packs (e.g. Arabic, Hebrew) to define these
// constants in their own global.php before this English fallback loads.
if (!defined('_TEXT_DIRECTION')) {
    define('_TEXT_DIRECTION', 'ltr'); // or 'rtl'
}

if (!defined('_RTL')) {
    define('_RTL', _TEXT_DIRECTION === 'rtl' ? '1' : '0');
}
