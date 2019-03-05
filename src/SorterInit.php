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
    private $flag;

    public function __construct(SorterInterface $sorter, string $flag = null)
    {
        $this->engine = $sorter;
        $this->flag = $flag;
    }
    
    public function sortInit(array $array): array
    {
        return $this->engine->sort($array, $this->flag);
    }

    /**
     * @param SorterInterface $sorter
     * Set for choose type of sorter
     */
    public function setSorter(SorterInterface $sorter)
    {
        $this->engine = $sorter;
    }

    /**
     * @param string $flag
     * Set flag for choose string or number array you want sort
     */
    public function setFlag(string $flag)
    {
        $this->flag = $flag;
    }
}
