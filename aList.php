<?php
abstract class aList
{
    private Node $first;

    protected function addElement(Node $node)
    {
        if (isset($this->first)) {
            $actual = $this->first;
            while ($actual->getNext() != null) {
                $actual = $actual->getNext();
            }
            $actual->setNext($node);
        } else {
            $this->first = $node;
        }
    }

    protected function addAtStart(Node $node)
    {
        if(isset($this->first)){
            $node->setNext($this->first);
        }
        $this->first = $node;
    }

    protected function getFirst(): Node
    {
        return $this->first;
    }

    public function isEmpty(): bool
    {
        if (isset($this->first)) {
            return TRUE;
        }else{
            return FALSE;
        }
    }

    private function delete(string $getData)
    {
        if ($this->first->getData() == ($getData)) {
            $this->first = $this->first->getNext();
        } else {
            $base = $this->searchPrevious($getData);
            $base->setNext($base->getNext()->getNext());
        }
    }

    protected function getFirstAndDelete(): Node
    {
        $result = $this->first;
        $this->delete($this->first->getData());
        return $result;
    }

    private function searchPrevious(string $getData): ?Node
    {
        $actual = $this->first;
        while ($actual->getNext() != null) {
            if ($actual->getNext()->getData() == ($getData)) {
                return $actual;
            }
            $actual = $actual->getNext();
        }
        return null;
    }
}

?>