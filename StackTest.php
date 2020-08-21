<?php

include_once 'Stack.php';

$stack = new Stack(4);
$stack->push('papa');
$stack->push('mama');
$stack->push('Min');
$stack->push('Max');
$stack->pop();
$stack->pop();
$stack->pop();
$stack->pop();
$stack->isEmpty();

echo '<pre>';
print_r($stack);
