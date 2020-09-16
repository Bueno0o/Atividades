<?php
    session_start();
    if(!isset($_SESSION["frutas"])){
        $_SESSION["frutas"] = array();
        $_SESSION["frutas"][] = $_GET["f"];

    }else{
        if(in_array($_GET["f"],$_SESSION["frutas"])){
            echo '<b>Essa fruta ja existe</b><hr />';
        }else{
            $_SESSION["frutas"][] = $_GET["f"];
        }
    }
    foreach($_SESSION["frutas"] as $i=>$f){
        echo "<li>$f</li>";
    }
?>