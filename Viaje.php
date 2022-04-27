<?php
class Viaje
{
    //Atributos privados
    private $codigo;
    private $destino;
    private $cantMaximaPasajeros;
    private $colPasajeros;
    private $objResponsable;

    public function __construct($pCodigo, $pDestino, $pCantMaxPasajeros, $pobjResp)
    {
        $this->codigo = $pCodigo;
        $this->destino = $pDestino;
        $this->cantMaximaPasajeros = $pCantMaxPasajeros;
        $this->colPasajeros = [];
        $this->objResponsable = $pobjResp;
    }
    //metodos
    public function getResponsable()
    {
        return $this->objResponsable;
    }
    public function getCodigo()
    {
        return $this->codigo;
    }
    public function getDestino()
    {
        return $this->destino;
    }
    public function getCantMaximaPasajeros()
    {
        return $this->cantMaximaPasajeros;
    }
    public function getColPasajeros()
    {
        return $this->colPasajeros;
    }
    //set
    public function setResponsable($pobjResp)
    {
        $this->objResponsable = $pobjResp;
    }
    public function setCodigo($pCodigo)
    {
        $this->codigo = $pCodigo;
    }
    public function setDestino($pDestino)
    {
        $this->destino = $pDestino;
    }
    public function setCantMaxPasajeros($pCantMaxPasajeros)
    {
        $this->cantMaximaPasajeros = $pCantMaxPasajeros;
    }
    public function setColPasajeros($colPasajeros)
    {
        $this->colPasajeros = $colPasajeros;
    }
    //metodo que busca pasajero por doc
    function buscarPasajero($pnrodoc)
    {
        $arregloDePasajeros = $this->getColPasajeros();
        $posicionCol = -1;
        $i = 0;
        $seEncontro = false;
        while ($i < count($arregloDePasajeros) && !$seEncontro) {
            $unObjPasajero = $arregloDePasajeros[$i];
            $seEncontro = ($unObjPasajero->getDocumento() == $pnrodoc);
            $posicionCol = $i;
            $i = $i + 1;
        }
        $posicionCol = ($seEncontro ? ($i - 1) : -1);
        return $posicionCol;
    }
    //metodo que modificar pasajero encontrado por doc
    function modificarPasajero($ppascolP, $pnombre, $papellido, $ptelefono)
    {
        $arregloDePasajeros = $this->getColPasajeros();
        $objPasajeroMod = $arregloDePasajeros[$ppascolP];
        $objPasajeroMod->setNombre($pnombre);
        $objPasajeroMod->setApellido($papellido);
        $objPasajeroMod->setTelefono($ptelefono);
    }
    //metodo Mostrar los datos de pasajeros
    public function mostrarDatosDePasajeros()
    {
        $losPasajeros = "";
        $i = 1;
        foreach ($this->getColPasajeros() as $objPasaj) {
            $losPasajeros = $losPasajeros . "\n-Pasajero" . ($i) . "--";
            $losPasajeros = $losPasajeros . $objPasaj . "\n";
            $i = $i + 1;
        }
        return $losPasajeros;
    }


    public function __toString()
    {
        return "Codigo de viaje; " . $this->getCodigo() . "\n Destino del viaje: " . $this->getDestino() . "\n Cantidad maxima de pasajeros" . $this->getCantMaximaPasajeros() . "\n Pasajeros: " . $this->mostrarDatosDePasajeros() . "\nRespónsable del viaje: " . $this->getResponsable();
    }
}
