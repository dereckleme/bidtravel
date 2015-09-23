<?php

namespace Base\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Imagem
 *
 * @ORM\Table(name="imagem", indexes={@ORM\Index(name="fk_imagem_passagem1_idx", columns={"passagem"})})
 * @ORM\Entity
 */
class Imagem
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idimagem", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idimagem;

    /**
     * @var string
     *
     * @ORM\Column(name="src", type="string", length=45, nullable=true)
     */
    private $src;

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
     * @return int
     */
    public function getIdimagem()
    {
        return $this->idimagem;
    }

    /**
     * @param int $idimagem
     */
    public function setIdimagem($idimagem)
    {
        $this->idimagem = $idimagem;
    }

    /**
     * @return string
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * @param string $src
     */
    public function setSrc($src)
    {
        $this->src = $src;
    }

    /**
     * @return \Passagem
     */
    public function getPassagem()
    {
        return $this->passagem;
    }

    /**
     * @param \Passagem $passagem
     */
    public function setPassagem($passagem)
    {
        $this->passagem = $passagem;
    }
}

