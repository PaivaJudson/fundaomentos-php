<?php

class EstoqueInsuficienteException extends LogicException{}

class CarrinhoDeCompra{

    public function addicionarProduto($produto, $quantidade){
        if(!$this->verificarEstoqueInsuficiente($quantidade)){
            throw new EstoqueInsuficienteException("Quantidade Insuficiente do Produto ". $produto);
        }
    }

    public function verificarEstoqueInsuficiente($quantidade){
        $estoqueDisponivel = 10;
        if($quantidade <= $estoqueDisponivel){
            return true;
        }
        return false;
    }
}



try{
    $carrinho = new CarrinhoDeCompra();
    $carrinho->addicionarProduto("RedBull", 15);

}catch(EstoqueInsuficienteException $e){
    echo '<p>Mensagem: '. $e->getMessage() . '</p>';
}