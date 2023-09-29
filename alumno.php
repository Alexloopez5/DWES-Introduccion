<?php 
    class Alumno{
        private int $ID;
        private string $Nombre;
        private int $NumeroDeEstudiante;
        private string $FechaDeNacimiento;
        private string $CorreoElectronico;
    
        public function __construct(int $ID,string $Nombre,int $NumeroDeEstudiante,string $FechaDeNacimiento,string $CorreoElectronico)
        {
            $this->ID = $ID;
            $this->Nombre = $Nombre;
            $this->NumeroDeEstudiante = $NumeroDeEstudiante;
            $this->FechaDeNacimiento = $FechaDeNacimiento;
            $this->CorreoElectronico = $CorreoElectronico;
        }

        public function getID()
        {
                return $this->ID;
        }

        public function getNombre()
        {
                return $this->Nombre;
        }

        public function getFechaDeNacimiento()
        {
                return $this->FechaDeNacimiento;
        }

        public function getNumeroDeEstudiante()
        {
                return $this->NumeroDeEstudiante;
        }

        public function getCorreoElectronico()
        {
                return $this->CorreoElectronico;
        }

        public function setID($ID)
        {
                $this->ID = $ID;
                return $this;
        }

        public function setNombre($Nombre)
        {
                $this->Nombre = $Nombre;
                return $this;
        }

        public function setNumeroDeEstudiante($NumeroDeEstudiante)
        {
                $this->NumeroDeEstudiante = $NumeroDeEstudiante;
                return $this;
        }

        public function setFechaDeNacimiento($FechaDeNacimiento)
        {
                $this->FechaDeNacimiento = $FechaDeNacimiento;
                return $this;
        }

        public function setCorreoElectronico($CorreoElectronico)
        {
                $this->CorreoElectronico = $CorreoElectronico;
                return $this;
        }

        public function __toString() {
            return "ID: " . $this->ID . "\n" .
                   "Nombre: " . $this->Nombre . "\n" .
                   "Número de Estudiante: " . $this->NumeroDeEstudiante . "\n" .
                   "Fecha de Nacimiento: " . $this->FechaDeNacimiento . "\n" .
                   "Correo Electrónico: " . $this->CorreoElectronico;
        }
    }    
