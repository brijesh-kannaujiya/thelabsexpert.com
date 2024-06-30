<?php

use App\Models\Category;
use App\Models\Package;
use App\Models\Setting;
use App\Models\Test;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Contracts\Encryption\DecryptException;

if (!function_exists("setting")) {
    function setting($key)
    {

        $setting = Setting::where("key", $key)->first();
        if ($setting) {
            return json_decode($setting["value"], true);
        }

        return null;
    }
}
if (!function_exists("formated_price")) {
    function formated_price($price)
    {
        $setting = Setting::where("key", "info")->first()["value"];
        $setting = json_decode($setting, true);
        if (isset($setting["currency"])) {
            cache()->put("currency", $setting["currency"]);
        }
        return $price . " " . cache()->get("currency");
    }
}

if (!function_exists("get_Packeges")) {

    function get_Packeges()
    {
        return $testsWithoutPackages = Test::has('tests')->get();
    }
}

if (!function_exists("get_Categoryes")) {

    function get_Categoryes()
    {
        return Category::take(20)->get();
    }
}




if (!function_exists("encryptWithPasscode")) {
    function encryptWithPasscode($value)
    {
        $secret_key = 'expertlab@123';
        $secret_iv = 'dollersign!123';
        $output = false;
        $encrypt_method = "AES-256-CBC";
        $key = hash( 'sha256', $secret_key );
        $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
        $output = base64_encode( openssl_encrypt( $value, $encrypt_method, $key, 0, $iv ) );
        return $output;
    }
}

if (!function_exists("decryptWithPasscode")) {
    function decryptWithPasscode($encryptedValue)
    {
        $secret_key = 'expertlab@123';
        $secret_iv = 'dollersign!123';
        $output = false;
        $encrypt_method = "AES-256-CBC";
        $key = hash( 'sha256', $secret_key );
        $iv = substr( hash( 'sha256', $secret_iv ), 0, 16 );
        $output = openssl_decrypt( base64_decode( $encryptedValue ), $encrypt_method, $key, 0, $iv );
        return $output;
    }
}
