<!DOCTYPE html>
<html lang="pt-br">


<head>
    <?php
    session_start();
    session_destroy();
    ?>
    <title>Sangue Bom</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="CSS/cadastro.css">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;300;400;700&display=swap" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.com/libraries/jquery.mask"></script>

    <style>
        .active {
            display: block !important
        }
        
        ;
    </style>
</head>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>

<nav class="topo">
    <aside class="div1">
        <div id="div1">
            <h1 class="titulo"> CADASTRO </h1>
            <hr style="width: 90%;">
            <form action="php/enviadados.php" method="post" id="formCadastrar" onsubmit="return validarLogin();">

            <fieldset class="grupo">
                <br>
                <header class="campo">
                    <label for="nome">Nome</label>
                    <input type="text" id="NOME_USUARIO" name="NOME_USUARIO" autofocus required>
                </header>
                <header class="campo">
                    <label for="snome">Sobrenome</label>
                    <input type="text" id="SOBRENOME_USUARIO" name="SOBRENOME_USUARIO" required>
                </header><br>
            </fieldset>
            <br>
            <header class="campo">
                <label>Sexo</label>
                <label>
                    <input type="radio" name="SEXO" value="m" required> Masculino
                    <input type="radio" name="SEXO" value="f" required> Feminino
                    <input type="radio" name="SEXO" value="o" required> Outro
                </label>
                <br>
            </header>
            <header class="campo">
                <label for="nome">CPF</label>
                <input type="text" id="CPF" name="CPF" autocomplete="off" maxlength="14" required>
                <?php
                if(isset($_SESSION['msg'])){
                echo $_SESSION['msg'];
                unset($_SESSION['msg']);
                }
                ?>
            </header>
            <header class="campo">
                <label for="snome">RG</label>
                <input type="text" id="RG" name="RG" autocomplete="off" maxlength="12" onkeyup="mascara_rg()">
            </header>
            <br>
            <fieldset class="grupo">
                <header class="campo">
                    <label for="estado">Data de Nascimento</label>
                    <input type="date" class="form-control" id="DATA_NASCIMENTO" name="DATA_NASCIMENTO" required>
                </header>
                <header class="campo">
                    <label type="text" for="estado">Tipo de Sangue</label>
                    <select type="text" name="SANGUE" id="SANGUE">
                    <option value="9">Não sei</option>
                    <option value="1">A+</option>
                    <option value="2">A-</option>
                    <option value="3">B+</option>
                    <option value="4">B-</option>
                    <option value="5">AB+</option>
                    <option value="6">AB-</option>
                    <option value="7">O+</option>
                    <option value="8">O-</option>
                </select>
                </header>
            </fieldset>
            <br>
            <header class="campo">
                <label for="telefone">Telefone</label>
                <input type="tel" id="NUM_TELEFONE" name="NUM_TELEFONE" autocomplete="off" maxlength="12" onkeyup="val()" style="width: 100%" required>
                <br><a href="div2"><button class="button1" name="submit" type="submit">Próximo</button></a>
            </header>

        </div>
        <div id="div2" class="luiz">
            <h1 class="titulo"> CADASTRO </h1>
            <hr style="width: 90%;">
            <br>
            <fieldset class="grupo" style="width: 100%;">
                <header class="campo">
                    <label for="nome">CEP</label>
                    <input type="text" id="CEP" name="CEP">
                </header>

                <header class="campo">
                    <label for="estado">Estado</label>
                    <select id="ESTADO" name="ESTADO" required>
                        <option value="AC">Acre</option>
                        <option value="AL">Alagoas</option>
                        <option value="AP">Amapá</option>
                        <option value="AM">Amazonas</option>
                        <option value="BA">Bahia</option>
                        <option value="CE">Ceará</option>
                        <option value="DF">Distrito Federal</option>
                        <option value="ES">Espírito Santo</option>
                        <option value="GO">Goiás</option>
                        <option value="MA">Maranhão</option>
                        <option value="MT">Mato Grosso</option>
                        <option value="MS">Mato Grosso do Sul</option>
                        <option value="MG">Minas Gerais</option>
                        <option value="PA">Pará</option>
                        <option value="PB">Paraíba</option>
                        <option value="PR">Paraná</option>
                        <option value="PE">Pernambuco</option>
                        <option value="PI">Piauí</option>
                        <option value="RJ">Rio de Janeiro</option>
                        <option value="RN">Rio Grande do Norte</option>
                        <option value="RS">Rio Grande do Sul</option>
                        <option value="RO">Rondônia</option>
                        <option value="RR">Roraima</option>
                        <option value="SC">Santa Catarina</option>
                        <option value="SP">São Paulo</option>
                        <option value="SE">Sergipe</option>
                        <option value="TO">Tocantins</option>
                        <option value="EX">Estrangeiro</option>
                 </select>
                </header>
            </fieldset>
            <br>
            <fieldset class="grupo">
                <header class="campo">
                    <label for="cidade">Cidade</label>
                    <input type="text" id="CIDADE" name="CIDADE" required>
                </header>
                <header class="campo">
                    <label for="snome">Bairro</label>
                    <input type="text" id="BAIRRO" name="BAIRRO" required>
                </header>
            </fieldset>
            <br>
            <fieldset class="grupo">
                <header class="campo">
                    <label for="nome">Rua</label>
                    <input type="text" id="RUA" name="RUA" required>
                </header>
                <header class="campo">
                    <label for="snome">Numero</label>
                    <input type="text" id="NUMERO" name="NUMERO" required>
                </header>
            </fieldset>
            <br>
            <header class="campo">
                <label for="complemento">Complemento</label>
                <input type="text" id="COMPLEMENTO_USUARIO" name="COMPLEMENTO_USUARIO" required>
            </header>
            <br>
            <br>
            <header class="campo">
                <label for="email">E-mail</label>
                <input type="text" id="EMAIL_USUARIO" name="EMAIL_USUARIO" required>
            </header>
            <br>
            <fieldset class="grupo">
                <header class="campo">
                    <label for="password">Senha</label>
                    <input type="password" id="SENHA_USUARIO" name="SENHA_USUARIO" required>
                </header>
                <header class="campo">
                    <label for="password">Senha</label>
                    <input type="password" id="SENHA_USUARIO2" name="SENHA_USUARIO2" required>
                </header>
            </fieldset>
            <br>
            <a href="div1"><button class="button1" name="submit2" >Voltar</button></a></li><br>
            <button class="button1" name="submit" type="submit">Cadastro</button>
        </div>
    </form>

        <div id="senhaErro">As senhas não Correspondem!</div>
        <div id="Cpf invalido, insira um correto">As senhas não Correspondem!</div>



        <script src="JS/jquery-3.5.1.min.js"></script>
        <script src="JS/jquery.mask.js"></script>
        <script>
        $(document).ready(function(){
        $('#CPF').mask('000.000.000-00', {reverse: false});
        $('#CEP').mask('00000-000');
    
    })


        </script>
        <script src="JS/validaData.js"></script>
        <script src="JS/mascarasCampos.js"></script>
        <script src="JS/validarSenha.js"></script>
        <script src="JS/cep.js"></script>
        <script>
            $(function() {

                $("div").css("display", "none");
                $("div#div1").addClass("active");

                $("a").on("click", function(e) {
                    e.preventDefault();

                    $("div").removeClass("active");
                    var id = $(this).attr("href");
                    $("#" + id + "").addClass("active");

                });
            });
        </script>



        </body>

</html>