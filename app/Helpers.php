<?php

use App\Models\Setting;

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
