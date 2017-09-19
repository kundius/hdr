<?php /* Smarty version 3.1.27, created on 2017-09-19 13:43:38
         compiled from "/var/www/hdr.dev/public/manager/templates/default/workspaces/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:52993153659c0f4da53f4e1_86510678%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3c62606e225d973b17de6f0548a32922234a5010' => 
    array (
      0 => '/var/www/hdr.dev/public/manager/templates/default/workspaces/index.tpl',
      1 => 1504335546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '52993153659c0f4da53f4e1_86510678',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59c0f4da546d59_87613710',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59c0f4da546d59_87613710')) {
function content_59c0f4da546d59_87613710 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '52993153659c0f4da53f4e1_86510678';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>