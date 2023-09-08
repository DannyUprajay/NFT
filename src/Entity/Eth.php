<?php

namespace App\Entity;

use App\Repository\EthRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: EthRepository::class)]
class Eth
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $valueETH = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $dateMaj = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getValueETH(): ?int
    {
        return $this->valueETH;
    }

    public function setValueETH(int $valueETH): static
    {
        $this->valueETH = $valueETH;

        return $this;
    }

    public function getDateMaj(): ?\DateTimeInterface
    {
        return $this->dateMaj;
    }

    public function setDateMaj(\DateTimeInterface $dateMaj): static
    {
        $this->dateMaj = $dateMaj;

        return $this;
    }
}
