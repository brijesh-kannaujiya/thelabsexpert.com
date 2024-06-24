<?php

use App\Models\Category;
use App\Models\Package;
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
        return Package::with(['tests'])->take(20)->get();
    }
}

if (!function_exists("get_Categoryes")) {

    function get_Categoryes()
    {
        return Category::take(20)->get();
    }
}
