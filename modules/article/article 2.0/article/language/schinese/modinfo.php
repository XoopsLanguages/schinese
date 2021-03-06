<?php
// $Id$
// _LANGCODE: zh-CN
// _CHARSET : utf-8
// Translator: A.D.Horse, http://www.tv-io.com

if (!defined('XOOPS_ROOT_PATH')){ exit(); }

$current_path = __FILE__;
if ( DIRECTORY_SEPARATOR != "/" ) $current_path = str_replace( strpos( $current_path, "\\\\", 2 ) ? "\\\\" : DIRECTORY_SEPARATOR, "/", $current_path);
$url_arr = explode("/",strstr($current_path,"/modules/"));
include XOOPS_ROOT_PATH."/modules/".$url_arr[2]."/include/vars.php";

if(defined($GLOBALS["ART_VAR_PREFIXU"]."_LANG_GB_MODINFO")) return; 
define($GLOBALS["ART_VAR_PREFIXU"]."_LANG_GB_MODINFO",1);

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_NAME","文章管理");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DESC","文章管理");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_INDEX","首页");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_ARTICLE","文章");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_CATEGORY","类别");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_TOPIC","专题");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_AUTHOR","作者");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_KEYWORD","关键词");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_BLOCKS","文章区块");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_ARCHIVE","归档文章");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_LIST","文章列表");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_SEARCH","搜索文章");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_MYPAGE","我的文章");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PAGE_TAGS","Tag列表");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_SUBMIT","提交文章");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_SPOTLIGHT","焦点");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_SPOTLIGHT_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE","文章");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_DESC","");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY","分类");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TOPIC","专题");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TOPIC_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_AUTHOR","作者");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_AUTHOR_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_BLOCK_RECENTNEWS","最新消息");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_BLOCK_TAG_CLOUD","Tag Cloud");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_BLOCK_TAG_TOP","热门Tag");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TIMEFORMAT","时间显示格式：");
xoops_load("xoopslocal");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TIMEFORMAT_DESC", XoopsLocal::getTimeFormatDesc());
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TIMEFORMAT_CUSTOM","自定义");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CONFIGCAT_MODULE","一般设置");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CONFIGCAT_MODULE_DESC","模块通用预置");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CONFIGCAT_ARTICLE","文章设置");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CONFIGCAT_ARTICLE_DESC","文章相关设定");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_THEMESET","选择模块专题风格：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_THEMESET_DESC","选择 '" . _NONE . "' 将使用预设风格");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DISPLAY_SUMMARY","是否在文章列表显示摘要：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DISPLAY_SUMMARY_DESC","");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_FORUM","选择论坛讨论区：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_FORUM_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_URLFORUM","设定论坛地址：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_URLFORUM_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_URLBLOG","设定博客地址：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_URLBLOG_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOFORMADVANCE","缺省使用高级编辑方式：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOFORMADVANCE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOSPOTLIGHT","是否启用焦点：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOSPOTLIGHT_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOREALNAME","使用真实姓名");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOREALNAME_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOTRACKBACK","是否启用Trackback：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOTRACKBACK_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOTRACKBACKUTF8","Trackback使用UTF-8编码：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOTRACKBACKUTF8_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOAPISTATS","是否启用文章API统计：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOAPISTATS_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOIMAGEUPLOAD","是否允许图片上传：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOIMAGEUPLOAD_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DORSSUTF8","XML是否使用UTF-8编码：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DORSSUTF8_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DODEBUG","是否启用除错模式：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DODEBUG_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOURLREWRITE","启用URL重写");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOURLREWRITE_DESC","需要启用AcceptPathInfo (Apache2)");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOCOUNTER","是否启用文章浏览计数：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOCOUNTER_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOPINGBACK","是否启用PING功能：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOPINGBACK_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOSIBLING","是否显示相邻文章标题：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOSIBLING_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOSUBTITLE","是否显示副标题：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOSUBTITLE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOHEADING","是否分列显示标题：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOHEADING_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOFOOTNOTE","是否分列显示脚注：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOFOOTNOTE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DORATE","是否启用文章评分");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DORATE_DESC","启用后需要设定相关群组权限");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOKEYWORDS","是否突出显示关键词：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DOKEYWORDS_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_SIBLINGLENGTH","相邻文章标题长度：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_SIBLINGLENGTH_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_KEYWORDS","设定关键词：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_KEYWORDS_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_COUNTINGSUBCATEGORY","统计子分类文章数：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_COUNTINGSUBCATEGORY_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLESPERPAGE","每页显示文章数：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLESPERPAGE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLES_INDEX","首页显示文章数：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLESINDEX_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_FEATURED_INDEX","首页显示精华数：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_FEATUREDINDEX_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLES_CATEGORY","分类页显示文章数：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLES_CATEGORY_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_FEATURED_CATEGORY","分类页显示精华数：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_FEATURED_CATEGORY_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_LENGTHEXCERPT","设定摘要长度：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_LENGTHEXCERPT_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_EXPIRE","设定文章草稿过期天数：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_EXPIRE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TOPIC_EXPIRE","设定专题过期天数：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TOPIC_EXPIRE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TOPIC_MAX","显示最大专题数：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TOPIC_MAX_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TEMPLATE","系统预设模板：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TEMPLATE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DISCLAIMER","输入免责声明：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DISCLAIMER_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_DISCLAIMER_TEXT","您提交的文章及内容将会遵从GPL声明条款自由修改或传播，谢谢合作。 &copy; ".$GLOBALS["xoopsConfig"]["sitename"]);
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_SPONSOR","赞助者链接网址：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_SPONSOR_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PING","设定PING网址：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PING_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PATHCACHE","缓存文件的路径：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PATHCACHE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PATHFILE","设定文件上传路径：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PATHFILE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PATHIMAGE","设定图片上传路径：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PATHIMAGE_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PATHHTML","设定HTML文件上传路径：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_PATHHTML_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_SINCE_OPTIONS","时间选项");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_SINCE_OPTIONS_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_EDITORS","编辑");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_EDITORS_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_COPYRIGHT","设定版权信息：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_COPYRIGHT_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_HEADER","设定首页题头：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_HEADER_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TRACKBACK_OPTION","收取Trackback的选项：");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_TRACKBACK_OPTION_DESC","");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_MODERATION","需要管理员审核");


