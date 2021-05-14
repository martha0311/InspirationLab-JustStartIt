<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Homepage</title>
        <link rel="stylesheet" href="./style.css" type="text/css">
    </head>

    <body>
        <div class="banner">
            <div> 
                <img src="./logo.jpg" title="logo" alt="logo" height="70px" width="80px" align="left" id="logo">
                
                <div id="settingButton"> 
                    <a href="#" id="settingLink">
                        Setting
                    </a>
                </div>
            </div>
        </div>

        <div id="subscriptionButton"> 
            <a href="./subscription.html" id="subscriptionLink">
                Subscriptions
            </a>
        </div>

        <div id="filterButton"> 
            <p id="filter">Filters</p> 
        </div>

        <div id="messageButton"> 
            <p id="message">Messages</p> 
        </div>

        <div id="profiles"> 
            <!-- the profile photo -->
            <div id="photo">
                <img src="#" height="35px" width="35px" align="center" id="profilePhoto">
            </div> 

            <!-- profile name -->
            <p id="nameLabel">Username:</p>
            <div id="name">
                <p id="nameAPI"></p>
            </div> 

            <!-- profile name -->
            <div id="line"></div>

            <!-- the rank -->
            <p id="rankLabel">Rank:</p>
            <div id="rank">
                <p id="rankAPI"></p>
            </div> 

            <!-- the three characters-->
            <p id="characterLabel">Characters:</p>

                <!-- Character 1 -->
            <div id="character1">
                <img src="#" height="35px" width="35px" align="center" id="characterPic1API">

                <p id="character1API"></p>
            </div> 

                <!-- Character 2 -->
            <div id="character2">
                <img src="#" height="35px" width="35px" align="center" id="characterPic2API">

                <p id="character2API"></p>
            </div> 

                <!-- Character 3 -->
            <div id="character3">
                <img src="#" height="35px" width="35px" align="center" id="characterPic3API">
                <p id="character3API"></p>
            </div> 

            <!-- the positions -->
            <p id="positionLabel">Positions:</p>

                <!-- position 1 -->
            <div id="position1">
                <img src="./logo.jpg" height="35px" width="35px" align="center" id="positionPic1API">

                <p id="position1API"></p>
            </div> 

                <!-- position 2 -->
            <div id="position2">
                <img src="./logo.jpg" height="35px" width="35px" align="center" id="positionPic2API">

                <p id="position2API"></p>
            </div> 

            <!-- Buttons -->
            <input type="submit" value="Ignore" id="ignoreButton">

            <input type="submit" value="Request" id="requestButton">
        </div> 
    </body>
</html>
