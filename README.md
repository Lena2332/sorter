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
$string_sorter = new \Lk\Sorter\SorterInit(new IncreaseSorter());

// Used for sort array as string array
$string_sorter->sortInit($string_arr, 'string');

//Used for number array
$string_sorter->sortInit($number_arr, 'number');

```


Copyright (c) 2019, Elena Kupriiets