define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_INDEX","首页");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_CATEGORY","分类");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_TOPIC","专题");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_ARTICLE","文章");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_PERMISSION","权限");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_BLOCK","区块");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_SPOTLIGHT","焦点");
//define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_TEMPLATE","模板");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_TRACKBACK","Trackback");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_FILE","文件");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_UTILITY","工具");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ADMENU_ABOUT","关于文章管理");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_NOTIFY","全局通知");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_NOTIFYDSC","全局通知选项");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY_NOTIFY","分类通知");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY_NOTIFYDSC","分类通知选项");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_NOTIFY","文章通知");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_NOTIFYDSC","文章通知选项");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLESUBMIT_NOTIFY","全局文章提交通知");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLESUBMIT_NOTIFYCAP","全局有文章提交时通知我");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLESUBMIT_NOTIFYDSC","全局有新文章提交时收到通知");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLESUBMIT_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} 自动通知 : 全局新文章提交通知");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_NEWARTICLE_NOTIFY","全局新文章");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_NEWARTICLE_NOTIFYCAP","全局有新文章发布时请通知我");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_NEWARTICLE_NOTIFYDSC","全局如果有新文章发布收到通知");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_NEWARTICLE_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} 自动通知 : 全局新文章通知");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLEMONITOR_NOTIFY","全局个人文章动态");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLEMONITOR_NOTIFYCAP","个人文章有新动态时请通知我");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLEMONITOR_NOTIFYDSC","个人文章有新动态时收到通知");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLEMONITOR_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} 自动通知全局个人文章动态");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLETRACKBACK_NOTIFY","文章Trackback通知");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLETRACKBACK_NOTIFYCAP","有待审的文章Trackback时请通知我");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLETRACKBACK_NOTIFYDSC","有待审的文章Trackback时收到通知");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_GLOBAL_ARTICLETRACKBACK_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} 自动通知 : 文章Trackback通知");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY_ARTICLESUBMIT_NOTIFY","分类文章提交通知");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY_ARTICLESUBMIT_NOTIFYCAP","有任何这个种类的待审文章时通知我");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY_ARTICLESUBMIT_NOTIFYDSC","如果这个分类的待审文章时收到通知");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY_ARTICLESUBMIT_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} 自动通知：分类文章提交通知");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY_NEWARTICLE_NOTIFY","新文章通知");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY_NEWARTICLE_NOTIFYCAP","有这个分类的新文章发布时请通知我");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY_NEWARTICLE_NOTIFYDSC","如果有这个分类新文章发布时收到通知");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_CATEGORY_NEWARTICLE_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} 自动通知：新文章通知");

define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_ARTICLEAPPROVE_NOTIFY","文章通过审核通知");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_ARTICLEAPPROVE_NOTIFYCAP","文章通过审核时请通知我");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_ARTICLEAPPROVE_NOTIFYDSC","如果文章通过审核时收到通知");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_ARTICLEAPPROVE_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} 自动通知：文章通过审核通知");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_ARTICLEMONITOR_NOTIFY","文章动态通知");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_ARTICLEMONITOR_NOTIFYCAP","如本文章有新动态时请通知我");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_ARTICLEMONITOR_NOTIFYDSC","如本文有新动态时收到通知");
define($GLOBALS["ART_VAR_PREFIXU"]."_MI_ARTICLE_ARTICLEMONITOR_NOTIFYSBJ","[{X_SITENAME}] {X_MODULE} 自动通知：文章动态通知");
?>