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

interface SorterInterface
{
    /**
     * @param array $a
     * @param string $b flag switchs sorter for numeric or string
     *
     * @return sorted array $a
     */
    public function sort(array $a, string $b): array;
}
