<?php
use Tester\Assert;

require 'bootstrap.php';
require '../src/rectangle.php';

// obecný oblong
$rect = new Rectangle(10, 20);
$rect1 = new Rectangle(10, 20);
Assert::same(200, $rect->getArea());  # ověříme očekávané výsledky
Assert::equal($rect, $rect1);
Assert::false($rect->isSquare());
Assert::truthy($rect->getArea());
Assert::nan($rect->getArea());
Assert::match('Test%a?%', 'Test01');
?>