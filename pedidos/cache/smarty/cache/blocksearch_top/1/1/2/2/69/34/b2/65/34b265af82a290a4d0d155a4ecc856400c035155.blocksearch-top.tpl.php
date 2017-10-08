<?php /*%%SmartyHeaderCode:1894294298597c6b51003122-31067173%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '34b265af82a290a4d0d155a4ecc856400c035155' => 
    array (
      0 => '/home/tortyfru/public_html/pedidos/themes/default-bootstrap/modules/blocksearch/blocksearch-top.tpl',
      1 => 1498250714,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1894294298597c6b51003122-31067173',
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_597fbeab04f175_60181643',
  'has_nocache_code' => false,
  'cache_lifetime' => 31536000,
),true); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_597fbeab04f175_60181643')) {function content_597fbeab04f175_60181643($_smarty_tpl) {?><!-- Block search module TOP -->
<div id="search_block_top" class="col-sm-4 clearfix">
	<form id="searchbox" method="get" action="//tortyfrutas.com/pedidos/index.php?controller=search" >
		<input type="hidden" name="controller" value="search" />
		<input type="hidden" name="orderby" value="position" />
		<input type="hidden" name="orderway" value="desc" />
		<input class="search_query form-control" type="text" id="search_query_top" name="search_query" placeholder="Buscar" value="" />
		<button type="submit" name="submit_search" class="btn btn-default button-search">
			<span>Buscar</span>
		</button>
	</form>
</div>
<!-- /Block search module TOP --><?php }} ?>
