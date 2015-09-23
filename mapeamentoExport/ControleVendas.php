<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * ControleVendas
 *
 * @ORM\Table(name="controle_vendas", indexes={@ORM\Index(name="fk_controle_vendas_passagem1_idx", columns={"passagem"}), @ORM\Index(name="fk_controle_vendas_usuario1_idx", columns={"usuario"})})
 * @ORM\Entity
 */
class ControleVendas
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcontrole_vendas", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcontroleVendas;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="dataVenda", type="datetime", nullable=true)
     */
    private $datavenda;

    /**
     * @var string
     *
     * @ORM\Column(name="informacoes", type="string", length=45, nullable=true)
     */
    private $informacoes;

    /**
     * @var \Passagem
     *
     * @ORM\ManyToOne(targetEntity="Passagem")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="passagem", referencedColumnName="idpassagem")
     * })
     */
    private $passagem;

    /**
     * @var \Usuario
     *
     * @ORM\ManyToOne(targetEntity="Usuario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="usuario", referencedColumnName="idusuario")
     * })
     */
    private $usuario;


}

