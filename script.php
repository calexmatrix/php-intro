<?php

session_start();

$categorias = [];
$categorias[] = 'infantil';
$categorias[] = 'adolescente';
$categorias[] = 'adulto';
$categorias[] = 'idoso';

$nome = $_POST['nome'];
$idade = $_POST['idade'];

if(empty($nome))
{
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio, por favor preencha-o novamente.';
    header(" Location: /index.php");
    //$extra  = 'index.php';
    //header(" Location: $extra");
    //header(string:'location: index.php');
    return;
    //echo 'O nome não pode ser vazio';
    
}

else if(strlen($nome) < 3)
{
    $_SESSION['mensagem-de-erro'] = 'O nome deve conter mais de 3 caracteres, por favor preencha-o novamente.';
    header(" Location: /index.php");
    //$extra  = 'index.php';
    //header(" Location: $extra");
    //echo 'O nome deve conter mais de 3 caracteres';
    return;
    
}

else if(strlen($nome) > 40)
{
    $_SESSION['mensagem-de-erro'] = 'O nome deve conter menos de 40 caracteres, por favor preencha-o novamente.';
    // $extra  = 'index.php';
    header(" Location: /index.php");
    //header(string:'location: index.php');
    // echo 'O nome deve conter menos de 40 caracteres, muito extenso  ';
   return;
    
}

else if(!is_numeric($idade))
{
    $_SESSION['mensagem-de-erro'] = 'Informe um numero para idade, por favor preencha-o novamente.';
    header(" Location: /index.php");
    //$extra  = 'index.php';
    //header(" Location: $extra");
    //header(string:'location: index.php');
    // echo 'Informe um numero para idade. ';
   return;
}

if($idade >= 6 && $idade <= 12)
{
     for($i =0; $i <= count($categorias); $i++)
     {
        if($categorias[$i] == 'infantil'){
            $_SESSION['mensagem-de-sucesso'] = 'O nadador ', $nome , 'compete na categoria infantil ';
            header(" Location: /index.php");

        }
        //echo "O nadador ", $nome , " compete na categoria infantil";
        return;    
        }
}
else if($idade >= 13 && $idade <= 18)
{
    for($i =0; $i <= count($categorias); $i++)
     {
        if($categorias[$i] == 'adolescente'){
            $_SESSION['mensagem-de-sucesso'] = "O nadador ", $nome , " compete na categoria adolescente ";
            header(" Location: /index.php");

        }
            //echo "O nadador ", $nome , " compete na categoria adolescente";
     }
}
else
{
    for($i =0; $i <= count($categorias); $i++)
    {       
        if($categorias[$i] == 'adulto'){
            $_SESSION['mensagem-de-sucesso'] = "O nadador ", $nome , " compete na categoria adulto ";
            header(" Location: /index.php");

        }

        //   echo "O nadador ", $nome , " compete na categoria adulto";
    }
}

?>