<?php
class produto implements JsonSerializable {
public abstract class produto {

	private int codigo;
	private double preco;

public produto (int codigo, double preco) {
	   this.setCodigo(codigo);
	   this.setPreco(preco); 
} 
public int getCodigo() {
    return codigo;
}
public void setCodigo(int codigo) {
    this.codigo = codigo;
}
public double getPreco() {
	return preco;
}
public void setPreco(double preco) {
	this.preco = preco;
}
public static void main(String[] args) {
	 Leite leite = new Leite( 1564, 2.68, "bh", 1, "20/12/2019");

	 System.out.println("Veja os dados do produto\nCodigo do produto: " + leite.getCodigo();
	 System.out.println("Preco: R$" + leite.getPreco());
	 System.out.println("Marca: " + leite.marca);
	 System.out.println("Volume do leite: " + leite.getVolume() +"litros");
	 System.out.println("Data de vlidade: " +leite.DatadeValidade() + "\n");

	 DVD dvd = new DVD(2, 5.99, "Capital Inicial", "2000");

	 System.out.println("Veja os dados do produto\nCodigo do produto: " + dvd.getCodigo());
	 System.out.println("Preco: R$" + dvd.getPreco());
	 System.out.println("Titulo: " + dvd.getTitulo());
	 System.out.println("Ano de lançamento: " + dvd.getAno());
	 
    }

}
private $nome;
  private $telefone;
  private $procedimento;
  public function __construct($nome,$telefone,$procedimento){
    $this->nome= $nome;
    $this->telefone= $telefone;
    $this->procedimento= $procedimento;
  }

  public function setNome($nome){
           $this->nome = $nome;  
  }
public function getNome(){
           return $this->nome;
}
  public function setTelefone($telefone){
           $this->telefone = $telefone;  
  }
public function getTelefone(){
           return $this->telefone;
  }
  public function setProcedimento($procedimento){
           $this->procedimento = $procedimento;  
  }
public function getProcedimento(){
           return $this->procedimento;
}
  public function __toString(){
      $resultado =
      "Nome:" .$this->nome."<br>".
      "Telefone:" .$this->telefone."<br>".
      "Procedimento:" .$this->procedimento."<br>";
      return $resultado;
  }
public function jsonSerialize() {
 return [
  'nome' => $this->nome,
  'telefone' => $this->telefone,
  'procedimento' => $this->procedimento

           ];

}
}

class clientes extends pessoa{
public function newMethod()
{
 //echo "De um novo método na classe". __CLASS__;


}
}
 

 ("pessoa.php");
$pessoa1 = new pessoa ("Isabela",33987170,"Corte");
$pessoa2 = new pessoa("Fatima",33307077,"Escova");
$clientes = new clientes("Nome","Telefone","Procedimento");
$json = json_encode($pessoa1);
//echo $pessoa1;
echo "<br>";
echo $json;
$json = json_encode($pessoa2);
//echo $pessoa2;
echo "<br>";
echo $json;
//$clientes = newMethod;