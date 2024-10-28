<?php
header("Access-Control-Allow-Origin: *"); 
header("Access-Control-Allow-Methods: POST, GET, OPTIONS");
header("Access-Control-Allow-Headers: Content-Type");
header('Content-Type: application/json');

require_once 'ContentFactory.php';

$requestPayload = json_decode(file_get_contents('php://input'), true);
$contentType = $requestPayload['contentType'] ?? null;

if ($contentType) {
    try {
        $content = ContentFactory::createContent($contentType);
        error_log("Generated content: " . json_encode($content->generateContent()));
        echo json_encode($content->generateContent());
    } catch (Exception $e) {
        error_log("Error: " . $e->getMessage());
        echo json_encode(['error' => $e->getMessage()]);
    }
} else {
    error_log("Invalid content type received");
    echo json_encode(['error' => 'Invalid content type']);
}
