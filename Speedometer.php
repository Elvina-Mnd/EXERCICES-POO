<?php

Class Speedometer{

    public static function convertMilesTokm($miles):int
    { 
        return $miles / 0.6215;

    }

    public static function convertKmTomiles($km):int
    { 
        return $km / 1.609;

    }
}