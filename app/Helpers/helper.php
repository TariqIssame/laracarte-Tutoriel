<?php

namespace App\Helpers;

use Illuminate\Support\Facades\Route;


class Helper {

      public static function page_title($title) {

          $base_title = config('app.name')."-Liste of artisans";
          if($title == ''){
              return $base_title;
          }
          return $title.' | '.$base_title;

      }

      public static function set_active_route($route) {

          return Route::is($route) ? 'active' : '';

      }

}
