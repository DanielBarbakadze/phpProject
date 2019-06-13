<?php

function redirect($url)
{
    header("Location: $url");
}

function isLoggedIn()
{
    return isset($_SESSION['currentUser']);
}

function currentUser()
{
    return isset($_SESSION['currentUser']) ? $_SESSION['currentUser'] : null;
}
