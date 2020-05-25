<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * Products
 *
 * @ApiResource
 * @ORM\Table(name="products")
 * @ORM\Entity
 */
class Product
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
     * @ORM\Column(name="id_categories", type="integer", nullable=false, options={"unsigned"=true})
     */
    private $idCategories;

    /**
     * @var Manufacturer
     *
     * @ORM\ManyToOne(targetEntity="Manufacturer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="id_manufacturers", referencedColumnName="id")
     * })
     *
     */
    private $manufacturer;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nazwa", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $nazwa;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nazwa2", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $nazwa2;

    /**
     * @var int
     *
     * @ORM\Column(name="kalorie", type="smallint", nullable=false, options={"unsigned"=true})
     */
    private $kalorie;

    /**
     * @var float
     *
     * @ORM\Column(name="tluszcze", type="float", precision=6, scale=1, nullable=false)
     */
    private $tluszcze;

    /**
     * @var float
     *
     * @ORM\Column(name="cholesterol", type="float", precision=6, scale=1, nullable=false)
     */
    private $cholesterol;

    /**
     * @var float
     *
     * @ORM\Column(name="sod", type="float", precision=6, scale=1, nullable=false)
     */
    private $sod;

    /**
     * @var float
     *
     * @ORM\Column(name="blonnik", type="float", precision=6, scale=1, nullable=false)
     */
    private $blonnik;

    /**
     * @var float
     *
     * @ORM\Column(name="weglowodany", type="float", precision=6, scale=1, nullable=false)
     */
    private $weglowodany;

    /**
     * @var float
     *
     * @ORM\Column(name="bialko", type="float", precision=6, scale=1, nullable=false)
     */
    private $bialko;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getIdCategories(): ?int
    {
        return $this->idCategories;
    }

    public function setIdCategories(int $idCategories): self
    {
        $this->idCategories = $idCategories;

        return $this;
    }

    public function getNazwa(): ?string
    {
        return $this->nazwa;
    }

    public function setNazwa(?string $nazwa): self
    {
        $this->nazwa = $nazwa;

        return $this;
    }

    public function getNazwa2(): ?string
    {
        return $this->nazwa2;
    }

    public function setNazwa2(?string $nazwa2): self
    {
        $this->nazwa2 = $nazwa2;

        return $this;
    }

    public function getKalorie(): ?int
    {
        return $this->kalorie;
    }

    public function setKalorie(int $kalorie): self
    {
        $this->kalorie = $kalorie;

        return $this;
    }

    public function getTluszcze(): ?float
    {
        return $this->tluszcze;
    }

    public function setTluszcze(float $tluszcze): self
    {
        $this->tluszcze = $tluszcze;

        return $this;
    }

    public function getCholesterol(): ?float
    {
        return $this->cholesterol;
    }

    public function setCholesterol(float $cholesterol): self
    {
        $this->cholesterol = $cholesterol;

        return $this;
    }

    public function getSod(): ?float
    {
        return $this->sod;
    }

    public function setSod(float $sod): self
    {
        $this->sod = $sod;

        return $this;
    }

    public function getBlonnik(): ?float
    {
        return $this->blonnik;
    }

    public function setBlonnik(float $blonnik): self
    {
        $this->blonnik = $blonnik;

        return $this;
    }

    public function getWeglowodany(): ?float
    {
        return $this->weglowodany;
    }

    public function setWeglowodany(float $weglowodany): self
    {
        $this->weglowodany = $weglowodany;

        return $this;
    }

    public function getBialko(): ?float
    {
        return $this->bialko;
    }

    public function setBialko(float $bialko): self
    {
        $this->bialko = $bialko;

        return $this;
    }

    public function getManufacturer(): ?Manufacturer
    {
        return $this->manufacturer;
    }

    public function setManufacturer(?Manufacturer $manufacturer): self
    {
        $this->manufacturer = $manufacturer;

        return $this;
    }


}
