<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TabutilisateursRepository")
 * @ORM\HasLifecycleCallbacks()
 */
class Tabutilisateurs
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $utname;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $utnomcpl;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $utpasswd;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $utcodeinst;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $utidcnx;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $utidgcaisse;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $utlangue;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $utclegrp;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $utcleunique;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $datemaj;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUtname(): ?string
    {
        return $this->utname;
    }

    public function setUtname(string $utname): self
    {
        $this->utname = $utname;

        return $this;
    }

    public function getUtnomcpl(): ?string
    {
        return $this->utnomcpl;
    }

    public function setUtnomcpl(?string $utnomcpl): self
    {
        $this->utnomcpl = $utnomcpl;

        return $this;
    }

    public function getUtpasswd(): ?string
    {
        return $this->utpasswd;
    }

    public function setUtpasswd(string $utpasswd): self
    {
        $this->utpasswd = $utpasswd;

        return $this;
    }

    public function getUtcodeinst(): ?string
    {
        return $this->utcodeinst;
    }

    public function setUtcodeinst(string $utcodeinst): self
    {
        $this->utcodeinst = $utcodeinst;

        return $this;
    }

    public function getUtidcnx(): ?bool
    {
        return $this->utidcnx;
    }

    public function setUtidcnx(?bool $utidcnx): self
    {
        $this->utidcnx = $utidcnx;

        return $this;
    }

    public function getUtidgcaisse(): ?bool
    {
        return $this->utidgcaisse;
    }

    public function setUtidgcaisse(?bool $utidgcaisse): self
    {
        $this->utidgcaisse = $utidgcaisse;

        return $this;
    }

    public function getUtlangue(): ?string
    {
        return $this->utlangue;
    }

    public function setUtlangue(?string $utlangue): self
    {
        $this->utlangue = $utlangue;

        return $this;
    }

    public function getUtclegrp(): ?string
    {
        return $this->utclegrp;
    }

    public function setUtclegrp(?string $utclegrp): self
    {
        $this->utclegrp = $utclegrp;

        return $this;
    }

    public function getUtcleunique(): ?string
    {
        return $this->utcleunique;
    }

    public function setUtcleunique(string $utcleunique): self
    {
        $this->utcleunique = $utcleunique;

        return $this;
    }

    public function getDatemaj(): ?\DateTimeInterface
    {
        return $this->datemaj;
    }

    public function majDatedernmaj()
    {
        $this->setdatemaj(new \Datetime());
        return $this;
    }

}
