<?php

namespace App\Entity\Shop;

use App\Entity\LoginAndSignUp\AbstractEntity;
use App\Repository\Shop\ProductRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
class Product extends AbstractEntity
{
    #[ORM\Column(length: 255)]
    private ?string $brandName = null;

    #[ORM\Column(length: 255)]
    private ?string $productName = null;

    #[ORM\Column(length: 255)]
    private ?string $productType = null;

    #[ORM\Column(length: 255)]
    private ?string $productDetail = null;

    #[ORM\Column(type: 'json')]
    private array $size = [];

    #[ORM\Column(type: 'float')]
    private ?float $price = null;

    #[ORM\Column(length: 255)]
    private ?string $rating = null;

    #[ORM\Column(length: 255)]
    private ?string $photo = null;

    #[ORM\Column(length: 255)]
    private ?string $gender = null;

    public function getBrandName(): ?string
    {
        return $this->brandName;
    }

    public function setBrandName(?string $brandName): void
    {
        $this->brandName = $brandName;
    }

    public function getProductName(): ?string
    {
        return $this->productName;
    }

    public function setProductName(?string $productName): void
    {
        $this->productName = $productName;
    }

    public function getProductType(): ?string
    {
        return $this->productType;
    }

    public function setProductType(?string $productType): void
    {
        $this->productType = $productType;
    }

    public function getProductDetail(): ?string
    {
        return $this->productDetail;
    }

    public function setProductDetail(?string $productDetail): void
    {
        $this->productDetail = $productDetail;
    }

    public function getSize(): array
    {
        return $this->size ?? [];
    }

    public function setSize(array $size): void
    {
        $this->size = $size;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): void
    {
        $this->price = $price;
    }

    public function getRating(): ?string
    {
        return $this->rating;
    }

    public function setRating(?string $rating): void
    {
        $this->rating = $rating;
    }

    public function getPhoto(): ?string
    {
        return $this->photo;
    }

    public function setPhoto(?string $photo): void
    {
        $this->photo = $photo;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): void
    {
        $this->gender = $gender;
    }
}

