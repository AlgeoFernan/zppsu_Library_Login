<?php

function sucessfully(){
    if(isset($_GET["success"]) && $_GET["success"] == "login"){
        echo '<a href="index.php" id="a">login success!</a>';
    }
}