<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TabusermoduleRepository")
 */
class Tabusermodule
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
    private $codemodule;

    /**
     * @ORM\Column(type="string", length=15)
     */
    private $utname;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $clemoduser;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodemodule(): ?string
    {
        return $this->codemodule;
    }

    public function setCodemodule(string $codemodule): self
    {
        $this->codemodule = $codemodule;

        return $this;
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

    public function getClemoduser(): ?string
    {
        return $this->clemoduser;
    }

    public function setClemoduser(string $clemoduser): self
    {
        $this->clemoduser = $clemoduser;

        return $this;
    }
}
