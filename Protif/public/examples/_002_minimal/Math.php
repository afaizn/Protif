<?php
class Math
{
    /**
     * @param int $n1
     * @param int $n2
     *
     * @return int
     */
    function add($n1 = 1, $n2 = 1)
    {
        return $n1 + $n2;
    }

    /**
     * @param int $n1
     * @param int $n2
     *
     * @return array
     */
    function multiply($n1, $n2)
    {
        echo 'mamama';
        return ($n1 * $n2 *$n2);
        
    }

    /**
     * @url GET sum/*
     */
    function sum()
    {
        return array_sum(func_get_args());
    }
}