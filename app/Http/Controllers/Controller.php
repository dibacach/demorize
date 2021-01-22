<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function generate_deck($level){
        return array(
                0=>array(
                    0  => 'ion ion-android-bicycle',
                    1  => 'ion ion-ios-book',
                    2  => 'ion ion-ios-basketball',
                    3  => 'ion ion-ios-bell',
                    4  => 'ion ion-beer',
                    5  => 'ion ion-social-apple',
                ),
                1=>array(
                    0  => 'ion ion-android-camera',
                    1  => 'ion ion-ios-star',
                    2  => 'ion ion-cloud',
                    3  => 'ion ion-android-person',
                    4  => 'ion ion-android-plane',
                    5  => 'ion ion-ios-musical-notes',
                ),
                2=>array(
                    0 => 'ion ion-woman',
                    1 => 'ion ion-scissors',
                    2 => 'ion ion-android-camera',
                    3 => 'ion ion-tshirt',
                    4 => 'ion ion-android-car',
                    5 => 'ion ion-ios-book',
                ),
                3=>array(
                    0 => 'ion ion-ios-sunny',
                    1 => 'ion ion-beer',
                    2 => 'ion ion-android-bicycle',
                    3 => 'ion ion-woman',
                    4 => 'ion ion-android-car',
                    5 => 'ion ion-android-plane',
                ),
                4=>array(
                    0  => 'ion ion-scissors',
                    1 => 'ion ion-lightbulb',
                    2 => 'ion ion-ios-star',
                    3 => 'ion ion-tshirt',
                    4=> 'ion ion-ios-bell',
                    5 => 'ion ion-ios-basketball',
                ),
                5=>array(
                    0  => 'ion ion-social-apple',
                    1 => 'ion ion-android-person',
                    2 => 'ion ion-ios-sunny',
                    3 => 'ion ion-cloud',
                    4 => 'ion ion-ios-musical-notes',
                    5  => 'ion ion-lightbulb',
                ),
            );
    }
}
