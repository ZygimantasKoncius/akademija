<?php
class Bidder{
    private $firstName;
    private $lastName;
    private $mail;
    private $gender;

    public function __construct($firstName,$lastName,$mail,$gender){
        $this->firstName=$firstName;
        $this->lastName=$lastName;
        $this->mail=$mail;
        $this->gender=$gender;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->mail;
    }

    /**
     * @return mixed
     */
    public function getGender()
    {
        return $this->gender;
    }

    /**
     * @param mixed $mail
     * @return Bidder
     */
    public function setMail($mail)
    {
        $this->mail = $mail;
        return $this;
    }

    /**
     * @param mixed $gender
     * @return Bidder
     */
    public function setGender($gender)
    {
        $this->gender = $gender;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getFirstName()
    {
        return $this->firstName;
    }

    /**
     * @param mixed $firstName
     * @return Bidder
     */
    public function setFirstName($firstName)
    {
        $this->firstName = $firstName;
        return $this;
    }

    /**
     * @return mixed
     */
    public function getLastName()
    {
        return $this->lastName;
    }

    /**
     * @param mixed $lastName
     * @return Bidder
     */
    public function setLastName($lastName)
    {
        $this->lastName = $lastName;
        return $this;
    }
}

$bidder1=new Bidder("Bert","Rose","rose@phoroneus.com","female");
$bidder2=new Bidder("Rush", "Tommy","rush@chronos.com","male");

class Article{
    private $article;
    private $price;
    private $anotation;
    private $date;

    public function __construct($article, $price, $anotation, $date){
        $this->article = $article;
        $this->price = $price;
        $this->anotation = $anotation;
        $this->date = $date;
    }

    /**
     * @return mixed
     */
    public function getArticle()
    {
        return $this->article;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @return mixed
     */
    public function getAnotation()
    {
        return $this->anotation;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $article
     * @return Article
     */
    public function setArticle($article)
    {
        $this->article = $article;
        return $this;
    }

    /**
     * @param mixed $price
     * @return Article
     */
    public function setPrice($price)
    {
        $this->price = $price;
        return $this;
    }

    /**
     * @param mixed $anotation
     * @return Article
     */
    public function setAnotation($anotation)
    {
        $this->anotation = $anotation;
        return $this;
    }

    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }
}

$article = new Article("Gold Watch","10","New with tags: A brand-new, unused, and unworn item (including handmade items) in the original packaging
    (such as the original box or bag) and/or with the original tags attached", '2015-10-26 15:45');

class Bid{
    private $bidder;
    private $value;
    private $date;

    public function __construct($bidder, $value, $date){
        $this->bidder=$bidder;
        $this->value=$value;
        $this->date=$date;
    }

    /**
     * @return mixed
     */
    public function getBidder()
    {
        return $this->bidder;
    }

    /**
     * @return mixed
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $bidder
     * @return Bid
     */
    public function setBidder($bidder)
    {
        $this->bidder = $bidder;
        return $this;
    }

    /**
     * @param mixed $value
     * @return Bid
     */
    public function setValue($value)
    {
        $this->value = $value;
        return $this;
    }

    /**
     * @param mixed $date
     * @return Bid
     */
    public function setDate($date)
    {
        $this->date = $date;
        return $this;
    }
}

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