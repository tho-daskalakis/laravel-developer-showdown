<?php

namespace utils;

use Illuminate\Support\Arr;

class UserTimezone {
    public static function getRandomUserTimezone() {
        return Arr::random(['CET', 'CST', 'GMT+1']);
    }
}
