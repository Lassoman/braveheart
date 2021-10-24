<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\CoachingRepository;
use Symfony\Component\HttpFoundation\File\File;



/**
 * @ORM\Entity(repositoryClass=CoachingRepository::class)
 */
class Coaching
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="integer")
     */
    private $price;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description;

    /**
     * @ORM\ManyToOne(targetEntity=Category::class, inversedBy="coachings")
     */
    private $category;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $minutes;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $intensite;
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name_b;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description_b;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name_c;
    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $description_c;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image_b;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $image_c;





    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUppercase(): string
    {
        return strtoupper($this->name);
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

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->category;
    }

    public function setCategory(?Category $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getMinutes(): ?string
    {
        return $this->minutes;
    }

    public function setMinutes(?string $minutes): self
    {
        $this->minutes = $minutes;

        return $this;
    }

    public function getIntensite(): ?string
    {
        return $this->intensite;
    }

    public function setIntensite(?string $intensite): self
    {
        $this->intensite = $intensite;

        return $this;
    }

    public function getDescriptionB(): ?string
    {
        return $this->description_b;
    }

    public function setDescriptionB(?string $description_b): self
    {
        $this->description_b = $description_b;

        return $this;
    }

    public function getDescriptionC(): ?string
    {
        return $this->description_c;
    }

    public function setDescriptionC(string $description_c): self
    {
        $this->description_c = $description_c;

        return $this;
    }

    public function getNameB(): ?string
    {
        return $this->name_b;
    }

    public function setNameB(?string $name_b): self
    {
        $this->name_b = $name_b;

        return $this;
    }

    public function getNameC(): ?string
    {
        return $this->name_c;
    }

    public function setNameC(?string $name_c): self
    {
        $this->name_c = $name_c;

        return $this;
    }

    public function getImageB(): ?string
    {
        return $this->image_b;
    }

    public function setImageB(?string $image_b): self
    {
        $this->image_b = $image_b;

        return $this;
    }

    public function getImageC(): ?string
    {
        return $this->image_c;
    }

    public function setImageC(?string $image_c): self
    {
        $this->image_c = $image_c;

        return $this;
    }
}
