<?php

/*
 * This file is part of the "sorter" package.
 *
 * (c) KupriietsElena <box32.lena@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace App;

/**
 * Class StringSorter
 * Used for arrays with strings
 *
 * @author Elena Kupriiets <box.32.lena@gmail.com>
 */
class StringSorter implements SorterInterface
{
    public function sortIncrease($a): array
    {
        \asort($a, \SORT_STRING);

        return $a;
    }

    public function sortDecrease($a): array
    {
        \arsort($a, \SORT_STRING);

        return $a;
    }
}