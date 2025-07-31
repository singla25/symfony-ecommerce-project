<?php

namespace App\Entity\Shop;

use App\Entity\LoginAndSignUp\AbstractEntity;
use App\Repository\Shop\CartRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CartRepository::class)]
class Cart extends AbstractEntity
{
    #[ORM\Column]
    private ?string $userid = null;

    #[ORM\Column]
    private ?string $productid = null;

    #[ORM\Column(length: 255)]
    private ?string $productName = null;

    #[ORM\Column(length: 255)]
    private ?float $price = null;

    #[ORM\Column(length: 255)]
    private ?string $size = null;

    #[ORM\Column(length: 255)]
    private ?int $quantity = null;

    #[ORM\Column(length: 255)]
    private ?float $subTotal = null;

    #[ORM\Column(length: 255)]
    private ?string $createdAt = null;

    public function getUserid(): ?string
    {
        return $this->userid;
    }

    public function setUserid(string $userid): static
    {
        $this->userid = $userid;

        return $this;
    }

    public function getProductid(): ?string
    {
        return $this->productid;
    }

    public function setProductid(string $productid): static
    {
        $this->productid = $productid;

        return $this;
    }

    public function getProductName(): ?string
    {
        return $this->productName;
    }

    public function setProductName(string $productName): static
    {
        $this->productName = $productName;

        return $this;
    }

    public function getSize(): ?string
    {
        return $this->size;
    }

    public function setSize(?string $size): void
    {
        $this->size = $size;
    }

    public function getQuantity(): ?int
    {
        return $this->quantity;
    }

    public function setQuantity(?int $quantity): void
    {
        $this->quantity = $quantity;
    }

    public function getPrice(): ?float
    {
        return $this->price;
    }

    public function setPrice(?float $price): void
    {
        $this->price = $price;
    }

    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    public function getSubTotal(): ?float
    {
        return $this->subTotal;
    }

    public function setSubTotal(?float $subTotal): void
    {
        $this->subTotal = $subTotal;
    }
}
