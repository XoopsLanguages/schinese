<?php
/**
 * @copyright       (c) 2000-2026 XOOPS Project (https://xoops.org)
 * @license             GNU GPL 2 (https://www.gnu.org/licenses/gpl-2.0.html)
 * _LANGCODE    zh_CN
 * _CHARSET     UTF-8
 */
define('_AM_SYSTEM_BLOCKS_ADMIN', '块管理');
define('_AM_SYSTEM_BLOCKS_MANAGMENT', '管理');
define('_AM_SYSTEM_BLOCKS_ADDBLOCK', '添加新块');
define('_AM_SYSTEM_BLOCKS_EDITBLOCK', '编辑块');
define('_AM_SYSTEM_BLOCKS_CLONEBLOCK', '克隆块');
define('_AM_SYSTEM_BLOCKS_CUSTOM', '自定义块');
define('_AM_SYSTEM_BLOCKS_TYPES', '所有类型');
define('_AM_SYSTEM_BLOCKS_GENERATOR', '模块');
define('_AM_SYSTEM_BLOCKS_GROUP', '组');
define('_AM_SYSTEM_BLOCKS_SVISIBLEIN', '页面');
define('_AM_SYSTEM_BLOCKS_DISPLAY', '显示块 ');
define('_AM_SYSTEM_BLOCKS_HIDE', '隐藏块 ');
define('_AM_SYSTEM_BLOCKS_CLONE', '克隆');
define('_AM_SYSTEM_BLOCKS_SIDELEFT', '左');
define('_AM_SYSTEM_BLOCKS_SIDETOPLEFT', '左上');
define('_AM_SYSTEM_BLOCKS_SIDETOPCENTER', '顶部居中');
define('_AM_SYSTEM_BLOCKS_SIDETOPRIGHT', '右上');
define('_AM_SYSTEM_BLOCKS_SIDERIGHT', '右');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMLEFT', '左下');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMCENTER', '底部居中');
define('_AM_SYSTEM_BLOCKS_SIDEBOTTOMRIGHT', '右下');
define('_AM_SYSTEM_BLOCKS_SIDEFOOTERLEFT', '页脚左');
define('_AM_SYSTEM_BLOCKS_SIDEFOOTERCENTER', '页脚中');
define('_AM_SYSTEM_BLOCKS_SIDEFOOTERRIGHT', '页脚右');
define('_AM_SYSTEM_BLOCKS_ADD', '添加块');
define('_AM_SYSTEM_BLOCKS_MANAGE', '管理块');
define('_AM_SYSTEM_BLOCKS_NAME', '名称');
define('_AM_SYSTEM_BLOCKS_TYPE', '块类型');
define('_AM_SYSTEM_BLOCKS_SBLEFT', '侧边块 - 左');
define('_AM_SYSTEM_BLOCKS_SBRIGHT', '侧边块 - 右');
define('_AM_SYSTEM_BLOCKS_CBLEFT', '中央块 - 左');
define('_AM_SYSTEM_BLOCKS_CBRIGHT', '中央块 - 右');
define('_AM_SYSTEM_BLOCKS_CBCENTER', '中央块 - 中');
define('_AM_SYSTEM_BLOCKS_CBBOTTOMLEFT', '中心块 - 左下');
define('_AM_SYSTEM_BLOCKS_CBBOTTOMRIGHT', '中心块 - 右下');
define('_AM_SYSTEM_BLOCKS_CBFOOTERLEFT', '页脚块 - 左');
define('_AM_SYSTEM_BLOCKS_CBFOOTERCENTER', '页脚块 - 中');
define('_AM_SYSTEM_BLOCKS_CBFOOTERRIGHT', '页脚块 - 右');
define('_AM_SYSTEM_BLOCKS_CBBOTTOM', '中心块 - 底部');
define('_AM_SYSTEM_BLOCKS_WEIGHT', '权重');
define('_AM_SYSTEM_BLOCKS_VISIBLE', '可见');
define('_AM_SYSTEM_BLOCKS_VISIBLEIN', '可见于');
define('_AM_SYSTEM_BLOCKS_TOPPAGE', '顶部页面');
define('_AM_SYSTEM_BLOCKS_ALLPAGES', '所有页面');
define('_AM_SYSTEM_BLOCKS_UNASSIGNED', '未分配');
define('_AM_SYSTEM_BLOCKS_TITLE', '标题');
define('_AM_SYSTEM_BLOCKS_CONTENT', '内容');
define('_AM_SYSTEM_BLOCKS_USEFULTAGS', '有用标签：');
define('_AM_SYSTEM_BLOCKS_BLOCKTAG', '%s将打印%s');
define('_AM_SYSTEM_BLOCKS_CTYPE', '内容类型');
define('_AM_SYSTEM_BLOCKS_HTML', 'HTML');
define('_AM_SYSTEM_BLOCKS_BCACHETIME', '缓存生命周期');
define('_AM_SYSTEM_BLOCKS_EDITTPL', '编辑模板');
define('_AM_SYSTEM_BLOCKS_OPTIONS', '选项');
define('_AM_SYSTEM_BLOCKS_DRAG', '拖动或排序块');
define('_AM_SYSTEM_BLOCKS_DBUPDATED', _AM_SYSTEM_DBUPDATED);
define('_AM_SYSTEM_BLOCKS_RUSUREDEL', '您确定要删除这个块吗？<div class="bold">%s</div>');
define('_AM_SYSTEM_BLOCKS_SYSTEMCANT', '系统块无法删除！');
define('_AM_SYSTEM_BLOCKS_MODULECANT', '此块不能直接删除！如果要禁用此块，请停用模块。');
define('_AM_SYSTEM_BLOCKS_TIPS', '<ul>
<li>You can easily change side or order position with the drag\'n drop, click on <img class="tooltip" src="%s" alt="' . _AM_SYSTEM_BLOCKS_DRAG . '" title="' . _AM_SYSTEM_BLOCKS_DRAG . '" /> this image and set your site just the way you want it</li>
<li>Add a new custom block</li>
<li>Set block online or offline by clicking on <img class="tooltip" width="16" src="%s" alt="' . _AM_SYSTEM_BLOCKS_DISPLAY . '" title="' . _AM_SYSTEM_BLOCKS_DISPLAY . '"/> or <img class="tooltip" width="16" src="%s" alt="' . _AM_SYSTEM_BLOCKS_HIDE . '" title="' . _AM_SYSTEM_BLOCKS_HIDE . '" /></li>
</ul>');
define('_AM_SYSTEM_BLOCKS_FOOTER_LEFT', 'Footer Left');
define('_AM_SYSTEM_BLOCKS_FOOTER_CENTER', '页脚中');
define('_AM_SYSTEM_BLOCKS_FOOTER_RIGHT', '页脚右');

//2.7.1
//Comment-controls block error (used by modules/system/admin/blocks)
define('_AM_SYSTEM_BLOCKS_INVALID_CLONE', '无效的区块参数。');

//2.7.1 backfilled translations
define('_AM_SYSTEM_BLOCKS_CUSTOMHTML', '自定义区块（HTML）');
define('_AM_SYSTEM_BLOCKS_CUSTOMSMILE', '自定义区块（自动格式化 + 表情符号）');
define('_AM_SYSTEM_BLOCKS_AFWSMILE', '自动格式化（启用表情符号）');
define('_AM_SYSTEM_BLOCKS_PHP', 'PHP 脚本（基于文件）');
define('_AM_SYSTEM_BLOCKS_AFNOSMILE', '自动格式化（禁用表情符号）');
define('_AM_SYSTEM_BLOCKS_CUSTOMNOSMILE', '自定义区块（自动格式化）');
define('_AM_SYSTEM_BLOCKS_CUSTOMPHP', '自定义区块（PHP）');
