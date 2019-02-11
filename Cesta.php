<?php
class Cesta {
    private $productos = [];
    
    public function __construct() {
        foreach ($this->productos as $producto){
            $producto = [];
            foreach($producto as $valores){
                $valores = [];
            }
        }
    }

    public static function generaCesta() {
        if (isset($_SESSION['cesta'])) {
            return $_SESSION['cesta'];
        } else {
            return new Cesta();
        }
    }
    
    public function mostrarCesta() {
        if($this->productos == null || $this->productos == 0){
           return "La cesta está vacía";
        }
        $listado = "";
        foreach ($this->productos as $codigo => $valores) {
            $listado .= "$valores[0] - $codigo - $valores[1]";
        }
        return $listado;
    }
    
    public function nuevoProd($precio, $codigo) {
        if ($this->productos[$codigo][0] > 0) {
            $this->productos[$codigo][0] ++;
        } else {
            $this->productos[$codigo][0] = 1;
            $this->productos[$codigo][1] = $precio;
        }
    }
    public function calculoTotal(){
        $total = 0;
        foreach($this->productos as $producto => $valores){
            $cantidad = $valores[0];
            $precio = $valores[1];
            $total += ($cantidad * $precio);
        }
        return $total;
    }
    
    public function guardaCesta(){
        $_SESSION['cesta'] = $this;
    }
    
    public function vacia(){
        //$this = null;
        $this->guardaCesta();
    }
}