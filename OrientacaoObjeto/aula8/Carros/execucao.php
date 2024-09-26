<?php 

    require_once("modelo/Carro.php");
    require_once("modelo/Fabricante.php");

    $ListaFabricante = array();

    $volks = new Fabricante();
    $volks->setNome("Volkswagem");
    $volks->setSigla("VW");

    $chevrolet = new fabricante();
    $chevrolet->setNome("Chevrolet");
    $chevrolet->setSigla("GM");

    $fiat = new Fabricante();
    $fiat->setNome("Fiat");
    $fiat->setSigla("F");

    $renault = new Fabricante();
    $renault->setNome("Renault");
    $renault->setSigla("RN");

    array_push($ListaFabricante, $volks, $chevrolet, $fiat , $renault);


    $ListaCarros = array();
    $indiceRemocao = 1;
    
    do{

        echo "------------------- \n";
        echo "1 - Cadastrar Carro \n";
        echo "2 - Excluir Carro \n";
        echo "3 - Listar Carros \n";
        echo "0 - Sair \n";
        
        $escolha = readline("Escolha: ");
       
        switch($escolha){

            case '0':
                echo "Programa Encerrado! \n";
                break;

            case '1';
                
                $c = new Carro();
                $c->setModelo(readline("Informe o Modelo: "));
                $c->setAnoFabricacao(readline("Informe o Ano de Fabricação: "));

                $fabri = new fabricante;
                $fabri->setSigla(readline("Informe a sigla: "));

                foreach($ListaFabricante as $f){

                    if($fabri->getSigla() == $f->getSigla()){

                        echo "Sigla certa \n";
                        $c->setFabricante($f);

                    } else{

                        $fabri->setSigla(readline("Informe a sigla: "));
                    }
                }

                array_push($ListaCarros, $c);

                break;

            case '2';
                array_splice($ListaCarros, $indiceRemocao, 1);
                break;

            case '3';
                foreach($ListaCarros as $car){

                    echo "Modelo: " . $car->getModelo() . "\n";
                    echo "Ano de Fabricação: " . $car->getAnoFabricacao() . "\n";
                    echo "Fabricante: " . $car->getFabricante()->getNome() . "\n";
                    echo "Sigla do Fabricante: " . $car->getFabricante()->getSigla() . "\n";
                }
                break;
            
            default:
                echo "Opção Invalida! \n";
                break;
        }
    } while ($escolha != 0);