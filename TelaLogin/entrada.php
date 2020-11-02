<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Tela Login | Rui Vergani Neto</title>
  
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
   
    <!--Import materialize.css-->
    <link rel="stylesheet" type="text/css" href="css/materialize.min.css" media="screen,projection"/>
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Orbitron" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">


    <!-- Scripts -->
    <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
      <script src="js/init.js"></script>
    
      <link rel="icon" href="images/icon.png"/>
      <style type="text/css">
      #preload
      {
       display: block ;
      }
      #posload
      {
       display: none;
      }
      div#button button.btn{
       height: 32px !important;
       line-height: 32px !important;
       padding: 0 1rem !important;
      }
      </style>
      <script type="text/javascript">
      function muda_p_carregado()
      {
       document.getElementById("posload").style.display = "block";
       document.getElementById("preload").style.display = "none";
      }
      </script>
</head>

<body onload="muda_p_carregado()" class="login login-background">
    <div id="preload">
      <div class="preloader-wrapper big active center-align">
           <div class="spinner-layer spinner-red">
             <div class="circle-clipper left">
               <div class="circle"></div>
             </div><div class="gap-patch">
               <div class="circle"></div>
             </div><div class="circle-clipper right">
               <div class="circle"></div>
             </div>
           </div>
      </div>
    </div>
    <div id="posload" class="row">
      <div class="container">
        <div style="margin-top:10%" class="row">
          <div class="col s6 offset-s3">
            <div id="cardpanel" class="card-panel hoverable grey lighten-5">
              <h4 class="center-align">Login</h4>
              <!-- Formulário -->
              <form method="POST" action="entrada.php">
                <div class="input-field col s12">
                   <input id="usuario" name="usuario" type="text" class="validate" minlength="6" maxlength="20">
                   <label for="usuario">Usuário</label>
                </div>

                <div class="input-field col s12">
                    <input id="senha" name="senha" type="password"  class="validate" minlength="6" maxlength="16">
                    <label for="password">Senha</label>
                 </div>
                
                <div id="button"> 
                  <div class="left">
                    <button type="reset" class="btn waves-effect waves-light blue-grey lighten-1" name="action">Limpar 
                        <i class="material-icons right">clear</i>
                    </button>

                    <button type="submit" class="btn waves-effect waves-light  blue-grey lighten-1 tooltipped" data-position="bottom"  data-delay="50" data-tooltip="Serviço não disponível!" name="action">Esqueci Senha! 
                    </button>
                  </div>

                  <div class="right">
                    <button class="btn waves-effect waves-light modal-trigger green accent-4" href="#modal1" type="submit" name="action">Enviar
                      <i class="material-icons right">send</i>
                    </button>
                  </div>
                </div>

                </div>
               </form>
                <?php 
                  if (empty($_POST['usuario']) && empty($_POST['senha'])) {
                    echo " ";
                  }
                  else{
                    $usuario = $_POST['usuario'];
                    $senha = $_POST['senha'];

                    $encriptar = md5($senha);
          
                    #Modal Structure
                    echo "<div id='modal1' class='modal'>";
                    echo "<div class='modal-content'>";
                    echo "<h4 class='center-align'>Sistema de Login</h4>";
                    echo "<span>Bem Vindo:</span> $usuario <br> <span>Senha Codificada:</span> $encriptar <br><span>Seu Login será ativado em:</span> " .date('d/m/Y', strtotime(' + 1 week', time()));
                    echo "</div>";
                    echo "<div class='modal-footer'>";
                    echo "<a href='#!'' class='modal-action modal-close waves-effect waves-green btn-flat'>Fechar</a>";
                    echo "</div>";
                    echo "</div>";
                  } 
                ?>
              <script>
                $(document).ready(function(){
                $('.modal').modal();
              });
              </script>
              
            </div>
          </div>
        </div>   
      </div>
  </div>
</body>
</html>