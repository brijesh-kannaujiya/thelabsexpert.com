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
        $passcode = 'T!#&HEB67@#$';
        $key = substr(hash('sha256', $passcode), 0, 32);
        $cipher = 'AES-256-CBC';

        $encryptedValue = openssl_encrypt($value, $cipher, $key, 0, $iv = random_bytes(16));
        return base64_encode($iv . $encryptedValue);
    }
}


if (!function_exists("decryptWithPasscode")) {

    function decryptWithPasscode($encryptedValue)
    {
        $passcode = 'T!#&HEB67@#$';
        $key = substr(hash('sha256', $passcode), 0, 32);
        $cipher = 'AES-256-CBC';

        $decodedValue = base64_decode($encryptedValue);
        $iv = substr($decodedValue, 0, 16);
        $encryptedValue = substr($decodedValue, 16);

        return openssl_decrypt($encryptedValue, $cipher, $key, 0, $iv);
    }
}
