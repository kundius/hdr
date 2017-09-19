<?php /* Smarty version 3.1.27, created on 2017-09-11 07:20:21
         compiled from "/var/www/hdr.dev/public/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:41127637059b60f05cb1702_59595919%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd622c87a74d2acae0fae488051a11250d6941ab1' => 
    array (
      0 => '/var/www/hdr.dev/public/manager/templates/default/welcome.tpl',
      1 => 1504335546,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '41127637059b60f05cb1702_59595919',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_59b60f05cb2cb4_00886719',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_59b60f05cb2cb4_00886719')) {
function content_59b60f05cb2cb4_00886719 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '41127637059b60f05cb1702_59595919';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>