const riotkey = "RGAPI-06ff7be4-261e-4543-9fe6-7e14acbb3e30";
const sp = "20%";

//const fetch = require("node-fetch");
let sumonarName = "";
let region = "";
document.getElementById("theform").onsubmit = function() {
    sumonarName = document.getElementById("sname").value;
    region = document.getElementById("regions").value;
    return false;
};
// so in order to call the variable in anothter function we need to assign values globaly then we can call them inside another function

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

/*
 "id": "eCcThZ-lK8WMWQ5bCc18bfNXRh_mwqiZHnFNi30P4jSBJkAB",
    "accountId": "6jKbbJQGfn7ZBA_3l9rSQAepF6DKKB9DbEd5wlSWlGhBqDY0PT3v8gkJ",
    "puuid": "LaoAPhpkHT8zeIpy1xibrQDMoLYbLppHChpXpmQ3huzIWhZd1huzqGZWePIUWruzEqDgAFE4GWdbFg",
    "name": "KevsOsiris",
    "profileIconId": 25,
    "revisionDate": 1618850831229,
    "summonerLevel": 62
*/

// this function takes two parametrs first one is username and second the value you want back
async function fetchSumByName(name, ch) {
    //turns name into link format
    while (name.includes(" ")) {
        let spaceSpot = name.indexof(" ");
        name = name.substring(0, spaceSopt) + sp + name.substring(spaceSopt + 1);
    }
    //request to roits api
    const link = `https://${region}.api.riotgames.com/lol/summoner/v4/summoners/by-name/${name}?api_key=${riotkey}`; //Embedded expressions

    const reponse = await fetch(link);

    //turns the return value to json format
    let data = await reponse.json();

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
}