<?php

namespace App\Entity;

use App\Repository\AthleteRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass=AthleteRepository::class)
 */
class Athlete
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
    private $nom_athlete;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $prenom_athlete;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $sexe_athlete;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nationalite_athlete;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $code_pays_athlete;

    /**
     * @ORM\Column(type="float", nullable=false)
     *     *       @Assert\Range(
     *      min = 1,
     *      max = 2,
     *      notInRangeMessage = "The taille value must be within  {{ min }} and {{ max }} mettres",
     * )
     */
    private $taille_athlete;

    /**
     * @ORM\Column(type="float", nullable=false)
     *       @Assert\Range(
     *      min = 30,
     *      max = 90,
     *      notInRangeMessage = "A Poids value must be within  {{ min }} and {{ max }} kg",
     * )
     */
    private $poids_athlete;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)

     */
    private $ville_athlete;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomAthlete(): ?string
    {
        return $this->nom_athlete;
    }

    public function setNomAthlete(string $nom_athlete): self
    {
        $this->nom_athlete = $nom_athlete;

        return $this;
    }

    public function getPrenomAthlete(): ?string
    {
        return $this->prenom_athlete;
    }

    public function setPrenomAthlete(string $prenom_athlete): self
    {
        $this->prenom_athlete = $prenom_athlete;

        return $this;
    }

    public function getSexeAthlete(): ?string
    {
        return $this->sexe_athlete;
    }

    public function setSexeAthlete(?string $sexe_athlete): self
    {
        $this->sexe_athlete = $sexe_athlete;

        return $this;
    }

    public function getNationaliteAthlete(): ?string
    {
        return $this->nationalite_athlete;
    }

    public function setNationaliteAthlete(string $nationalite_athlete): self
    {
        $this->nationalite_athlete = $nationalite_athlete;

        return $this;
    }

    public function getCodePaysAthlete(): ?string
    {
        return $this->code_pays_athlete;
    }

    public function setCodePaysAthlete(?string $code_pays_athlete): self
    {
        $this->code_pays_athlete = $code_pays_athlete;

        return $this;
    }

    public function getTailleAthlete(): ?float
    {
        return $this->taille_athlete;
    }

    public function setTailleAthlete(?float $taille_athlete): self
    {
        $this->taille_athlete = $taille_athlete;

        return $this;
    }

    public function getPoidsAthlete(): ?float
    {
        return $this->poids_athlete;
    }

    public function setPoidsAthlete(?float $poids_athlete): self
    {
        $this->poids_athlete = $poids_athlete;

        return $this;
    }

    public function getVilleAthlete(): ?string
    {
        return $this->ville_athlete;
    }

    public function setVilleAthlete(?string $ville_athlete): self
    {
        $this->ville_athlete = $ville_athlete;

        return $this;
    }
}
