<?php

function isLogIn()
{
    if ( isset($_SESSION['user_id']) ) {
        return true;
    } else {
        return false;
    }
}