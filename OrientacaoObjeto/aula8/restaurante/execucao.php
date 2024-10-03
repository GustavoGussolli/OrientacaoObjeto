<?php 

    require_once("modelo/Pedido.php");
    require_once("modelo/Prato.php");

    $listaPratos = array();

    $p1 = new Prato();
    $p1->setNumero(1);
    $p1->setNome("Camarão á Milanesa");
    $p1->setValor(110);

    $p2 = new Prato();
    $p2->setNumero(2);
    $p2->setNome("Pizza Margherita");
    $p2->setValor(80);

    $p3 = new Prato();
    $p3->setNumero(3);
    $p3->setNome("macarrão á Carbonara");
    $p3->setValor(60);

    $p4 = new Prato();
    $p4->setNumero(4);
    $p4->setNome("Bife á Parmegiana");
    $p4->setValor(75);

    $p5 = new Prato();
    $p5->setNumero(5);
    $p5->setNome("Risoto ao Funghi");
    $p5->setValor(70);

    array_push($listaPratos, $p1, $p2, $p3, $p4, $p5);

    $listaPedidos = array();
    $indiceRemocao = 1;
    $valorTotal = 0;

    do{

        echo "-----Bona Comida-----\n";
        echo "1 - Cadastrar\n";
        echo "2 - Cancelar\n";
        echo "3 - Listar\n";
        echo "4 - Total de Vendas\n";
        echo "0 - Sair \n";
        
        $escolha = readline("Escolha: ");
       
        switch($escolha){

            case '0':
                echo "Programa Encerrado! \n";
                break;

            case '1';

                $pedido = new Pedido();
                $pedido->setNomeCliente(readline("Informe o nome do Cliente: "));
                $pedido->setNomeGarcom(readline("Informe o nome do Garçom: "));
                
                $prato = new Prato();
                $validacao = false;

                while($validacao == false){

                    $prato->setNumero(readline("Informe o numero do Prato: "));

                    foreach($listaPratos as $p){
                        
                        if($prato->getNumero() == $p->getNumero()){

                            echo "pedido realizado com sucesso! \n";
                            $pedido->setPrato($p);
                            array_push($listaPedidos, $pedido);
                            $validacao = true;
                        }
                    }

                    if($validacao == false){
                        echo "Numero errado \n";
                    }
                }

                break;

            case '2';

                foreach($listaPedidos as $p){
                    echo "Pedido do cliente: " . $p->getNomeCliente() . " do valor: R$" . $p->getPrato()->getValor()."\n";
                }

                $indiceRemocao = readline("Informe qual pedido excluir: ");

                array_splice($listaPedidos, $indiceRemocao, 1);
                echo "Pedido Deletado com Sucesso! \n";
                break;

            case '3';

                foreach($listaPedidos as $p){

                    echo "O cliente " . $p->getNomeCliente() . " foi atendido pelo garçom " . $p->getNomeGarcom() .  
                    " pediu um prato de " . $p->getPrato()->getNome(). " no valor de R$ " . $p->getPrato()->getValor() . "\n";
                
                }
                    break;

            case '4';

                foreach($listaPedidos as $p){
                    $valorTotal += $p->getPrato()->getValor();
                }

                echo "Valor total dos Pedidos: " . $valorTotal . "\n";
                break;
            
            default:
                echo "Opção Invalida! \n";
                break;
        }
    } while ($escolha != 0);