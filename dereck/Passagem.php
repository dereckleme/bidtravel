<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Passagem
 *
 * @ORM\Table(name="passagem", indexes={@ORM\Index(name="fk_passagem_cidade1_idx", columns={"cidade"}), @ORM\Index(name="fk_passagem_estado1_idx", columns={"estado"}), @ORM\Index(name="fk_passagem_agencia1_idx", columns={"agencia"}), @ORM\Index(name="fk_passagem_categoria1_idx", columns={"categoria"}), @ORM\Index(name="fk_passagem_leilao1_idx", columns={"leilao"})})
 * @ORM\Entity
 */
class Passagem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idpassagem", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idpassagem;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=45, nullable=true)
     */
    private $titulo;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=45, nullable=true)
     */
    private $descricao;

    /**
     * @var \Agencia
     *
     * @ORM\ManyToOne(targetEntity="Agencia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="agencia", referencedColumnName="idagencia")
     * })
     */
    private $agencia;

    /**
     * @var \Categoria
     *
     * @ORM\ManyToOne(targetEntity="Categoria")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="categoria", referencedColumnName="idcategoria")
     * })
     */
    private $categoria;

    /**
     * @var \Cidade
     *
     * @ORM\ManyToOne(targetEntity="Cidade")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="cidade", referencedColumnName="idcidade")
     * })
     */
    private $cidade;

    /**
     * @var \Estado
     *
     * @ORM\ManyToOne(targetEntity="Estado")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="estado", referencedColumnName="idestado")
     * })
     */
    private $estado;

    /**
     * @var \Leilao
     *
     * @ORM\ManyToOne(targetEntity="Leilao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="leilao", referencedColumnName="idleilao")
     * })
     */
    private $leilao;


}

