<?php

namespace Base\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Criteria;

/**
 * Passagem
 *
 * @ORM\Table(name="passagem", indexes={@ORM\Index(name="fk_passagem_cidade1_idx", columns={"cidade"}), @ORM\Index(name="fk_passagem_estado1_idx", columns={"estado"}), @ORM\Index(name="fk_passagem_agencia1_idx", columns={"agencia"}), @ORM\Index(name="fk_passagem_categoria1_idx", columns={"categoria"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Base\Repository\PassagemRepository")
 */
class Passagem
{
    CONST EMPTY_IMAGE = 'notFound.gif';

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
     * @ORM\OneToMany(targetEntity="Imagem", mappedBy="passagem")
     */
    protected $imagens;

    /**
     * @var \Leilao
     *
     * @ORM\ManyToOne(targetEntity="Leilao")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="leilao", referencedColumnName="idleilao")
     * })
     */
    private $leilao;

    public function __construct() {
        $this->imagens = new ArrayCollection();
    }

    /**
     * @return int
     */
    public function getIdpassagem()
    {
        return $this->idpassagem;
    }

    /**
     * @param int $idpassagem
     */
    public function setIdpassagem($idpassagem)
    {
        $this->idpassagem = $idpassagem;
    }

    /**
     * @return string
     */
    public function getTitulo()
    {
        return $this->titulo;
    }

    /**
     * @param string $titulo
     */
    public function setTitulo($titulo)
    {
        $this->titulo = $titulo;
    }

    /**
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * @param string $descricao
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;
    }

    /**
     * @return \Agencia
     */
    public function getAgencia()
    {
        return $this->agencia;
    }

    /**
     * @param \Agencia $agencia
     */
    public function setAgencia($agencia)
    {
        $this->agencia = $agencia;
    }

    /**
     * @return \Categoria
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * @param \Categoria $categoria
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;
    }

    /**
     * @return \Cidade
     */
    public function getCidade()
    {
        return $this->cidade;
    }

    /**
     * @param \Cidade $cidade
     */
    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    /**
     * @return \Estado
     */
    public function getEstado()
    {
        return $this->estado;
    }

    /**
     * @param \Estado $estado
     */
    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function getSingleImage()
    {
        $criteria = Criteria::create();
        $criteria->setFirstResult(0);

        $result = $this->getImagens()->matching($criteria);
        if ($result[0]) {
            return $result[0]->getSrc();
        } else {
            return self::EMPTY_IMAGE;
        }
    }

    /**
     * @return mixed
     */
    public function getImagens()
    {
        return $this->imagens;
    }

    /**
     * @param mixed $imagens
     */
    public function setImagens($imagens)
    {
        $this->imagens = $imagens;
    }

    /**
     * @return \Leilao
     */
    public function getLeilao()
    {
        return $this->leilao;
    }

    /**
     * @param \Leilao $leilao
     */
    public function setLeilao($leilao)
    {
        $this->leilao = $leilao;
    }
}

