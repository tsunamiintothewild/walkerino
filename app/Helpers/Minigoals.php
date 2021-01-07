<?php

namespace App\Helpers;

class Minigoals
{
    private static $goals = [
        ['distance' => 0, 'label' => "Let's get walking!"],
        ['distance' => 2.9, 'label' => "Distance you can see at sea level"],
        ['distance' => 73, 'label' => "Distance you can see from Snowdon"],
        ['distance' => 117, 'label' => "A lap of the M25"],
        ['distance' => 137, 'label' => "How far you travel through space in 1 second"],
        ['distance' => 220, 'label' => "Crossing of the Red Sea"],
        ['distance' => 253.5, 'label' => "The length of the London Underground"],
        ['distance' => 350, 'label' => "Furthest anyone's ever run without sleeping"],
        ['distance' => 405, 'label' => "World's longest cave"],
        ['distance' => 410, 'label' => "Length of the A1"],
        ['distance' => 477, 'label' => "Length of Camino de Santiago"],
        ['distance' => 510, 'label' => "Distance cranes can migrate in 1 day"],
        ['distance' => 559, 'label' => "Halfway across the Sahara"],
        ['distance' => 603, 'label' => "Land's End to John O'Groats by crow"],
        ['distance' => 650, 'label' => "Miles Santa travels per second"],
        ['distance' => 700, 'label' => "Furthest a lost dog has been found from home"],
        ['distance' => 736, 'label' => "Length of Italy"],
        ['distance' => 746, 'label' => "Length of Welsh coastline"],
        ['distance' => 750, 'label' => "Length of the Alps"],
        ['distance' => 874, 'label' => "Land's End to John O'Groats by car"],
        ['distance' => 932, 'label' => "Crossing of the Gobi Desert"],
        ['distance' => 990, 'label' => "A quarter of the way to the centre of the Earth"],
        ['distance' => 1000, 'label' => "Yer done"],
    ];

    public static function last(int $distance): string
    {
        foreach(self::$goals as $i => $goal) {
            if ($goal['distance'] > $distance) {
                $thisGoal = self::$goals[$i - 1];
                return $thisGoal['distance'] . ' miles: ' . $thisGoal['label'];
            }
        }
        return self::$goals[0]['label'];
    }
    
    public static function next(int $distance): string
    {
        foreach(self::$goals as $i => $goal) {
            if ($goal['distance'] > $distance) {
                $thisGoal = self::$goals[$i];
                return $thisGoal['distance'] . ' miles: ' . $thisGoal['label'];
            }
        }
        return self::$goals[0]['label'];
    }

    public static function distanceToNextGoal(float $distance): float {
        foreach(self::$goals as $i => $goal) {
            if ($goal['distance'] > $distance) {
                return $goal['distance'] - $distance;
            }
        }   
        return 0;
    }
}
