<?php
// ContentFactory.php
require_once 'TextContent.php';
require_once 'ImageContent.php';
require_once 'VideoContent.php';

class ContentFactory {
    public static function createContent($type) {
        switch ($type) {
            case 'text':
                return new TextContent();
            case 'image':
                return new ImageContent();
            case 'video':
                return new VideoContent();
            default:
                throw new Exception('Invalid content type');
        }
    }
}
?>
