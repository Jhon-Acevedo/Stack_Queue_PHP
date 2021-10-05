<?php
require_once ("aList.php");
require_once ("Node.php");

class Queue extends aList
{

    public function poll(): Node
    {
        return parent::getFirstAndDelete();
    }

    public function add(Node $node)
    {
        parent::addElement($node);
    }

    public function peek(): Node
    {
        return parent::getFirst();
    }

}






