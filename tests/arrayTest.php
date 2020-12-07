<?php
use Tester\Assert;

require '../vendor/autoload.php';  # načtení Composer autoloaderu
Tester\Environment::setup();               # inicializace Nette Tester

$stack = [];
Assert::same(0, count($stack));   # očekáváme, že count() vrátí nulu

$stack[] = 'foo';
Assert::same(1, count($stack));   # očekáváme, že count() vrátí jedničku
Assert::contains('foo', $stack);  # ověříme, že $stack obsahuje položku 'foo'
?>