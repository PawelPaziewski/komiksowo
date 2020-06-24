<?php

namespace App\Entity;

use App\Repository\ComicRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ComicRepository::class)
 */
class Comic
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $title;

    /**
     * @ORM\Column(type="datetime")
     */
    private $uploadedDate;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="comics")
     * @ORM\JoinColumn(nullable=false)
     */
    private $user;


    /**
     * @ORM\Column(type="string", length=255)
     */
    private $filename;

    /**
     * @ORM\Column(type="integer")
     */
    private $numOfLikes;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, inversedBy="likes")
     */
    private $likesBy;

    public function __construct()
    {
        $this->likes = new ArrayCollection();
        $this->likesBy = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getUploadedDate(): ?\DateTimeInterface
    {
        return $this->uploadedDate;
    }

    public function setUploadedDate(\DateTimeInterface $uploadedDate): self
    {
        $this->uploadedDate = $uploadedDate;

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }


    public function getFilename(): ?string
    {
        return $this->filename;
    }

    public function setFilename(string $filename): self
    {
        $this->filename = $filename;

        return $this;
    }

    public function getNumOfLikes(): ?int
    {
        return $this->numOfLikes;
    }

    public function setNumOfLikes(int $numOfLikes): self
    {
        $this->numOfLikes = $numOfLikes;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getLikesBy(): Collection
    {
        return $this->likesBy;
    }

    public function addLikesBy(User $likesBy): self
    {
        if (!$this->likesBy->contains($likesBy)) {
            $this->likesBy[] = $likesBy;
            $this->numOfLikes++;
        }

        return $this;
    }

    public function removeLikesBy(User $likesBy): self
    {
        if ($this->likesBy->contains($likesBy)) {
            $this->likesBy->removeElement($likesBy);
            $this->numOfLikes--;
        }

        return $this;
    }
}
