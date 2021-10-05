<?php
class Node
{
    private string $data;
    private Node $next;

    function __construct(string $data, Node $next = null)
    {
        $this->data = $data;
        if (isset($next))
            $this->next = $next;
    }

    function getNext(): ?Node
    {
        if (isset($this->next))
            return $this->next;
        return null;
    }

    function getData(): string
    {
        return $this->data;
    }

    function setNext(Node $next)
    {
        $this->next = $next;
    }

    function __toString()
    {
        return "Node { data " . $this->data . "}";
    }
}
?>