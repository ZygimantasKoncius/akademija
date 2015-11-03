<?php

include 'Bidder.php';
include 'Article.php';
include 'Bid.php';
use Bidder\Bidder;
use Article\Article;
use Bid\Bid;

$bidder1=new Bidder("Bert","Rose","rose@phoroneus.com","female");
$bidder2=new Bidder("Rush", "Tommy","rush@chronos.com","male");

$article = new Article("Gold Watch","10","New with tags: A brand-new, unused, and unworn item (including handmade items) in the original packaging
    (such as the original box or bag) and/or with the original tags attached", '2015-10-26 15:45');

$bid1 = new Bid($bidder1, "12",'2015-10-25 12:22');
$bid2 = new Bid($bidder2, "13",'2014-10-26 9:13');
$bid3 = new Bid($bidder1, "15.50",'2015-10-26 15:00');

echo "<dl>";
echo "<dt>{$article->getArticle()}</dt>
    <dd><p>{$article->getAnotation()}</p>
    <p>Price: {$article->getPrice()}&euro;</p>
    <p>Ended {$article->getDate()}</p>
    <p><ul>
        <li>{$bid3->getBidder()->getFirstName()}; {$bid3->getValue()}&euro;; {$bid3->getDate()}; Sold;</li>
        <li>{$bid2->getBidder()->getFirstName()}; {$bid2->getValue()}&euro;; {$bid2->getDate()}</li>
        <li>{$bid1->getBidder()->getFirstName()}; {$bid1->getValue()}&euro;; {$bid1->getDate()}</li>
    </ul></p>
    </dd>";

$bidder1->setFirstName("Miguel")
    ->setLastName("Howard")
    ->setMail("howard@aurigae.com")
    ->setGender("male");

$article->setArticle("Linen Jacket")
    ->setAnotation("It has a smooth chalk stripe pattern which gives the suit a refined look. The 6 buttons of his double
    breasted jacket are all buttoned up with the exception of one, it adds a casual touch to an elegant look.<br>
    The jacket is the same length all around, it has vents at either side, there's a pocket on either side and there's
    a breast pocket which contains a stylish pocket square.")
    ->setPrice("135")
    ->setDate("2015-10-29 12:00");

$bid1->setBidder($bidder1)
    ->setValue("140")
    ->setDate('2015-10-28 13:58');

$bid2->setBidder($bidder2)
    ->setValue("155")
    ->setDate('2015-10-29 9:13');

echo "<dt>{$article->getArticle()}</dt>
    <dd><p>{$article->getAnotation()}</p>
    <p>Price: {$article->getPrice()}&euro;</p>
    <p>Ended {$article->getDate()}</p>
    <p><ul>
        <li>{$bid2->getBidder()->getFirstName()}; {$bid2->getValue()}&euro;; {$bid2->getDate()}</li>
        <li>{$bid1->getBidder()->getFirstName()}; {$bid1->getValue()}&euro;; {$bid1->getDate()}</li>
    </ul></p>
    </dd>";
echo "</dl>";

$bidder1->setFirstName("Zygimantas")
    ->setLastName("Koncius")
    ->setMail("bla@gmail.com")
    ->setGender("male");

$article->setArticle("Kebab")
    ->setAnotation("Extremely tasty and fresh")
    ->setPrice("50")
    ->setDate("2015-10-29 22:00");

$bid1->setBidder($bidder1)
    ->setValue("60")
    ->setDate('2015-10-28 13:58');

$bid2->setBidder($bidder2)
    ->setValue("70")
    ->setDate('2015-10-29 9:13');

$bid3->setBidder($bidder1)
    ->setValue("100")
    ->setDate('2015-10-29 21:59');

echo "<dl>";
echo "<dt>{$article->getArticle()}</dt>
    <dd><p>{$article->getAnotation()}</p>
    <p>Price: {$article->getPrice()}&euro;</p>
    <p>Ended {$article->getDate()}</p>
    <p><ul>
        <li>{$bid3->getBidder()->getFirstName()}; {$bid3->getValue()}&euro;; {$bid3->getDate()}; Sold;</li>
        <li>{$bid2->getBidder()->getFirstName()}; {$bid2->getValue()}&euro;; {$bid2->getDate()}</li>
        <li>{$bid1->getBidder()->getFirstName()}; {$bid1->getValue()}&euro;; {$bid1->getDate()}</li>
    </ul></p>
    </dd>";

$bidder1->setFirstName("Zygimantas")
    ->setLastName("Koncius")
    ->setMail("bla@gmail.com")
    ->setGender("male");

$article->setArticle("PC")
    ->setAnotation("Extremely powerful, light and slim")
    ->setPrice("420")
    ->setDate("2015-10-31 23:59");

$bid1->setBidder($bidder1)
    ->setValue("500")
    ->setDate('2015-10-30 15:45');

$bid2->setBidder($bidder2)
    ->setValue("570")
    ->setDate('2015-10-30 23:00');

$bid3->setBidder($bidder1)
    ->setValue("600")
    ->setDate('2015-10-31 23:58');

echo "<dt>{$article->getArticle()}</dt>
    <dd><p>{$article->getAnotation()}</p>
    <p>Price: {$article->getPrice()}&euro;</p>
    <p>Ended {$article->getDate()}</p>
    <p><ul>
        <li>{$bid3->getBidder()->getFirstName()}; {$bid3->getValue()}&euro;; {$bid3->getDate()}; Sold;</li>
        <li>{$bid2->getBidder()->getFirstName()}; {$bid2->getValue()}&euro;; {$bid2->getDate()}</li>
        <li>{$bid1->getBidder()->getFirstName()}; {$bid1->getValue()}&euro;; {$bid1->getDate()}</li>
    </ul></p>
    </dd>";

$bidder1->setFirstName("Zygimantas")
    ->setLastName("Koncius")
    ->setMail("bla@gmail.com")
    ->setGender("male");

$article->setArticle("Lamborghini Aventador")
    ->setAnotation("Vroom!!!")
    ->setPrice("4000000")
    ->setDate("2015-11-09 12:00");

$bid1->setBidder($bidder1)
    ->setValue("4200000")
    ->setDate('2015-11-01 15:45');

$bid2->setBidder($bidder2)
    ->setValue("5700000")
    ->setDate('2015-11-01 23:00');

echo "<dt>{$article->getArticle()}</dt>
    <dd><p>{$article->getAnotation()}</p>
    <p>Price: {$article->getPrice()}&euro;</p>
    <p>Ended {$article->getDate()}</p>
    <p><ul>
        <li>{$bid2->getBidder()->getFirstName()}; {$bid2->getValue()}&euro;; {$bid2->getDate()}</li>
        <li>{$bid1->getBidder()->getFirstName()}; {$bid1->getValue()}&euro;; {$bid1->getDate()}</li>
    </ul></p>
    </dd>";
echo "</dl>";