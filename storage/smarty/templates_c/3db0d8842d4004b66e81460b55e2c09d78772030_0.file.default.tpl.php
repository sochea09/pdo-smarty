<?php
/* Smarty version 3.1.30-dev/18, created on 2016-01-24 12:59:51
  from "/Users/tsc/Documents/project/php/pdo-smarty/view/user/default.tpl" */

if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'has_nocache_code' => false,
  'version' => '3.1.30-dev/18',
  'unifunc' => 'content_56a4cac7bf1d04_26115952',
  'file_dependency' => 
  array (
    '3db0d8842d4004b66e81460b55e2c09d78772030' => 
    array (
      0 => '/Users/tsc/Documents/project/php/pdo-smarty/view/user/default.tpl',
      1 => 1453640343,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:../layout/home-layout.tpl' => 1,
  ),
),false)) {
function content_56a4cac7bf1d04_26115952 ($_smarty_tpl) {
if (!is_callable('smarty_function_cycle')) require_once '/Users/tsc/Documents/project/php/pdo-smarty/lib/vendor/smarty/libs/plugins/function.cycle.php';
$_smarty_tpl->ext->_inheritance->init($_smarty_tpl, true);
?>

<?php 
new Block_content_111682279956a4cac7be28b0_82060350($_smarty_tpl);
$_smarty_tpl->ext->_inheritance->endChild($_smarty_tpl);
$_smarty_tpl->_subTemplateRender("file:../layout/home-layout.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 66, false);
}
/* {block 'content'} file:/Users/tsc/Documents/project/php/pdo-smarty/public/../view/user/default.tpl */
class Block_content_111682279956a4cac7be28b0_82060350 extends Smarty_Internal_Block
{
public $name = 'content';
public function callBlock(Smarty_Internal_Template $_smarty_tpl) {
?>

    <a href="/user/create.html">Create</a>
    <h1>User List</h1>
    <table>
        <tr>
            <th>UserName</th>
            <th>Email</th>
            <th>-</th>
        </tr>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['users']->value, 'user', false, 'key');
foreach ($_from as $_smarty_tpl->tpl_vars['key']->value => $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->_loop = true;
$__foreach_user_0_saved = $_smarty_tpl->tpl_vars['user'];
?>
            <tr style="background: <?php echo smarty_function_cycle(array('values'=>'ligthblue,azure'),$_smarty_tpl);?>
">
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['usr_name'];?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value['usr_email'];?>
</td>
                <td>
                    <a href="edit/<?php echo $_smarty_tpl->tpl_vars['user']->value['usr_id'];?>
.html">Edit</a>
                    <a href="javascript:void(0)" onclick="ajaxDelete('user','default',<?php echo $_smarty_tpl->tpl_vars['user']->value['usr_id'];?>
)" id="<?php echo $_smarty_tpl->tpl_vars['user']->value['usr_id'];?>
">Delete</a>
                </td>
            </tr>
        <?php
$_smarty_tpl->tpl_vars['user'] = $__foreach_user_0_saved;
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>
    </table>
<?php
}
}
/* {/block 'content'} */
}
