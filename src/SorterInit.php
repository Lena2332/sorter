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

class SorterInit
{
    private $engine;

    public function __construct(SorterInterface $sorter, string $array_type = null)
    {
        $this->engine = $sorter;
    }

    public function sortInit(array $arr, string $flag): array
    {
        return $this->engine->sort($arr, $flag);
    }
}
