<?php

namespace App\Entity;

use App\Repository\ResultatRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;


/**
 * @ORM\Entity(repositoryClass=ResultatRepository::class)
 */
class Resultat
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255, nullable=false)
     *
     * @Assert\Choice({"or", "argent", "bronze"}
    )
     *
     */
    private $medaille;

    /**
     * @ORM\Column(type="integer", nullable=true)
     *           @Assert\Range(
     *      min = 1,
     *      max = 15,
     *      notInRangeMessage = "The rang value must be within  {{ min }} and {{ max }} ",
     * )
     */
    private $rang;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $temps;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $ecart;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $vitesse;

    /**
     * @ORM\Column(type="float", nullable=false)
     *       @Assert\Range(
     *      min = 30,
     *      max = 90,
     *      notInRangeMessage = "A Poids value must be within  {{ min }} and {{ max }} kg",)
     */
    private $poids;

    /**
     * @ORM\Column(type="integer")
     */
    private $nombre_participants;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_athlete;

    /**
     * @ORM\Column(type="integer")
     */
    private $id_epreuve;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMedaille(): ?string
    {
        return $this->medaille;
    }

    public function setMedaille(?string $medaille): self
    {
        $this->medaille = $medaille;

        return $this;
    }

    public function getRang(): ?int
    {
        return $this->rang;
    }

    public function setRang(?int $rang): self
    {
        $this->rang = $rang;

        return $this;
    }

    public function getTemps(): ?float
    {
        return $this->temps;
    }

    public function setTemps(?float $temps): self
    {
        $this->temps = $temps;

        return $this;
    }

    public function getEcart(): ?float
    {
        return $this->ecart;
    }

    public function setEcart(?float $ecart): self
    {
        $this->ecart = $ecart;

        return $this;
    }

    public function getVitesse(): ?float
    {
        return $this->vitesse;
    }

    public function setVitesse(?float $vitesse): self
    {
        $this->vitesse = $vitesse;

        return $this;
    }

    public function getPoids(): ?float
    {
        return $this->poids;
    }

    public function setPoids(?float $poids): self
    {
        $this->poids = $poids;

        return $this;
    }

    public function getNombreParticipants(): ?int
    {
        return $this->nombre_participants;
    }

    public function setNombreParticipants(int $nombre_participants): self
    {
        $this->nombre_participants = $nombre_participants;

        return $this;
    }

    public function getIdAthlete(): ?int
    {
        return $this->id_athlete;
    }

    public function setIdAthlete(int $id_athlete): self
    {
        $this->id_athlete = $id_athlete;

        return $this;
    }

    public function getIdEpreuve(): ?int
    {
        return $this->id_epreuve;
    }

    public function setIdEpreuve(int $id_epreuve): self
    {
        $this->id_epreuve = $id_epreuve;

        return $this;
    }
}
