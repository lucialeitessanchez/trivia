<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Registro
 *
 * @ORM\Table(name="Registro", indexes={@ORM\Index(name="fk_Registro_Formulario1_idx", columns={"idFormulario"})})
 * @ORM\Entity
 */
class Registro
{
    /**
     * @var int
     *
     * @ORM\Column(name="idRegistro", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     */
    private $idregistro;

    /**
     * @var string|null
     *
     * @ORM\Column(name="municipio", type="string", length=255, nullable=true)
     */
    private $municipio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ip", type="string", length=45, nullable=true)
     */
    private $ip;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var \Formulario
     *
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="NONE")
     * @ORM\OneToOne(targetEntity="Formulario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFormulario", referencedColumnName="idFormulario")
     * })
     */
    private $idformulario;

    public function getIdregistro(): ?int
    {
        return $this->idregistro;
    }

    public function getMunicipio(): ?string
    {
        return $this->municipio;
    }

    public function setMunicipio(?string $municipio): self
    {
        $this->municipio = $municipio;

        return $this;
    }

    public function getIp(): ?string
    {
        return $this->ip;
    }

    public function setIp(?string $ip): self
    {
        $this->ip = $ip;

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

    public function getIdformulario(): ?Formulario
    {
        return $this->idformulario;
    }

    public function setIdformulario(?Formulario $idformulario): self
    {
        $this->idformulario = $idformulario;

        return $this;
    }


}
