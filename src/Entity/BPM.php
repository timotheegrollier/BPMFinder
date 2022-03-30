<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Repository\BPMRepository;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;


#[ORM\Entity(repositoryClass: BPMRepository::class)]
#[UniqueEntity('CurrentBPM')]

class BPM
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]

    private $id;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $M20;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $M19;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $M18;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $M17;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $M16;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $M15;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $M14;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $M13;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $M12;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $M11;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $M10;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $M9;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $M8;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $M7;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $M6;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $M5;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $M4;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $M3;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $M2;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $M1;

    #[ORM\Column(name:"current_bpm", type: 'string', length: 10,unique:true)]
    private $CurrentBPM;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $P1;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $P2;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $P3;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $P4;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $P5;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $P6;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $P7;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $P8;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $P9;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $P10;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $P11;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $P12;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $P13;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $P14;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $P15;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $P16;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $P17;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $P18;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $P19;

    #[ORM\Column(type: 'string', length: 10, nullable: true)]
    private $P20;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getM20(): ?string
    {
        return $this->M20;
    }

    public function setM20(?string $M20): self
    {
        $this->M20 = $M20;

        return $this;
    }

    public function getM19(): ?string
    {
        return $this->M19;
    }

    public function setM19(?string $M19): self
    {
        $this->M19 = $M19;

        return $this;
    }

    public function getM18(): ?string
    {
        return $this->M18;
    }

    public function setM18(?string $M18): self
    {
        $this->M18 = $M18;

        return $this;
    }

    public function getM17(): ?string
    {
        return $this->M17;
    }

    public function setM17(?string $M17): self
    {
        $this->M17 = $M17;

        return $this;
    }

    public function getM16(): ?string
    {
        return $this->M16;
    }

    public function setM16(?string $M16): self
    {
        $this->M16 = $M16;

        return $this;
    }

    public function getM15(): ?string
    {
        return $this->M15;
    }

    public function setM15(?string $M15): self
    {
        $this->M15 = $M15;

        return $this;
    }

    public function getM14(): ?string
    {
        return $this->M14;
    }

    public function setM14(?string $M14): self
    {
        $this->M14 = $M14;

        return $this;
    }

    public function getM13(): ?string
    {
        return $this->M13;
    }

    public function setM13(?string $M13): self
    {
        $this->M13 = $M13;

        return $this;
    }

    public function getM12(): ?string
    {
        return $this->M12;
    }

    public function setM12(?string $M12): self
    {
        $this->M12 = $M12;

        return $this;
    }

    public function getM11(): ?string
    {
        return $this->M11;
    }

    public function setM11(?string $M11): self
    {
        $this->M11 = $M11;

        return $this;
    }

    public function getM10(): ?string
    {
        return $this->M10;
    }

    public function setM10(?string $M10): self
    {
        $this->M10 = $M10;

        return $this;
    }

    public function getM9(): ?string
    {
        return $this->M9;
    }

    public function setM9(?string $M9): self
    {
        $this->M9 = $M9;

        return $this;
    }

    public function getM8(): ?string
    {
        return $this->M8;
    }

    public function setM8(?string $M8): self
    {
        $this->M8 = $M8;

        return $this;
    }

    public function getM7(): ?string
    {
        return $this->M7;
    }

    public function setM7(?string $M7): self
    {
        $this->M7 = $M7;

        return $this;
    }

    public function getM6(): ?string
    {
        return $this->M6;
    }

    public function setM6(?string $M6): self
    {
        $this->M6 = $M6;

        return $this;
    }

    public function getM5(): ?string
    {
        return $this->M5;
    }

    public function setM5(?string $M5): self
    {
        $this->M5 = $M5;

        return $this;
    }

    public function getM4(): ?string
    {
        return $this->M4;
    }

    public function setM4(?string $M4): self
    {
        $this->M4 = $M4;

        return $this;
    }

    public function getM3(): ?string
    {
        return $this->M3;
    }

    public function setM3(?string $M3): self
    {
        $this->M3 = $M3;

        return $this;
    }

    public function getM2(): ?string
    {
        return $this->M2;
    }

    public function setM2(?string $M2): self
    {
        $this->M2 = $M2;

        return $this;
    }

    public function getM1(): ?string
    {
        return $this->M1;
    }

    public function setM1(?string $M1): self
    {
        $this->M1 = $M1;

        return $this;
    }

    public function getCurrentBPM(): ?string
    {
        return $this->CurrentBPM;
    }

    public function setCurrentBPM(string $CurrentBPM): self
    {
        $this->CurrentBPM = $CurrentBPM;

        return $this;
    }

    public function getP1(): ?string
    {
        return $this->P1;
    }

    public function setP1(?string $P1): self
    {
        $this->P1 = $P1;

        return $this;
    }

    public function getP2(): ?string
    {
        return $this->P2;
    }

    public function setP2(?string $P2): self
    {
        $this->P2 = $P2;

        return $this;
    }

    public function getP3(): ?string
    {
        return $this->P3;
    }

    public function setP3(?string $P3): self
    {
        $this->P3 = $P3;

        return $this;
    }

    public function getP4(): ?string
    {
        return $this->P4;
    }

    public function setP4(?string $P4): self
    {
        $this->P4 = $P4;

        return $this;
    }

    public function getP5(): ?string
    {
        return $this->P5;
    }

    public function setP5(?string $P5): self
    {
        $this->P5 = $P5;

        return $this;
    }

    public function getP6(): ?string
    {
        return $this->P6;
    }

    public function setP6(?string $P6): self
    {
        $this->P6 = $P6;

        return $this;
    }

    public function getP7(): ?string
    {
        return $this->P7;
    }

    public function setP7(?string $P7): self
    {
        $this->P7 = $P7;

        return $this;
    }

    public function getP8(): ?string
    {
        return $this->P8;
    }

    public function setP8(?string $P8): self
    {
        $this->P8 = $P8;

        return $this;
    }

    public function getP9(): ?string
    {
        return $this->P9;
    }

    public function setP9(?string $P9): self
    {
        $this->P9 = $P9;

        return $this;
    }

    public function getP10(): ?string
    {
        return $this->P10;
    }

    public function setP10(?string $P10): self
    {
        $this->P10 = $P10;

        return $this;
    }

    public function getP11(): ?string
    {
        return $this->P11;
    }

    public function setP11(?string $P11): self
    {
        $this->P11 = $P11;

        return $this;
    }

    public function getP12(): ?string
    {
        return $this->P12;
    }

    public function setP12(?string $P12): self
    {
        $this->P12 = $P12;

        return $this;
    }

    public function getP13(): ?string
    {
        return $this->P13;
    }

    public function setP13(?string $P13): self
    {
        $this->P13 = $P13;

        return $this;
    }

    public function getP14(): ?string
    {
        return $this->P14;
    }

    public function setP14(?string $P14): self
    {
        $this->P14 = $P14;

        return $this;
    }

    public function getP15(): ?string
    {
        return $this->P15;
    }

    public function setP15(?string $P15): self
    {
        $this->P15 = $P15;

        return $this;
    }

    public function getP16(): ?string
    {
        return $this->P16;
    }

    public function setP16(?string $P16): self
    {
        $this->P16 = $P16;

        return $this;
    }

    public function getP17(): ?string
    {
        return $this->P17;
    }

    public function setP17(?string $P17): self
    {
        $this->P17 = $P17;

        return $this;
    }

    public function getP18(): ?string
    {
        return $this->P18;
    }

    public function setP18(?string $P18): self
    {
        $this->P18 = $P18;

        return $this;
    }

    public function getP19(): ?string
    {
        return $this->P19;
    }

    public function setP19(?string $P19): self
    {
        $this->P19 = $P19;

        return $this;
    }

    public function getP20(): ?string
    {
        return $this->P20;
    }

    public function setP20(?string $P20): self
    {
        $this->P20 = $P20;

        return $this;
    }


}
