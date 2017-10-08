<?php /* Smarty version Smarty-3.1.19, created on 2017-07-31 08:59:25
         compiled from "/home/tortyfru/public_html/pedidos/wrksplf/themes/default/template/controllers/modules/warning_module.tpl" */ ?>
<?php /*%%SmartyHeaderCode:356757274597f37bd0e5c40-34802628%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8a43012b9637741b7937806bbda3e5ec93104a7b' => 
    array (
      0 => '/home/tortyfru/public_html/pedidos/wrksplf/themes/default/template/controllers/modules/warning_module.tpl',
      1 => 1498250714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '356757274597f37bd0e5c40-34802628',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'module_link' => 0,
    'text' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_597f37bd1547f6_46678617',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597f37bd1547f6_46678617')) {function content_597f37bd1547f6_46678617($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['module_link']->value, ENT_QUOTES, 'UTF-8', true);?>
"><?php echo $_smarty_tpl->tpl_vars['text']->value;?>
</a><?php }} ?>
