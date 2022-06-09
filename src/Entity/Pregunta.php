<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pregunta
 *
 * @ORM\Table(name="Pregunta")
 * @ORM\Entity
 */
class Pregunta
{
    /**
     * @var int
     *
     * @ORM\Column(name="idPregunta", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $idpregunta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parametroMedicion", type="text", length=65535, nullable=true)
     */
    private $parametromedicion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="rojo", type="text", length=65535, nullable=true)
     */
    private $rojo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="amarillo", type="text", length=65535, nullable=true)
     */
    private $amarillo;

    /**
     * @var string|null
     *
     * @ORM\Column(name="verde", type="text", length=65535, nullable=true)
     */
    private $verde;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    public function getIdpregunta(): ?int
    {
        return $this->idpregunta;
    }

    public function getParametromedicion(): ?string
    {
        return $this->parametromedicion;
    }

    public function setParametromedicion(?string $parametromedicion): self
    {
        $this->parametromedicion = $parametromedicion;

        return $this;
    }

    public function getRojo(): ?string
    {
        return $this->rojo;
    }

    public function setRojo(?string $rojo): self
    {
        $this->rojo = $rojo;

        return $this;
    }

    public function getAmarillo(): ?string
    {
        return $this->amarillo;
    }

    public function setAmarillo(?string $amarillo): self
    {
        $this->amarillo = $amarillo;

        return $this;
    }

    public function getVerde(): ?string
    {
        return $this->verde;
    }

    public function setVerde(?string $verde): self
    {
        $this->verde = $verde;

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


}
