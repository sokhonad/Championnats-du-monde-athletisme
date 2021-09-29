<?php

namespace App\Entity;

use App\Repository\CalendrierRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=CalendrierRepository::class)
 */
class Calendrier
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     *  @Assert\Date
     * @var string A "Y-m-d" formatted value
     *
     */
    private $edition_calendrier;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEditionCalendrier(): ?string
    {
        return $this->edition_calendrier;
    }

    public function setEditionCalendrier(string $edition_calendrier): self
    {
        $this->edition_calendrier = $edition_calendrier;

        return $this;
    }
}
