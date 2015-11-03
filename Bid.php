<?php
/**
 * Created by PhpStorm.
 * User: deadman
 * Date: 15.11.3
 * Time: 20.39
 */

namespace Bid;


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