<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FparamappliRepository")
 */
class Fparamappli
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $Nominstitut;

    /**
     * @ORM\Column(type="string", length=8)
     */
    private $Nomadminst;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $Passwdadmin;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $Sessref;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNominstitut(): ?string
    {
        return $this->Nominstitut;
    }

    public function setNominstitut(?string $Nominstitut): self
    {
        $this->Nominstitut = $Nominstitut;

        return $this;
    }

    public function getNomadminst(): ?string
    {
        return $this->Nomadminst;
    }

    public function setNomadminst(string $Nomadminst): self
    {
        $this->Nomadminst = $Nomadminst;

        return $this;
    }

    public function getPasswdadmin(): ?string
    {
        return $this->Passwdadmin;
    }

    public function setPasswdadmin(?string $Passwdadmin): self
    {
        $this->Passwdadmin = $Passwdadmin;

        return $this;
    }

    public function getSessref(): ?string
    {
        return $this->Sessref;
    }

    public function setSessref(?string $Sessref): self
    {
        $this->Sessref = $Sessref;

        return $this;
    }
}