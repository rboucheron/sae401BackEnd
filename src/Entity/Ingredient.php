<?php

class Ingredient extends Model
{
    private $id;
    private $id_box;
    private $id_savor;
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
    public function getId_box()
    {
        return $this->id_box;
    }
    public function setId_box(int $id_box)
    {
        $this->id_box = $id_box;
    }
    public function getId_savor()
    {
        return $this->id_savor;
    }
    public function setId_savor(int $id_savor)
    {
        $this->id_savor = $id_savor;
    }
    public function findIngredient()
    {
        return $this->find('id', $this->id);
    }
    public function findIngredients()
    {
        return $this->findall();
    }
    public function update()
    {
        $data = array(
            'id_box' => $this->getId_box(),
            'id_savor' => $this->getId_savor(),
        );
        $this->put($this->getId(), $data);
    }
    public function post()
    {
        $data = array(
            'id_box' => $this->getId_box(),
            'id_savor' => $this->getId_savor(),
        );
        $this->insert($data);
    }
    public function remove()
    {
        $this->delete($this->getId());
    }
    public function findBox()
    {
        return $this->find('id_box', $this->id_box);
    }
    public function findSavor()
    {
        return $this->find('id_savor', $this->id_savor);
    }
}
