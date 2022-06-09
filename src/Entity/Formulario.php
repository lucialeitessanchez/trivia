<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Formulario
 *
 * @ORM\Table(name="Formulario", indexes={@ORM\Index(name="idx_fecha", columns={"fecha"})})
 * @ORM\Entity
 */
class Formulario
{
    /**
     * @var int
     *
     * @ORM\Column(name="idFormulario", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idformulario;

    /**
     * @var string|null
     *
     * @ORM\Column(name="nombre", type="string", length=255, nullable=true)
     */
    private $nombre;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var bool|null
     *
     * @ORM\Column(name="habilitado", type="boolean", nullable=true)
     */
    private $habilitado = '0';

    public function getIdformulario(): ?int
    {
        return $this->idformulario;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getFecha(): ?\DateTimeInterface
    {
        return $this->fecha;
    }

    public function setFecha(?\DateTimeInterface $fecha): self
    {
        $this->fecha = $fecha;

        return $this;
    }

    public function getHabilitado(): ?bool
    {
        return $this->habilitado;
    }

    public function setHabilitado(?bool $habilitado): self
    {
        $this->habilitado = $habilitado;

        return $this;
    }


}
