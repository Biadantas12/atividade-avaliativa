<?php
require 'Fatura.php';


//Demostração da classe Fatura
$fatura = new Fatura();
$fatura->setNumero("123");
$fatura->setDescricao("Teclado mecânico");
$fatura->setQuantidade(2);
$fatura->setPrecoPorItem(50.99);

echo "Número da Fatura: " . $fatura->getNumero() . "\n";
echo "Descrição: " . $fatura->getDescricao() . "\n";
echo "Quantidade: " . $fatura->getQuantidade() . "\n";
echo "Preço por Item: $ " . $fatura->getPrecoPorItem() . "\n";
echo "Total da Fatura: $" . $fatura->getTotalFatura() . "\n";

?>