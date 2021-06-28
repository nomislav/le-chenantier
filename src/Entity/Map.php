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
        $this->isValided = true;

        return $this;
    }

}
