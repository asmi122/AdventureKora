<?php
require_once('../../../private/initialize.php');

if(is_post_request()){
// handle form value sent by new.php

    $menu_name = $_POST['menu_name'] ?? '';
    $position = $_POST['position'] ?? '';
    $visible = $_POST['visible'] ?? '';

    echo "Form parameter<br/>";
    echo "menu_name" . $menu_name . "<br />";
    echo "position" . $position . "<br />";
    echo "visible" . $visible . "<br />";
} else {
    redirect_to(url_for('/admin/subjects/new.php'));
}
?>
