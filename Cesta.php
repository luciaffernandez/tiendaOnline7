<?php

class Cesta {

    private $productos = [];
    private $total;

    //Suma las cantidades de los productos y devuelve el número de productos que contiene la cesta
    public function contarProductos() {
        foreach ($this->productos as $producto => $valores) {
            $suma += $valores[0];
        }
        return $suma;
    }

    //calcula a partir del atributo total el IVA proporcional
    public function calculoIVA() {
        $IVA = $this->total * 0.21;
        return $IVA;
    }

    //getters de los atributos de la clase
    public function getProductos() {
        return $this->productos;
    }

    public function getTotal() {
        return $this->total;
    }

    /** Devuelve la cesta con distinto formato según si ya existe o no
     * @return Cesta como objeto o como variable de sesión
     */
    public static function generaCesta() {
        if (isset($_SESSION['cesta'])) {
            return $_SESSION['cesta'];
        } else {
            return new Cesta();
        }
    }

    /** Funcion que construye el contenido de la cesta con HTML 
     * según el contenido del atributo productos
     * @return string con el HTML
     */
    public function mostrarCesta() {
        if ($this->productos == null || $this->productos == 0) {
            $contenidoCesta .= "<p class='cestaVacia'>0 PRODUCTOS</p>";
        } else {
            $contenidoCesta = "";
            foreach ($this->productos as $codigo => $valores) {
                $contenidoCesta .= "<p>"
                        . "<span class='cantidad'>$valores[0]</span> "
                        . "<span class='codigo'>$codigo</span> "
                        . "<span class='precio'>$valores[1]</span>"
                        . "<form action='sitio.php' method='POST'>"
                        . "<input type='hidden' name='codigo' value='$codigo'>"
                        . "<input type='submit' name='cestaAccion' value='Eliminar'><br/>"
                        . "</form>"
                        . "</p>";
            }
            $contenidoCesta .= "<hr>"
                    . "<p><span class='total1'>Total:</span><span class='total2'>" . $this->calculoTotal() . "</span><br/></p>";
        }
        return $contenidoCesta;
    }

    /** Funcion que comprueba si el producto ya existe en el array productos, 
     * si no existe lo añade con sus datos y si sí solo le suma uno a su cantidad
     * @param type $precio
     * @param type $codigo
     */
    public function nuevoProd($precio, $codigo) {
        if ($this->productos[$codigo][0] > 0) {
            $this->productos[$codigo][0] ++;
        } else {
            $this->productos[$codigo][0] = 1;
            $this->productos[$codigo][1] = $precio;
        }
    }

    /** Función que comprueba la cantidad de un producto que hay en el array productos 
     * de la cesta y si es mayor que 1 le resta 1, si no el valor mínimo es 1 asique lo elimina
     * @param type $codigo
     */
    public function eliminoProd($codigo) {
        if ($this->productos[$codigo][0] > 1) {
            $this->productos[$codigo][0] --;
        } else {
            unset($this->productos[$codigo]);
        }
    }

    /** calcula el precio total a pagar cogiendo los datos del array productos
     * @return type
     */
    public function calculoTotal() {
        foreach ($this->productos as $producto => $valores) {
            $cantidad = $valores[0];
            $precio = $valores[1];
            $this->total += ($cantidad * $precio);
        }
        return $this->total;
    }

    //guardamos cesta en una variable de sesion
    public function guardaCesta() {
        $_SESSION['cesta'] = $this;
    }

    //vaciamos cesta
    public function vacia() {
        unset($this->productos);
        unset($this->total);
    }

}
