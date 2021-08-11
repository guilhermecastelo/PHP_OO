<?php
    interface Publicacao{
        //MÉTODOS PERSONALIZADOS
        public function abrir();
        public function fechar();
        public function folhear($pag);
        public function avancarPag();
        public function voltarPag();
    }
?>