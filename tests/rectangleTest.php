<?php
use Tester\Assert;

require '/bootstrap.php';
require '../src/rectangle.php';

// obecný oblong
$rect = new Rectangle(10, 20);
Assert::same(200, $rect->getArea());  # ověříme očekávané výsledky
Assert::false($rect->isSquare());
?>