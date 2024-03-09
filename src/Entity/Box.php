<?php

class box extends Model
{
    private $id;
    private $name;
    private $image;
    private $price;
    private $pieces;
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
    public function getPieces()
    {
        return $this->pieces;
    }
    public function setPieces(string $pieces)
    {
        $this->pieces = $pieces;
    }
    public function findbox()
    {
        $box = $this->find('id', $this->id);
        $composition = $this->findcomposition(); 
        array_push($box, $composition); 
        return $box; 
    }
    private function findcomposition()
    {
        include('./src/Controller/CompositionController.php');
        $composition = new CompositionController; 
        return $composition->getBox($this->id); 
    }

}
