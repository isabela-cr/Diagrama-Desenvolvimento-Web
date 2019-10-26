<?php
public class leite extends produto implements perecivel{

            // TODO Auto-generated method stub

        private $marca;
        private $volume;
        private $dataValidade;
        private $dataAtual("d-m-y");

      public function __construct leite( $codigo, $preco, $marca, $volume, $dataValidade) {
            $this->marca = $marca;
            $this->volume = $volume;
            $this->dataValidade = $dataValidade;
      }
      public function getMarca() {
          return $this->marca;
      }
      public function setMarca($marca) {
          $this->marca = $marca;
      }
      public function getVolume() {
        return $this->volume;
      }
      public setVolume($volume){
        $this->volume = $volume;
      }

      public function getDataValidade() {
          return $this->dataValidade;
      }
      public function setDataValidade($dataValidade) {
          $this->dataValidade = $dataValidade;
      }
      public function getDataAtual() {
        return $this->dataAtual;
      }
      public setDataAtual($dataAtual){
        $this->dataAtual = $dataAtual;
      }  

      public estaVencido() {
      	   if ($dataValidade < $dataAtual){
      	   return true;
      }else{
        return false;
      }
  }
}