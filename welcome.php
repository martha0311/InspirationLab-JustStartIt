<?php
require_once "./config.php";
// Initialize the session
session_start();

// if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
//     header("location: login.php");
//     exit;
// }

$user_name = $_SESSION['username'];
$user_id = $_SESSION['id'];
$rows =  GetQuery("SELECT * FROM users where id = '$user_id'");

foreach ($rows as $row) {
    $region = $row['region'];
}
$user_region = $region;
?>

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
    <script src="https://code.jquery.com/jquery-1.12.4.min.js"></script>

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

                            <li> <a href="logout.php" class="btn btn-danger ml-3">Sign Out of Your Account</a></li>
                            <li><a href="reset-password.php" class="btn btn-warning">Reset Your Password</a></li>
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
        <?php

        $user_id = $_SESSION['id'];

        // $rows =  GetQuery("SELECT * FROM user WHERE gender='$preferred_gender' and id != '$user_id'");
        // queying all users exept 
        ?>




        <div class="profiles">
            <!-- the profile photo -->
            <div class="photo">
                <img id="elemId" height="35px" width="35px" align="center" class="profilePhoto">
            </div>

            <!-- profile name -->
            <p class="nameLabel">Username:</p>
            <div class="name">
                <p class="nameAPI"> <?php echo $row['username']; ?></p>
            </div>

            <!-- Separatin line -->
            <div class="line"></div>

            <!-- the rank -->
            <p class="rankLabel">Rank:</p>
            <div class="rank">
                <p class="rankAPI" id="userRank"></p>
            </div>

            <!-- the three characters-->
            <p class="characterLabel">Characters:</p>

            <!-- Character 1 -->
            <div class="character1">
                <img id="champion0" height="40px" width="40px" align="center" class="characterPic1API">

                <p class="character1API"></p>
            </div>

            <!-- Character 2 -->
            <div class="character2">
                <img id="champion1" height="40px" width="40px" align="center" class="characterPic2API">

                <p class="character2API"></p>
            </div>

            <!-- Character 3 -->
            <div class="character3">
                <img id="champion2" height="40px" width="40px" align="center" class="characterPic3API">

                <p class="character3API"></p>
            </div>

            <!-- the positions -->
            <p class="positionLabel">Positions:</p>

            <!-- position 1 -->
            <div class="position1">
                <img src="./Images/Positions/Jungle.png" height="40px" width="40px" align="center" class="positionPic1API">

                <p class="position1API"></p>
            </div>

            <!-- position 2 -->
            <div class="position2">
                <img src="./Images/Positions/Bottom.png" height="40px" width="40px" align="center" class="positionPic2API">

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

        const riotkey = "RGAPI-d3776b61-b20f-4443-b34d-e1df896fc34a";
        let region = <?php echo json_encode("$user_region", JSON_HEX_TAG); ?>;
        let name = <?php echo json_encode("$user_name", JSON_HEX_TAG); ?>;
        let link = `https://${region}.api.riotgames.com/lol/summoner/v4/summoners/by-name/${name}?api_key=${riotkey}`;
        let user_id = <?php echo json_encode("$user_id", JSON_HEX_TAG); ?>;



        $.getJSON(link, function(data) {
            // fetching riot api and storing the player object
            let id = data.id;
            data.uid = user_id;



            $.ajax({
                url: "readJson.php",
                method: "post",
                data: data,
                success: function(result) {
                    console.log(result);
                }
            })
            let profileImage = document.getElementById("elemId");
            let userRank = document.getElementById("userRank");
            profileImage.setAttribute(
                "src",
                "http://ddragon.leagueoflegends.com/cdn/10.25.1/img/profileicon/" +
                data.profileIconId +
                ".png"
            );


            let urldata =
                "http://ddragon.leagueoflegends.com/cdn/9.3.1/data/en_US/champion.json";
            let url = `https://${region}.api.riotgames.com/lol/champion-mastery/v4/champion-masteries/by-summoner/${id}?api_key=${riotkey}`;

            // ajax function here to fetch the last 3 champions names then runnig a for loop to extract the last 3 champion name from another api
            $.when($.getJSON(url), $.getJSON(urldata)).done(function(result1, result2) {
                let data = result1[0];
                let championList = result2[0].data;

                for (i = 0; i < 3; i++) {
                    for (var z in championList) {
                        if (championList[z].key == data[i].championId) {
                            // inserting photos for the champion in the welcom page 
                            let champion = document.getElementById("champion" + i);
                            champion.setAttribute(
                                "src",
                                "./Images/champion/" +
                                championList[z].id +
                                ".png"
                            );
                        }
                    }
                }
                // assigining the url for fetching the josn data
                let rankLink = `https://${region}.api.riotgames.com/lol/league/v4/entries/by-summoner/${id}?api_key=${riotkey}`;
                $.getJSON(rankLink, function(data) {
                    let rank = data[1];
                    // shows rank in welcome page 
                    userRank.innerText = rank.tier;
                });
            });
        });
    </script>
</body>

</html>