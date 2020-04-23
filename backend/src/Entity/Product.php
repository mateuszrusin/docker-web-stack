<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ApiResource
 * @ORM\Entity(repositoryClass="App\Repository\ProductRepository")
 */
class Product
{
    /**
     * @ORM\Column(name="id", type="integer", length=11, nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private ?int $id;

    /**
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     * @Assert\NotBlank
     */
    public string $name;

    /**
     * @ORM\Column(name="kcal", type="integer", length=11, nullable=false)
     * @Assert\NotBlank
     */
    public int $kcal;

    /**
     * @ORM\Column(name="protein", type="float", scale=1, nullable=false)
     * @Assert\NotBlank
     */
    public float $protein;

    /**
     * @ORM\Column(name="fat", type="float", scale=1, nullable=false)
     * @Assert\NotBlank
     */
    public float $fat;

    /**
     * @ORM\Column(name="carbo", type="float", scale=1, nullable=false)
     * @Assert\NotBlank
     */
    public float $carbo;

    
    public function getId(): ?int
    {
        return $this->id;
    }
}
