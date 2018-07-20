<?php /* Smarty version Smarty-3.1.7, created on 2018-07-05 05:46:31
         compiled from "/opt/lampp/htdocs/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/NoComments.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6443938755b3db0b7139fd9-31955118%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b3fa30efd7ce80e07a55e783c26a440144ab68c2' => 
    array (
      0 => '/opt/lampp/htdocs/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/NoComments.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6443938755b3db0b7139fd9-31955118',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5b3db0b71b303',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3db0b71b303')) {function content_5b3db0b71b303($_smarty_tpl) {?>
<div class="noCommentsMsgContainer noContent"><p class="textAlignCenter"> <?php echo vtranslate('LBL_NO_COMMENTS',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</p></div><?php }} ?>