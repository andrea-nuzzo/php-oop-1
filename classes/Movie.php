<?php
    class Movie {
        public $title;
        public $year;
        public $runtime;
        public $genre;
        public $director;
        public $actor;

        public function __construct($_title, $_year, $_runtime, $_genre, $_director, $_actor)
        {
            $this->title = $this->setTitle($_title);

            // Controllo il dato dell'anno di uscita direttamente nel construct
            if($_year >= 1878){
                $this->year = $_year;
            } else{
                //Se l'anno di uscita è inferiopre al 1878 (primo film mai uscito) sollevo un eccezione
                throw new Exception('The movie could not have been released before 1878');
            }
            
            $this->runtime = $_runtime;
            $this->genre = $_genre;
            $this->director = $_director;
            $this->actor = $_actor;
        }
        
        // Dichiaro una funzione che userà all'interno del __construct per controllare l'inserimento titolo
        public function setTitle($_title)
        {   
            // Se il titolo è inferiore a 3 caratteri sollevo un eccezione
            if(strlen($_title) < 3 ){
                throw new Exception("The movie's title cannot be less than 3 characters");
            }
            return $_title;
        }
    }
?>