<?php

/*
 * This file is part of the "sorter" package.
 *
 * (c) KupriietsElena <box32.lena@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Lk\Sorter;

/**
 * Class IncreaseSorter
 * Used for arrays with strings
 *
 * @author Elena Kupriiets <box.32.lena@gmail.com>
 */
class IncreaseSorter implements SorterInterface
{
    public function sort(array $a, string $flag): array
    {
        switch ($flag) {
            case 'string':
                \asort($a, \SORT_STRING);
                break;
            case 'number':
                \asort($a, \SORT_NUMERIC);
                break;
            default:
                \asort($a, \SORT_REGULAR);
        }

        return $a;
    }
}