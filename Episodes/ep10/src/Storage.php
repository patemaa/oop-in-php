<?php

namespace App;

class Storage
{
    public static function resolve() : FileStorage
    {
        $storageMethod = $_ENV['FILE_STORAGE'];

        if ($storageMethod === 'local') {
            return new LocalStorage();
        } else if ($storageMethod === 's3') {
            $bucket = $_ENV['S3_BUCKET'];

            $client = new S3Client([
                'version' => 'latest',
                'region' => 'us-east-1',
                'credentials' => [
                    'key' => $_ENV['S3_KEY'],
                    'secret' => $_ENV['S3_SECRET']
                ]
            ]);

            return new S3Storage($client, $_ENV['S3_BUCKET']);
        }
        throw new \Exception('Invalid storage method.');
    }
}