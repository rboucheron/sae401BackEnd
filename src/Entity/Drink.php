<?php

class Drink extends Model
{
    private $id;
    private $name;
    private $image;
    private $price;
    private $savor; 

    public function __construct()
    {
        $this->table = __CLASS__;
        parent::__construct();
    }
    public function getId()
    {
        return $this->id;
    }
    public function setId(int $id)
    {
        $this->id = $id;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function getImage()
    {
        return $this->image;
    }
    public function setImage(string $image)
    {
        $this->image = $image;
    }
    public function getPrice()
    {
        return $this->price;
    }
    public function setPrice(float $price)
    {
        $this->price = $price;
    }
      
    public function getSavor()
    {
        return $this-> savor;
    }
    public function setSavor(float $savor)
    {
        $this->price = $savor;
    }
    
    public function findDrink(){
        return $this->find('id', $this->id);
         
    }
}