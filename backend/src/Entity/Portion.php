<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Portion
 *
 * @ApiResource
 * @ORM\Table(name="portions")
 * @ORM\Entity
 */
class Portion
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
     * @ORM\Column(name="id_products", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idProducts;

    /**
     * @var int
     *
     * @ORM\Column(name="id_meals", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idMeals;

    /**
     * @var int|null
     *
     * @ORM\Column(name="id_measures", type="integer", nullable=true, options={"default"="NULL","unsigned"=true})
     */
    private $idMeasures;

    /**
     * @var float|null
     *
     * @ORM\Column(name="quantity", type="float", precision=5, scale=2, nullable=true, options={"default"=NULL})
     */
    private $quantity;

    /**
     * @var int
     *
     * @ORM\Column(name="grams", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $grams;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdProducts(): ?int
    {
        return $this->idProducts;
    }

    public function setIdProducts(int $idProducts): self
    {
        $this->idProducts = $idProducts;

        return $this;
    }

    public function getIdMeals(): ?int
    {
        return $this->idMeals;
    }

    public function setIdMeals(int $idMeals): self
    {
        $this->idMeals = $idMeals;

        return $this;
    }

    public function getIdMeasures(): ?int
    {
        return $this->idMeasures;
    }

    public function setIdMeasures(?int $idMeasures): self
    {
        $this->idMeasures = $idMeasures;

        return $this;
    }

    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    public function setQuantity(?float $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }

    public function getGrams(): ?int
    {
        return $this->grams;
    }

    public function setGrams(int $grams): self
    {
        $this->grams = $grams;

        return $this;
    }


}
