<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ControleEstoque
 *
 * @ORM\Table(name="controle_estoque", indexes={@ORM\Index(name="fk_controle_estoque_passagem1_idx", columns={"passagem"})})
 * @ORM\Entity
 */
class ControleEstoque
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcontrole_estoque", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcontroleEstoque;

    /**
     * @var integer
     *
     * @ORM\Column(name="quantidade", type="integer", nullable=true)
     */
    private $quantidade;

    /**
     * @var string
     *
     * @ORM\Column(name="ativo", type="string", length=45, nullable=false)
     */
    private $ativo;

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

