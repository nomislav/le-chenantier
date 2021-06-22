<?php

namespace App\Entity;

use App\Repository\CritaryFormRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=CritaryFormRepository::class)
 */
class CritaryForm
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date")
     */
    private $start;

    /**
     * @ORM\Column(type="date")
     */
    private $end;

    /**
     * @ORM\Column(type="integer")
     */
    private $placeNo;

    /**
     * @ORM\Column(type="boolean")
     */
    private $electricity;

    /**
     * @ORM\Column(type="boolean")
     */
    private $available;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\LessThan(value="100", message="Le nombre d'enfant(s) doit être compris entre 0 et 100.")
     */
    private $child;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Au moins un adulte est requis.")
     * @Assert\LessThan(value="100", message="Le nombre d'adulte(s) doit être compris entre 1 et 100.")
     * @Assert\GreaterThan(value="0", message="Le nombre d'adulte(s) doit être compris entre 1 et 100.")
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

    /**
     * @var \DateTime
     */
    private $date;

    public function __construct()
    {
        $this->date = new \DateTime();
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
        return $this->placeNo;
    }

    public function setPlaceNo(int $placeNo): self
    {
        $this->placeNo = $placeNo;

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

    public function setAvailable(bool $available): self
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
