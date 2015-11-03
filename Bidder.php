<?php
/**
 * Created by PhpStorm.
 * User: deadman
 * Date: 15.11.3
 * Time: 20.15
 */

namespace Bidder;


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
