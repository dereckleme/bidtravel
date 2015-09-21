<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Promocoes
 *
 * @ORM\Table(name="promocoes", indexes={@ORM\Index(name="fk_promocoes_passagem1_idx", columns={"passagem"})})
 * @ORM\Entity
 */
class Promocoes
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idpromocoes", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpromocoes;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=45, nullable=true)
     */
    private $titulo;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataInicio", type="datetime", nullable=true)
     */
    private $datainicio;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataFinal", type="datetime", nullable=true)
     */
    private $datafinal;

    /**
     * @var \Passagem
     *
     * @ORM\ManyToOne(targetEntity="Passagem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="passagem", referencedColumnName="idpassagem")
     * })
     */
    private $passagem;


}

