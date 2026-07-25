<?php
/**
 * DebugBar Module - Module Info Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: zh_CN

define('_MI_DEBUGBAR_NAME', 'DebugBar');
define('_MI_DEBUGBAR_DSC', '使用 PHP DebugBar 进行错误报告和性能分析');

define('_MI_DEBUGBAR_ENABLE', '显示 DebugBar');
define('_MI_DEBUGBAR_SMARTYDEBUG', '启用 Smarty Debug');
define('_MI_DEBUGBAR_FILESDEBUG', '启用已包含文件选项卡');
define('_MI_DEBUGBAR_FILESDEBUG_DSC', '显示请求期间加载的所有 PHP 文件');
define('_MI_DEBUGBAR_SLOWQUERY', '慢查询阈值（秒）');
define('_MI_DEBUGBAR_SLOWQUERY_DSC', '比此更慢的查询将以红色高亮显示（例如 0.05 = 50ms）');

define('_MI_DEBUGBAR_QUERYMODE',      '查询日志');
define('_MI_DEBUGBAR_QUERYMODE_DSC',  '显示所有查询，或仅显示慢查询和错误');
define('_MI_DEBUGBAR_QUERYMODE_ALL',  '所有查询');
define('_MI_DEBUGBAR_QUERYMODE_SLOW', '仅慢查询和错误');

define('_MI_DEBUGBAR_RAY_ENABLE', '启用 Ray 集成');
define('_MI_DEBUGBAR_RAY_ENABLE_DSC', '将调试数据发送到 Ray 桌面应用（需要 spatie/ray）');

define('_MI_DEBUGBAR_ADMENU1', '主页');
define('_MI_DEBUGBAR_MENU_ABOUT', '关于');

//Help
\define('_MI_DEBUGBAR_DIRNAME', basename(dirname(__DIR__, 2)));
\define('_MI_DEBUGBAR_HELP_HEADER', __DIR__ . '/help/helpheader.tpl');
\define('_MI_DEBUGBAR_BACK_2_ADMIN', '返回管理 ');
\define('_MI_DEBUGBAR_OVERVIEW', '概览');

//help multipage
\define('_MI_DEBUGBAR_DISCLAIMER', '免责声明');
\define('_MI_DEBUGBAR_LICENSE', '许可证');
\define('_MI_DEBUGBAR_SUPPORT', '支持');
