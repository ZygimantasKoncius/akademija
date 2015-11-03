<?php
/**
 * Created by PhpStorm.
 * User: deadman
 * Date: 15.11.3
 * Time: 20.37
 */

namespace Article;


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