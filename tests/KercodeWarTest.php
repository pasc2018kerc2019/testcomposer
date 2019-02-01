<?php
require './src/KerCodeWar.php';
use PHPUnit\Framework\TestCase;

class KercodeWarTest extends Testcase
{
    const WEEKDAYS = [
        1=>'Sunday',
        2=>'Monday',
        3=>'Tuesday',
        4=>'Wednesday',
        5=>'Thursday',
        6=>'Friday',
        7=>'Saturday',
    ];
    const FRENCH_WEEKDAYS = [
        1=>'Dimanche',
        2=>'Lundi',
        3=>'Mardi',
        4=>'Mercredi',
        5=>'Jeudi',
        6=>'Vendredi',
        7=>'Samedi',
    ];
    public function testWeekdaysInFrench()
    {
        foreach (self::FRENCH_WEEKDAYS as $key => $value) {
            $this->assertEquals($value, KercodeWar::weekday($key,'fr'));
        }
    }

    public function testWeekdays()
    {
        foreach (self::WEEKDAYS as $key => $value) {
            $this->assertEquals($value, KercodeWar::weekday($key));
        }
    }
    /*public function testWeekdays()
    {
        $this->assertequals('Sunday', KercodeWar::weekday(1));
        $this->assertequals('Monday', KercodeWar::weekday(2));
        $this->assertequals('Tuesday', KercodeWar::weekday(3));
        $this->assertequals('Wednesday', KercodeWar::weekday(4));
        $this->assertequals('Thursday', KercodeWar::weekday(5));
        $this->assertequals('Friday', KercodeWar::weekday(6));
        $this->assertequals('Saturday', KercodeWar::weekday(7));

    }

    public function testWithInvalidParam()
    {
        $this->assertEquals(
            'Wrong,please enter a number between 1 à 7',
            KerCodeWar::Weekday('plop')

        );
    }
    public function testWeekend()
    {
        $this->assertequals(true, KercodeWar::isweekend(1));
        $this->assertequals(false, KercodeWar::isweekend(2));
        $this->assertequals(false, KercodeWar::isweekend(3));
        $this->assertequals(false, KercodeWar::isweekend(4));
        $this->assertequals(false, KercodeWar::isweekend(5));
        $this->assertequals(false, KercodeWar::isweekend(6));
        $this->assertequals(true, KercodeWar::isweekend(7));

    }*/
    public function testNumberInWeekend()
    {
        
        foreach(self::WEEKDAYS as $key => $value) {
            $bool = ($value === 'Sunday' or  $value ==='Saturday');
            $this->assertEquals($bool, KercodeWar::isweekend($key));
        }
    }

    
}