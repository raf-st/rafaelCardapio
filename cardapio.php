<?php
    $dias_semana = array("Segunda-feira", "Terça-feira", "Quarta-Feira", "Quinta-feira", "Sexta-feira");
    $segunda = array("-Frango grelhado com legumes assados", "-Quinoa cozida", "-Salada de tomate, pepino e molho de iogurte");
    $terca = array("-Espaguete integral com almôndegas", "-Brócolis cozidos no vapor", "-Salada de folhas verdes");
    $quarta = array("-Feijão preto refogado", "-Chips de batata-doce assados", "-Salada de tomate");
    $quinta = array("-Macarrão com molho pesto", "-Abobrinha e cenoura assadas", "-Salada de grão-de-bico");
    $sexta = array("-Frango assado e arroz integral", "-Couve refogada", "-Salada de beterraba");
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cardápio</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
</head>

<body>
    <header>
    <div class="tit">
    <span class="material-symbols-outlined">restaurant</span>
    nutriNilMar
    <span class="material-symbols-outlined">restaurant</span></div>
    </header>
    <main class="ata">
        <div class="alinhar">
            <div class="dia"><?php echo $dias_semana[0]?></div>
            <div class="dia2"><?php echo $dias_semana[1]?></div>
            <div class="dia"><?php echo $dias_semana[2]?></div>
            <div class="dia2"><?php echo $dias_semana[3]?></div>
            <div class="dia"><?php echo $dias_semana[4]?></div>
        </div>
        <div class="alinhar2">
            <div class="refeicao"><?php 
                foreach($segunda as $valor){
                    echo $valor;
                    echo "<br/>";
                }
            ?></div>
            <div class="refeicao2"><?php 
                foreach($terca as $valor){
                    echo $valor;
                    echo "<br/>";
                }
            ?></div>
            <div class="refeicao"><?php 
                foreach($quarta as $valor){
                    echo $valor;
                    echo "<br/>";
                }
            ?></div>
            <div class="refeicao2"><?php 
                foreach($quinta as $valor){
                    echo $valor;
                    echo "<br/>";
                }
            ?></div>
            <div class="refeicao"><?php 
                foreach($sexta as $valor){
                    echo $valor;
                    echo "<br/>";
                }
            ?></div>
        </div>
    </main>
</body>
<style>
/* paleta verde e amarela */
/* Geral */
*{
    font-family:'Times New Roman', Times, serif;
    border-radius: 5px;
    text-align: center;
}
body{
    background-color: #95DB8A;
}
header{
    width: 100%;
    height: 50px;
    align-items: center;
    text-align: center;
    display: flex;
    flex-direction: row;
}
.tit{
    font-family: sans-serif;
    margin-left: 42%;
    font-size: 30px;
}
.aaa{
    margin-left: 2%;
}
.dia{
    background-color: #DBD76A;
    width: 155px;
    height: 40px;
    text-align: center;
    margin-left: 5%;
    border: solid #000 2px;
}
.dia2{
    background-color: #89DB69;
    width: 155px;
    height: 40px;
    text-align: center;
    margin-left: 5%;
    border: solid #000 2px;
}
.refeicao{
    background-color: #DBD76A;
    width: 155px;
    height: 150px;
    text-align: center;
    margin-left: 5%;
    border: solid #000 2px;
}
.refeicao2{
    background-color: #89DB69;
    width: 155px;
    height: 150px;
    text-align: center;
    margin-left: 5%;
    border: solid #000 2px;
}
.alinhar{
    display: flex;
    flex-direction: row;
    align-items: center;
    margin-top: 10%;
    margin-left: 7%;
}
.alinhar2{
    display: flex;
    flex-direction: row;
    align-items: center;
    margin-top: 1%;
    margin-left: 7%;
}

/* Responsividade tablet */
@media (max-width: 768px) {
    header{
        width: 100%;
        height: 50px;
        align-items: center;
        text-align: center;
        display: flex;
        flex-direction: row;
    }
    .tit{
        font-family: sans-serif;
        margin-left: 21%;
        font-size: 20px;
    }
    .dia{
        background-color: #DBD76A;
        width: 155px;
        height: 40px;
        text-align: center;
        margin-left: 5%;
        border: solid #000 2px;
    }
    .dia2{
        background-color: #89DB69;
        width: 155px;
        height: 40px;
        text-align: center;
        margin-left: 5%;
        border: solid #000 2px;
    }
    .refeicao{
        background-color: #DBD76A;
        width: 155px;
        height: 150px;
        text-align: center;
        margin-left: 5%;
        margin-top: 1%;
        border: solid #000 2px;
    }
    .refeicao2{
        background-color: #89DB69;
        width: 155px;
        height: 150px;
        text-align: center;
        margin-left: 5%;
        margin-top: 1%;
        border: solid #000 2px;
    }
    .alinhar{
        display: flex;
        flex-direction: row;
        align-items: center;
        margin-top: 10%;
        margin-left: 7%;
    }
    .alinhar2{
        display: flex;
        flex-direction: row;
        align-items: center;
        margin-top: 1%;
        margin-left: 7%;
    }
}
</style>
</html>
