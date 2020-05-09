<?php
class Usuario
{
    private $idUsuario;
    private $primerNombre;
    private $primerApellido;
    private $correoElectronico;
    private $contraseña;
    private $fechaDeNacimiento;
    private $sexo;
    private $direccionActual;
    private $departamento;
    private $municipio;
    private $tipoDeTarjeta;
    private $númerosDeTarjeta;
    private $PIN;
    private $metodosDePago;
    private $aceptarTerminos;
    private $metodoDeSubscripcion;
    public function __construct(
        $idUsuario,
        $primerNombre,
        $primerApellido,
        $correoElectronico,
        $contraseña,
        $fechaDeNacimiento,
        $sexo,
        $direccionActual,
        $departamento,
        $municipio,
        $tipoDeTarjeta,
        $númerosDeTarjeta,
        $PIN,
        $metodosDePago,
        $aceptarTerminos,
        $metodoDeSubscripcion
    ) {
        $this->idUsuario = $idUsuario;
        $this->$primerNombre = $primerNombre;
        $this->$primerApellido = $primerApellido;
        $this->$correoElectronico = $correoElectronico;
        $this->$contraseña = $contraseña;
        $this->$fechaDeNacimiento = $fechaDeNacimiento;
        $this->$sexo = $sexo;
        $this->$direccionActual = $direccionActual;
        $this->$departamento = $departamento;
        $this->$municipio = $municipio;
        $this->$tipoDeTarjeta = $tipoDeTarjeta;
        $this->$númerosDeTarjeta = $númerosDeTarjeta;
        $this->$PIN = $PIN;
        $this->$metodosDePago = $metodosDePago;
        $this->$aceptarTerminos = $aceptarTerminos;
        $this->$metodoDeSubscripcion = $metodoDeSubscripcion;
    }

    #region Get y Set
    /**
     * Get the value of idUsuario
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * Set the value of idUsuario
     *
     * @return  self
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }
    /**
     * Get the value of primerNombre
     */
    public function getPrimerNombre()
    {
        return $this->primerNombre;
    }

    /**
     * Set the value of primerNombre
     *
     * @return  self
     */
    public function setPrimerNombre($primerNombre)
    {
        $this->primerNombre = $primerNombre;

        return $this;
    }

    /**
     * Get the value of primerApellido
     */
    public function getPrimerApellido()
    {
        return $this->primerApellido;
    }

    /**
     * Set the value of primerApellido
     *
     * @return  self
     */
    public function setPrimerApellido($primerApellido)
    {
        $this->primerApellido = $primerApellido;

        return $this;
    }

    /**
     * Get the value of correoElectronico
     */
    public function getCorreoElectronico()
    {
        return $this->correoElectronico;
    }

    /**
     * Set the value of correoElectronico
     *
     * @return  self
     */
    public function setCorreoElectronico($correoElectronico)
    {
        $this->correoElectronico = $correoElectronico;

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
     * Get the value of fechaDeNacimiento
     */
    public function getFechaDeNacimiento()
    {
        return $this->fechaDeNacimiento;
    }

    /**
     * Set the value of fechaDeNacimiento
     *
     * @return  self
     */
    public function setFechaDeNacimiento($fechaDeNacimiento)
    {
        $this->fechaDeNacimiento = $fechaDeNacimiento;

        return $this;
    }

    /**
     * Get the value of sexo
     */
    public function getSexo()
    {
        return $this->sexo;
    }

    /**
     * Set the value of sexo
     *
     * @return  self
     */
    public function setSexo($sexo)
    {
        $this->sexo = $sexo;

        return $this;
    }

    /**
     * Get the value of direccionActual
     */
    public function getDireccionActual()
    {
        return $this->direccionActual;
    }

    /**
     * Set the value of direccionActual
     *
     * @return  self
     */
    public function setDireccionActual($direccionActual)
    {
        $this->direccionActual = $direccionActual;

        return $this;
    }

    /**
     * Get the value of departamento
     */
    public function getDepartamento()
    {
        return $this->departamento;
    }

    /**
     * Set the value of departamento
     *
     * @return  self
     */
    public function setDepartamento($departamento)
    {
        $this->departamento = $departamento;

        return $this;
    }

    /**
     * Get the value of municipio
     */
    public function getMunicipio()
    {
        return $this->municipio;
    }

    /**
     * Set the value of municipio
     *
     * @return  self
     */
    public function setMunicipio($municipio)
    {
        $this->municipio = $municipio;

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
     * Get the value of númerosDeTarjeta
     */
    public function getNúmerosDeTarjeta()
    {
        return $this->númerosDeTarjeta;
    }

    /**
     * Set the value of númerosDeTarjeta
     *
     * @return  self
     */
    public function setNúmerosDeTarjeta($númerosDeTarjeta)
    {
        $this->númerosDeTarjeta = $númerosDeTarjeta;

        return $this;
    }

    /**
     * Get the value of PIN
     */
    public function getPIN()
    {
        return $this->PIN;
    }

    /**
     * Set the value of PIN
     *
     * @return  self
     */
    public function setPIN($PIN)
    {
        $this->PIN = $PIN;

        return $this;
    }

    /**
     * Get the value of metodosDePago
     */
    public function getMetodosDePago()
    {
        return $this->metodosDePago;
    }

    /**
     * Set the value of metodosDePago
     *
     * @return  self
     */
    public function setMetodosDePago($metodosDePago)
    {
        $this->metodosDePago = $metodosDePago;

        return $this;
    }

    /**
     * Get the value of aceptarTerminos
     */
    public function getAceptarTerminos()
    {
        return $this->aceptarTerminos;
    }

    /**
     * Set the value of aceptarTerminos
     *
     * @return  self
     */
    public function setAceptarTerminos($aceptarTerminos)
    {
        $this->aceptarTerminos = $aceptarTerminos;

        return $this;
    }

    /**
     * Get the value of metodoDeSubscripcion
     */
    public function getMetodoDeSubscripcion()
    {
        return $this->metodoDeSubscripcion;
    }

    /**
     * Set the value of metodoDeSubscripcion
     *
     * @return  self
     */
    public function setMetodoDeSubscripcion($metodoDeSubscripcion)
    {
        $this->metodoDeSubscripcion = $metodoDeSubscripcion;

        return $this;
    }
    #endregion


}
