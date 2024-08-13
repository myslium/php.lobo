<?php

include('conexao.php');

if (isset($_POST["inserir"])){

    $nome = $_POST["nome"];
    $tipo = $_POST["tipo"];
    $descricao = $_POST["descricao"];
    $valor_unitario = $_POST["valor_unitario"];
    $quantidade_estoque = $_POST["quantidade_estoque"];
    $cor = $_POST["cor"];
    $disponivel = $_POST["disponivel"];
        $foto = $_FILES["foto"];
        $name_foto = $_foto["name"];
        $tmp_name = $_foto["tmp_name"];
        $link_imagem = $_POST["link_imagem"];
        $descrition = 'imagens/produtos' . $nome_foto;

    if(move_uploaded_file($tmp_name, $descrition)){
        echo "Arquivos enviados co sucesso!"
    } else{
        echo "Erro ao enviar arquivos!"
    }

    $sql = "INSERT INTO produtos(
        nome, tipo, descricao, 
        valor_unitario, quntidade_estoque,
         cor, disponivel, link_imagem, foto)
    VALUES ($nome,$tipo,$descricao,
      $valor_unitario, $quantidade_estoque,
      $cor, $disponivel, '$link_imagem', '$nome_foto')";
    
    
}