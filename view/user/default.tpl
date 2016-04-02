{extends file='../layout/home-layout.tpl'}
{block name='content'}
<!--    <a href="/user/create.html">Create</a>-->
    <a href="index.php?module=user&action=create">Create</a>
    <h1>User List</h1>
    <table>
        <tr>
            <th>UserName</th>
            <th>Email</th>
            <th>Role</th>
            <th>-</th>
        </tr>
        {if !empty($users)}
            {foreach from = $users key= key item = user}
                <tr style="background: {cycle values='ligthblue,azure'}">
                    <td>{$user['usr_name']}</td>
                    <td>{$user['usr_email']}</td>
                    <td>{$user['rol_name']}</td>
                    <td>
    <!--                    <a href="edit/{$user['usr_id']}.html">Edit</a>-->
                        <a href="index.php?module=user&action=edit&id={$user['usr_id']}">Edit</a>
                        <a href="javascript:void(0)" onclick="ajaxDelete('user','default',{$user['usr_id']})" id="{$user['usr_id']}">Delete</a>
                    </td>
                </tr>
            {/foreach}
        {/if}
    </table>
{/block}