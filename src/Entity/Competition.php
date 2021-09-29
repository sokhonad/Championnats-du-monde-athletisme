<?php

namespace App\Entity;

use App\Repository\CompetitionRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=CompetitionRepository::class)
 */
class Competition
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
    private $nom_competition;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pays_competition;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville_competition;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $lieu_competition;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Date
     * @var string A "Y-m-d" formatted value
     */
    private $date_competition;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCompetition(): ?string
    {
        return $this->nom_competition;
    }

    public function setNomCompetition(string $nom_competition): self
    {
        $this->nom_competition = $nom_competition;

        return $this;
    }

    public function getPaysCompetition(): ?string
    {
        return $this->pays_competition;
    }

    public function setPaysCompetition(string $pays_competition): self
    {
        $this->pays_competition = $pays_competition;

        return $this;
    }

    public function getVilleCompetition(): ?string
    {
        return $this->ville_competition;
    }

    public function setVilleCompetition(string $ville_competition): self
    {
        $this->ville_competition = $ville_competition;

        return $this;
    }

    public function getLieuCompetition(): ?string
    {
        return $this->lieu_competition;
    }

    public function setLieuCompetition(string $lieu_competition): self
    {
        $this->lieu_competition = $lieu_competition;

        return $this;
    }

    public function getDateCompetition(): ?string
    {
        return $this->date_competition;
    }

    public function setDateCompetition(string $date_competition): self
    {
        $this->date_competition = $date_competition;

        return $this;
    }
}
