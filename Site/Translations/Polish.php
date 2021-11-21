<?php
class Polish {
    public function translate($v1) {
        $MyFeedText = 'My Feed';
        if (stripos($v1, $MyFeedText) !== false) {
            return '';
            die();
        }
        
        return $v1;
        die();
    }
}
?>