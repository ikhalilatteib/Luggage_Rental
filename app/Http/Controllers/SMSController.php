<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Nexmo\Laravel\Facade\Nexmo;

class SMSController extends Controller
{


    public function sendPassword()
    {
        try {


           Nexmo::message()->send([
                'to' => '905397091201',
                'from' => 'Luggage Rental',
                'text' => 'Rental Deneme mesaji'
            ]);

        } catch (\Exception $error) {
            echo 'bir hata oluştu' . $error->getMessage();
        }
    }
}
