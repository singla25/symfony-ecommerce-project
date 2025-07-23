<?php

namespace App\Entity;

use App\Repository\NewLetterRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: NewLetterRepository::class)]
class NewLetter extends AbstractEntity
{
    #[ORM\Column(length: 255)]
    private ?string $email = null;

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): static
    {
        $this->email = $email;

        return $this;
    }
}
