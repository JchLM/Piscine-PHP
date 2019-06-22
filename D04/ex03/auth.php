<?php

function auth($login, $passwd)
{
    $dir = '../private';
    $file = "$dir/passwd";

    if (!file_exists($dir))
        return false;

    if (!file_exists($file))
        return false;

    $users = unserialize(file_get_contents($file));
    $find_and_match = false;

    foreach ($users as $user)
    {
        if ($user['login'] === $login)
        {
            $find_and_match = $user['passwd'] === hash('whirlpool', $passwd);
        }
    }
    return $find_and_match;
}