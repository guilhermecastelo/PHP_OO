<?php
    class Conexao{

        function conectar(){
            $conexao = mysqli_connect("localhost", "root", "", "sistescolar_poo");

            if(!$conexao){
                echo "Ocorreu um erro ao conectar.";
            }else{
                return $conexao;
            }
        }
    }
?>