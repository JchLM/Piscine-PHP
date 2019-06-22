<?php

if ($_POST['login'] === '' || $_POST['passwd'] === '' || $_POST['submit'] !== 'OK')
{
    echo "ERROR\n";
    exit();
}
    else
    {
        $dir = '../private';
        $file = "$dir/passwd";

        if (!file_exists($dir))
            mkdir($dir);

        if (!file_exists($file))
            file_put_contents($file, serialize([]));

    $users = unserialize(file_get_contents($file));
    $login = $_POST['login'];
    $user_exists = false;

    foreach ($users as $user)
    {
        if ($user['login'] === $login)
        {
            $user_exists = true;
        }
    }

    if ($user_exists)
    {
        echo "ERROR\n";
        exit();
    }
    else
    {
        $users[] = [
            'login' => $login,
            'passwd' => hash('whirlpool', $_POST['passwd'])
        ];

        file_put_contents($file, serialize($users));
        echo "OK\n";
    }
}
