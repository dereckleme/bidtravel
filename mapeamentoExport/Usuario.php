<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Usuario
 *
 * @ORM\Table(name="usuario", indexes={@ORM\Index(name="fk_usuario_dados_cadastro1_idx", columns={"dados_cadastro"})})
 * @ORM\Entity
 */
class Usuario
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idusuario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idusuario;

    /**
     * @var string
     *
     * @ORM\Column(name="login", type="string", length=45, nullable=true)
     */
    private $login;

    /**
     * @var string
     *
     * @ORM\Column(name="password", type="string", length=45, nullable=true)
     */
    private $password;

    /**
     * @var integer
     *
     * @ORM\Column(name="saldo", type="integer", nullable=true)
     */
    private $saldo;

    /**
     * @var \UsuarioDadosCadastro
     *
     * @ORM\ManyToOne(targetEntity="UsuarioDadosCadastro")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="dados_cadastro", referencedColumnName="iddados_cadastro")
     * })
     */
    private $dadosCadastro;


}

