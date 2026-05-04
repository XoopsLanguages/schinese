<?php
/**
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * _LANGCODE    zh_CN
 * _CHARSET     UTF-8
 */
define('_AM_SYSTEM_MAINTENANCE_NAV_MANAGER', '维护');
define('_AM_SYSTEM_MAINTENANCE_NAV_LIST', '所有维护');
define('_AM_SYSTEM_MAINTENANCE_NAV_DUMP', '导出');
define('_AM_SYSTEM_MAINTENANCE_SESSION', '清空会话表');
define('_AM_SYSTEM_MAINTENANCE_SESSION_OK', '会话维护：正常');
define('_AM_SYSTEM_MAINTENANCE_SESSION_NOTOK', '会话维护：错误');
define('_AM_SYSTEM_MAINTENANCE_AVATAR', '清除未使用的自定义头像');
define('_AM_SYSTEM_MAINTENANCE_CACHE', '清理缓存文件夹');
define('_AM_SYSTEM_MAINTENANCE_CACHE_OK', '缓存维护：正常');
define('_AM_SYSTEM_MAINTENANCE_CACHE_NOTOK', '缓存维护：错误');
define('_AM_SYSTEM_MAINTENANCE_TABLES', '表格维护');
define('_AM_SYSTEM_MAINTENANCE_TABLES_OK', '表维护：正常');
define('_AM_SYSTEM_MAINTENANCE_TABLES_NOTOK', '表维护：错误');
define('_AM_SYSTEM_MAINTENANCE_QUERY_DESC', '优化、检查、修复和分析您的表');
define('_AM_SYSTEM_MAINTENANCE_QUERY_OK', '数据库维护：正常');
define('_AM_SYSTEM_MAINTENANCE_QUERY_NOTOK', '数据库维护：错误');
define('_AM_SYSTEM_MAINTENANCE_TABLES_DESC', 'ANALYZE TABLE 分析并存储表的键分布。分析期间，表用读锁锁定。<br>
CHECK TABLE 检查一个或多个表的错误。<br>
OPTIMIZE TABLE 回收未使用的空间并整理数据文件碎片。<br>
REPAIR TABLE 修复可能损坏的表。');
define('_AM_SYSTEM_MAINTENANCE_RESULT', '结果');
define('_AM_SYSTEM_MAINTENANCE_RESULT_NO_RESULT', '无结果');
define('_AM_SYSTEM_MAINTENANCE_RESULT_CACHE', '清理缓存任务');
define('_AM_SYSTEM_MAINTENANCE_RESULT_SESSION', '清理会话表任务');
define('_AM_SYSTEM_MAINTENANCE_RESULT_QUERY', '数据库任务');
define('_AM_SYSTEM_MAINTENANCE_RESULT_AVATAR', '清理未使用头像任务');
define('_AM_SYSTEM_MAINTENANCE_ERROR_MAINTENANCE', '无维护选项');
define('_AM_SYSTEM_MAINTENANCE_TABLES1', '数据库表');
define('_AM_SYSTEM_MAINTENANCE_TABLES_OPTIMIZE', '优化');
define('_AM_SYSTEM_MAINTENANCE_TABLES_CHECK', '检查');
define('_AM_SYSTEM_MAINTENANCE_TABLES_REPAIR', '修复');
define('_AM_SYSTEM_MAINTENANCE_TABLES_ANALYZE', '分析');
define('_AM_SYSTEM_MAINTENANCE_DUMP', '导出');
define('_AM_SYSTEM_MAINTENANCE_DUMP_TABLES_OR_MODULES', '选择表或模块');
define('_AM_SYSTEM_MAINTENANCE_DUMP_DROP', "添加命令 DROP TABLE IF EXISTS 'tables' in dump");
define('_AM_SYSTEM_MAINTENANCE_DUMP_或', 'OR');
define('_AM_SYSTEM_MAINTENANCE_DUMP_并且', 'AND');
define('_AM_SYSTEM_MAINTENANCE_DUMP_ERROR_TABLES_OR_MODULES', '您必须选择表或模块');
define('_AM_SYSTEM_MAINTENANCE_DUMP_NO_TABLES', '没有表');
define('_AM_SYSTEM_MAINTENANCE_DUMP_TABLES', '数据库表');
define('_AM_SYSTEM_MAINTENANCE_DUMP_STRUCTURES', '结构');
define('_AM_SYSTEM_MAINTENANCE_DUMP_NB_RECORDS', '记录数');
define('_AM_SYSTEM_MAINTENANCE_DUMP_FILE_CREATED', '文件已创建');
define('_AM_SYSTEM_MAINTENANCE_DUMP_RESULT', '结果');
define('_AM_SYSTEM_MAINTENANCE_TIPS', '<ul>
<li>您可以对 XOOPS 安装进行简单维护：清除缓存和会话表，并对表进行维护</li>
</ul>');