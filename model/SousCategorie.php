<?php

/**
 * Class SousCategorie
 */
class SousCategorie
{
    private ?int $id_sous_cat= null;
    private ?string $nom = null;
    private ?int $id_cat= null;

    /**
     * SousCategorie constructor.
     * @param string|null $nom
     * @param int|null $id_cat
     */
    public function __construct(?string $nom, ?int $id_cat)
    {
        $this->nom = $nom;
        $this->id_cat = $id_cat;
    }

    /**
     * @return int|null
     */
    public function getIdSousCat(): ?int
    {
        return $this->id_sous_cat;
    }

    /**
     * @param int|null $id_sous_cat
     */
    public function setIdSousCat(?int $id_sous_cat): void
    {
        $this->id_sous_cat = $id_sous_cat;
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
}