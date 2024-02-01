<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ClientesModel;
use Carbon\Carbon;

class ClienteSeed extends Seeder
{
    public static $nomes = [
        "João" => "M",
        "Maria" => "F",
        "Pedro" => "M",
        "Ana" => "F",
        "Lucas" => "M",
        "Beatriz" => "F",
        "Mateus" => "M",
        "Lara" => "F",
        "Gustavo" => "M",
        "Isabela" => "F",
        "Enzo" => "M",
        "Laura" => "F",
        "Rafael" => "M",
        "Manuela" => "F",
        "Guilherme" => "M",
        "Mariana" => "F",
        "Arthur" => "M",
        "Camila" => "F",
        "Davi" => "M",
        "Sophia" => "F",
        "Thiago" => "M",
        "Lorena" => "F",
        "Matheus" => "M",
        "Julia" => "F",
        "Henrique" => "M",
        "Larissa" => "F",
        "Samuel" => "M",
        "Isabella" => "F",
        "Daniel" => "M",
        "Yasmin" => "F",
        "Vitor" => "M",
        "Heloísa" => "F",
        "Vinícius" => "M",
        "Gabriela" => "F",
        "Leonardo" => "M",
        "Lívia" => "F",
        "Eduardo" => "M",
        "Marina" => "F",
        "Murilo" => "M",
        "Letícia" => "F",
        "Cauã" => "M",
        "Luna" => "F",
        "Pedro Henrique" => "M",
        "Isabel" => "F",
        "Felipe" => "M",
        "Ana Clara" => "F",
        "Pietro" => "M",
        "Clara" => "F",
    ];
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $quantity = 100;
        $start = 1;
        while ($start <= $quantity) {
            $name = self::fakename();
            $surname = self::fakesurname();
            ClientesModel::create([
                'Nome'=>$name.' '.$surname,
                'email'=>self::fakemail($name, $surname),
                'cpf'=> self::fakedoc(),
                'nascimento'=>self::fakenasc(),
                'cep'=>self::fakecep(),
                'sexo'=>self::$nomes[$name],
            ]);
            $start++;
        }
    }
    public static function fakedoc()
    {
        $stepOne = rand(0, 9).rand(0, 9).rand(0, 9);
        $stepTwo = rand(0, 9).rand(0, 9).rand(0, 9);
        $stepThree = rand(0, 9).rand(0, 9).rand(0, 9);
        $stepFour = rand(0, 9).rand(0, 9);
        return $stepOne.$stepTwo.$stepThree.$stepFour;
    }
    public static function fakename()
    {
        return array_rand(self::$nomes);
    }
    public static function fakesurname()
    {
        $sobrenomes = [
            "Silva",
            "Santos",
            "Oliveira",
            "Souza",
            "Rodrigues",
            "Ferreira",
            "Alves",
            "Pereira",
            "Gomes",
            "Carvalho",
            "Martins",
            "Rocha",
            "Ribeiro",
            "Lima",
            "Barbosa",
            "Costa",
            "Freitas",
            "Melo",
            "Nascimento",
            "Araújo",
            "Cavalcanti",
            "Cruz",
            "Cardoso",
            "Sousa",
            "Nunes",
            "Coelho",
            "Teixeira",
            "Moura",
            "Pinto",
            "Moreira",
            "Cunha",
            "Mendes",
            "Marques",
            "Fernandes",
            "Castro",
            "Monteiro",
            "Viana",
            "Farias",
            "Dias",
            "Pereira",
            "Correia",
            "Tavares",
            "Bastos",
            "Lopes",
            "Magalhães",
            "Andrade",
            "Macedo",
            "Gonçalves",
            "Saraiva",
            "Freire",
            "Machado",
            "Barros",
            "Azevedo",
            "Morais",
            "Carneiro",
            "Vieira",
            "Freitas",
            "Fialho",
            "Leal",
            "Aragão",
            "Coutinho",
            "Dutra",
            "Bezerra",
            "Garcia",
            "Peixoto",
            "Braga",
            "Reis",
            "Fogaça",
            "Lima",
            "Correa",
            "Albuquerque",
            "Xavier",
            "Vargas",
            "Pacheco",
            "Couto",
            "Rezende",
            "Duarte",
            "Campos",
            "Moraes",
            "Menezes",
            "Bastos",
            "Vasconcelos",
            "Maia",
            "Rocha",
            "Guedes",
            "Franco",
            "Siqueira",
            "Gomes",
            "Ramos",
            "Rocha",
            "Dias",
            "Borges",
            "Pontes",
            "Almeida",
            "Machado",
        ];
        return $sobrenomes[array_rand($sobrenomes)].' '.$sobrenomes[array_rand($sobrenomes)];
    }
    public static function fakemail($name, $surname)
    {
        $simbol = ['.', '_', '-'];
        $providers =['@hotmail.com','@bol.com.br', '@gmail.com', '@uol.com.com', '@yahoo.com.br', '@terra.com.br'];
        return $name.$simbol[array_rand($simbol)].explode(' ', $surname)[1].$providers[array_rand($providers)];

    }
    public static function fakenasc()
    {
        $d = Carbon::create(rand(1965, 2001), rand(1, 12), rand(1, 31), 0);
        return $d->toDateString();
    }
    public static function fakecep()
    {
        $cepStart = 1000;
        $cepSend = 9999;
        $street = rand(1, 999);
        return str_pad(rand($cepStart, $cepSend), 5, '0', STR_PAD_LEFT).str_pad($street, 3, '0', STR_PAD_LEFT);
    }
}
