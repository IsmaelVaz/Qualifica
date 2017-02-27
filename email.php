<?php 
require_once("gerenciador/conection.php");

if(isset($_POST['cEnviar'])){
    $numInsc = rand(1000, 50000000);
    $nome = $_POST['cNome'];
    $telefone = $_POST['cTelefone'];
    $celular = $_POST['cCelular'];
    $email = $_POST['cEmail'];
    $nomeResp = $_POST['cNomeResp'];
    $telefoneResp = $_POST['cTelefoneResp'];
    $celularResp = $_POST['cCelularResp'];

    $fezCurso = $_POST['cRadioQuali'];
    $nomeInst = $_POST['cInst'];
    $investiu = $_POST['cInvestiu'];
    $concluiu = $_POST['cRadioCurso'];
        
    $nomeEscola = $_POST['cEscolaNormal'];
    
    $mensagem = "
        <fieldset>
            <p><b>Código de inscrição: </b>$numInsc</p>
            <legend>Dados do Aluno</legend>
            <p><b>Nome completo: </b>$nome</p>
            <p><b>Telefone: </b>$telefone</p>
            <p><b>Celular: </b>$celular</p>
            <p><b>E-mail: </b>$email</p>
        </fieldset>
        <fieldset>
            <legend>Dados do Responsável</legend>
            <p><b>Nome completo: </b>$nomeResp</p>
            <p><b>Telefone: </b>$telefoneResp</p>
            <p><b>Celular: </b>$celularResp</p>
        </fieldset>
        <fieldset>
            <legend>Questionário</legend>
            <p><b>Já fez curso: </b>$fezCurso</p>
            <p><b>Instituição: </b>$nomeInst</p>
            <p><b>Valor do Investimento: </b>$investiu</p>
            <p><b>Já terminou: </b>$concluiu</p>
            <p><b>Nome da escola (Ensino Médio - Fundamental): </b>$nomeEscola</p>
            <p><b>Curriculo: </b>Em Anexo</p>
        </fieldset>
    ";
    $con = Conectar();

        
    $sql = "insert into inscricao (num_inscricao, nome, telefone, celular, email, nome_resp, telefone_resp, celular_resp, ";
    $sql .="fez_curso, nome_inst, qt_investiu, ja_concluiu, nome_escola, dt_criacao) values "; 
    $sql .="($numInsc, '$nome', '$telefone', '$celular', '$email', '$nomeResp', '$telefoneResp', '$celularResp', ";
    $sql .="'$fezCurso', '$nomeInst', '$investiu', '$concluiu', '$nomeEscola', now());";

    echo($sql);
    mysqli_query($con, $sql);

    mysqli_close($con);

    /*echo($mensagem);

    $arquivoAnexo=$_FILE["cCurriculo"];

    $nome_arq=basename($_FILES['cCurriculo']['name']);

    $boundary = strtotime('NOW');
    
    $headers = "From: Qualifica Inscricao <contato@msolucaoti.com.br>\n";
    $headers .= "MIME-Version: 1.0\n";
    $headers .= "Content-Type: multipart/mixed; boundary=\"" . $boundary . "\"\n";
    
    $msg = "--" . $boundary . "\n";
    $msg .= "Content-Type: text/html; charset=\"utf-8\"\n";
    $msg .= "Content-Transfer-Encoding: quoted-printable\n\n"; 

    $msg .= $mensagem."\n";
    
    $msg .= "--" . $boundary . "\n";
    $msg .= "Content-Transfer-Encoding: base64\n";
    $msg .= "Content-Disposition: attachment; filename=\"$nome_arq\"\n\n";

    ob_start();
    readfile($_FILES['cCurriculo']['tmp_name']);
    $enc = ob_get_contents();
    ob_end_clean();

    $msg_temp = base64_encode($enc). "\n";
    $tmp[1] = strlen($msg_temp);
    $tmp[2] = ceil($tmp[1]/76);

    for ($b = 0; $b <= $tmp[2]; $b++) {
        $tmp[3] = $b * 76;
        $msg .= substr($msg_temp, $tmp[3], 76) . "\n";
    }

    unset($msg_temp, $tmp, $enc);

    mail("qualificamenoraprendiz@hotmail.com", "Inscricao Qualifica", $msg, $headers);
    header("location:index.html?finalizado");*/
}
?>