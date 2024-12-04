<?php

require_once "include/config.php";
require_once "function/view.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- <link rel="stylesheet" href="style.css"> -->
    <style>
        body{
            height: 100vh;
            margin: auto;
            background-color: #000;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            width: 30rem;
            height: 25rem;
            border: 3px solid #b2b2b2;
            border-radius: 20px;
            background-color: rgb(46, 49, 58);
        }
        .container form{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            margin: 0;
            padding: 10px 10px;
            transform: translateY(-2rem);
        }
        .container input{
            width: 200px;
            height: 30px;
            margin: 10px 0;
            padding:  10px 10px;
            border-radius: 10px;
            background-color: rgb(46, 49, 58);
            border: solid 2px #b2b2b2;
            font-family: system-ui;
            color: #fff;
            transition: 0.5s;
        }
        .container input::placeholder{
            color: #fff;
            font-weight: 500;
        }
        .container input:hover{
            background-color:  #b2b2b2;
            color: #000;

        }
        .container input:hover::placeholder{
            color: #000;
        }
        button{
            width: 120px;
            height: 50px;
            border-radius: 10px;
            border: 2px solid #b2b2b2;
            background-color: rgb(46, 49, 58);
            color: white;
            font-size:  15px;
            transition: 0.5s;
            cursor: pointer;
            margin-top: 5px;
            position: absolute;
            transform: translate(-6rem, 8.4rem);
        }
        button:hover{
            background-color: #b2b2b2;
            color: #000;
            font-weight:  500;
        }
        h1{
            color: #fff;
            font-family: system-ui;
            font-weigth: 900;
        }
        .success{
            position: absolute;
        }
        #a{
            padding: 30px 30px;
            text-decoration: none;
            color: #fff;
            border: 2px solid #b2b2b2;
            background-color: green;
            /* transition: 0.5s; */
        }
        #a:hover{
            background-color: #b2b2b2;
            color: #000;
        }
        button a{
            color: #fff;
            text-decoration: none;
        }
        .log-button{
            width: 170px;
            height: 50px;
            border-radius: 10px;
            border: 2px solid #b2b2b2;
            background-color: rgb(46, 49, 58);
            color: white;
            font-size:  15px;
            transition: 0.5s;
            cursor: pointer;
            margin-top: 5px;
            position: absolute;
            transform: translate(4rem, 9rem);
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>LIBRARY LOGIN SYSTEM</h1>
        <form action="function/Stu_Login.php" method="post">
            <input type="text" name="full_name" placeholder="FULL NAME:" required>
            <input type="text" name="course" placeholder="COURSE:" required>
            <input type="text" name="department" placeholder="DEPARTMENT:" required>
            <button>SUBMIT</button>
        </form>
        <button class="log-button"><a href="stu_log.php">STUDENT LOG</a></button>
    </div>
        <div class="success">
            <?php
                sucessfully();
            ?>
        </div>
</body>
</html>
