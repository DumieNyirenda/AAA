<?php
// backend/utils/Encryptor.php
class Encryptor {
    private static $key = 'your-secret-key'; // Change this to a secure key
    private static $cipher = 'AES-128-CTR';

    public static function encrypt($string) {
        $iv = openssl_random_pseudo_bytes(openssl_cipher_iv_length(self::$cipher));
        $encrypted = openssl_encrypt($string, self::$cipher, self::$key, 0, $iv);
        return base64_encode($iv . $encrypted);
    }

    public static function decrypt($string) {
        $data = base64_decode($string);
        $iv_length = openssl_cipher_iv_length(self::$cipher);
        $iv = substr($data, 0, $iv_length);
        $encrypted = substr($data, $iv_length);
        return openssl_decrypt($encrypted, self::$cipher, self::$key, 0, $iv);
    }
}