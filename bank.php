<!DOCTYPE html>
<?php  
include("connection.php");
error_reporting(0);
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/style.css">
    
        <title>The sparks foundation bank</title>
    </head>
    <body class="background" id="home">
            <nav class="navbar  h-nav ">
                <ul class="navlist v-class">
                    <div class="logo"><img src="images\tranferbank.jpeg" alt="logo"></div>
                    <li><a href="#home">Home</a></li>
                    <li><a href="cstmlist.php">Customer list</a></li>
                    <li><a href="#about">About creater</a></li>
                    <li><a href="transfermoney.php">Transfer Money</a></li>
                    <li><a href="transaction.php">Transaction History</a></li>
                
                </ul>
                <div class="burger">
                    <div class="line"></div>
                    <div class="line"></div>
                    <div class="line"></div>
                </div>
                
            </nav>
            <section class= " firstsection" >
                <div class="box-main">
                    <div class="firsthalf">
                        <p class="text-big">Welcome, to The Sparks Foundation Bank!</p>
                        <p class="text-small">A simple website that helps you to tranfer funds and lets you keep track of every transaction made.</p>
                        
                    </div>
                </div>
            </section><hr>
            
            <br>
        
        <section >
            <div class="one-t" >
                <img id="transfermoney" height ="300px" width="300px" src="images\computer_money_transfer.jpg" alt="Transfer money">
                    <div><a href="transfermoney.php"><button class="main-button">Transfer Money</button></a></div>
            </div>
            <div class="one-t">
                <img id="history" height ="300px" width="300px" src="images\transferlist.jpg" alt="Transfer list">
                    <div><a href="transaction.php"><button class="main-button">View Transfer History</button></a></div>
            </div>
            <div clas="one-t">
                <img sid="customerlist" height ="300px" width="300px" src="images\tranferbank.jpeg" alt="customerr list">
                     <div><a href="cstmlist.php"><button class="main-button">show customer list</button></a></div>
            </div>
            <br>
        </section>
        <br><br><br><br>
        <hr>

       
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
        <section class="about" id="about">
                <h1>About the Creater</h1>
                <section class="about-left">
                        <p>This website was created by ARYAN KASHYAP</p>
                        <p>Email: onlyaryank@gmail.com</p>
                        <P>LinkedIn: </p>
                </section>
                <section class="about-right">
                        <img height ="200px" width="200px" src="images\DSC09763.jpg" alt="image of creator">
                </section>
                
        </section>
        <footer class="copyright">
            <p>
            Copyright &copy; 2021 Made by Aryan kashyap
            </p> 
            <p>
                GRIP The Sparks Foundation.
            </p>
        </footer>   
        <script src="js/resp.js"></script>
    </body>
</html>
