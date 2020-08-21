<?php


class Stack
{
    private $stack;
    private $limit;

    public function __construct($limit)
    {
        $this->stack = [];
        $this->limit = $limit;
    }

    public function push($obj)
    {
        array_push($this->stack, $obj);
    }

    public function pop()
    {
        if (!$this->isEmpty()) {
            array_pop($this->stack);
        } else {
            echo 'Is empty';
        }
    }

    public function top()
    {
        return $this->stack[count($this->stack) - 1];
    }

    public function isEmpty()
    {
        return (count($this->stack) == 0);
    }
}