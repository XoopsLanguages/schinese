<?php
/**
 * DebugBar Module - Main Language Constants
 *
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * @author              trabis <lusopoemas@gmail.com>
 * @author              Richard Griffith <richard@geekwright.com>
 */
// _LANGCODE: zh_CN

define('_MD_DEBUGBAR_DEBUG', '调试');
define('_MD_DEBUGBAR_INCLUDED_FILES', '已包含文件');
define('_MD_DEBUGBAR_PHP_VERSION', 'PHP版本');
define('_MD_DEBUGBAR_NONE', '无');
define('_MD_DEBUGBAR_ERRORS', '错误');
define('_MD_DEBUGBAR_DEPRECATED', '已弃用');
define('_MD_DEBUGBAR_QUERIES', '查询');
define('_MD_DEBUGBAR_BLOCKS', '区块');
define('_MD_DEBUGBAR_EXTRA', '扩展');
define('_MD_DEBUGBAR_TIMERS', '计时器');
define('_MD_DEBUGBAR_TIMETOLOAD', '%s 加载耗时 %s 秒。');
define('_MD_DEBUGBAR_TOTAL', '总计');
define('_MD_DEBUGBAR_NOT_CACHED', '未缓存');
define('_MD_DEBUGBAR_CACHED', '已缓存（每 %s 秒重新生成）');

// Value display labels (Smarty/DebugBar panels)
define('_MD_DEBUGBAR_EMPTY_STRING', '（空字符串）');
define('_MD_DEBUGBAR_NULL', 'NULL');
define('_MD_DEBUGBAR_BOOL_TRUE', '布尔 TRUE');
define('_MD_DEBUGBAR_BOOL_FALSE', '布尔FALSE');

// Extra panel labels
define('_MD_DEBUGBAR_DATABASE_QUERIES', '数据库查询');
define('_MD_DEBUGBAR_MEMORY_USAGE', '内存使用量');
define('_MD_DEBUGBAR_QUERY_SUMMARY', '%d 查询');
define('_MD_DEBUGBAR_QUERY_DUPLICATES', '（%d 重复项）');
define('_MD_DEBUGBAR_BYTES', '%s 字节');
define('_MD_DEBUGBAR_DB_VERSION', '%s 版本');

// Query error formatting
define('_MD_DEBUGBAR_QUERY_ERROR', '-- 错误编号：%s 错误消息：%s');
define('_MD_DEBUGBAR_QUERY_ERROR_RAY', "
--错误#%s：%s");

// Ray labels
define('_MD_DEBUGBAR_RAY_EXCEPTION', '异常');
define('_MD_DEBUGBAR_RAY_QUERY', '查询#%d');
define('_MD_DEBUGBAR_RAY_DUP', '[DUP x%d]');
define('_MD_DEBUGBAR_RAY_SLOW', '慢');
define('_MD_DEBUGBAR_RAY_BLOCK_CACHED', '块（缓存 %ds）');
define('_MD_DEBUGBAR_RAY_BLOCK_NOT_CACHED', '块（未缓存）');
define('_MD_DEBUGBAR_RAY_DUMP', '转储');
define('_MD_DEBUGBAR_RAY_TEMPLATE_CONTEXT', '模板上下文');
define('_MD_DEBUGBAR_RAY_NO_VARS', '（无模板变量）');
define('_MD_DEBUGBAR_RAY_VARS_COUNT', '%s (%d 变量)');

// Install error messages
define('_MD_DEBUGBAR_ERR_DIR_CREATE', '目录“modules/debugbar/%s”未创建');
define('_MD_DEBUGBAR_ERR_DIR_COPY', '在资产复制期间无法创建目录“%s”');
