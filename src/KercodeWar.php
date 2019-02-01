<?php
use Symfony\Component\Yaml\yaml;

class KercodeWar
{

    public static function weekday($number, $lang = 'en')
    {
        if ($lang === 'fr') {
            $content = Yaml::parse(file_get_contents("fr.yml"));
        } else {
         
            $content = Yaml::parse(file_get_contents("en.yml"));
        }

        if ($number >= 1 && $number <= 7) {
            return $content['weekdays']['days'][$number - 1];
        } else {
            return $content['weekdays']['error'];
        }
    }

    /*
    public static function weekday($number, $lang='en')
    {
    if ($lang === 'fr') {
    if ($number === 1) {
    return 'Dimanche';
    }

    if ($number === 2) {
    return 'Lundi';
    }
    if ($number === 3) {
    return 'Mardi';
    }
    if ($number === 4) {
    return 'Mercredi';
    }
    if ($number === 5) {
    return 'Jeudi';
    }
    if ($number === 6) {
    return 'Vendredi';
    }
    if ($number === 7) {
    return 'Samedi';
    } else {
    return 'Wrong,please enter a number between 1 à 7';
    }
    } else {
    if ($number === 1) {
    return 'Sunday';
    }

    if ($number === 2) {
    return 'Monday';
    }
    if ($number === 3) {
    return 'Tuesday';
    }
    if ($number === 4) {
    return 'Wednesday';
    }
    if ($number === 5) {
    return 'Thursday';
    }
    if ($number === 6) {
    return 'Friday';
    }
    if ($number === 7) {
    return 'Saturday';
    } else {
    return 'Wrong,please enter a number between 1 à 7';
    }
    }
    }*/

    public static function isweekend($number)
    {
        if ($number === 1 or $number === 7) {
            return true;
        } else {
            return false;
        }
    }
}
