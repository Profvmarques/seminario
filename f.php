<?php

require("controles/index.php");

Processo('login');

?>

<input type="text" value="<? echo $_SERVER["REMOTE_ADDR"]; ?>" />

<?php echo 'Senha: '. base64_decode($_GET['senha']); ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PSS - FUNDEC</title>
<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
<script src="js/Validacaoform.js"></script>
<style>
* { font-size:16px; }
h1 { font-size:22px; }
h3 { background-color:#337ab7; color:#fff; font-size:18px; padding:10px; margin:15px 0; border-radius:5px; }
li { list-style:none; } 
.box-top { margin:15px; padding:1px 10px 10px !important; border-radius:8px; background-color:#d3d7d9; text-align:right; }
.box-top h2 { font-size:22px; text-align:left;}
.box-top span { font-size:14px; font-weight:bold; color:#545454; display:block; text-align:left;}
.box-top p { font-size:14px;  font-weight:bold; color:#000; text-align:left;}
p.at { font-weight:normal; }
.box-top a.bt { text-align:right !important; padding-bottom:10px;}

.box-bottom { margin:15px; padding:10px; border-radius:8px; background-color:#d3d7d9;}
.box-bottom p { font-size:14px; text-align:left; }
.panel-heading h3 { margin:0px; padding:10px 0;}
.footer { width:1024px; text-align:center; margin:0 auto; }
.footer p { font-size:14px; margin:15px 0; }
</style>
</head>
<body>
<div id="content" style="width:1024px; margin:0 auto; text-align:center;"> 
  <img src="img/logo_h.png" height="75" style="margin-bottom:20px">
  <div class="box-content" style="border:1px solid #000; border-radius:10px 10px 0 0; display:block; overflow:hidden;  ">
    <div class="left" style="width:75%; float:left; text-align:left; padding:5px 15px;">
      <h1>Processo Seletivo Simplificado - PSS</h1>
      <h3>PSS</h3>
      <ul>
        <li><a href="../arquivos/2017/EDITAL_001_2017.PDF" target="_blank">EDITAL N.&ordm; 001 DO PROCESSO SELETIVO SIMPLIFICADO N.&ordm; 01/2017</a></li>
        <li><a href="../arquivos/2017/ERRATA_I.PDF" target="_blank"title="">ERRATA I</a></li>
        <li><a href="../arquivos/2017/ERRATA_II.PDF" target="_blank"title="">ERRATA II</a></li>
        <li><a href="../arquivos/2017/ERRATA_III.PDF" target="_blank"title="">ERRATA III</a></li>
		<li><a href="../arquivos/2017/ERRATA_IV.jpg" target="_blank"title="">ERRATA IV</a></li>
		<li><a href="../arquivos/2017/ERRATA_V.PDF" target="_blank"title="">ERRATA V</a></li>		
        <!--- <li><a href="default.php?pg=<?php echo base64_encode('view/candidatos/incluir.php');?>&cadastro=1" title="" ><strong>FA&Ccedil;A SUA INSCRI&Ccedil;&Atilde;O</strong></a></li> ---> 
        
         
        <li></br></li>
         <li><a href="#" title="" style="color:#bfbdbd; text-decoration:none; cursor:text;">INSCRI&Ccedil;&Otilde;ES ENCERRADAS</a></li>
		 <!--<li><a href="../arquivos/2017/HOMOLOGACAO_INSCRICAO.PDF" title="" target="_blank">PUBLICA&Ccedil;&Atilde;O PR&Eacute;VIA DA HOMOLOGA&Ccedil;&Atilde;O DAS INSCRI&Ccedil;&Otilde;ES</a></li>
         <li><a href="../arquivos/2017/RECURSO.PDF" title="" target="_blank">FICHA PARA O RECURSO</a></li>
		 <li><a href="../arquivos/2017/HOMOLOGACAO_FINAL_INSCRICAO.PDF" title="" target="_blank">PUBLICA&Ccedil;&Atilde;O FINAL DA HOMOLOGA&Ccedil;&Atilde;O DAS INSCRI&Ccedil;&Otilde;ES</a></li><li></br></li>
		 <li><a href="../arquivos/2017/CONVOCACAO_APROV_08-03.PDF" target="_blank"title=""> CONVOCAÇÃO DOS APROVADOS NA ETAPA I PARA A ETAPA II / DIA: 08/03/2017</a></li><li></br></li>
		 <li><a href="../arquivos/2017/CONVOCACAO_APROV_09-03.PDF" target="_blank"title=""> CONVOCAÇÃO DOS APROVADOS NA ETAPA I PARA A ETAPA II / DIA: 09/03/2017</a></li><li></br></li>
		 <li><a href="../arquivos/2017/CONVOCACAO_APROV_10-03.PDF" target="_blank"title=""> CONVOCAÇÃO DOS APROVADOS NA ETAPA I PARA A ETAPA II / DIA: 10/03/2017</a></li><li></br></li>
		 <li><a href="../arquivos/2017/CONVOCACAO_APROV_13-03.PDF" target="_blank"title=""> CONVOCAÇÃO DOS APROVADOS NA ETAPA I PARA A ETAPA II / DIA: 13/03/2017</a></li><li></br></li>
		 <li><a href="../arquivos/2017/CONVOCACAO_APROV_14-03.PDF" target="_blank"title=""> CONVOCAÇÃO DOS APROVADOS NA ETAPA I PARA A ETAPA II / DIA: 14/03/2017</a></li><li></br></li>
		 <li><a href="../arquivos/2017/ENTREVISTA.PDF" title="" target="_blank">PUBLICA&Ccedil;&Atilde;O FINAL DOS CLASSIFICADOS NA ENTREVISTA</a></li>
         <li><a href="../arquivos/2017/RECURSO.PDF" title="" target="_blank">FICHA PARA O RECURSO</a></li>
		 <li><a href="../arquivos/2017/APOS_RECURSO.PDF" title="" target="_blank">LISTAGEM FINAL AP&Oacute;S O RECURSO</a></li>-->
         <li><a href="../arquivos/2017/FINAL.PDF" title="" target="_blank">RESULTADO FINAL DO PROCESSO SELETIVO SIMPLIFICADO N&ordm;. 001/2017 – EDITAL N&ordm;. 001/2017</a></li>
       
         <!--<li><a href="EDITAL_PRORROGACAO.pdf" title="">EDITAL DE PRORROGA&Ccedil;&Atilde;O DO PRAZO DE INSCRI&Ccedil;&Atilde;O</a></li>
       <li><a href="HOMOLOGACAO_INSCRICAO.pdf" title="" target="_blank">EDITAL DE HOMOLOGA&Ccedil;&Atilde;O DAS INSCRI&Ccedil;&Otilde;ES</a></li>-->
        <!-- <li><a href="previainscricao.pdf" target="_blank" title=""  style="color:#FF0000; text-decoration:none; cursor:text; ">PARA TER ACESSO AO RECURSO DO EDITAL, BASTA IDENTIFICAR-SE ABAIXO</a></li>-->
      </ul>
      <div class="panel panel-primary" style="margin-top:30px;">
        <div class="panel-heading">
          <h3> Emitir  Ficha / Atualiza&ccedil;&atilde;o de dados</h3>
        </div>
        <div class="panel-body">
          <div class="container-fluid">
            <form class="form-horizontal" id="form" name="form" action="" method="post" role="form">
              <div class="form-group">
                <div class="row-fluid">
                  <div class="cols-sm-2">
                    <input type="text" name="cpf" id="cpf" class="form-control" title="O campo CPF é obrigatório" placeholder="Informe seu CPF" autocomplete="off" />
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row-fluid">
                  <div class="cols-sm-1">
                    <input name="senha" type="password" class="form-control" id="senha" title="Informe sua senha" placeholder="Informe sua senha" autocomplete="off"/>
                  </div>
                </div>
              </div>
              <div class="form-group">
                <div class="row-fluid">
                  <div class="cols-sm-4">
                    <button type="button" class="btn btn-primary  btn-block" onClick="validar(document.form);">Entrar</button>
                  </div>
                </div>
                <hr/>
                <p class="clearfix"><span class="style1"><a  class="goto-forgot pull-left">Perdeu a senha?</a></span></p> 
                <span class="style1">
                  <input name="ok" type="hidden" id="ok"/>
                </span><span class="style1"> </span> </span></span></div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="right" style="float:right; width:25%;">
      <div class="box-top" style="">
        <h2>Contato</h2>
        <p><span>E-mail:</span>pss@fundec.rj.gov.br</p>
        <p><span>Central de Atendimento:</span>(21) 2672-5650</p>
        <p class="at"><span>Hor&aacute;rio de Atendimento:</span>de segunda a sexta-feira,<br />das 9 &agrave;s 17 horas</p>
        <a href="https://www.google.com.br/maps/place/Av.+Brg.+Lima+e+Silva,+131+-+Parque+Duque,+Duque+de+Caxias+-+RJ/@-22.8004456,-43.2946393,17z/data=!3m1!4b1!4m2!3m1!1s0x997af78fdbce9b:0x81cd2b2ffa780b88" class="bt" target="_blank">Como Chegar</a>
      </div>
      <div class="box-bottom">
      <p><img src="img/logo_adobe.jpg" style="margin-right:10px;" />Para visualizar os arquivos <b>.PDF</b> é necessário ter instalado o programa <i><b>Adobe Acrobat Reader</b></i>. Caso n&atilde;o tenha instalado, <span style="font-size:16px; font-weight:bold;"><a href="http://get.adobe.com/br/reader/otherversions/" target="_blank" >Clique Aqui</a></span> para fazer download.</p>
      </div>
    </div>
  </div>
  <!--box-content-->
</div>
<!--content-->

<div class="footer">
<p>FUNDEC - Funda&ccedil;&atilde;o de Apoio &agrave; Escola T&eacute;cnica, Ci&ecirc;ncia, Tecnologia, Esporte, Lazer, Cultura e Pol&iacute;ticas Sociais de Duque de Caxias - RJ<br />
Av. Brigadeiro Lima e Silva, 131 - Parque Duque - Duque de Caxias CEP 25085-131 - Tel.:21-2672-5650.</p>
</div>
<script>window.jQuery || document.write('<script src="assets/jquery/jquery-1.10.1.min.js"><\/script>')</script>
<script src="assets/bootstrap/bootstrap.min.js"></script>
<script type="text/javascript">

            function goToForm(form)

            {

                $('.login-wrapper > form:visible').fadeOut(500, function(){

                    $('#form-' + form).fadeIn(500);

                });

            }

            $(function() {

                $('.goto-login').click(function(){

                    goToForm('login');

                });

                $('.goto-forgot').click(function(){

                    goToForm('forgot');

                });

                $('.goto-register').click(function(){

                    goToForm('register');

                });

            });

        </script>
</body>
</html>