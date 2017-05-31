<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Curso de PHP - Tipos de Validação</title>
    </head>
    <body>
        <h3>Disparando Erros</h3>
        <hr>
        
        
        <?php
        //$uso = '98765432109';
        //$cpf = '';
        //$cpf = '500';
        //$cpf = $uso;
        //$cpf = 'abc';
                
        if (!$cpf):
            trigger_error("Informe seu CPF", E_USER_NOTICE);
        elseif($cpf == '500'):
            trigger_error("Não é um formato Válido", E_USER_DEPRECATED);
        elseif($cpf == $uso):
            trigger_error("CPF em Uso!", E_USER_WARNING);
        elseif(!preg_match('/^[0-9]*$/i', $cpf) && strlen($cpf) != 11):
            trigger_error("CPF Inválido!", E_USER_ERROR);
        else:
            echo "CPF Válido!";
        endif;
        
        echo " :)";  //essa caretinha é só para teste.
        echo "<hr>";
        
        function Erro($Erro, $Mensagem, $Arquivo, $Linha){
            $erro = ($Erro == E_USER_ERROR ? 'red' : ($Erro == E_USER_WARNING ? 'darkorange' : 'blue'));
            echo "<p style='color:{$erro}'>Erro na Linha # {$Linha}: {$Mensagem}<br>";
            echo "<small>{$Arquivo}</small></p>";
            
            if($Erro == E_USER_ERROR):
              die;
            endif;
            
        }
        
        set_error_handler('Erro');
        
        $uso = '98765432109';
        $cpf = '';
        $cpf = '500';
        $cpf = $uso;
        $cpf = 'abc';
                
        if (!$cpf):
            trigger_error("Informe seu CPF", E_USER_NOTICE);
        elseif($cpf == '500'):
            trigger_error("Não é um formato Válido", E_USER_DEPRECATED);
        elseif($cpf == $uso):
            trigger_error("CPF em Uso!", E_USER_WARNING);
        elseif(!preg_match('/^[0-9]*$/i', $cpf) && strlen($cpf) != 11):
            trigger_error("CPF Inválido!", E_USER_ERROR);
        else:
            echo "CPF Válido!";
        endif;
        
        echo " :)";  //essa caretinha é só para teste.
        
        ?>
        
        
    </body>
</html>