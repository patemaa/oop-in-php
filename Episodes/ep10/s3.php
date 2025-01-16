<?php

require 'vendor/autoload.php';

use Aws\S3\S3Client;

$s3Key = '__S3key__';
$s3Secret = '__S3secret__';

$file =  'text.txt';
$contents = 'Hello World';
$bucket = 'laracast-testing';

$s3 = new S3Client([
    'version' => 'latest',
    'region'  => 'us-east-1',
    'credentials' => [
        'key'    => $s3Key,
        'secret' => $s3Secret
    ]
]);

try {
    $s3->putObject([
        'Bucket' => $bucket,
        'Key'    => $file,
        'Body'   => $contents,
    ]);
} catch (Aws\S3\Exception\S3Exception $e) {
    echo "There was an error uploading the file.\n";
}