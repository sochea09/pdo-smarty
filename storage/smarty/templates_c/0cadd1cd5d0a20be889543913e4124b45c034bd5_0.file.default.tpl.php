<?php
/* Smarty version 3.1.30-dev/18, created on 2016-01-24 10:54:07
  from "/Users/tsc/Documents/project/php/pdo-smarty/view/page/default.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.30-dev/18',
  'unifunc' => 'content_56a4ad4f90b725_29118502',
  'file_dependency' => 
  array (
    '0cadd1cd5d0a20be889543913e4124b45c034bd5' => 
    array (
      0 => '/Users/tsc/Documents/project/php/pdo-smarty/view/page/default.tpl',
      1 => 1453632823,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout/home-layout.tpl' => 1,
  ),
),false)) {
function content_56a4ad4f90b725_29118502 ($_smarty_tpl) {
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>


<?php 
new Block_content_151852812456a4ad4f9017a9_92212985($_smarty_tpl);
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:../layout/home-layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 66, false);
}
/* {block 'content'} file:/Users/tsc/Documents/project/php/pdo-smarty/public/../view/page/default.tpl */
class Block_content_151852812456a4ad4f9017a9_92212985 extends Smarty_Internal_Block
{
public $name = 'content';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <h1>Home Page in progress.</h1>
<?php
}
}
/* {/block 'content'} */
}
