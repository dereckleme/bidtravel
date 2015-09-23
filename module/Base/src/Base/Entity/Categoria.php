<?php

namespace Base\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Categoria
 *
 * @ORM\Table(name="categoria")
 * @ORM\Entity
 */
class Categoria
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idcategoria", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcategoria;

    /**
     * @var string
     *
     * @ORM\Column(name="titulo", type="string", length=45, nullable=true)
     */
    private $titulo;

    /**
     * @return int
     */
    public function getIdcategoria()
    {
        return $this->idcategoria;
    }

    /**
     * @param int $idcategoria
     */
    public function setIdcategoria($idcategoria)
    {
        $this->idcategoria = $idcategoria;
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
}

