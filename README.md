Sorter Library
===============

You can sort a numeric array or string array in increase or decrease.



Installation
------------

For used this library just execute the following command

```
$ composer require lena2332/sorter
```

Usage
------------

If you want sort your array increase, use following code:

```
//Regular sorter
$sorter = new \Lk\Sorter\SorterInit(new IncreaseSorter());

//You can add flag for string array or number array
$sorter = new \Lk\Sorter\SorterInit(new IncreaseSorter(), 'string');

//You can change flag 'string' for string array or 'number' for number array
$sorter->setFlag('string');

// Initialisation array
$sorter->sortInit($array);

//For change sorter use 
$sorter->setSorter(new DecreaseSorter());



```


Copyright (c) 2019, Elena Kupriiets
