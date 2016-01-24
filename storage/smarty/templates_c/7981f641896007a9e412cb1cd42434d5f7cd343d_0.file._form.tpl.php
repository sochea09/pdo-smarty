<?php
/* Smarty version 3.1.30-dev/18, created on 2016-01-24 07:37:29
  from "/Users/tsc/Documents/project/php/pdo-smarty/view/user/_form.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.30-dev/18',
  'unifunc' => 'content_56a47f3935f9e5_29698770',
  'file_dependency' => 
  array (
    '7981f641896007a9e412cb1cd42434d5f7cd343d' => 
    array (
      0 => '/Users/tsc/Documents/project/php/pdo-smarty/view/user/_form.tpl',
      1 => 1453621046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_56a47f3935f9e5_29698770 ($_smarty_tpl) {
?>
<form action="" method="post">
    <p>UserName: <input type="text" name="username" value="<?php if ((isset($_smarty_tpl->tpl_vars['user']->value['usr_name']))) {
echo $_smarty_tpl->tpl_vars['user']->value['usr_name'];
}?>"/></p>
    <p>Password: <input type="password" name="password" value="<?php if ((isset($_smarty_tpl->tpl_vars['user']->value['usr_password']))) {
echo $_smarty_tpl->tpl_vars['user']->value['usr_password'];
}?>"/></p>
    <p>Email: <input type="email" name="email" value="<?php if ((isset($_smarty_tpl->tpl_vars['user']->value['usr_email']))) {
echo $_smarty_tpl->tpl_vars['user']->value['usr_email'];
}?>"/></p>
    <p><input type="submit" value="<?php echo $_smarty_tpl->tpl_vars['buttonTitle']->value;?>
"/></p>
</form><?php }
}
