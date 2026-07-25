xoopseditor 提供了 XOOPS 的编辑器集合

用户指南：

1 检查 /xoopseditor/ 下的文件 xoops_version.php 以确保它比您当前的版本更新

2 上传 /xoopseditor/ 到 /XOOPS/class/ => /XOOPS/class/xoopseditor/:
  XOOPS/class/xoopseditor/dhtmlext
  XOOPS/class/xoopseditor/dhtmltextarea
  XOOPS/class/xoopseditor/fckeditor
  XOOPS/class/xoopseditor/koivi
  XOOPS/class/xoopseditor/textarea
  XOOPS/class/xoopseditor/tinymce

3 配置适用的首选项
3.1 ./dhtmlext(all editors)/language/: 根据 english.php 制作本地语言文件
3.3 ./dhtmlext(all editors)/editor_registry.php: 设置编辑器的配置： order - 使用编辑器选择时的显示顺序，0 表示禁用； nohtml - 适用于非 html 语法
3.3 ./FCKeditor/module/：将文件复制到模块文件夹，以防需要模块特定的上传权限、存储和编辑器选项
3.3.1 ./FCKeditor/module/fckeditor.config.js：对于编辑器选项，通常不需要更改它
3.3.2 ./FCKeditor/module/fckeditor.connector.php：指定文件浏览（及上传存储）的文件夹 => XOOPS/uploads/XOOPS_FCK_FOLDER/，该文件夹需手动创建
3.3.3 ./FCKeditor/module/fckeditor.upload.php：指定上传权限和上传存储
3.4 XOOPS/uploads/fckeditor/：启用FCKeditor时创建文件夹，用于未指定上传文件夹的上传
3.5 ./tinymce/tinymce/jscripts/: 从 http://tinymce.moxiecode.com/language.php 下载本地语言文件

4 检查文件名：对于文件名区分大小写的系统，请确保文件名字面正确，即“FCKeditor”与“fckeditor”不同

5 检查 /xoopseditor/sampleform.inc.php 获取开发指南
