<?php

require("controles/index.php");

Processo('login');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UNIG</title>
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
  <img src="img/unig.png" height="75" style="margin-bottom:20px">
  <div class="box-content" style="border:1px solid #000; border-radius:10px 10px 0 0; display:block; overflow:hidden;  ">
    <div class="left" style="width:75%; float:left; text-align:left; padding:5px 15px; text-align:center">
      <img src="img/slogo.png" height="250" />
      <li style="margin-top:30px;"><a href="default.php?pg=<?php echo base64_encode('view/candidatos/incluir.php');?>&cadastro=1" title="" ><strong>CADASTRE-SE</strong></a></li>
      <div class="panel panel-primary" style="margin-top:30px;"> 
        <div class="panel-heading" style="">
          <h3> Inscri&ccedil;&atilde;o</h3>
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
                    <button type="button" class="btn btn-primary  btn-block" onclick="validar(document.form);">Entrar</button>
                  </div>
                </div>
                <hr/>
                <p class="clearfix"><span class="style1"><a href="esqueceusenha.php" class="goto-forgot pull-left">Perdeu a senha?</a></span></p>
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
        <p><span>E-mail:</span>email@unig.br</p>
        <p><span>Central de Atendimento:</span>(21) ????-????</p>
        <p class="at"><span>Hor&aacute;rio de Atendimento:</span>de segunda a sexta-feira,<br />das 9 &agrave;s 17 horas</p>
        <a href="https://www.google.com.br/maps/dir//unig/@-22.7615805,-43.4773308,16z/data=!4m8!4m7!1m0!1m5!1m1!1s0x99676fff6d8d75:0x5600068e74b09e7a!2m2!1d-43.473663!2d-22.7593334" class="bt" target="_blank">Como Chegar</a>
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
<p><b>Universidade Iguaçu</b><br />
Av. Abílio Augusto Távora, 2134 - Jardim Nova Era, Nova Iguaçu - RJ, 26275-580</p>
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