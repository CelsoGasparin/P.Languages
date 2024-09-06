<?php

$livro1 = [
    "Nome" => "S.",
    "DataPublicacao" => "29/10/2013",
    "Editora" => "Mulholland Books",
    "Edicao" => "1",
    "Autores" => "J.J. Abrams, Doug Dorst",
    "Pags" => "472",
];
$livro2 = [
    "Nome" => "Journal 29",
    "DataPublicacao" => "01/02/2017",
    "Editora" => "Primedia eLaunch LLC",
    "Edicao" => "1",
    "Autores" => "Dimitris Chassapakis",
    "Pags" => "148",
];
$livro3 = [
    "Nome" => "Influence",//O nome é mais longo eu só não quero extender isso muito
    "DataPublicacao" => "04/05/2021",
    "Editora" => "Harper Business",
    "Edicao" => "Expanded",//ERA OQUE TAVA ESCRITO
    "Autores" => "Robert B. Cialdini",
    "Pags" => "592",
];
$livro4 = [
    "Nome" => "House of Leaves",
    "DataPublicacao" => "07/03/2000",
    "Editora" => "Pantheon",
    "Edicao" => "2",
    "Autores" => "Mark Z. Danielewski",
    "Pags" => "736",
];
$livros = array($livro1,$livro2,$livro3,$livro4);

ExibDados($livros);


function ExibDados($dados){
    foreach($dados as $dado){
        print $dado['Nome']." | ".$dado["DataPublicacao"]." | ".$dado['Editora']." | ".$dado['Edicao']." | ".$dado['Autores']." | ".$dado['Pags']."\n";
    }
}
