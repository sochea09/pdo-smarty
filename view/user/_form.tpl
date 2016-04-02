<form action="" method="post">
    {*{html_options name=roles options=$roles selected="1"}*}
    <select name="roles">
        <option value=''>-- select role --</option>
        {html_options options=$roles selected="{if (isset($data['rol_id']))}{$data['rol_id']}{/if}"}
    </select>
    <p>UserName: <input type="text" name="username" value="{if (isset($data['usr_name']))}{$data['usr_name']}{/if}"/></p>
    <p>Password: <input type="password" name="password" value="{if (isset($data['usr_password']))}{$data['usr_password']}{/if}"/></p>
    <p>Email: <input type="email" name="email" value="{if (isset($data['usr_email']))}{$data['usr_email']}{/if}"/></p>
    <p><input type="submit" value="{$buttonTitle}"/></p>
</form>