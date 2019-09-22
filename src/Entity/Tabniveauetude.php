<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TabniveauetudeRepository")
 */
class Tabniveauetude
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
    private $codeniveau;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $codeecole;

    /**
     * @ORM\Column(type="string", length=4)
     */
    private $cleniveau;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nomniveau;

    /**
     * @ORM\Column(type="string", length=15, nullable=true)
     */
    private $nomabrege;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbreleveniv;

    /**
     * @ORM\Column(type="string", length=8)
     */
    private $clenivsession;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $refsession;

    /**
     * @ORM\Column(type="string", length=6)
     */
    private $cleinstsess;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $notereftdb;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $montinscr;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $montscolarite;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $montreinscr;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $titsignat1;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $titsignat2;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $nomsignatniv1;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $nomsignatniv2;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $titsignatniv3;

    /**
     * @ORM\Column(type="string", length=25, nullable=true)
     */
    private $titsignatniv4;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $nomsignatniv3;

    /**
     * @ORM\Column(type="string", length=60, nullable=true)
     */
    private $nomsignatniv4;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $numrecuniv;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nummatricdebniv;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nummatricfinniv;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $dernnummatricniv;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $idgano;

    /**
     * @ORM\Column(type="string", length=1, nullable=true)
     */
    private $idtypeval;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbevalniv;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbrevaltrim;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbreevalsem;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $nbrevalan;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeniveau(): ?string
    {
        return $this->codeniveau;
    }

    public function setCodeniveau(string $codeniveau): self
    {
        $this->codeniveau = $codeniveau;

        return $this;
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

    public function getCleniveau(): ?string
    {
        return $this->cleniveau;
    }

    public function setCleniveau(string $cleniveau): self
    {
        $this->cleniveau = $cleniveau;

        return $this;
    }

    public function getNomniveau(): ?string
    {
        return $this->nomniveau;
    }

    public function setNomniveau(string $nomniveau): self
    {
        $this->nomniveau = $nomniveau;

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

    public function getNbreleveniv(): ?int
    {
        return $this->nbreleveniv;
    }

    public function setNbreleveniv(?int $nbreleveniv): self
    {
        $this->nbreleveniv = $nbreleveniv;

        return $this;
    }

    public function getClenivsession(): ?string
    {
        return $this->clenivsession;
    }

    public function setClenivsession(string $clenivsession): self
    {
        $this->clenivsession = $clenivsession;

        return $this;
    }

    public function getRefsession(): ?string
    {
        return $this->refsession;
    }

    public function setRefsession(string $refsession): self
    {
        $this->refsession = $refsession;

        return $this;
    }

    public function getCleinstsess(): ?string
    {
        return $this->cleinstsess;
    }

    public function setCleinstsess(string $cleinstsess): self
    {
        $this->cleinstsess = $cleinstsess;

        return $this;
    }

    public function getNotereftdb(): ?int
    {
        return $this->notereftdb;
    }

    public function setNotereftdb(?int $notereftdb): self
    {
        $this->notereftdb = $notereftdb;

        return $this;
    }

    public function getMontinscr(): ?int
    {
        return $this->montinscr;
    }

    public function setMontinscr(?int $montinscr): self
    {
        $this->montinscr = $montinscr;

        return $this;
    }

    public function getMontscolarite(): ?int
    {
        return $this->montscolarite;
    }

    public function setMontscolarite(?int $montscolarite): self
    {
        $this->montscolarite = $montscolarite;

        return $this;
    }

    public function getMontreinscr(): ?int
    {
        return $this->montreinscr;
    }

    public function setMontreinscr(?int $montreinscr): self
    {
        $this->montreinscr = $montreinscr;

        return $this;
    }

    public function getTitsignat1(): ?string
    {
        return $this->titsignat1;
    }

    public function setTitsignat1(?string $titsignat1): self
    {
        $this->titsignat1 = $titsignat1;

        return $this;
    }

    public function getTitsignat2(): ?string
    {
        return $this->titsignat2;
    }

    public function setTitsignat2(?string $titsignat2): self
    {
        $this->titsignat2 = $titsignat2;

        return $this;
    }

    public function getNomsignatniv1(): ?string
    {
        return $this->nomsignatniv1;
    }

    public function setNomsignatniv1(?string $nomsignatniv1): self
    {
        $this->nomsignatniv1 = $nomsignatniv1;

        return $this;
    }

    public function getNomsignatniv2(): ?string
    {
        return $this->nomsignatniv2;
    }

    public function setNomsignatniv2(?string $nomsignatniv2): self
    {
        $this->nomsignatniv2 = $nomsignatniv2;

        return $this;
    }

    public function getTitsignatniv3(): ?string
    {
        return $this->titsignatniv3;
    }

    public function setTitsignatniv3(?string $titsignatniv3): self
    {
        $this->titsignatniv3 = $titsignatniv3;

        return $this;
    }

    public function getTitsignatniv4(): ?string
    {
        return $this->titsignatniv4;
    }

    public function setTitsignatniv4(?string $titsignatniv4): self
    {
        $this->titsignatniv4 = $titsignatniv4;

        return $this;
    }

    public function getNomsignatniv3(): ?string
    {
        return $this->nomsignatniv3;
    }

    public function setNomsignatniv3(?string $nomsignatniv3): self
    {
        $this->nomsignatniv3 = $nomsignatniv3;

        return $this;
    }

    public function getNomsignatniv4(): ?string
    {
        return $this->nomsignatniv4;
    }

    public function setNomsignatniv4(?string $nomsignatniv4): self
    {
        $this->nomsignatniv4 = $nomsignatniv4;

        return $this;
    }

    public function getNumrecuniv(): ?int
    {
        return $this->numrecuniv;
    }

    public function setNumrecuniv(?int $numrecuniv): self
    {
        $this->numrecuniv = $numrecuniv;

        return $this;
    }

    public function getNummatricdebniv(): ?int
    {
        return $this->nummatricdebniv;
    }

    public function setNummatricdebniv(?int $nummatricdebniv): self
    {
        $this->nummatricdebniv = $nummatricdebniv;

        return $this;
    }

    public function getNummatricfinniv(): ?int
    {
        return $this->nummatricfinniv;
    }

    public function setNummatricfinniv(?int $nummatricfinniv): self
    {
        $this->nummatricfinniv = $nummatricfinniv;

        return $this;
    }

    public function getDernnummatricniv(): ?int
    {
        return $this->dernnummatricniv;
    }

    public function setDernnummatricniv(?int $dernnummatricniv): self
    {
        $this->dernnummatricniv = $dernnummatricniv;

        return $this;
    }

    public function getIdgano(): ?string
    {
        return $this->idgano;
    }

    public function setIdgano(?string $idgano): self
    {
        $this->idgano = $idgano;

        return $this;
    }

    public function getIdtypeval(): ?string
    {
        return $this->idtypeval;
    }

    public function setIdtypeval(?string $idtypeval): self
    {
        $this->idtypeval = $idtypeval;

        return $this;
    }

    public function getNbevalniv(): ?int
    {
        return $this->nbevalniv;
    }

    public function setNbevalniv(?int $nbevalniv): self
    {
        $this->nbevalniv = $nbevalniv;

        return $this;
    }

    public function getNbrevaltrim(): ?int
    {
        return $this->nbrevaltrim;
    }

    public function setNbrevaltrim(?int $nbrevaltrim): self
    {
        $this->nbrevaltrim = $nbrevaltrim;

        return $this;
    }

    public function getNbreevalsem(): ?int
    {
        return $this->nbreevalsem;
    }

    public function setNbreevalsem(?int $nbreevalsem): self
    {
        $this->nbreevalsem = $nbreevalsem;

        return $this;
    }

    public function getNbrevalan(): ?int
    {
        return $this->nbrevalan;
    }

    public function setNbrevalan(?int $nbrevalan): self
    {
        $this->nbrevalan = $nbrevalan;

        return $this;
    }
}
