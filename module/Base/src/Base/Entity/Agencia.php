<?php

namespace Base\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Agencia
 *
 * @ORM\Table(name="agencia", indexes={@ORM\Index(name="fk_agencia_cidade1_idx", columns={"cidade"}), @ORM\Index(name="fk_agencia_estado1_idx", columns={"estado"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="Base\Entity\PagamentoControleestoqueRepository")
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

    /**
     * @return int
     */
    public function getIdagencia()
    {
        return $this->idagencia;
    }

    /**
     * @param int $idagencia
     */
    public function setIdagencia($idagencia)
    {
        $this->idagencia = $idagencia;
    }

    /**
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     */
    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    /**
     * @return string
     */
    public function getRazaoSocial()
    {
        return $this->razaoSocial;
    }

    /**
     * @param string $razaoSocial
     */
    public function setRazaoSocial($razaoSocial)
    {
        $this->razaoSocial = $razaoSocial;
    }

    /**
     * @return string
     */
    public function getEndereco()
    {
        return $this->endereco;
    }

    /**
     * @param string $endereco
     */
    public function setEndereco($endereco)
    {
        $this->endereco = $endereco;
    }

    /**
     * @return string
     */
    public function getCep()
    {
        return $this->cep;
    }

    /**
     * @param string $cep
     */
    public function setCep($cep)
    {
        $this->cep = $cep;
    }

    /**
     * @return string
     */
    public function getTelefone()
    {
        return $this->telefone;
    }

    /**
     * @param string $telefone
     */
    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    /**
     * @return string
     */
    public function getFax()
    {
        return $this->fax;
    }

    /**
     * @param string $fax
     */
    public function setFax($fax)
    {
        $this->fax = $fax;
    }

    /**
     * @return string
     */
    public function getCnpj()
    {
        return $this->cnpj;
    }

    /**
     * @param string $cnpj
     */
    public function setCnpj($cnpj)
    {
        $this->cnpj = $cnpj;
    }

    /**
     * @return string
     */
    public function getInscrEstadual()
    {
        return $this->inscrEstadual;
    }

    /**
     * @param string $inscrEstadual
     */
    public function setInscrEstadual($inscrEstadual)
    {
        $this->inscrEstadual = $inscrEstadual;
    }

    /**
     * @return string
     */
    public function getInscrMunicipal()
    {
        return $this->inscrMunicipal;
    }

    /**
     * @param string $inscrMunicipal
     */
    public function setInscrMunicipal($inscrMunicipal)
    {
        $this->inscrMunicipal = $inscrMunicipal;
    }

    /**
     * @return string
     */
    public function getHorarioComercial()
    {
        return $this->horarioComercial;
    }

    /**
     * @param string $horarioComercial
     */
    public function setHorarioComercial($horarioComercial)
    {
        $this->horarioComercial = $horarioComercial;
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
}

