<?php

require '../../tools/Modal.php';
require '../../vendor/autoload.php';

use Aws\S3\S3Client;
use Aws\Exception\AwsException;

$keyname = $_POST['key'];
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

$result = $s3->deleteObject([
    'Bucket' => 'analisis-recomendaciones',
    'Key'    => $keyname
]);

if (!$result['DeleteMarker']) {
    $modal->modalAlerta("text-primary", "Informacion", "Si, its dead");
}
