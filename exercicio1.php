<?php

class Venda
{
    private $data;
    private $produto;
    private $quantidade;
    private $valorTotal;

    public function __construct($data,$produto,$quantidade,$valorTotal)
    {
        $this->data=$data;
        $this->produto=$produto;
        $this->quantidade=$quantidade;
        $this->valorTotal=$valorTotal;
    }
    public function statusVenda()
    {
        return " Resumo da Compra ". $this ->data .
        "<br>".$this->produto.
        "<br>Quantidade ". $this-> quantidade.
        "<br>Valor Total da compra R$: ".$this->valorTotal;        
    }
        
    public function totalCompra($valor,$qtd)
    {  
        $this->valorTotal= $valor*$qtd; 
           
    }
    
}
$venda =new Venda("09/07/2022","perfume",1,0,);

echo $venda->totalCompra(700,2);
echo "<br>";
echo $venda->statusVenda();
echo "<br>";




?>