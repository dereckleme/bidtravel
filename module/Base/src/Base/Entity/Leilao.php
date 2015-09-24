<?php

namespace Base\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Leilao
 *
 * @ORM\Table(name="leilao")
 * @ORM\Entity
 */
class Leilao
{
    CONST TEXT_TIME_FINISH = "Tempo Esgotado";

    /**
     * @var integer
     *
     * @ORM\Column(name="idleilao", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idleilao;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataInicio", type="datetime", nullable=true)
     */
    private $datainicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="tempoLeilao", type="datetime", nullable=true)
     */
    private $tempoleilao;

    /**
     * @return int
     */
    public function getIdleilao()
    {
        return $this->idleilao;
    }

    /**
     * @param int $idleilao
     */
    public function setIdleilao($idleilao)
    {
        $this->idleilao = $idleilao;
    }

    /**
     * @return \DateTime
     */
    public function getDatainicio()
    {
        return $this->datainicio;
    }

    /**
     * @param \DateTime $datainicio
     */
    public function setDatainicio($datainicio)
    {
        $this->datainicio = $datainicio;
    }

    /**
     * @return \DateTime
     */
    public function getTempoleilao()
    {
        return $this->tempoleilao;
    }

    /**
     * @param \DateTime $tempoleilao
     */
    public function setTempoleilao($tempoleilao)
    {
        $this->tempoleilao = $tempoleilao;
    }

    public function getTimeLeft()
    {
        $tempoLeilao = $this->getTempoleilao();
        $dataAtual   = new \DateTime('now');

        if ($tempoLeilao < $dataAtual) {
            return self::TEXT_TIME_FINISH;
        } else {
            //calcula a diferença de tempo
            $left = $dataAtual->diff($tempoLeilao);
            $leftTime = $this->addZeroInt($left->h).":".$this->addZeroInt($left->i).":".$this->addZeroInt($left->s);

            return $leftTime;
        }
    }

    public function addZeroInt($numero)
    {
        $len = strlen($numero);

        if ($len == 1) {
            return "0".$numero;
        } else {
            return $numero;
        }
    }
}

