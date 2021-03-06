<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LEGENND SUBSCRIPTIONS</title>
        <link rel="stylesheet" href="./sub.css" type="text/css">
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
                        <li><a href="./main.php"><b>MAIN</b></a></li>
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

            <h1 class="subscriptionLabel"> Subscriptions</h1>

            <div class="offer">
                <h2 class="offer1Name">
                    No ads
                </h2>

                <p class="payment">$0.99</p>
                <p class="perMonth">per month</p>

                <a href="" class="select">SELECT</a>
            </div>
    
            <div class="offer">
                <h2 class="offer2Name">
                    Unlimited requests
                </h2>

                <p class="payment">$0.99</p>
                <p class="perMonth">per month</p>

                <a href="" class="select">SELECT</a>
            </div>
    
            <div class="offer">
                <h2 class="offer3Name">
                    Match with strong players
                </h2>

                <p class="payment">$0.99</p>
                <p class="perMonth">per month</p>

                <a href="" class="select">SELECT</a>
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