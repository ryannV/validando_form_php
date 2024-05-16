<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <!-- Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .rounded-input {
            border-radius: 10px;
        }
        .custom-btn {
            background-color: #007bff;
            color: white;
            border-radius: 20px;
            padding: 10px 20px;
        }
        .custom-btn:hover {
            background-color: #0056b3;
        }
    </style>
</head>

<body>
    <main class="container mt-5">
        <?php
            $nome = $_POST["nome"];
            $email = $_POST["email"];
            $senha = $_POST["senha"];
            $idade = $_POST["idade"];
            $tele = $_POST["tel"];
            $end = $_POST["end"];
            $genero = $_POST["genero"];

            // CheckBox
            $options = [];

            if (!empty($_POST["option"])) {
                $options = $_POST["option"];
            }

            // Radio
            if (!empty($_POST["opcao"])) {
                $res_radio = htmlspecialchars($_POST["opcao"]);
            }
        ?>

        <h2 class="text-center">Dados Recebidos do Formulário</h2>

        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="atualiza_form.php" method="post">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="nome">Nome</label>
                                <input type="text" class="form-control rounded-input" id="nome" name="nome" value="<?php echo $nome; ?>">
                            </div>
                            <div class="form-group">
                                <label for="email">E-mail</label>
                                <input type="email" class="form-control rounded-input" id="email" name="email" value="<?php echo $email; ?>">
                            </div>
                            <div class="form-group">
                                <label for="senha">Senha</label>
                                <input type="password" class="form-control rounded-input" id="senha" name="senha" value="<?php echo $senha; ?>">
                            </div>
                            <div class="form-group">
                                <label for="idade">Idade</label>
                                <input type="text" class="form-control rounded-input" id="idade" name="idade" value="<?php echo $idade; ?>">
                            </div>
                            <div class="form-group">
                                <label for="tele">Telefone</label>
                                <input type="text" class="form-control rounded-input" id="tele" name="tel" value="<?php echo $tele; ?>">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="end">Endereço</label>
                                <input type="text" class="form-control rounded-input" id="end" name="end" value="<?php echo $end; ?>">
                            </div>
                            <div class="form-group">
                                <label for="genero">Gênero</label>
                                <select class="form-control rounded-input" id="genero" name="genero">
                                    <option value="Masculino" <?php echo $genero == "Masculino" ? 'selected' : ''; ?>>Masculino</option>
                                    <option value="Feminino" <?php echo $genero == "Feminino" ? 'selected' : ''; ?>>Feminino</option>
                                    <option value="Não informar" <?php echo $genero == "Não informar" ? 'selected' : ''; ?>>Não informar</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="interesse">Interesse</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="esporte" name="option[]" value="Esporte" <?php echo in_array("Esporte", $options) ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="esporte">Esporte</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="musica" name="option[]" value="Música" <?php echo in_array("Música", $options) ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="musica">Música</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="checkbox" id="tecnologia" name="option[]" value="Tecnologia" <?php echo in_array("Tecnologia", $options) ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="tecnologia">Tecnologia</label>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="opcao">Escolha uma opção</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="op01" name="opcao" value="op01" <?php echo $res_radio == "op01" ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="op01">Opção 01</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" id="op02" name="opcao" value="op02" <?php echo $res_radio == "op02" ? 'checked' : ''; ?>>
                                    <label class="form-check-label" for="op02">Opção 02</label>
                                </div>
                            </div>
                            <button type="submit" class="btn custom-btn">Enviar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </main>

    <!-- Bootstrap JS, Popper.js, and jQuery -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
