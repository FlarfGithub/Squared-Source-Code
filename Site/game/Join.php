<?php
require_once($_SERVER["DOCUMENT_ROOT"] . "/Game/2016/2016thing.php");
require_once "../connect.php";
header("Content-Type: text/plain");

$mode = addslashes($_GET["mode"]);

if($mode == "guest"){
    $gameid = $ep->remove($_GET["PlaceId"]);

    $gamequery = $db->query("SELECT * FROM games WHERE id = '$gameid'");
    $game = $gamequery->fetch();

    $guestnumber = rand(1, 9999);
    $user = "Guest " . $guestnumber;
    $ip = $ep->remove($game['ip']);
    $port = $ep->remove($game['port']);
}
if($mode == "user"){
    $id = $ep->remove($_GET["user"]);
    $gameid = $ep->remove($_GET["PlaceId"]);

    $userquery = $db->query("SELECT * FROM users WHERE jkey = '$id'");
    $userget = $userquery->fetch();

    $gamequery = $db->query("SELECT * FROM games WHERE id = '$gameid'");
    $game = $gamequery->fetch();

    $ip = $ep->remove($game['ip']);
    $port = $ep->remove($game['port']);

    $user = $ep->remove($userget['username']);
    $idc = $userget['id'];

    if($userget['HasMembership'] == "yes") $mship = "BuildersClub"; else $mship = "None";
}

if($mode == "user") {
    if (preg_match("/[a-z]/i", $id)) {
        $id = "1";
    }
    if (preg_match("/[a-z]/i", $port)) {
        $port = "53640";
    }
}

// Construct joinscript
if($mode == "guest"){
    $guestid = $guestnumber + rand(1, 10000);
    $joinscript = [
        "ClientPort" => 0,
        "MachineAddress" => $ip,
        "ServerPort" => $port,
        "PingUrl" => "",
        "PingInterval" => 20,
        "UserName" => $user,
        "SeleniumTestMode" => false,
        "UserId" => -$guestid,
        "SuperSafeChat" => true,
        "FFlagUseInGameTopBar" => true,
        "FFlagNewMenuSettingsScript" => true,
        "FFlagUseLuaCameraAndControl" => true,
        "FFlagNewPlayerListScript" => true,
        "FFlagNewVehicleHud" => true,
        "FFlagTopbarGamepadSupport" => true,
        "FFlagNewPurchaseScript" => true,
        "FFlagNewBackpackScript" => true,
        "FFlagBubbleChatbarDocksAtTop" => true,
        "CharacterAppearance" => "http://www.calvyy.xyz/v1.1/avatar-fetch?mode=guest",
        "ClientTicket" => "",
        "GameId" => 3,
        "PlaceId" => 1818,
        "MeasurementUrl" => "", // No telemetry here :)
        "WaitingForCharacterGuid" => "26eb3e21-aa80-475b-a777-b43c3ea5f7d2",
        "BaseUrl" => "http://www.calvyy.xyz",
        "ChatStyle" => "ClassicAndBubble",
        "VendorId" => "0",
        "ScreenShotInfo" => "",
        "VideoInfo" => "",
        "CreatorId" => "1",
        "CreatorTypeEnum" => "User",
        "MembershipType" => "None",
        "AccountAge" => "0",
        "CookieStoreFirstTimePlayKey" => "rbx_evt_ftp",
        "CookieStoreFiveMinutePlayKey" => "rbx_evt_fmp",
        "CookieStoreEnabled" => false,
        "IsRobloxPlace" => true,
        "GenerateTeleportJoin" => false,
        "IsUnknownOrUnder13" => true,
        "SessionId" => "39412c34-2f9b-436f-b19d-b8db90c2e186|00000000-0000-0000-0000-000000000000|0|190.23.103.228|8|2021-03-03T17:04:47+01:00|0|null|null",
        "DataCenterId" => 0,
        "UniverseId" => 3,
        "BrowserTrackerId" => 0,
        "UsePortraitMode" => false,
        "FollowUserId" => 0,
        "characterAppearanceId" => 1
    ];
}else{
    $joinscript = [
        "ClientPort" => 0,
        "MachineAddress" => $ip,
        "ServerPort" => $port,
        "PingUrl" => "",
        "PingInterval" => 20,
        "UserName" => $user,
        "SeleniumTestMode" => false,
        "UserId" => $idc,
        "SuperSafeChat" => false,
        "CharacterAppearance" => "http://www.calvyy.xyz/v1.1/avatar-fetch?userId=$idc",
        "ClientTicket" => "",
        "GameId" => 3,
        "PlaceId" => 1818,
        "MeasurementUrl" => "", // No telemetry here :)
        "WaitingForCharacterGuid" => "26eb3e21-aa80-475b-a777-b43c3ea5f7d2",
        "BaseUrl" => "http://www.calvyy.xyz",
        "ChatStyle" => "ClassicAndBubble",
        "VendorId" => "0",
        "ScreenShotInfo" => "",
        "VideoInfo" => "",
        "CreatorId" => "1",
        "CreatorTypeEnum" => "User",
        "MembershipType" => "$mship",
        "AccountAge" => "1",
        "CookieStoreFirstTimePlayKey" => "rbx_evt_ftp",
        "CookieStoreFiveMinutePlayKey" => "rbx_evt_fmp",
        "CookieStoreEnabled" => true,
        "IsRobloxPlace" => true,
        "GenerateTeleportJoin" => false,
        "IsUnknownOrUnder13" => false,
        "SessionId" => "39412c34-2f9b-436f-b19d-b8db90c2e186|00000000-0000-0000-0000-000000000000|0|190.23.103.228|8|2021-03-03T17:04:47+01:00|0|null|null",
        "DataCenterId" => 0,
        "UniverseId" => 3,
        "BrowserTrackerId" => 0,
        "UsePortraitMode" => false,
        "FollowUserId" => 0,
        "characterAppearanceId" => 1
    ];
}

// Encode it!
$data = json_encode($joinscript, JSON_UNESCAPED_SLASHES | JSON_NUMERIC_CHECK);

// Sign joinscript
$signature = get_signature("\r\n" . $data);

// exit
exit("--rbxsig%". $signature . "%\r\n" . $data);
?>