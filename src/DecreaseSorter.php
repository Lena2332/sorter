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
    const STRING_FLAG = \SORT_STRING;
    const NUMBER_FLAG = \SORT_NUMERIC;
    const REGULAR_FLAG = \SORT_REGULAR;

    public function sort(array $array, string $flag): array
    {
        switch ($flag) {
            case 'string':
                \arsort($array, self::STRING_FLAG);
                break;
            case 'number':
                \arsort($array, self::NUMBER_FLAG);
                break;
            default:
                \arsort($array, self::REGULAR_FLAG);
        }

        return $array;
    }
}
