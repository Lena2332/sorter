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

interface SorterInterface
{
    /**
     * @param array $a
     *
     * @return sorted array $b from a-z, or 1-9
     */
    public function sortIncrease(array $a): array;

    /**
     * @param array $a
     *
     * @return sorted array from z-a, or 9-1
     */
    public function sortDecrease(array $a): array;
}
