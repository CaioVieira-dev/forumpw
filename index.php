
<?php
        $dataNascimento = $_POST['dataNascimento'];
        $data = new DateTime($dataNascimento);
        $dataSigno = $data->format('m-d');
        $xml = simplexml_load_file('index.xml');
        ?>
<!doctype html>
<html lang="pt-BR">
<head>
    <meta charset="utf-8">
    <title>Procure seu signo</title>
</head>

<body>
    <?php
        foreach ($xml->signo as $retorno) :
            $str_inicio =(string) $retorno->dataInicio[0];
            $str_fim = (string)$retorno->dataFim[0];
            $tInicio = str_replace('/','-',$str_inicio);
            $tFim = str_replace('/','-',$str_fim);
            
            $dI = substr($str_inicio, 0,2);
            $mI = substr($str_inicio,-2);
            $dF = substr($str_fim,0,2);
            $mF = substr($str_fim,-2);

            $dataInicio =DateTime::createFromFormat('m-d',$mI.'-'.$dI);
            $dataFim = DateTime::createFromFormat('m-d',$mF.'-'.$dF);
            $fDataInicio =$dataInicio->format('m-d');
            $fDataFim = $dataFim->format('m-d');

        if ($dataSigno >= $fDataInicio and $dataSigno <= $fDataFim) {
                echo'<div> <h2> O seu signo é: </h2>' . (string)$retorno->signoNome. '</div>';
                echo'<div><h4>Descrição</h4>' . (string) $retorno->descricao . '</div>';
            }
        endforeach;       
    ?>
</body>
</html>