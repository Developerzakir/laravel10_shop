<?php

namespace App\Helpers;

class ShippingCharge
{
    //To set static shipping charge...
    public static function getShippingCharge()
    {
        $data = array(
            [
                'name' => 'ঢাকার ভিতরে',
                'charge_amount' => 60
            ],
            [
                'name' => 'ঢাকার বাহিরে',
                'charge_amount' => 130
            ]
        );

        return $data;
    }
}
