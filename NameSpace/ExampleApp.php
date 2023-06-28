<?php

class EstoqueInsuficienteException extends LogicException{

    protected $produto;

    public function __construct($produto, $message = "", $code = 0, Throwable $previous = null)
    {
        $this->produto = $produto;
        
        if(empty($message)){
            $message = "Estoque insuficiente para o produto ". $produto;
        }

        parent::__construct($message, $code, $previous);
    }

    public function getProduto()
    {
        return $this->produto;
    }

}


class CarrinhoDeCompras{

    private $estoque = [
        'Camiseta' => 5,
        'Calça' => 10,
        'Boné' => 3
    ];


    public function adicionarProduto($produto, $quantidade){

        if(!isset($this->estoque[$produto])){
            throw new InvalidArgumentException("Produto Invalido: ". $produto);
        }

        if ($this->estoque[$produto] < $quantidade) {
            throw new EstoqueInsuficienteException($produto);
        }

        $this->estoque[$produto] -= $quantidade;
        return "<p>Produto adicionado ao carrinho: ". $produto . " quantidade: ". $quantidade ." </p>";
    }

    
    public function exibirEstoque(){
        $message = '<p>Estoque Disponível </p>';
        echo '<p>Estoque Disponível </p>';
        
        foreach ($this->estoque as $produto => $quantidade) {
            echo "<p>". $produto ." : " . $quantidade ."</p>";
        }
        
        // return $message;
    }

}

try{

    $sessao_compra = new CarrinhoDeCompras();

    echo $sessao_compra->adicionarProduto("Camiseta", 4);
    echo $sessao_compra->exibirEstoque();


}catch(EstoqueInsuficienteException $e){
    echo "Erro de estoque: " . $e->getMessage() . "<br>";
    echo "Produto com estoque insuficiente: " . $e->getProduto() . "<br>";
} catch (InvalidArgumentException $e) {
    echo "Erro de argumento: " . $e->getMessage() . "<br>";
}
