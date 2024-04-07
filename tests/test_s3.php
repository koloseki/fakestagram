<?php

require __DIR__.'/../vendor/autoload.php';

use Aws\S3\S3Client;
use Aws\Exception\AwsException;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__.'/..');
$dotenv->load();


// Get data from .env
$accessKey = $_ENV['AWS_ACCESS_KEY_ID'];
$secretKey = $_ENV['AWS_SECRET_ACCESS_KEY'];
$region = $_ENV['AWS_DEFAULT_REGION'];
$bucket = $_ENV['AWS_BUCKET'];

// Create S3 client
$s3Client = new S3Client([
    'region' => $region,
    'version' => 'latest',
    'credentials' => [
        'key' => $accessKey,
        'secret' => $secretKey,
    ]
]);

// Insert there full path to your file that you want to send to your s3 bucket
$fileToUpload = '/path/to/your/file.txt';

try {
    // send file
    $result = $s3Client->putObject([
        'Bucket' => $bucket,
        'Key' => basename($fileToUpload),
        'SourceFile' => $fileToUpload,
    ]);

    // Echo URL of sent file
    echo $result['ObjectURL'] . PHP_EOL;
} catch (AwsException $e) {
    // Else show error
    echo $e->getMessage() . PHP_EOL;
}
