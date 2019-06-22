<?php

if ($_POST['login'] === '' || $_POST['oldpw'] === '' || $_POST['newpw'] === '' || $_POST['submit'] !== 'OK')
{
    echo "ERROR\n";
    exit();
} 
    else
    {
        $dir = '../private';
        $file = "$dir/passwd";

        if (!file_exists($dir))
            return false;

        if (!file_exists($file))
            return false;

        $users = unserialize(file_get_contents($file));
        $login = $_POST['login'];
        $password_changed = false;

        foreach ($users as $index => $user)
        {
            if ($user['login'] === $login && $user['passwd'] === hash('whirlpool', $_POST['oldpw']))
            {
                $users[$index]['passwd'] = hash('whirlpool', $_POST['newpw']);
                $password_changed = true;
            }
        }
        if ($password_changed)
        {
            file_put_contents($file, serialize($users));
            echo "OK\n";
            exit();
        }
    }
echo "ERROR\n";
?>