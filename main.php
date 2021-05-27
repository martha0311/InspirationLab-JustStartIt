<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LEGENND</title>
        <link rel="stylesheet" href="./main.css" type="text/css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;600;700&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/649dc6e2a7.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <section class="header">
            <nav>
                <a href="./homepage.html"><img src="./images/website.jpg"></a>

                <div class="nav-links" id="navLinks">
                    <!-- I have no idea why this doesn't want to show up -->
                    <i class="fas fa-times" onclick="hideMenu()"></i>
                    <ul>
                        <li><a href="./homepage.html"><b>HOME</b></a></li>
                        <li><a href="./sub.php"><b>SUBSCRIPTIONS</b></a></li>
                        <li><a href="" class="settings"><b>SETTINGS</b></a>
                            <ul>
                                <li><a href="./homepage.html">Log out</a></li>
                                <li><a href="">Contacts</a>
                                    <ul>
                                        <li><a href=""></a>faq@gmail.com</li>
                                    </ul>
                                </li>
                            </ul>
                        </li>

                    </ul>
                </div>
                <i class="fas fa-bars" onclick="showMenu()"></i>
            </nav>

            <div class="profiles"> 
                <!-- the profile photo -->
                <div class="photo">
                    <img src="" height="35px" width="35px" align="center" class="profilePhoto">
                </div> 
    
                <!-- profile name -->
                <p class="nameLabel">Username:</p>
                <div class="name">
                    <p class="nameAPI"></p>
                </div> 
    
                <!-- Separatin line -->
                <div class="line"></div>
    
                <!-- the rank -->
                <p class="rankLabel">Rank:</p>
                <div class="rank">
                    <p class="rankAPI"></p>
                </div> 

                <!-- the three characters-->
                <p class="characterLabel">Characters:</p>
    
                    <!-- Character 1 -->
                <div class="character1">
                    <img src="" height="40px" width="40px" align="center" class="characterPic1API">
    
                    <p class="character1API"></p>
                </div> 
    
                    <!-- Character 2 -->
                <div class="character2">
                    <img src="" height="40px" width="40px" align="center" class="characterPic2API">
    
                    <p class="character2API"></p>
                </div> 
    
                    <!-- Character 3 -->
                <div class="character3">
                    <img src="" height="40px" width="40px" align="center" class="characterPic3API">
                    
                    <p class="character3API"></p>
                </div> 
    
                <!-- the positions -->
                <p class="positionLabel">Positions:</p>
    
                    <!-- position 1 -->
                <div class="position1">
                    <img src="" height="40px" width="40px" align="center" class="positionPic1API">
    
                    <p class="position1API"></p>
                </div> 
    
                    <!-- position 2 -->
                <div class="position2">
                    <img src="" height="40px" width="40px" align="center" class="positionPic2API">
    
                    <p class="position2API"></p>
                </div> 
    
                <!-- Buttons -->
                <input type="submit" value="Ignore" class="ignoreButton">
    
                <input type="submit" value="Request" class="requestButton">
            </div>
        </section>

        <script>

            // Javascript for Toggle Menu 
            var navLinks = document.getElementById("navLinks");

            function showMenu() {
                navLinks.style.right = "0";
            }
            
            function hideMenu() {
                navLinks.style.right = "-300px";
            }
        </script>
    </body>
</html>