<?php

/**
 * Class Categorie
 */
class Categorie
{
    private ?int $id_cat= null;
    private ?string $nom = null;

    /**
     * Categorie constructor.
     * @param string|null $nom
     */
    public function __construct(?string $nom)
    {
        $this->nom = $nom;
    }

    /**
     * @return int|null
     */
    public function getIdCat(): ?int
    {
        return $this->id_cat;
    }

    /**
     * @param int|null $id_cat
     */
    public function setIdCat(?int $id_cat): void
    {
        $this->id_cat = $id_cat;
    }

    /**
     * @return string|null
     */
    public function getNom(): ?string
    {
        return $this->nom;
    }

    /**
     * @param string|null $nom
     */
    public function setNom(?string $nom): void
    {
        $this->nom = $nom;
    }

}