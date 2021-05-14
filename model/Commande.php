<?php

/**
 * Class Commande
 */
class Commande
{
    private ?int $id_cmd = null;
    private ?float $prix = null;
    private ?string $etat = null;
    private ?int $id_btq = null;
    private ?int $id_user = null;

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
<<<<<<< HEAD
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
    public function getEtat(): ?string
    {
        return $this->etat;
    }

    /**
     * @param string|null $etat
     */
    public function setEtat(?string $etat): void
    {
        $this->etat = $etat;
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

    /**
     * Commande constructor.
     * @param float|null $prix
     * @param string|null $etat
     * @param int|null $id_btq
     * @param int|null $id_user
     */
    public function __construct(?float $prix, ?string $etat, ?int $id_btq, ?int $id_user)
    {
        $this->prix = $prix;
        $this->etat = $etat;
        $this->id_btq = $id_btq;
        $this->id_user = $id_user;
    }

}