<?php
require_once ("Node.php");
require_once ("Stack.php");
require_once ("Queue.php");

$jhon = new Node("Jhon");
$pepito = new Node("Pepito");
$july = new Node("July");
$alex = new Node("Alex");

$stack = new Stack();
$stack->push($jhon);
$stack->push($pepito);
$stack->push($july);
$stack->push($alex);

$queue = new Queue();
$queue->add($jhon);
$queue->add(new Node("Pepito"));
$queue->add(new Node("July"));
$queue->add($alex);

echo "Peek de Queue: " . $queue->peek(). "<br>";
echo "Se elimino a: ". $queue->poll() . "<br>";
echo "Peek de Queue: " . $queue->peek(). "<br>";
echo "--------------------------------------------------------" . "<br>";
echo "Peek de Stack " . $stack->peek() . "<br>";
echo "Se elimino a: ". $stack->pop() . "<br>";
echo "Peek de Stack " . $stack->peek() . "<br>";
