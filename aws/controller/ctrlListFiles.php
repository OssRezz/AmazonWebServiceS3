<?php

require '../../tools/Modal.php';
require '../../vendor/autoload.php';

use Aws\S3\S3Client;
use Aws\Exception\AwsException;

$modal =  new Modal();



$S3Options = [
    'version' => 'latest',
    'region' => 'us-east-1',
    'credentials' =>
    [
        'key' => 'your_key',
        'secret' => 'your_secret'
    ],
];


$s3 = new S3Client($S3Options);


$filesOnBucket = $s3->listObjects([
    'Bucket' => 'analisis-recomendaciones',
]);

$filesOnBucket = $filesOnBucket->toArray();

$td = '';
foreach ($filesOnBucket['Contents'] as $key => $value) {
    $td .= "<tr><td>{$value['Key']}</td>";
    $td .= "<td>{$value['LastModified']}</td>";
    $td .= "<td>{$value['Size']}</td>";
    $td .= "<td>{$value['Owner']['DisplayName']}</td>";
    $td .= "<td class='text-center'>";
    $td .= "<button value='{$value['Key']}' id='delete' class='btn btn-outline-danger mx-1 btn-sm'>Delete</button>";
    $td .= "<button value='{$value['Key']}' id='download' class='btn btn-outline-dark mx-1 btn-sm'>Download</button>";
    $td .= "</td></tr>";
}

echo $td;

