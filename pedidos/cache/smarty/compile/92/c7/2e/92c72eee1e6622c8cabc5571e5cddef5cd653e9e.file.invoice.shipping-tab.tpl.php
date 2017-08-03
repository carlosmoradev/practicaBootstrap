<?php /* Smarty version Smarty-3.1.19, created on 2017-07-31 12:10:13
         compiled from "/home/tortyfru/public_html/pedidos/pdf/invoice.shipping-tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1417271303597f647535ba17-70952808%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92c72eee1e6622c8cabc5571e5cddef5cd653e9e' => 
    array (
      0 => '/home/tortyfru/public_html/pedidos/pdf/invoice.shipping-tab.tpl',
      1 => 1498250714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1417271303597f647535ba17-70952808',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'carrier' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_597f6475367f82_64412635',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597f6475367f82_64412635')) {function content_597f6475367f82_64412635($_smarty_tpl) {?>
<table id="shipping-tab" width="100%">
	<tr>
		<td class="shipping center small grey bold" width="44%"><?php echo smartyTranslate(array('s'=>'Carrier','pdf'=>'true'),$_smarty_tpl);?>
</td>
		<td class="shipping center small white" width="56%"><?php echo $_smarty_tpl->tpl_vars['carrier']->value->name;?>
</td>
	</tr>
</table>
<?php }} ?>
