<?php /* Smarty version Smarty-3.1.7, created on 2018-07-05 05:42:10
         compiled from "/opt/lampp/htdocs/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/Tag.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9816033995b3dafb295bc67-82933154%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '89b4b75e302d7f9dc6a8dbc920462f8ae2a2788f' => 
    array (
      0 => '/opt/lampp/htdocs/vtigercrm/includes/runtime/../../layouts/v7/modules/Vtiger/Tag.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9816033995b3dafb295bc67-82933154',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ACTIVE' => 0,
    'TAG_MODEL' => 0,
    'NO_EDIT' => 0,
    'NO_DELETE' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5b3dafb29813e',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3dafb29813e')) {function content_5b3dafb29813e($_smarty_tpl) {?>
 
 <span class="tag <?php if ($_smarty_tpl->tpl_vars['ACTIVE']->value==true){?> active <?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['TAG_MODEL']->value->getName();?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['TAG_MODEL']->value->getType();?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['TAG_MODEL']->value->getId();?>
">
    <i class="activeToggleIcon fa <?php if ($_smarty_tpl->tpl_vars['ACTIVE']->value==true){?> fa-circle-o <?php }else{ ?> fa-circle <?php }?>"></i>
    <span class="tagLabel display-inline-block textOverflowEllipsis" title="<?php echo $_smarty_tpl->tpl_vars['TAG_MODEL']->value->getName();?>
"><?php echo $_smarty_tpl->tpl_vars['TAG_MODEL']->value->getName();?>
</span>
    <?php if (!$_smarty_tpl->tpl_vars['NO_EDIT']->value){?>
        <i class="editTag fa fa-pencil"></i>
    <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['NO_DELETE']->value){?>
        <i class="deleteTag fa fa-times"></i>
    <?php }?>
</span><?php }} ?>