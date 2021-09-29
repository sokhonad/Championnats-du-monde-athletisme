<?php

namespace App\Entity;

use App\Repository\EpreuveRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=EpreuveRepository::class)
 */
class Epreuve
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom_epreuve;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $description;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\Date
     * @var string A "Y-m-d" formatted value
     */
    private $heure_epreuve;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     *  @Assert\Choice({"or", "argent", "bronze"})
     */
    private $medaille_epreuve;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_competition;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_categorie;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomEpreuve(): ?string
    {
        return $this->nom_epreuve;
    }

    public function setNomEpreuve(?string $nom_epreuve): self
    {
        $this->nom_epreuve = $nom_epreuve;

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

    public function getHeureEpreuve(): ?string
    {
        return $this->heure_epreuve;
    }

    public function setHeureEpreuve(?string $heure_epreuve): self
    {
        $this->heure_epreuve = $heure_epreuve;

        return $this;
    }

    public function getMedailleEpreuve(): ?string
    {
        return $this->medaille_epreuve;
    }

    public function setMedailleEpreuve(?string $medaille_epreuve): self
    {
        $this->medaille_epreuve = $medaille_epreuve;

        return $this;
    }

    public function getIdCompetition(): ?int
    {
        return $this->id_competition;
    }

    public function setIdCompetition(int $id_competition): self
    {
        $this->id_competition = $id_competition;

        return $this;
    }

    public function getIdCategorie(): ?int
    {
        return $this->id_categorie;
    }

    public function setIdCategorie(int $id_categorie): self
    {
        $this->id_categorie = $id_categorie;

        return $this;
    }
}
