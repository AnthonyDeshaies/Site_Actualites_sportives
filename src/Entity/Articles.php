<?php

namespace App\Entity;

use App\Repository\ArticlesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ArticlesRepository::class)
 */
class Articles
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
    private $titleArticle;

    /**
     * @ORM\Column(type="string", length=1000)
     */
    private $textArticle;

/**
     * @ORM\Column(type="datetime")
     */
    private $dateArticle;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photoArticle;

    /**
     * @ORM\ManyToOne(targetEntity=Sport::class, inversedBy="articles")
     */
    private $Sport;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="articles")
     */
    private $User;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitleArticle(): ?string
    {
        return $this->titleArticle;
    }

    public function setTitleArticle(string $titleArticle): self
    {
        $this->titleArticle = $titleArticle;

        return $this;
    }

    public function getTextArticle(): ?string
    {
        return $this->textArticle;
    }

    public function setTextArticle(string $textArticle): self
    {
        $this->textArticle = $textArticle;

        return $this;
    }

    public function getDateArticle(): ?\DateTimeInterface
    {
        return $this->dateArticle;
    }

    public function setDateArticle(\DateTimeInterface $dateArticle): self
    {
        $this->dateArticle = $dateArticle;

        return $this;
    }

    public function getPhotoArticle(): ?string
    {
        return $this->photoArticle;
    }

    public function setPhotoArticle(string $photoArticle): self
    {
        $this->photoArticle = $photoArticle;

        return $this;
    }

    public function getSport(): ?Sport
    {
        return $this->Sport;
    }

    public function setSport(?Sport $Sport): self
    {
        $this->Sport = $Sport;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->User;
    }

    public function setUser(?User $User): self
    {
        $this->User = $User;

        return $this;
    }
}
