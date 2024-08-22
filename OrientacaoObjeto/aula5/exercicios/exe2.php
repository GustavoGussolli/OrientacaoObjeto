<?php 

class Pokemon {

    public $numeroPokedex;
    public $nome;
    public $tipo;
    public $tipoNatureza;
    public $qtdVida;
    public $qtdAtaque;
    public $qtdDefesa;
    public $qtdVelocidade;
    public $movimento1;
    public $movimento2;
    public $movimento3;
    public $movimento4;

    function usarMovimento() {
        echo "Vai " . $this->nome . " use o " . $this->movimento1 . "\n";
        echo "Vai " . $this->nome . " use o " . $this->movimento2 . "\n";
        echo "Vai " . $this->nome . " use o " . $this->movimento3 . "\n";
        echo "Vai " . $this->nome . " use o " . $this->movimento4 . "\n";
    }

    function chamarPokemon() {
        echo "Vai " . $this->nome . ", eu escolho você \n";
    }

    function mostrarCaracteristica() {
        echo "Nome do pokémon: " . $this->nome . "\n";
        echo "Número da Pokédex: " . $this->numeroPokedex . "\n";
        echo "Tipo do pokémon: " . $this->tipo . "\n";
        echo "Natureza do pokémon: " . $this->tipoNatureza . "\n";
        echo "Quantidade de ataque: " . $this->qtdAtaque . "\n";
        echo "Quantidade de defesa: " . $this->qtdDefesa . "\n";
        echo "Quantidade de velocidade: " . $this->qtdVelocidade . "\n";
        echo "Movimento 1: " . $this->movimento1 . "\n";
        echo "Movimento 2: " . $this->movimento2 . "\n";
        echo "Movimento 3: " . $this->movimento3 . "\n";
        echo "Movimento 4: " . $this->movimento4 . "\n";
    }

}

echo "--------------------------------------- \n";

$p1 = new Pokemon;
$p1->numeroPokedex = 006;
$p1->nome = "Charizard";
$p1->tipo = "Fogo";
$p1->tipoNatureza = "Calmo";
$p1->qtdVida = 156;
$p1->qtdAtaque = 109;
$p1->qtdDefesa = 101;
$p1->qtdVelocidade = 122;
$p1->movimento1 = "Dragon Claw";
$p1->movimento2 = "Flamethrower";
$p1->movimento3 = "Overheat";
$p1->movimento4 = "Fire Blast";

echo "Pokémon 1: \n";

$p1->chamarPokemon();
$p1->mostrarCaracteristica();
$p1->usarMovimento();

echo "--------------------------------------- \n";

$p2 = new Pokemon;
$p2->numeroPokedex = 130;
$p2->nome = "Gyarados";
$p2->tipo = "água";
$p2->tipoNatureza = "Hostil";
$p2->qtdVida = 175;
$p2->qtdAtaque = 151;
$p2->qtdDefesa = 101;
$p2->qtdVelocidade = 133;
$p2->movimento1 = "Blizzard";
$p2->movimento2 = "Dragon Rage";
$p2->movimento3 = "Hydro Pump";
$p2->movimento4 = "Surf";

echo "Pokémon 2: \n";

$p2->chamarPokemon();
$p2->mostrarCaracteristica();
$p2->usarMovimento();