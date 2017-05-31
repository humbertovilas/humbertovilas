<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso de PHP - Tipos de Validação</title>
    </head>
    <body>
        <h3>Tratamento por Existência</h3>
        <hr>
        
        
        <?php
        $string = 'contato';
        $string = 3;
        $string = '';
        
        if (is_string($string)):
            echo "String é uma string";
        elseif (!is_string($string)):
            echo "String não é uma string";
        endif;
        
        echo '<hr>';
        
        if (!empty($string)):
            echo "String Existe e Tem Valor";
        elseif (isset($string)):
            echo "String Existe mais está em branco";
        endif;       
        ?>
        <hr><hr>
        <h3>Tomada de Decisão</h3>
        <hr>
        
        <?php
        $decisao = 'curso@upinside.com.br';
        if (!filter_var($decisao, FILTER_VALIDATE_EMAIL)):
            echo "E-mail informado é inválido";
        elseif ($decisao == 'campus@upinside.com.br'):
            die('Esse e-mail é restrito. Repare que não mostrou :), porque o die interrope o programa');
        else:
            echo "E-mail Válido!";
        endif;
        
        echo " :)";
        ?>
        
        <hr><hr>
        <h3>Retorno de Flag - é dado por verdadeiro ou falso, usa uma função para auxiliar</h3>
        <hr>
        
        <?php
        function Idade($idade = null){
            if(!$idade):
                return false;
            elseif(!is_int($idade)):
                return false;
            endif;
            
            return "Você nasceu em : " . (date('Y') - $idade);
        }
        
        $idade = 'abs';
        $idade = 46;
        
        if(Idade($idade)):
            echo Idade($idade);
        else:
            echo "Erro, informe um número correspondente à idade";
        endif;
        ?>
        
        <hr><hr>
        <h3>Comparação</h3>
                
        <?php
        echo 'Varificando se as variáveis são IGUAIS';
        echo '<br>';
        $um = 10;
        $dois = '10';
        
        if($um == $dois):
            echo "Variável Um tem o mesmo valor da Variável dois";
        elseif($um != $dois):
            echo "Variável Um tem valor diferente da Variável dois";
        endif;
        echo '<hr>';
        echo 'Varificando se as variáveis são do mesmo TIPO';
        echo '<br>';
        
        $a = 10;
        $b = 10;
        
         if($a === $b):
            echo "Variável Um tem o mesmo valor da Variável dois e são do mesmo tipo";
        elseif($um !== $dois):
            echo "Variável Um e Variável dois, tem valor ou tipo diferentes ";
        endif;
        
        ?>
    </body>
</html>