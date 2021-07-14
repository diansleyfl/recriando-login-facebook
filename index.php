<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!--Tags para SEO-->
    <meta name="description" content="Recriando página inicial do Facebook" >
    <meta name="keywords" content="facebook" >
    <meta name="author" content="Diansley Fernandes de Lima" >

    <link rel="stylesheet" href="./assets/css/style.css">
    
    <title>Login Facebook</title>
</head>


<body>

    <header>

        <div class="center">

            <div class="logo">
                <h2>facebook</h2>
            </div> <!--logo-->

            <form method="post" class="form-login">

                <div class="form-element">
                    <p>Email ou telefone:</p>
                    <input type="email">
                </div> <!--form-element-->

                <div class="form-element">
                    <p>Senha:</p>
                    <input type="email">
                </div> <!--form-element-->

                <div class="form-element">
                    <input type="submit" name="acao" value="Entrar">
                </div> <!--form-element-->

            </form> <!--form-login-->

            <div class="clear"></div>

        </div> <!--center-->

    </header>


    <section class="main">

        <div class="center">

            <div class="background">
                <img src="./assets/img/background-facebook.png" alt="imagem de fundo tela inicial facebook">
            </div> <!--background-->

            <div class="abrir-conta">

                <h2>Abra sua conta</h2>
                <h3>É gratuito e sempre será.</h3>

                <form action="" class="criar-conta">

                    <div class="w50">
                        <input placeholder="Nome" type="text">
                    </div> <!--w50-->

                    <div class="w50">
                        <input placeholder="Sobrenome" type="text">
                    </div> <!--w50-->

                    <div class="w100">
                        <input placeholder="Celular ou email" type="email">
                    </div> <!--w100-->

                    <div class="w100">
                        <input placeholder="Nova senha" type="password">
                    </div> <!--w100-->

                    <div class="w100">

                        <h2>Data de nascimento</h2>

                        <select name="nascimento-dia" class="nascimento">
                            <?php
                                for($i=1; $i <= 31; $i++) {
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>

                        <select name="nascimento-mes" class="nascimento">
                            <option value="1">Janeiro</option>
                            <option value="2">Fevereiro</option>
                            <option value="3">Março</option>
                            <option value="4">Abril</option>
                            <option value="5">Maio</option>
                            <option value="6">Junho</option>
                            <option value="7">Julho</option>
                            <option value="8">Agosto</option>
                            <option value="9">Setembro</option>
                            <option value="10">Outubro</option>
                            <option value="11">Novembro</option>
                            <option value="12">Dezembro</option>
                        </select>

                        <select name="nascimento-ano" class="nascimento">
                        <?php
                                for($i=1900; $i <= 2021; $i++) {
                            ?>
                            <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>

                        <div class="clear"></div>
                    </div> <!--w100-->

                    <div class="w100">
                        <div class="input-radio">
                            <input type="radio" name="sexo" value="masculino">
                            <h2>Masculino</h2>
                        </div> <!--input-radio-->
                        <div class="input-radio">
                            <input type="radio" name="sexo" value="feminino">
                            <h2>Feminino</h2>
                        </div> <!--input-radio-->
                        <div class="clear"></div>
                    </div>

                    <div class="w100">
                        <input type="submit" name="acao" value="Cadastre-se">
                    </div> <!--w100-->

                </form> <!--criar-conta-->

            </div> <!--abrir-conta-->

            <div class="clear"></div>

        </div> <!--center-->

    </section> <!--main-->

    <section class="linguas">
        <div class="center">
            <a class="selected-lingua" href="#">Português (BR)</a>
            <a href="#">Português (BR)</a>
            <a href="#">English (US)</a>
            <a href="#">Español</a>
            <a href="#">Français (France)</a>
            <a href="#">Italiano</a>
            <a href="#">Deutsch</a>
            <a href="#">العربية</a>
            <a href="#">हिन्दी</a>
            <a href="#">中文(简体)</a>
            <a href="#">日本語</a>
        </div> <!--center-->
    </section> <!--linguas-->

    <section class="links">
        <div class="center">
            <a href="#">Cadastre-se</a>
            <a href="#">Entrar</a>
            <a href="#">Messenger</a>
            <a href="#">Facebook Lite</a>
            <a href="#">Celular</a>
            <a href="#">Encontrar amigos</a>
            <a href="#">Pessoas</a>
            <a href="#">Páginas</a>
            <a href="#">Locais</a>
            <a href="#">Jogos</a>
            <a href="#">Locais</a>
            <a href="#">Marketplace</a>
            <a href="#">Vídeos</a>
            <a href="#">Grupos</a>
            <a href="#">Receitas</a>
            <a href="#">Esportes</a>
            <a href="#">Look</a>
            <a href="#">Moments</a>
            <a href="#">Instagram</a>
            <a href="#">Local</a>
            <a href="#">Sobre</a>
            <a href="#">Criar anúncio</a>
            <a href="#">Criar página</a>
            <a href="#">Desenvolvedores</a>
            <a href="#">Carreiras</a>
            <a href="#">Privacidade</a>
            <a href="#">Cookies</a>
            <a href="#">Opções do anúncio</a>
            <a href="#">Termos</a>
            <a href="#">Ajuda</a>

            <p>Facebook © 2021</p>
        </div> <!--center-->
    </section> <!--links-->
   
</body>


<script src="./assets/js/script.js"></script>

</html>