<?php

/**
 * Class Article
 */
class Article
{
    private ?int $id_art = null;
    private ?float $prix = null;
    private ?string $image = null;
    private ?int $sous_cat_id = null;
    private ?string $nom = null;

    /**
     * Article constructor.
     * @param float|null $prix
     * @param string|null $image
     * @param int|null $sous_cat_id
     * @param string|null $nom
     */
    public function __construct(?float $prix, ?string $image, ?int $sous_cat_id, ?string $nom)
    {
        $this->prix = $prix;
        $this->image = $image;
        $this->sous_cat_id = $sous_cat_id;
        $this->nom = $nom;
    }


    /**
     * @return int|null
     */
    public function getIdArt(): ?int
    {
        return $this->id_art;
    }

    /**
     * @param int|null $id_art
     */
    public function setIdArt(?int $id_art): void
    {
        $this->id_art = $id_art;
    }

    /**
     * @return float|null
     */
    public function getPrix(): ?float
    {
        return $this->prix;
    }

    /**
     * @param float|null $prix
     */
    public function setPrix(?float $prix): void
    {
        $this->prix = $prix;
    }

    /**
     * @return string|null
     */
    public function getImage(): ?string
    {
        return $this->image;
    }

    /**
     * @param string|null $image
     */
    public function setImage(?string $image): void
    {
        $this->image = $image;
    }

    /**
     * @return int|null
     */
    public function getSousCatId(): ?int
    {
        return $this->sous_cat_id;
    }

    /**
     * @param int|null $sous_cat_id
     */
    public function setSousCatId(?int $sous_cat_id): void
    {
        $this->sous_cat_id = $sous_cat_id;
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