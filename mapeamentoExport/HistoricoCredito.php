<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * HistoricoCredito
 *
 * @ORM\Table(name="historico_credito", indexes={@ORM\Index(name="fk_historico_credito_usuario1_idx", columns={"usuario"})})
 * @ORM\Entity
 */
class HistoricoCredito
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idhistorico_credito", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idhistoricoCredito;

    /**
     * @var integer
     *
     * @ORM\Column(name="controle_credito", type="integer", nullable=false)
     */
    private $controleCredito;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="data", type="datetime", nullable=true)
     */
    private $data;

    /**
     * @var string
     *
     * @ORM\Column(name="descricao", type="string", length=45, nullable=true)
     */
    private $descricao;

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

