<!DOCTYPE html>
<html lang="pt-br">
<head>	
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Noto+Sans&family=Yatra+One&display=swap" rel="stylesheet">
	<link href="style.css" rel="stylesheet" />
    <!--Tags para SEO-->
	<meta name="description" content="Clone de Login Facebook" />
	<meta name="keywords" content="clone, facebook, login" />
	<meta name="author" content="DevProCanidia" />
    <title>Login Facebook</title>

</head>
<body>
	<header>
		<div class="center">
			
			<div class="logo">
				<h2>Facebook</h2>
			</div><!--logo-->

			<form action="post" class="form-login">
				<div class="form-element"><p>Email ou telefone:</p>
					<input type="email" name="email" id="">
				</div><!--form-element-->

				<div class="form-element"><p>Senha:</p>
					<input type="password" name="senha" id="">
				</div><!--form-element-->

				<div class="form-element"><input type="submit" name="acao" value="Entrar">
				</div><!--form-element-->

			<div class="clear"></div><!--clear - limpeza da flutuação-->

			</form><!--form-login-->

		<div class="clear"></div><!--clear - limpeza da flutuação-->	
		</div><!--center-->

	</header>
		<section class="main">
			<div class="center">

				<div class="img-pessoas">
					<h3>O Facebook ajuda você a se<br>conectar e compartilhar com<br> as pessoas que fazem parte<br> da sua vida.</h3>
					<img src="img1.jpg" alt="conexão" />
				</div><!--img-pessoas-->

				<div class="abrir-conta">
					<h2>Abra sua conta</h2>
					<h3>É sempre e sempre será gratuito.</h3>

					<form action="" class="criar-conta">
						<div class="w50">
							<input type="text" placeholder="Nome" name="nome" id="">
						</div><!--w50-->

						<div class="w50">
							<input type="text" placeholder="Sobrenome" name="sobrenome" id="">
						</div><!--w50-->

						<div class="w100">
							<input type="email" placeholder="Celular ou E-mail" name="email">
						</div><!--w100-->

						<div class="w100">
							<input type="password" placeholder="Senha" name="password" id="">
						</div><!--w100-->

						<div class="w100">
							<h3>Data de Nascimento:</h3>
							<select name="nascimento-dia" id="data" class="nascimento">
                            <?php
                                for ($i=1; $i < 31 ; $i++) {
                            ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select><!--nascimento-dia-->

                        <select name="nascimento-mes" id="data" class="nascimento">
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
                        </select><!--nascimento-mes-->

                        <select name="nascimento-ano" id="data" class="nascimento">
                            <?php
                                for ($i=1940; $i <= 2021 ; $i++) {
                            ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select><!--nascimento-ano-->

                    </div>
                    <div class="w100">
                        <h3>Gênero</h3>
                        <div class="input-radio">
                            <input type="radio" value="masculino" name="sexo" id="">
                            <label for="">Masculino</label>
                        </div>

                        <div class="input-radio">
                            <input type="radio" value="feminino" name="sexo" id="">
                            <label for="">Feminino</label>
                        </div>

                        <div class="input-radio">
                            <input type="radio" value="personalizado" name="sexo" id="">
                            <label for="">Outro</label>
                        </div>

                    </div><!--w100-->

                    <div class="btn-cadastro">
                        <input type="submit" value="Cadastre-se">
                    </div><!--w50-->

                    <div class="clear"></div>

                </form><!--criar-conta-->

            </div><!--center-->

            <div class="clear"></div>

        </div><!--main-->

    </section>

    <section class="linguas">
        <div class="center">
            <nav>
                <ul>
                    <li><a class="selected" href="">Português (Brasil)</a></li>
                    <li><a href="">English (USA)</a></li>
                    <li><a href="">Espanhol (ESP)</a></li>
                    <li><a href="">França (FRA)</a></li>
                    <li><a href="">Alemanha </a></li>
                    <li><a href="">Italiano</a></li>
                    <li><a href="">Búlgaro</a></li>
                    <li><a href="">Chinese</a></li>
                    <li><a href="">Belgica</a></li>
                    <li><a href="">Deutsch</a></li>
                </ul>
            </nav>
        </div>

        <div class="center">
            <nav>
                <ul>
                    <li><a href="">Cadastre-se</a></li>
                    <li><a href="">Entrar</a></li>
                    <li><a href="">Messenger</a></li>
                </ul>
            </nav>
        </div><!--center-->

    </section><!--linguas-->

    <footer>
    <div class="creator">
			<a href="https://github.com/DevProCanidia" target="_blank" id="creador">Criado por DevProCanidia</a>
			<p style="margin: 0;">Todos os direitos reservados</p>
		</div>
    </footer>

	
</body>
</html>