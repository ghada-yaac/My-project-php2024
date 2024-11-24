<?php
class produit
{
    private $id, $libelle, $prix, $qte, $desc, $image, $promo;
    function  __construct($id, $libelle, $prix, $qte, $desc, $image, $promo)
    {
        $this->id = $id;
        $this->libelle = $libelle;
        $this->prix = $prix;
        $this->qte = $qte;
        $this->desc = $desc;
        $this->image = $image;
        $this->promo = $promo;
    }
    public function getId()
    {
        return $this->id;
    }
    public function getLibelle()
    {
        return $this->libelle;
    }
    public function setLibelle($libelle): self
    {
        $this->libelle = $libelle;

        return $this;
    }
    public function getPrix()
    {
        return $this->prix;
    }
    public function setPrix($prix): self
    {
        $this->prix = $prix;

        return $this;
    }
    public function getQte()
    {
        return $this->qte;
    }
    public function setQte($qte): self
    {
        $this->qte = $qte;

        return $this;
    }
    public function getDesc()
    {
        return $this->desc;
    }
    public function setDesc($desc): self
    {
        $this->desc = $desc;

        return $this;
    }
    public function getImage()
    {
        return $this->image;
    }
    public function setImage($image): self
    {
        $this->image = $image;

        return $this;
    }
    public function getPromo()
    {
        return $this->promo;
    }
    public function setPromo($promo): self
    {
        $this->promo = $promo;

        return $this;
    }
}
