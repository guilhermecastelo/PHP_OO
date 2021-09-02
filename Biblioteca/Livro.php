<?php
    require_once 'Pessoa.php';
    require_once 'Publicacao.php';

    class Livro implements Publicacao{
        //ATRIBUTOS
        private $titulo;
        private $autor;
        private $totPaginas;
        private $pagAtual;
        private $aberto;
        private $leitor;

        //MÉTODO CONSTRUTOR
        function __construct($titulo, $autor, $totPaginas, $leitor){
            $this->titulo = $titulo;
            $this->autor = $autor;
            $this->totPaginas = $totPaginas;
            $this->pagAtual = 0;
            $this->aberto = false;
            $this->leitor = $leitor;
        }

        //MÉTODOS ESPECIAIS
        public function getTitulo()
        {
            return $this->titulo;
        }
        public function setTitulo($titulo)
        {
            $this->titulo = $titulo;
        }

        public function getAutor()
        {
            return $this->autor;
        }
        public function setAutor($autor)
        {
            $this->autor = $autor;
        }

        public function getTotPaginas()
        {
            return $this->totPaginas;
        }
        public function setTotPaginas($totPaginas)
        {
            $this->totPaginas = $totPaginas;
        }

        public function getPagAtual()
        {
            return $this->pagAtual;
        }
        public function setPagAtual($pagAtual)
        {
            $this->pagAtual = $pagAtual;
        }

        public function getAberto()
        {
            return $this->aberto;
        }
        public function setAberto($aberto)
        {
            $this->aberto = $aberto;
        }

        public function getLeitor()
        {
            return $this->leitor;
        }
        public function setLeitor($leitor)
        {
            $this->leitor = $leitor;
        }

        //MÉTODOS PERSONALIZADOS
        public function abrir(){
            $this->aberto = true;
        }
        public function fechar(){
            $this->aberto = false;
        }
        public function folhear($pag){
            if($pag > $this->totPaginas){
                $this->pagAtual = $this->totPaginas;
            }else{
                $this->pagAtual = $pag;
            }
        }
        public function avancarPag(){
            if($this->pagAtual != $this->totPaginas){
                $this->pagAtual++;
            }
        }
        public function voltarPag(){
            if($this->pagAtual != 0){
                $this->pagAtual--;
            }
        }      
        public function detalhes(){
            echo "Livro: " . $this->titulo . " escrito por: " . $this->autor .
            "<br> Qtde. Páginas: " . $this->totPaginas . " atual: " . $this->pagAtual . " sendo lido por: " .
            $this->leitor->getNome() . "<hr>";
            // $this->leitor->getNome() : Pega o nome do leitor que foi passado via método construtor

            /* Explicação completa:
               - O 'leitor' que já é uma classe que possui métodos foi passado via método construtor.
                Então, posso pegar esta variável 'leitor' e chamar um dos métodos dessa classe. 
            */
        }
    }
?>