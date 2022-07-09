<?php
//Criar uma classe
class ContaBancaria
{
    //criar um parametro ou ATRIBUTO.
    private $banco;
    private $nomeTitular;
    private $numeroAgencia;
    private $numeroConta;
    private $saldo;

    //criar metodo COnstrutor
    public function __construct($banco, $nomeTitular, $numeroAgencia, $numeroConta, $saldo)
    {
        $this -> banco = $banco;
        $this -> nomeTitular = $nomeTitular;
        $this -> numeroAgencia = $numeroAgencia;
        $this -> numeroConta = $numeroConta;
        $this -> saldo = $saldo;
    }
    

    //criar os Metodo simples(acoes)

    public function obterSaldo()
    {
       return "Seu saldo é: R$ " .$this-> saldo;
    }
    public function depositar($valor)
    {
        $this -> saldo +=$valor;
        return "O valor de deposito é R$ ".$valor. " realizado com sucesso!";
    }
    public function sacar($valor)
    {
        $this->saldo -= $valor;
        return "O valor de saque é R$  ".$valor. " realizado com sucesso!";
    }
}
//Criar um novo Objeto(new contabancaria)
$conta = new ContaBancaria(
   "Santander", //banco
   "Giovanni Silva", //nometitular
    "794489",//numeroagencia
    "12345",//numeroconta
    0,//saldo

);

echo $conta->obterSaldo();
echo "<br>";
echo $conta->depositar(300.00);
echo "<br>";
echo $conta->obterSaldo();
echo "<br>";
echo $conta->sacar(250.00);
echo "<br>";
echo $conta->obterSaldo();









?>