<?php

// _LANGCODE: zh_CN
// _CHARSET : UTF-8
// Translator: XOOPS Translation Team

define('_XOOPS_SMARTY4_MIGRATION', 'XOOPS Smarty4 迁移');

define('_XOOPS_SMARTY4_SCANNER_RESULTS', '扫描仪结果');
define('_XOOPS_SMARTY4_SCANNER_RUN', '运行扫描');
define('_XOOPS_SMARTY4_SCANNER_END', '退出扫描仪');
define('_XOOPS_SMARTY4_SCANNER_RULE', '规则');
define('_XOOPS_SMARTY4_SCANNER_MATCH', '比赛');
define('_XOOPS_SMARTY4_SCANNER_FILE', '文件');
define('_XOOPS_SMARTY4_SCANNER_FIXED', '修复计数');
define('_XOOPS_SMARTY4_SCANNER_MANUAL_REVIEW', '需要人工审核');
define('_XOOPS_SMARTY4_SCANNER_AUTOFIX', '可以自动修复：foreach item 变量将通过附加“_item”来重命名（例如“foo”变为“foo_item”）。');
define('_XOOPS_SMARTY4_SCANNER_NOT_WRITABLE', '不可写');

define('_XOOPS_SMARTY4_RESCAN_OPTIONS', '重新扫描选项');

define('_XOOPS_SMARTY4_FIX_BUTTON', '单击下面的“是”复选框，然后单击“运行扫描”按钮以尝试自动修复发现的任何问题。');
define('_XOOPS_SMARTY4_SCANNER_MARK_COMPLETE', '标记完成');

define('_XOOPS_SMARTY4_TEMPLATE_DIR', '模板目录（可选）');
define('_XOOPS_SMARTY4_TEMPLATE_EXT', '模板扩展（可选）');


define(
    '_XOOPS_SMARTY4_SCANNER_OFFER',
    <<<'EOT'
<h3>XOOPS 2.7.0 引入了重大更改：Smarty 4</h3>

<p>不幸的是，这一变化可能会破坏一些旧的主题。因此，在继续升级之前，请确保遵循以下步骤：

<li>运行 preflight.php 以检查是否有任何过时的主题或模块模板。</li>
<li>如果发现任何问题，请在继续升级之前查阅本文档以了解必要的修改。</li>
<li>进行所需的更改后，再次运行 preflight.php。</li>
<li>如果没有更多问题，您可以开始升级过程。</li>
</p>
EOT,
);
