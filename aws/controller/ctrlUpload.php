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


if (isset($_FILES['files'])) {
    for ($i = 0; $i < count($_FILES['files']['name']); $i++) {
        $uploadObject = $s3->putObject([
            'Bucket' => 'analisis-recomendaciones',
            'Key' => $_FILES['files']['name'][$i],
            'SourceFile' => $_FILES['files']['tmp_name'][$i]
        ]);
        echo $uploadObject['ObjectURL'];
    }
};


// $modal->modalAlerta("text-primary", "Informacion", "Hola");
