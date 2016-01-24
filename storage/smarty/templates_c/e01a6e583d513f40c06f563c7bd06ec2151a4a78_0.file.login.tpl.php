<?php
/* Smarty version 3.1.30-dev/18, created on 2016-01-24 15:07:06
  from "/Users/tsc/Documents/project/php/pdo-smarty/view/authenticate/login.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.30-dev/18',
  'unifunc' => 'content_56a4e89a6fbe46_23936039',
  'file_dependency' => 
  array (
    'e01a6e583d513f40c06f563c7bd06ec2151a4a78' => 
    array (
      0 => '/Users/tsc/Documents/project/php/pdo-smarty/view/authenticate/login.tpl',
      1 => 1453648019,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56a4e89a6fbe46_23936039 ($_smarty_tpl) {
?>
<p>
    <?php if (isset($_smarty_tpl->tpl_vars['error']->value)) {
echo $_smarty_tpl->tpl_vars['error']->value;
}?>
</p>
<form action="" method="post">
    <p>Email: <input type="text" name="email"/></p>
    <p>Password: <input type="password" name="password"/></p>
    <p><input type="submit" value="Login"/> </p>
</form><?php }
}
