<?php
class Base64 {
    public function encode($input) {
        return base64_encode($input);
    }

    public function decode($input) {
        return base64_decode($input);
    }
}