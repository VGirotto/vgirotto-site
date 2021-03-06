<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vinicius Girotto - Python</title>
  <link rel="stylesheet" type="text/css" href="../../styles/style.css" />

</head>
<body>

    <div class="container" >
        <div class="navbar">
            <a href="../../index.php"> Início</a>
            <div class="dropdown">
                <button class="dropbtn">Drop RPG</button>
                <div class="dropdown-content">
                    <a href="../dropRPG/droprpg.php">Game</a>
                    <a href="../dropRPG/drop_enemies.php">Enemies</a>
                    <a href="../dropRPG/drop_items.php">Items</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Python</button>
                <div class="dropdown-content">
                    <a class="active" href="python1.php">Estudo 1</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Exercícios PHP</button>
                <div class="dropdown-content">
                    <a href="../phpExercises/exerc1.php">Exercício 1</a>
                    <a href="../phpExercises/exerc2.php">Exercício 2</a>
                    <a href="../phpExercises/exerc3.php">Exercício 3</a>
                    <a href="../phpExercises/exerc4.php">Exercício 4</a>
                    <a href="../phpExercises/exerc5.php">Exercício 5</a>
                    <a href="../phpExercises/dbOperations.php">Operações BD</a>
                </div>
            </div>
            <a href="../sobre.php"> Sobre</a>
            <a href="../contato.php" style="float: right"> Contato</a>
        </div>
    </div> 


    <!--Título-->
    <div class="content1">
        <div>
            <h1 style="color: blue">Python</h1>
        </div>
    </div>


    <div class="content2">
        <div id="main">
            <p> Esse é um pequeno código que fiz para treinar a programação em python. <br />
                    Basicamente, é gerado aleatoriamente um mapa de tamanho 20x40, e o código <br />
                    verifica se existe algum caminho que leve do *(asterisco) até o $(cifrão). <br />
                    Caso exista, o código avisa que existe e então printa o mapa com um caminho <br />
                    possível, e não <a href="easteregg.php" style="text-decoration:none; color:black;">necessariamente</a> o melhor (talvez em um upgrade futuro).<br />  
                    Recarregue a página para ver outros resultados.<br />   </p>
                    <br />
            <p> Legenda: <br />
            <b>#</b> = parede<br />
            <b>_</b> = espaço vazio<br />
            <b>*</b> = início<br />
            <b>$</b> = final<br />
            <b>o</b> = caminho <br /><br /></p> 
            
            <?PHP
               echo shell_exec("python game.py");
            ?>
        </div>
    
    </div> 
</body>
</html>