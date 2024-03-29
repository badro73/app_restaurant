<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HoraireRepository")
 */
class Horaire
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer")
     */
    private $idrestaurant;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $lundi;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $mardi;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $mercredi;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $jeudi;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $vendredi;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $samedi;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $dimanche;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdrestaurant(): ?int
    {
        return $this->idrestaurant;
    }

    public function setIdrestaurant(int $idrestaurant): self
    {
        $this->idrestaurant = $idrestaurant;

        return $this;
    }

    public function getLundi(): ?string
    {
        return $this->lundi;
    }

    public function setLundi(string $lundi): self
    {
        $this->lundi = $lundi;

        return $this;
    }

    public function getMardi(): ?string
    {
        return $this->mardi;
    }

    public function setMardi(string $mardi): self
    {
        $this->mardi = $mardi;

        return $this;
    }

    public function getMercredi(): ?string
    {
        return $this->mercredi;
    }

    public function setMercredi(string $mercredi): self
    {
        $this->mercredi = $mercredi;

        return $this;
    }

    public function getJeudi(): ?string
    {
        return $this->jeudi;
    }

    public function setJeudi(string $jeudi): self
    {
        $this->jeudi = $jeudi;

        return $this;
    }

    public function getVendredi(): ?string
    {
        return $this->vendredi;
    }

    public function setVendredi(string $vendredi): self
    {
        $this->vendredi = $vendredi;

        return $this;
    }

    public function getSamedi(): ?string
    {
        return $this->samedi;
    }

    public function setSamedi(string $samedi): self
    {
        $this->samedi = $samedi;

        return $this;
    }

    public function getDimanche(): ?string
    {
        return $this->dimanche;
    }

    public function setDimanche(string $dimanche): self
    {
        $this->dimanche = $dimanche;

        return $this;
    }
}
