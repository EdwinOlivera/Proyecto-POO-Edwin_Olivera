<?php
class empresa
{

    private $idEmpresa;
    private $Nombre;
    private $RTN;
    private $oficinaCentral;
    private $pais;
    private $contraseña;
    private $rubros;
    private $imagenDePerfil;
    private $imagenDePortada;
    private $ubicacionEnMapa;
    private $tipoDeTarjeta;
    private $metodoDePago;
    private $bancosAfiliados;
    private $representantes;
    public function __construct(
        $idEmpresa,
        $Nombre,
        $RTN,
        $oficinaCentral,
        $pais,
        $contraseña,
        $rubros,
        $imagenDePerfil,
        $imagenDePortada,
        $ubicacionEnMapa,
        $tipoDeTarjeta,
        $metodoDePago,
        $bancosAfiliados,
        $representantes,
    ) {
        $this->idEmpresa = $idEmpresa;
        $this->Nombre = $Nombre;
        $this->RTN = $RTN;
        $this->oficinaCentral = $oficinaCentral;
        $this->pais = $pais;
        $this->contraseña = $contraseña;
        $this->rubros = $rubros;
        $this->imagenDePerfil = $imagenDePerfil;
        $this->imagenDePortada = $imagenDePortada;
        $this->ubicacionEnMapa = $ubicacionEnMapa;
        $this->tipoDeTarjeta = $tipoDeTarjeta;
        $this->metodoDePago = $metodoDePago;
        $this->bancosAfiliados = $bancosAfiliados;
        $this->representantes = $representantes;
    }
    #region Get y Set
    /**
     * Get the value of representantes
     */
    public function getRepresentantes()
    {
        return $this->representantes;
    }

    /**
     * Set the value of representantes
     *
     * @return  self
     */
    public function setRepresentantes($representantes)
    {
        $this->representantes = $representantes;

        return $this;
    }
    /**
     * Get the value of idEmpresa
     */
    public function getIdEmpresa()
    {
        return $this->idEmpresa;
    }

    /**
     * Set the value of idEmpresa
     *
     * @return  self
     */
    public function setIdEmpresa($idEmpresa)
    {
        $this->idEmpresa = $idEmpresa;

        return $this;
    }

    /**
     * Get the value of Nombre
     */
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * Set the value of Nombre
     *
     * @return  self
     */
    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;

        return $this;
    }

    /**
     * Get the value of RTN
     */
    public function getRTN()
    {
        return $this->RTN;
    }

    /**
     * Set the value of RTN
     *
     * @return  self
     */
    public function setRTN($RTN)
    {
        $this->RTN = $RTN;

        return $this;
    }

    /**
     * Get the value of oficinaCentral
     */
    public function getOficinaCentral()
    {
        return $this->oficinaCentral;
    }

    /**
     * Set the value of oficinaCentral
     *
     * @return  self
     */
    public function setOficinaCentral($oficinaCentral)
    {
        $this->oficinaCentral = $oficinaCentral;

        return $this;
    }

    /**
     * Get the value of pais
     */
    public function getPais()
    {
        return $this->pais;
    }

    /**
     * Set the value of pais
     *
     * @return  self
     */
    public function setPais($pais)
    {
        $this->pais = $pais;

        return $this;
    }

    /**
     * Get the value of contraseña
     */
    public function getContraseña()
    {
        return $this->contraseña;
    }

    /**
     * Set the value of contraseña
     *
     * @return  self
     */
    public function setContraseña($contraseña)
    {
        $this->contraseña = $contraseña;

        return $this;
    }

    /**
     * Get the value of rubros
     */
    public function getRubros()
    {
        return $this->rubros;
    }

    /**
     * Set the value of rubros
     *
     * @return  self
     */
    public function setRubros($rubros)
    {
        $this->rubros = $rubros;

        return $this;
    }

    /**
     * Get the value of imagenDePerfil
     */
    public function getImagenDePerfil()
    {
        return $this->imagenDePerfil;
    }

    /**
     * Set the value of imagenDePerfil
     *
     * @return  self
     */
    public function setImagenDePerfil($imagenDePerfil)
    {
        $this->imagenDePerfil = $imagenDePerfil;

        return $this;
    }

    /**
     * Get the value of imagenDePortada
     */
    public function getImagenDePortada()
    {
        return $this->imagenDePortada;
    }

    /**
     * Set the value of imagenDePortada
     *
     * @return  self
     */
    public function setImagenDePortada($imagenDePortada)
    {
        $this->imagenDePortada = $imagenDePortada;

        return $this;
    }

    /**
     * Get the value of ubicacionEnMapa
     */
    public function getUbicacionEnMapa()
    {
        return $this->ubicacionEnMapa;
    }

    /**
     * Set the value of ubicacionEnMapa
     *
     * @return  self
     */
    public function setUbicacionEnMapa($ubicacionEnMapa)
    {
        $this->ubicacionEnMapa = $ubicacionEnMapa;

        return $this;
    }

    /**
     * Get the value of tipoDeTarjeta
     */
    public function getTipoDeTarjeta()
    {
        return $this->tipoDeTarjeta;
    }

    /**
     * Set the value of tipoDeTarjeta
     *
     * @return  self
     */
    public function setTipoDeTarjeta($tipoDeTarjeta)
    {
        $this->tipoDeTarjeta = $tipoDeTarjeta;

        return $this;
    }

    /**
     * Get the value of metodoDePago
     */
    public function getMetodoDePago()
    {
        return $this->metodoDePago;
    }

    /**
     * Set the value of metodoDePago
     *
     * @return  self
     */
    public function setMetodoDePago($metodoDePago)
    {
        $this->metodoDePago = $metodoDePago;

        return $this;
    }

    /**
     * Get the value of bancosAfiliados
     */
    public function getBancosAfiliados()
    {
        return $this->bancosAfiliados;
    }

    /**
     * Set the value of bancosAfiliados
     *
     * @return  self
     */
    public function setBancosAfiliados($bancosAfiliados)
    {
        $this->bancosAfiliados = $bancosAfiliados;

        return $this;
    }
    #endregion


}
