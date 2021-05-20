<?php


class Artcom
{
    private ?int $id_art = null;
    private ?int $id_cmd = null;
    private ?int $qte = null;

    /**
     * Artcom constructor.
     * @param int|null $id_art
     * @param int|null $id_cmd
     * @param int|null $qte
     */
    public function __construct(?int $id_art, ?int $id_cmd, ?int $qte)
    {
        $this->id_art = $id_art;
        $this->id_cmd = $id_cmd;
        $this->qte = $qte;
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
}