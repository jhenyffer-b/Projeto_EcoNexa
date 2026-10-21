<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoNexa 🌿</title>
</head>

<body style="background-color:#FFF; text-align:center;">
    <form action="logica.php" method="POST">

        <img src="econexa.png" alt="EcoNexa"
            style="width: 100%; height: 650px; object-fit: fill;">

            <div style="background-color:#DFF0D8; padding:30px;"> <!-- <div> agrupa os três elementos e aplica o fundo verde -->



        <h1 style="color:#000;"> Acesse sua conta</h1>
        <p>Faça login para continuar</p>

        <label>E-mail</label>
        <br>
        <input type="text" name="email" required>

        <br><br>

        <label>Senha</label>
        <br>
        <input type="password" name="senha" required>
        <br><br>
         <input type="checkbox" id="notificacoes" name="notificacoes">Lembrar de mim
        <hr>
         <h2 style="color:#000;">Cadastro de Resíduos</h2>
            <br>
            <label for="residuos">Cadastro de Resíduos</label>
			<br>
			<select name="residuos" id="residuos" required>
				<option value="">Selecione...</option>
				<option value="Aluminio">Alumínio</option>
				<option value="Aço">Aço</option>
				<option value="Ferro">Ferro</option>
                <option value="Caixa">Caixa</option>
                <option value="Aparas">Aparas</option>
                <option value="Embalagem">Embalagens</option>
			</select>
        <br><br>
        <label for="setor">Setores</label>
			<br>
			<select name="setor" id="setor" required>
				<option value="">Selecione...</option>
				<option value="Corte">Corte</option>
				<option value="Montagem">Montagem</option>
				<option value="Coleta">Coleta</option>
                <option value="Reciclagem">Reciclagem</option>
                <option value="Manutenção">Manutenção</option>
			</select>
            <br><br>
       <input type="submit" value="Cadastrar">



        