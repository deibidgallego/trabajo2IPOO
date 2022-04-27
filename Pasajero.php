<?php
class pasajero
{
    private $nombre;
    private $apellido;
    private $documento;
    private $telefono;
    public function __construct($nom, $ape, $doc, $tel)
    {
        $this->nombre = $nom;
        $this->apellido = $ape;
        $this->documento = $doc;
        $this->telefono = $tel;
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
    public function getDocumento()
    {
        return $this->documento;
    }
    public function getTelefono()
    {
        return $this->telefono;
    }
    //set
    public function setNombre($nom)
    {
        $this->nombre = $nom;
    }
    public function setApellido($ape)
    {
        $this->apellido = $ape;
    }
    public function setDocumento($doc)
    {
        $this->documento = $doc;
    }
    public function setTelefono($tel)
    {
        $this->telefono = $tel;
    }

    public function __toString()
    {
        return "Nombre: " . $this->getNombre() . "Apellido: " . $this->getApellido() . "DNI:" . $this->getDocumento() . "Telefono: " . $this->getTelefono();
    }
}
