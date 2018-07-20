<?php /* Smarty version Smarty-3.1.7, created on 2018-07-05 05:46:29
         compiled from "/opt/lampp/htdocs/vtigercrm/includes/runtime/../../layouts/v7/modules/Leads/DetailViewSummaryContents.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2889239565b3db0b5847297-22050868%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bef6ac6789fadc9cd90063fee8a7db73424b2053' => 
    array (
      0 => '/opt/lampp/htdocs/vtigercrm/includes/runtime/../../layouts/v7/modules/Leads/DetailViewSummaryContents.tpl',
      1 => 1520586669,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2889239565b3db0b5847297-22050868',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'MODULE_NAME' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.7',
  'unifunc' => 'content_5b3db0b585067',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5b3db0b585067')) {function content_5b3db0b585067($_smarty_tpl) {?>

<form id="detailView" class="clearfix" method="POST" style="position: relative"><div class="col-lg-12 resizable-summary-view"><?php echo $_smarty_tpl->getSubTemplate (vtemplate_path('SummaryViewWidgets.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, null, null, array(), 0);?>
</div></form><?php }} ?>