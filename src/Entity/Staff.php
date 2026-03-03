<?php

namespace App\Entity;

use App\Repository\StaffRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: StaffRepository::class)]
class Staff
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $nom = null;

    #[ORM\Column(length: 255)]
    private ?string $poste = null;

    #[ORM\Column(length: 255)]
    private ?string $numtel = null;

    // ✅ RELATION CORRECTE
    #[ORM\OneToMany(mappedBy: 'staff', targetEntity: Reservation::class)]
    private Collection $reservations;

    public function __construct()
    {
        $this->reservations = new ArrayCollection();
    }

    public function getId(): ?int { return $this->id; }

    public function getNom(): ?string { return $this->nom; }
    public function setNom(string $nom): self { $this->nom = $nom; return $this; }

    public function getPoste(): ?string { return $this->poste; }
    public function setPoste(string $poste): self { $this->poste = $poste; return $this; }

    public function getNumtel(): ?string { return $this->numtel; }
    public function setNumtel(string $numtel): self { $this->numtel = $numtel; return $this; }

    public function getReservations(): Collection
    {
        return $this->reservations;
    }
}
