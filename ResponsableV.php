<?php
class ResponsableV
{
    private $nombre;
    private $apellido;
    private $numeroDeEmpleado;
    private $numeroDeLicencia;

    public function __construct($pnom, $pape, $pnumEmpleado, $pnumLicencia)
    {
        $this->nombre = $pnom;
        $this->apellido = $pape;
        $this->numeroDeEmpleado = $pnumEmpleado;
        $this->numeroDeLicencia = $pnumLicencia;
    }
    //get
    public function getNombre()
    {
        return $this->nombre;
    }
    public function getApellido()
    {
        return $this->apellido;
    }
    public function getNumeroDeEmpleado()
    {
        return $this->numeroDeEmpleado;
    }
    public function getNumeroDeLicencia()
    {
        return $this->numeroDeLicencia;
    }
    //set
    public function setNombre($pnom)
    {
        $this->nombre = $pnom;
    }
    public function setApellido($pape)
    {
        $this->apellido = $pape;
    }
    public function setNumeroDeEmpleado($pnumEmpleado)
    {
        $this->numeroDeEmpleado = $pnumEmpleado;
    }
    public function setNumeroDeLicencia($pnumLicencia)
    {
        $this->numeroDeLicencia = $pnumLicencia;
    }
    //toString
    public function __toString()
    {
        return $this->getNombre() . "" . $this->getApellido() . "" . $this->getNumeroDeEmpleado() . "" . $this->getNumeroDeLicencia();
    }
}
