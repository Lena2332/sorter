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
 * Class DecreaseSorter
 * Used for array with numbers
 *
 * @author Elena Kupriiets <box.32.lena@gmail.com>
 */
class DecreaseSorter implements SorterInterface
{
    public function sort(array $a, string $flag): array
    {
        switch ($flag) {
            case 'string':
                \arsort($a, \SORT_STRING);
                break;
            case 'number':
                \arsort($a, \SORT_NUMERIC);
                break;
            default:
                \arsort($a, \SORT_REGULAR);
        }

        return $a;
    }
}
