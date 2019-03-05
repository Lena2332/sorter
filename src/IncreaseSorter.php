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
    const STRING_FLAG = \SORT_STRING;
    const NUMBER_FLAG = \SORT_NUMERIC;
    const REGULAR_FLAG = \SORT_REGULAR;

    public function sort(array $a, string $flag): array
    {
        switch ($flag) {
            case 'string':
                \asort($a, self::STRING_FLAG);
                break;
            case 'number':
                \asort($a, self::NUMBER_FLAG);
                break;
            default:
                \asort($a, self::REGULAR_FLAG);
        }

        return $a;
    }
}
