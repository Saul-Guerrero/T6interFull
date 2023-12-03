<?php 
    class User {
        private $id;
        private $nombre;
        private $apellido;
        private $cedula;

        public function __construct(
            $idp, 
            $nombrep, 
            $apellidoP, 
            $cedulap)
        {
            $this->id =$idp;
            $this->nombre = $nombrep;
            $this->apellido = $apellidoP;
            $this->cedula = $cedulap;
        }

        public function getId() {
            return $this->id;
        }

        public function getName() {
            return $this->nombre;
        }

        public function getLastName() {
            return $this->apellido;
        }

        public function getIdNumber() {
            return $this->cedula;
        }

    }
?>