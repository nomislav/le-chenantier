<?php

namespace App\Entity;

use App\Repository\MapRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=MapRepository::class)
 */
class Map
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isValided;

    /**
     * @ORM\Column(type="date")
     */
    private $start;

    /**
     * @ORM\Column(type="date")
     */
    private $end;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $place_no;

    /**
     * @ORM\Column(type="boolean")
     */
    private $electricity;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $available;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $child;

    /**
     * @ORM\Column(type="integer")
     */
    private $adult;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $tent;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $caravan;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIsValided(): ?bool
    {
        return $this->isValided;
    }

    public function setIsValided(bool $isValided): self
    {
        $this->isValided = $isValided;

        return $this;
    }

    public function getStart(): ?\DateTimeInterface
    {
        return $this->start;
    }

    public function setStart(\DateTimeInterface $start): self
    {
        $this->start = $start;

        return $this;
    }

    public function getEnd(): ?\DateTimeInterface
    {
        return $this->end;
    }

    public function setEnd(\DateTimeInterface $end): self
    {
        $this->end = $end;

        return $this;
    }

    public function getPlaceNo(): ?int
    {
        return $this->place_no;
    }

    public function setPlaceNo(?int $place_no): self
    {
        $this->place_no = $place_no;

        return $this;
    }

    public function getElectricity(): ?bool
    {
        return $this->electricity;
    }

    public function setElectricity(bool $electricity): self
    {
        $this->electricity = $electricity;

        return $this;
    }

    public function getAvailable(): ?bool
    {
        return $this->available;
    }

    public function setAvailable(?bool $available): self
    {
        $this->available = $available;

        return $this;
    }

    public function getChild(): ?int
    {
        return $this->child;
    }

    public function setChild(?int $child): self
    {
        $this->child = $child;

        return $this;
    }

    public function getAdult(): ?int
    {
        return $this->adult;
    }

    public function setAdult(int $adult): self
    {
        $this->adult = $adult;

        return $this;
    }

    public function getTent(): ?bool
    {
        return $this->tent;
    }

    public function setTent(?bool $tent): self
    {
        $this->tent = $tent;

        return $this;
    }

    public function getCaravan(): ?bool
    {
        return $this->caravan;
    }

    public function setCaravan(?bool $caravan): self
    {
        $this->caravan = $caravan;

        return $this;
    }

}
