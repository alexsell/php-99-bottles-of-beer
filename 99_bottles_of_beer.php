<?php

/**
 * "99 Bottles of Beer" lyrics generator
 * CLI script version written with simplicity in mind.
 * See http://www.99-bottles-of-beer.net/lyrics.html for details.
 * Required PHP version: 5.4+
 *
 * @author Alexander Sellmeier
 * @version 1.0.0
 */

extract([
    'bottles' => 99,
    'actions' => [['Go to the store', 'Take one down'], ['buy some more', 'pass it around']],
    'where' => 'on the wall' ]);

$beer = function($bottles) {
    $bottles = $bottles < 0 ? 99 : $bottles;
    return sprintf('%s bottle%s of beer', ($bottles ? $bottles : 'no more'), ($bottles === 1 ? '' : 's'));
};

do {
    printf("%s $where, %s.\n%s and %s, %s $where.\n\n",
        ucfirst($beer($bottles)),
        $beer($bottles),
        $actions[0][$bottles > 0],
        $actions[1][$bottles > 0],
        $beer(--$bottles)
    );
} while ($bottles >= 0);
