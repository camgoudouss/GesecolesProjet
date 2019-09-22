<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TABECOLESRepository")
 */
class TABECOLES
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $codeecole;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $nomecole;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $nomabrege;

    /**
     * @ORM\Column(type="string", length=80, nullable=true)
     */
    private $adresseecole;

    /**
     * @ORM\Column(type="string", length=80)
     */
    private $localite;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $loccomune;

    /**
     * @ORM\Column(type="string", length=3, nullable=true)
     */
    private $locpays;

    /**
     * @ORM\Column(type="string", length=4, nullable=true)
     */
    private $locquartier;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $statusecole;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbreleve;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $telephecole;

    /**
     * @ORM\Column(type="string", length=30, nullable=true)
     */
    private $bpecole;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $logoecole;

    /**
     * @ORM\Column(type="string", length=10, nullable=true)
     */
    private $sessionecole;

    /**
     * @ORM\Column(type="string", length=6)
     */
    private $cleecolesess;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $noterefeval;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $imgfdpage;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $titresign1;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $titresign2;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $nomsign1;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $nomsign2;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nmatricdeb;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nmatricfin;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numdernrecu;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $cbqecole;

    /**
     * @ORM\Column(type="string", length=5, nullable=true)
     */
    private $cagbqecole;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $numcpte;

    /**
     * @ORM\Column(type="string", length=2, nullable=true)
     */
    private $clerib;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $idrytmeaca;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $typecole;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $adressemail;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $adressesite;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeecole(): ?string
    {
        return $this->codeecole;
    }

    public function setCodeecole(string $codeecole): self
    {
        $this->codeecole = $codeecole;

        return $this;
    }

    public function getNomecole(): ?string
    {
        return $this->nomecole;
    }

    public function setNomecole(string $nomecole): self
    {
        $this->nomecole = $nomecole;

        return $this;
    }

    public function getNomabrege(): ?string
    {
        return $this->nomabrege;
    }

    public function setNomabrege(?string $nomabrege): self
    {
        $this->nomabrege = $nomabrege;

        return $this;
    }

    public function getAdresseecole(): ?string
    {
        return $this->adresseecole;
    }

    public function setAdresseecole(?string $adresseecole): self
    {
        $this->adresseecole = $adresseecole;

        return $this;
    }

    public function getLocalite(): ?string
    {
        return $this->localite;
    }

    public function setLocalite(string $localite): self
    {
        $this->localite = $localite;

        return $this;
    }

    public function getLoccomune(): ?string
    {
        return $this->loccomune;
    }

    public function setLoccomune(string $loccomune): self
    {
        $this->loccomune = $loccomune;

        return $this;
    }

    public function getLocpays(): ?string
    {
        return $this->locpays;
    }

    public function setLocpays(?string $locpays): self
    {
        $this->locpays = $locpays;

        return $this;
    }

    public function getLocquartier(): ?string
    {
        return $this->locquartier;
    }

    public function setLocquartier(?string $locquartier): self
    {
        $this->locquartier = $locquartier;

        return $this;
    }

    public function getStatusecole(): ?string
    {
        return $this->statusecole;
    }

    public function setStatusecole(?string $statusecole): self
    {
        $this->statusecole = $statusecole;

        return $this;
    }

    public function getNbreleve(): ?int
    {
        return $this->nbreleve;
    }

    public function setNbreleve(?int $nbreleve): self
    {
        $this->nbreleve = $nbreleve;

        return $this;
    }

    public function getTelephecole(): ?string
    {
        return $this->telephecole;
    }

    public function setTelephecole(?string $telephecole): self
    {
        $this->telephecole = $telephecole;

        return $this;
    }

    public function getBpecole(): ?string
    {
        return $this->bpecole;
    }

    public function setBpecole(?string $bpecole): self
    {
        $this->bpecole = $bpecole;

        return $this;
    }

    public function getLogoecole(): ?string
    {
        return $this->logoecole;
    }

    public function setLogoecole(?string $logoecole): self
    {
        $this->logoecole = $logoecole;

        return $this;
    }

    public function getSessionecole(): ?string
    {
        return $this->sessionecole;
    }

    public function setSessionecole(?string $sessionecole): self
    {
        $this->sessionecole = $sessionecole;

        return $this;
    }

    public function getCleecolesess(): ?string
    {
        return $this->cleecolesess;
    }

    public function setCleecolesess(string $cleecolesess): self
    {
        $this->cleecolesess = $cleecolesess;

        return $this;
    }

    public function getNoterefeval(): ?int
    {
        return $this->noterefeval;
    }

    public function setNoterefeval(?int $noterefeval): self
    {
        $this->noterefeval = $noterefeval;

        return $this;
    }

    public function getImgfdpage(): ?string
    {
        return $this->imgfdpage;
    }

    public function setImgfdpage(?string $imgfdpage): self
    {
        $this->imgfdpage = $imgfdpage;

        return $this;
    }

    public function getTitresign1(): ?string
    {
        return $this->titresign1;
    }

    public function setTitresign1(?string $titresign1): self
    {
        $this->titresign1 = $titresign1;

        return $this;
    }

    public function getTitresign2(): ?string
    {
        return $this->titresign2;
    }

    public function setTitresign2(?string $titresign2): self
    {
        $this->titresign2 = $titresign2;

        return $this;
    }

    public function getNomsign1(): ?string
    {
        return $this->nomsign1;
    }

    public function setNomsign1(?string $nomsign1): self
    {
        $this->nomsign1 = $nomsign1;

        return $this;
    }

    public function getNomsign2(): ?string
    {
        return $this->nomsign2;
    }

    public function setNomsign2(?string $nomsign2): self
    {
        $this->nomsign2 = $nomsign2;

        return $this;
    }

    public function getNmatricdeb(): ?int
    {
        return $this->nmatricdeb;
    }

    public function setNmatricdeb(?int $nmatricdeb): self
    {
        $this->nmatricdeb = $nmatricdeb;

        return $this;
    }

    public function getNmatricfin(): ?int
    {
        return $this->nmatricfin;
    }

    public function setNmatricfin(?int $nmatricfin): self
    {
        $this->nmatricfin = $nmatricfin;

        return $this;
    }

    public function getNumdernrecu(): ?int
    {
        return $this->numdernrecu;
    }

    public function setNumdernrecu(?int $numdernrecu): self
    {
        $this->numdernrecu = $numdernrecu;

        return $this;
    }

    public function getCbqecole(): ?string
    {
        return $this->cbqecole;
    }

    public function setCbqecole(?string $cbqecole): self
    {
        $this->cbqecole = $cbqecole;

        return $this;
    }

    public function getCagbqecole(): ?string
    {
        return $this->cagbqecole;
    }

    public function setCagbqecole(?string $cagbqecole): self
    {
        $this->cagbqecole = $cagbqecole;

        return $this;
    }

    public function getNumcpte(): ?string
    {
        return $this->numcpte;
    }

    public function setNumcpte(string $numcpte): self
    {
        $this->numcpte = $numcpte;

        return $this;
    }

    public function getClerib(): ?string
    {
        return $this->clerib;
    }

    public function setClerib(?string $clerib): self
    {
        $this->clerib = $clerib;

        return $this;
    }

    public function getIdrytmeaca(): ?string
    {
        return $this->idrytmeaca;
    }

    public function setIdrytmeaca(?string $idrytmeaca): self
    {
        $this->idrytmeaca = $idrytmeaca;

        return $this;
    }

    public function getTypecole(): ?string
    {
        return $this->typecole;
    }

    public function setTypecole(?string $typecole): self
    {
        $this->typecole = $typecole;

        return $this;
    }

    public function getAdressemail(): ?string
    {
        return $this->adressemail;
    }

    public function setAdressemail(?string $adressemail): self
    {
        $this->adressemail = $adressemail;

        return $this;
    }

    public function getAdressesite(): ?string
    {
        return $this->adressesite;
    }

    public function setAdressesite(?string $adressesite): self
    {
        $this->adressesite = $adressesite;

        return $this;
    }
}
