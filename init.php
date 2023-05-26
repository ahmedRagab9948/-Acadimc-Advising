<?php
    $css_path = "layout/css/";
    $js_path = "layout/js/";
    $function_path = "includes/function/";
    $temp_path = "includes/template/";
    $img_path = "layout/images/";

    include "connect_db.php";

    include $function_path . "functions.php";
    include $temp_path . "header.php";
    if(!isset($Nonav)) {
        include $temp_path . "navbar.php";
    }

    if(!isset($Noload)) {
        include $temp_path . "loading.php";
    }
