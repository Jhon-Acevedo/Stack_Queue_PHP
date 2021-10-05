<?php
require_once ("aList.php");
require_once ("Node.php");

class Stack extends aList
{
    public function push(Node $node)
    {
        parent::addAtStart($node);
    }

    public function pop(): Node
    {
        return parent::getFirstAndDelete();
    }

    public function peek(): Node
    {
        return parent::getFirst();
    }
}


