<?php
public class DVD extends produto {

  private $titulo;
  private $ano;


public function __construct leite( $codigo, $preco, $titulo, $ano) {
            $this->titulo = $titulo;
            $this->ano = $ano;
      }
public getTitulo() {
  return $titulo;
}  
public setTitulo($titulo) {
  $this->titulo = $titulo;
}
public getAno() {
  return $ano;
}
public  setAno($ano) {
  $this->ano = $ano;
 }

}