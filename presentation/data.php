<?php
 
require_once __DIR__ . '/vendor/autoload.php';
 
$key =  __DIR__ . '/credentials.json';//取得したサービスキーのパスを指定
 
$client = new Google_Client();//Googleクライアントインスタンスを作成
$client->setScopes([//スコープを以下の内容でセット
    \Google_Service_Sheets::SPREADSHEETS,
    \Google_Service_Sheets::DRIVE,]);
$client->setAuthConfig($key);//サービスキーをセット
 
$sheet = new Google_Service_Sheets($client);//シートを操作するインスタンス
$sheet_id = '1BFOoBqbJA4i8yOkeiq3t8N9iwH3bnzepUTnERMEwhI4';//対象のスプレッドシートのIDを指定
$range = 'M1!A2:I23';//取得範囲を指定（dataシートのA1〜B8）
$response = $sheet->spreadsheets_values->get($sheet_id, $range);
$m1 = $response->getValues();//帰ってきたresponseから値を取得
 
$range = 'M2!A2:I21';
$response = $sheet->spreadsheets_values->get($sheet_id, $range);
$m2 = $response->getValues();

$tagList = ['データ解析', '待ち行列理論', '組織行動', '都市計画', '生産品質管理', 'オペレーション管理', 'ネットワーク科学',
    '経済物理学','数理最適化', 'シミュレーション', '画像判別', '異常検知', '接客', '会計', '統計的因果推論'];

$colorsDict = array('データ解析'=>'red', '待ち行列理論'=>'orange', '都市計画'=>'yellow',
    '生産品質管理'=>'olive', 'オペレーション管理'=>'green', 'ネットワーク科学'=>'teal', '数理最適化'=>'blue',
    'シミュレーション'=>'violet', '経済物理学'=>'pink', '異常検知'=>'brown');