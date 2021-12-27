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

      public static function getErrorColorForm($data,$error) {
          if(!$error) {
              if($data != '') {
                  return 'is-valid';
              }
              return '';
          }else{
              return 'is-invalid';
          }
      }

}
