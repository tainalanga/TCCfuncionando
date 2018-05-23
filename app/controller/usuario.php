<?php 
    class Usuario{

        public $tpl;
        public $templates;

        public function __construct($tpl, $templates){
            $this->tpl = $tpl;
            $this->templates = $templates;
        }

        public function returnTemplate(){
            return $this->tpl;
        }

        public function checarLogin(){
            // if blablabla
            $this->tpl->CONTENT = $this->templates['perfilLocator'];
        }
    }