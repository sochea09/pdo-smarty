<?php
/* Smarty version 3.1.30-dev/18, created on 2016-01-24 12:02:31
  from "/Users/tsc/Documents/project/php/pdo-smarty/view/layout/home-layout.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.30-dev/18',
  'unifunc' => 'content_56a4bd57357f56_38230136',
  'file_dependency' => 
  array (
    '5cddbdc137510e048c4c54e045d667401c694c42' => 
    array (
      0 => '/Users/tsc/Documents/project/php/pdo-smarty/view/layout/home-layout.tpl',
      1 => 1453636948,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56a4bd57357f56_38230136 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, false);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
</head>
<body>

<?php 
new Block_content_52757967456a4bd57340fc2_10480274($_smarty_tpl);
?>



<?php echo '<script'; ?>
 type="text/javascript" src="/bower_components/jquery/dist/jquery.min.js"><?php echo '</script'; ?>
>
<?php echo '<script'; ?>
 type="text/javascript" src="/javascript/global.js"><?php echo '</script'; ?>
>
</body>
</html><?php }
/* {block 'content'} file:../layout/home-layout.tpl */
class Block_content_52757967456a4bd57340fc2_10480274 extends Smarty_Internal_Block
{
public $name = 'content';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
}
}
/* {/block 'content'} */
}
