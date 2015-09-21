<?php



use Doctrine\ORM\Mapping as ORM;

/**
 * Cidade
 *
 * @ORM\Table(name="cidade", indexes={@ORM\Index(name="fk_cidade_estado1_idx", columns={"estado"})})
 * @ORM\Entity
 */
class Cidade
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcidade", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcidade;

    /**
     * @var string
     *
     * @ORM\Column(name="nome", type="string", length=45, nullable=true)
     */
    private $nome;

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

