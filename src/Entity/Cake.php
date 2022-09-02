<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\CakeRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CakeRepository::class)
 * @ApiResource()
 */
class Cake
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
    private $nom_cake;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photo_cake;

    /**
     * @ORM\Column(type="text")
     */
    private $description_carte;

    /**
     * @ORM\Column(type="text")
     */
    private $tips_recette;

    /**
     * @ORM\Column(type="float")
     */
    private $temps;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $difficulté;

    /**
     * @ORM\Column(type="text")
     */
    private $recette;

    /**
     * @ORM\Column(type="text")
     */
    private $video;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomCake(): ?string
    {
        return $this->nom_cake;
    }

    public function setNomCake(string $nom_cake): self
    {
        $this->nom_cake = $nom_cake;

        return $this;
    }

    public function getPhotoCake(): ?string
    {
        return $this->photo_cake;
    }

    public function setPhotoCake(string $photo_cake): self
    {
        $this->photo_cake = $photo_cake;

        return $this;
    }

    public function getDescriptionCarte(): ?string
    {
        return $this->description_carte;
    }

    public function setDescriptionCarte(string $description_carte): self
    {
        $this->description_carte = $description_carte;

        return $this;
    }

    public function getTipsRecette(): ?string
    {
        return $this->tips_recette;
    }

    public function setTipsRecette(string $tips_recette): self
    {
        $this->tips_recette = $tips_recette;

        return $this;
    }

    public function getTemps(): ?float
    {
        return $this->temps;
    }

    public function setTemps(float $temps): self
    {
        $this->temps = $temps;

        return $this;
    }

    public function getDifficulté(): ?string
    {
        return $this->difficulté;
    }

    public function setDifficulté(string $difficulté): self
    {
        $this->difficulté = $difficulté;

        return $this;
    }

    public function getRecette(): ?string
    {
        return $this->recette;
    }

    public function setRecette(string $recette): self
    {
        $this->recette = $recette;

        return $this;
    }

    public function getVideo(): ?string
    {
        return $this->video;
    }

    public function setVideo(string $video): self
    {
        $this->video = $video;

        return $this;
    }
}
