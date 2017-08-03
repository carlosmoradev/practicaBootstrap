<?php /* Smarty version Smarty-3.1.19, created on 2017-07-29 07:04:40
         compiled from "/home/tortyfru/public_html/pedidos/wrksplf/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1104195697597c6bc80cefb8-50789870%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '6a882fa851e0cd4028bd8fde53f3bd9445739bf7' => 
    array (
      0 => '/home/tortyfru/public_html/pedidos/wrksplf/themes/default/template/content.tpl',
      1 => 1498250714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1104195697597c6bc80cefb8-50789870',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_597c6bc80d9b27_21496860',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597c6bc80d9b27_21496860')) {function content_597c6bc80d9b27_21496860($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div><?php }} ?>
