<?php

namespace App\Entity;

use App\Repository\CartRepository;
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
}
