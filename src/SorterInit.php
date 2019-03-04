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

class SorterInit
{
    private $engine;

    public function __construct(SorterInterface $sorter)
    {
        $this->engine = $sorter;
    }

    public function sortDecreaseInit(array $arr): array
    {
        return $this->engine->sortDecrease($arr);
    }

    public function sortIncreaseInit(array $arr): array
    {
        return $this->engine->sortIncrease($arr);
    }
}
