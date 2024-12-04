<?php

    require_once "include/config.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
            justify-content: start;
            align-items: center;
            flex-direction: column;
            width: 70rem;
            height: 90vh;
            border: 3px solid #b2b2b2;
            border-radius: 20px;
            background-color: rgb(46, 49, 58);
        }
        .content-container{
            display: flex;
            width: 100%;
            justify-content: space-evenly;
            color: #fff;
        }
        .content-container h3{
            width:  33.3%;
            text-align: center;
        }
        h1{
            color: #fff;
        }
        .info-container{
            display: flex;
            flex-direction: row;
            justify-content: space-evenly;
            width: 100%;
            height: 80vh;
            border-bottom-right-radius: 20px;
            border-bottom-left-radius: 20px;
            overflow-y: scroll;
        }
        .info-container::-webkit-scrollbar{
            display: none;
        }
        .stu-fullName, .stu-course, .stu-department{
            width:50%;
            align-items: center;
            display: flex;
            flex-direction: column;
        }
        .stu-fullName p, .stu-course p, .stu-department p{
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-size: 15px;
        }
        a{
            position: absolute;
            top: 2rem;
            left: 2rem;
            color: white;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <a href="index.php">RETURN TO LOGIN</a>
    <div class="container">
        <h1>STUDENT LOG</h1>
        <div class="content-container">
            <h3>FULL NAME</h3>
            <h3>COURSE</h3>
            <h3>DEPARTMENT</h3>
        </div>

        <div class="info-container">

        <div class="stu-fullName">
            <?php
                $query = "SELECT * FROM login_info";
                $stmt = $pdo->prepare($query);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                foreach($result as $row){
                    echo '<p>' . $row["full_name"] . '</p>';
                }
            ?>
        </div>
        <div class="stu-course">
        <?php
                $query = "SELECT * FROM login_info";
                $stmt = $pdo->prepare($query);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                foreach($result as $row){
                    echo '<p>' . $row["course"] . '</p>';
                }
            ?>
        </div>
        <div class="stu-department">
        <?php
                $query = "SELECT * FROM login_info";
                $stmt = $pdo->prepare($query);
                $stmt->execute();
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                
                foreach($result as $row){
                    echo '<p>' . $row["department"] . '</p>';
                }
            ?>
        </div>

        </div>

        
    </div>
</body>
</html>