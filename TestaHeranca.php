<?php

spl_autoload_register(function ($class_name) {
    include $class_name . '.php';
});


$gerente = new Gerente();
$gerente->nome = "João";
$gerente->salario = 15000;
$gerente->usuario = "joao";
$gerente->senha = "senha";

echo "Nome: {$gerente->nome}\n";
echo "Salário: {$gerente->salario}\n";
echo "Usuario: {$gerente->usuario}\n";
echo "Senha: {$gerente->senha}\n";

$secretaria = new Secretaria();
$secretaria->nome = "Jonas";
$secretaria->salario = 7000;
$secretaria->ramal = 6241;

echo "Secretaria: {$secretaria->nome}\n";
echo "Salário: {$secretaria->salario}\n";
echo "Ramal: {$secretaria->ramal}\n";
