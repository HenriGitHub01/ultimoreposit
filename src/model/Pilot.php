<?php
 namespace App\model;

 class Pilot{
  public $nome;
  public $idade;
  public $equipe;
  public $numeroCarro;

  public function __construct($nome, $idade, $equipe, $numeroCarro){
    $this->nome = $nome;
    $this->idade = $idade;
    $this->equipe = $equipe;
    $this->numeroCarro = $numeroCarro;
  }

 };