<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Leilao
 *
 * @ORM\Table(name="leilao")
 * @ORM\Entity
 */
class Leilao
{
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


}

