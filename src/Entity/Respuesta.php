<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Respuesta
 *
 * @ORM\Table(name="Respuesta", indexes={@ORM\Index(name="fk_Respuesta_Formulario1_idx", columns={"idFormulario"}), @ORM\Index(name="fk_Respuesta_Pregunta_idx", columns={"idPregunta"}), @ORM\Index(name="idx_formulario_pregunta", columns={"idFormulario", "idPregunta"})})
 * @ORM\Entity
 */
class Respuesta
{
    /**
     * @var int
     *
     * @ORM\Column(name="idRespuesta", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idrespuesta;

    /**
     * @var string|null
     *
     * @ORM\Column(name="parametroMedicion", type="text", length=65535, nullable=true)
     */
    private $parametromedicion;

    /**
     * @var string|null
     *
     * @ORM\Column(name="color", type="string", length=0, nullable=true)
     */
    private $color;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="fecha", type="datetime", nullable=true)
     */
    private $fecha;

    /**
     * @var string|null
     *
     * @ORM\Column(name="municipio", type="string", length=255, nullable=true)
     */
    private $municipio;

    /**
     * @var \Pregunta
     *
     * @ORM\ManyToOne(targetEntity="Pregunta")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idPregunta", referencedColumnName="idPregunta")
     * })
     */
    private $idpregunta;

    /**
     * @var \Formulario
     *
     * @ORM\ManyToOne(targetEntity="Formulario")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idFormulario", referencedColumnName="idFormulario")
     * })
     */
    private $idformulario;

    public function getIdrespuesta(): ?int
    {
        return $this->idrespuesta;
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

    public function getColor(): ?string
    {
        return $this->color;
    }

    public function setColor(?string $color): self
    {
        $this->color = $color;

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

    public function getMunicipio(): ?string
    {
        return $this->municipio;
    }

    public function setMunicipio(?string $municipio): self
    {
        $this->municipio = $municipio;

        return $this;
    }

    public function getIdpregunta(): ?Pregunta
    {
        return $this->idpregunta;
    }

    public function setIdpregunta(?Pregunta $idpregunta): self
    {
        $this->idpregunta = $idpregunta;

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
