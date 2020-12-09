<?php
use Tester\Assert;

require 'bootstrap.php';
require '../src/rectangle.php';

// obecný oblong
$rect = new Rectangle(10, 20);
$rect1 = new Rectangle(10, 20);

$rect2 = new Rectangle(0, 0);
$rect3 = null;

/* To samé jako PHP operátor ===, tedy 200 === $rect->getArea()  */
Assert::same(200, $rect->getArea());

/* Jako same, ale  se ignoruje identita objektů, pořadí dvojic klíčů ⇒ hodnota v polích a marginálně odlišná desetinná čísla. */
Assert::equal($rect, $rect1);

/* $rect->isSquare() musí být false, tedy $rect->isSquare() === false */
Assert::false($rect->isSquare());

/* $rect->getArea() musí být pravdivý, tedy splní podmínku if ($rect->getArea()) ....*/
Assert::truthy($rect->getArea());

/* $rect->getArea() musí být Not a Number */
//Assert::nan($rect->getArea());

/* $$rect->getTypeOblon() musí vyhovět vzoru '%a?%obdélník%a?%' */
Assert::match('%a?%4tverec%a?%', $rect->getTypeOblon());

/* $rect->getTypeOblon(), musí obsahovat podřetězec "obdélník" */
Assert::contains("obdélnik", $rect->getTypeOblon());

/* $rect3 musí být null, tedy $value === null */
Assert::null($rect3);

/* $rect->getArea() musí typ integer. */
Assert::type('int', $rect->getArea());

/*Počet prvků ve [12,13,14] musí být 3. Tedy to samé jako count([12,13,14]) === 3.*/
Assert::count(3, [12,13,14]);
?>