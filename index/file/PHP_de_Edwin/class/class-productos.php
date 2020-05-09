<?php
class producto
{
    private $idProducto;
    private $Nombre;
    private $Descripcion;
    private $idEmpresa;
    private $cantidades;
    private $precio;
    private $categoria;
    private $imagen;
    public function __construct(
        $idProducto,
        $Nombre,
        $Descripcion,
        $idEmpresa,
        $cantidades,
        $precio,
        $categoria,
        $imagen
    ) {
        $this->idProducto = $idProducto;
        $this->Nombre = $Nombre;
        $this->Descripcion = $Descripcion;
        $this->idEmpresa = $idEmpresa;
        $this->cantidades = $cantidades;
        $this->precio = $precio;
        $this->categoria = $categoria;
        $this->imagen = $imagen;
    }
    
    #region Get y Set
    /**
     * Get the value of idProducto
     */
    public function getIdProducto()
    {
        return $this->idProducto;
    }

    /**
     * Set the value of idProducto
     *
     * @return  self
     */
    public function setIdProducto($idProducto)
    {
        $this->idProducto = $idProducto;

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
     * Get the value of Descripcion
     */
    public function getDescripcion()
    {
        return $this->Descripcion;
    }

    /**
     * Set the value of Descripcion
     *
     * @return  self
     */
    public function setDescripcion($Descripcion)
    {
        $this->Descripcion = $Descripcion;

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
     * Get the value of cantidades
     */
    public function getCantidades()
    {
        return $this->cantidades;
    }

    /**
     * Set the value of cantidades
     *
     * @return  self
     */
    public function setCantidades($cantidades)
    {
        $this->cantidades = $cantidades;

        return $this;
    }

    /**
     * Get the value of precio
     */
    public function getPrecio()
    {
        return $this->precio;
    }

    /**
     * Set the value of precio
     *
     * @return  self
     */
    public function setPrecio($precio)
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * Get the value of categoria
     */
    public function getCategoria()
    {
        return $this->categoria;
    }

    /**
     * Set the value of categoria
     *
     * @return  self
     */
    public function setCategoria($categoria)
    {
        $this->categoria = $categoria;

        return $this;
    }

    /**
     * Get the value of imagen
     */
    public function getImagen()
    {
        return $this->imagen;
    }

    /**
     * Set the value of imagen
     *
     * @return  self
     */
    public function setImagen($imagen)
    {
        $this->imagen = $imagen;

        return $this;
    }
    #endregion
}
