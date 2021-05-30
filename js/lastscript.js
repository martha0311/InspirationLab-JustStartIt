const riotkey = "RGAPI-d3776b61-b20f-4443-b34d-e1df896fc34a";
const sp = "20%";
console.log("hello lastscript  ");

let sumonarName = "";
let id = "";
let queueType = "";
let rank = "";
let tier = "";
let champion1 = "";
let champion2 = "";
let champion3 = "";
let apiData = "";
let profileIconIdImage = "";

function autosearch(name) {
    //get data from database
    let region = document.getElementById("regions").value;
    $.ajax({
        url: `https://${region}.api.riotgames.com/lol/summoner/v4/summoners/by-name/${name}?api_key=${riotkey}`,
        type: "get",
        data: { name: name },
        success: function(result) {
            document.getElementById("sname").style.backgroundColor =
                "rgb(15, 233, 26)";
            $(".result").html(result);
        },
        error: function(result) {
            document.getElementById("sname").style.backgroundColor =
                "rgb(238, 51, 51)";
            console.log("wrong");
        },
    });
}

document.getElementById("theform").addEventListener("submit", function() {});

// so in order to call the variable in anothter function we need to assign values globaly then we can call them inside another function

// this function will fetch the last champions
async function getLastChampions(Id) {
    let link =
        `https://${region}.api.riotgames.com/lol/champion-mastery/v4/champion-masteries/by-summoner/` +
        (await Id) +
        `?api_key=`;
    if (id != null) link += riotkey;
    let response = await fetch(link);
    response = await response.json();
    profileIconId = apiData.profileIconId;
    champion1 = response[0].championId;
    champion2 = response[1].championId;
    champion3 = response[2].championId;
}

async function getMatchList(
    accId,
    champID,
    queue,
    beginTime,
    endTime,
    endIndex,
    beginIndex
) {
    //link building
    let link =
        `https://${region}.api.riotgames.com/lol/match/v4/matchlists/by-account/` +
        (await accId) +
        "?api_key=";

    if (champID != null) link += "champion= " + champID + "&";
    if (queue != null) link += "queue= " + queue + "&";
    if (endTime != null) link += "endTime= " + endTime + "&";
    if (beginTime != null) link += "beginTime= " + beginTime + "&";
    if (endIndex != null) link += "endIndex= " + endIndex + "&";
    if (beginIndex != null) link += "beginIndex= " + beginIndex + "&";
    link += riotkey;
    //use link to grab information
    let reponse = await fetch(link);
    reponse = await reponse.json();
    console.log(reponse.matches[0].champion);
}

// this function takes two parametrs first one is username and second the value you want back
async function fetchSumByName(name, ch) {
    //turns name into link format
    while (name.includes(" ")) {
        let spaceSpot = name.indexof(" ");
        name = name.substring(0, spaceSopt) + sp + name.substring(spaceSopt + 1);
    }

    //request to roits api
    const link = `https://${region}.api.riotgames.com/lol/summoner/v4/summoners/by-name/${name}?api_key=${riotkey}`; //Embedded expressions
    const response = await fetch(link);
    if (response.status == 200) {
        let data = await response.json();

        if (ch == "id") {
            console.log("wring one reached");
            return data.id;
        } else if (ch == "accountId") {
            return data.accountId;
        } else if (ch == "puuuid") {
            return data.puuuid;
        } else if (ch == "name") {
            return data.name;
        } else if (ch == "profileIconId") {
            return data.profileIconId;
        } else if (ch == "revisionDate") {
            return data.revisionDate;
        } else if (ch == "summonerLevel") {
            return data.summonerLevel;
        } else {
            console.log("ch is  not valid");
            return null;
        }
    } else {
        return response.status;
    }
}