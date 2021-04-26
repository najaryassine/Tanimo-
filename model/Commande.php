<?php

/**
 * Class Commande
 */
class Commande
{
    private ?int $id_cmd = null;
    private ?int $id_art = null;
    private ?int $qte = null;
    private ?float $prix = null;
    private ?int $id_btq = null;
    private ?int $id_user = null;

    /**
     * Commande constructor.
     * @param int|null $id_art
     * @param int|null $qte
     * @param float|null $prix
     * @param int|null $id_btq
     * @param int|null $id_user
     */
    public function __construct(?int $id_art, ?int $qte, ?float $prix, ?int $id_btq, ?int $id_user)
    {
        $this->id_art = $id_art;
        $this->qte = $qte;
        $this->prix = $prix;
        $this->id_btq = $id_btq;
        $this->id_user = $id_user;
    }

    /**
     * @return int|null
     */
    public function getIdCmd(): ?int
    {
        return $this->id_cmd;
    }

    /**
     * @param int|null $id_cmd
     */
    public function setIdCmd(?int $id_cmd): void
    {
        $this->id_cmd = $id_cmd;
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
     * @return int|null
     */
    public function getQte(): ?int
    {
        return $this->qte;
    }

    /**
     * @param int|null $qte
     */
    public function setQte(?int $qte): void
    {
        $this->qte = $qte;
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
     * @return int|null
     */
    public function getIdBtq(): ?int
    {
        return $this->id_btq;
    }

    /**
     * @param int|null $id_btq
     */
    public function setIdBtq(?int $id_btq): void
    {
        $this->id_btq = $id_btq;
    }

    /**
     * @return int|null
     */
    public function getIdUser(): ?int
    {
        return $this->id_user;
    }

    /**
     * @param int|null $id_user
     */
    public function setIdUser(?int $id_user): void
    {
        $this->id_user = $id_user;
    }
}