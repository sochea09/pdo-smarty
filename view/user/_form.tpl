<form action="" method="post">
    <p>UserName: <input type="text" name="username" value="{if (isset($user['usr_name']))}{$user['usr_name']}{/if}"/></p>
    <p>Password: <input type="password" name="password" value="{if (isset($user['usr_password']))}{$user['usr_password']}{/if}"/></p>
    <p>Email: <input type="email" name="email" value="{if (isset($user['usr_email']))}{$user['usr_email']}{/if}"/></p>
    <p><input type="submit" value="{$buttonTitle}"/></p>
</form>