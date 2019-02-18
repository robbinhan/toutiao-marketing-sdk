<?php
/**
 * Created by PhpStorm.
 * User: Sumyf
 * Date: 2019/1/31
 * Time: 10:34
 */
require __DIR__ . '/../../../index.php';
require __DIR__ . '/../../config.php';

$client = new ToutiaoSdk\TouTiaoClient(TOKEN);

$file = __DIR__ . '/dzaxfr-1547714860.png';

$req = $client::Tool()->file->imageAdvertiser();
$req->setAdvertiserId(ADVERTISER_ID);
$req->setImageFile($file);
$req->setImageSignature(md5_file($file));

print_r($client->excute($req));