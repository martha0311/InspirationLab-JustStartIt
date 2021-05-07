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
        <div id="headerDiv">
            <div> 
                <img src="./logo.jpg" title="logo" alt="logo" height="100px" width="100px" align="left" id="logo">

                <div id="settingButton"> 
                    <a href="#" id="settingLink">
                        Setting
                    </a>
                </div>
            </div>
        </div>

        <div id="subscriptionButton"> 
            <a href="#" id="subscriptionLink">
                Subscroption Offers
            </a>
        </div>

        <div id="FilterButton"> 
            <p id="filter">Filters</p> 
        </div>

        <div id="messageButton"> 
            <p id="message">Messages</p> 
        </div>

        <div id="profiles"> 
            <!-- the profile photo -->
            <div id="photo"></div> 

            <!-- profile name -->
            <p id="nameLabel">Username:</p>
            <div id="name"></div> 

            <!-- profile name -->
            <div id="line"></div>

            <!-- the rank -->
            <p id="rankLabel">Rank:</p>
            <div id="rank"></div> 

            <!-- the three characters-->
            <p id="characterLabel">Characters:</p>
            <div id="character"></div> 
            <div id="character"></div> 
            <div id="character"></div> 

            <!-- the positions -->
            <p id="positionLabel">Positions:</p>
            <div id="position"></div> 
            <div id="position"></div> 

            <input type="submit" value="Ignore" id="ignoreButton">

            <input type="submit" value="Request" id="requestButton">
        </div> 
    </body>
</html>
