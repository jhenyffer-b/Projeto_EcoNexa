<!DOCTYPE html>
<html lang="pt_br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EcoNexa 🌿</title>
</head>
<body style="background-color:#DFF0D8;color:#000; text-align:center;">
    <table border="1" style="width: 100%"> 
        <img src="econexa.png" alt="EcoNexa"
            style="width: 100%; height: 650px; object-fit: fill;">
            <br><br>
            <h2>Cadastro EcoNexa 🌿</h2>
    <thead> 
            <tr> 
                <th>Email</th> 
                <th>Senha</th> 
                <th>Resíduo</th> 
                <th>Setor</th> 
            </tr> 
            <tr> 
                <td style="text-align: center;"><?= $email ?></td> 
                <td  style="text-align: center;"><?= $senha?></td> 
                <td  style="text-align: center;"><?=$residuos?></td> 
                <td  style="text-align: center;"><?= $setor?></td> 
           </tr> 
            
        </thead>  
    </table> 
</body> 
</html>