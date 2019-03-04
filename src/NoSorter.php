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

class NoSorter implements SorterInterface
{
    public function sortIncrease($a): array
    {
        return $a;
    }

    public function sortDecrease($a): array
    {
        return $a;
    }
}
