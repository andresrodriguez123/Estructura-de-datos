<?php
    class Nodo
    {
        public $dato;
        public $siguiente;

        public function __construct($dato) 
        {
            $this->dato = $dato;
            $this->siguiente = null;
        }
    }
    class ListaEnlazada
    {
        public $cabeza;
        public function __construct()
        {
            $this -> cabeza = null;
        }
        public function insertar($dato)
        {
            $nuevoNodo = new Nodo($dato);
            $nuevoNodo -> siguiente = $this->cabeza;
            $this->cabeza = $nuevoNodo;

        }
        public imprimirHTML()
        {
            $actual = $this->cabeza;
            echo "<ul>";
            While($actual != null)
            echo "<li>.$actual.</li>";
            $actual = $actual->siguiente;
            echo "<ul>";
        }
    }
?>