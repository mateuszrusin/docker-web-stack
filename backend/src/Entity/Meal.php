<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Meal
 *
 * @ApiResource
 * @ORM\Table(name="meals")
 * @ORM\Entity
 */
class Meal
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="id_sets", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idSets;

    /**
     * @var int
     *
     * @ORM\Column(name="type", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $type;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdSets(): ?int
    {
        return $this->idSets;
    }

    public function setIdSets(int $idSets): self
    {
        $this->idSets = $idSets;

        return $this;
    }

    public function getType(): ?int
    {
        return $this->type;
    }

    public function setType(int $type): self
    {
        $this->type = $type;

        return $this;
    }


}
