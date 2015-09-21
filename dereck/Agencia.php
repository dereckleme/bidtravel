<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Agencia
 *
 * @ORM\Table(name="agencia", indexes={@ORM\Index(name="fk_agencia_cidade1_idx", columns={"cidade"}), @ORM\Index(name="fk_agencia_estado1_idx", columns={"estado"})})
 * @ORM\Entity
 */
class Agencia
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idagencia", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idagencia;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=45, nullable=true)
     */
    private $nome;

    /**
     * @var string
     *
     * @ORM\Column(name="razao_social", type="string", length=45, nullable=true)
     */
    private $razaoSocial;

    /**
     * @var string
     *
     * @ORM\Column(name="endereco", type="string", length=45, nullable=true)
     */
    private $endereco;

    /**
     * @var string
     *
     * @ORM\Column(name="cep", type="string", length=45, nullable=true)
     */
    private $cep;

    /**
     * @var string
     *
     * @ORM\Column(name="telefone", type="string", length=45, nullable=true)
     */
    private $telefone;

    /**
     * @var string
     *
     * @ORM\Column(name="fax", type="string", length=45, nullable=true)
     */
    private $fax;

    /**
     * @var string
     *
     * @ORM\Column(name="cnpj", type="string", length=45, nullable=true)
     */
    private $cnpj;

    /**
     * @var string
     *
     * @ORM\Column(name="inscr_estadual", type="string", length=45, nullable=true)
     */
    private $inscrEstadual;

    /**
     * @var string
     *
     * @ORM\Column(name="inscr_municipal", type="string", length=45, nullable=true)
     */
    private $inscrMunicipal;

    /**
     * @var string
     *
     * @ORM\Column(name="horario_comercial", type="string", length=45, nullable=true)
     */
    private $horarioComercial;

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


}

