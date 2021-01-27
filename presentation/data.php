<?php
 
require_once __DIR__ . '/vendor/autoload.php';
 
$key =  __DIR__ . '/credentials.json';//取得したサービスキーのパスを指定
 
$client = new Google_Client();//Googleクライアントインスタンスを作成
$client->setScopes([//スコープを以下の内容でセット
    \Google_Service_Sheets::SPREADSHEETS,
    \Google_Service_Sheets::DRIVE,]);
$client->setAuthConfig($key);//サービスキーをセット
 
$sheet = new Google_Service_Sheets($client);//シートを操作するインスタンス
$sheet_id = '1uLpQRsucLB-NwpbyibzKC5aMYTIsfVhb3iWBxyxyKFU';//対象のスプレッドシートのIDを指定
$range = 'M1!A2:H10';//取得範囲を指定（dataシートのA1〜B8）
$response = $sheet->spreadsheets_values->get($sheet_id, $range);
$rows = $response->getValues();//帰ってきたresponseから値を取得
 
// echo var_dump($rows);