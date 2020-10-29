<?php
// simple page redirect
function redirerct($page)
{
    header('location: ' . URLROOT . '/' .$page);
}
