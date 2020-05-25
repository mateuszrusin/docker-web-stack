<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;

/**
 * Measure
 *
 * @ApiResource
 * @ORM\Table(name="measures")
 * @ORM\Entity
 */
class Measure
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var string|null
     *
     * @ORM\Column(name="entity", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $entity;

    /**
     * @var int
     *
     * @ORM\Column(name="value", type="smallint", nullable=false)
     */
    private $value;

    /**
     * @var string
     *
     * @ORM\Column(name="unit", type="string", length=5, nullable=false, options={"default"="g"})
     */
    private $unit = 'g';

    /**
     * @var int
     *
     * @ORM\Column(name="ord", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $ord = 0;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getEntity(): ?string
    {
        return $this->entity;
    }

    public function setEntity(?string $entity): self
    {
        $this->entity = $entity;

        return $this;
    }

    public function getValue(): ?int
    {
        return $this->value;
    }

    public function setValue(int $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getUnit(): ?string
    {
        return $this->unit;
    }

    public function setUnit(string $unit): self
    {
        $this->unit = $unit;

        return $this;
    }

    public function getOrd(): ?int
    {
        return $this->ord;
    }

    public function setOrd(int $ord): self
    {
        $this->ord = $ord;

        return $this;
    }


}
