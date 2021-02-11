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
                    <a href="../python/python1.php">Estudo 1</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Exercícios PHP</button>
                <div class="dropdown-content">
                    <a href="exerc1.php">Exercício 1</a>
                    <a href="exerc2.php">Exercício 2</a>
                    <a class="active" href="exerc3.php">Exercício 3</a>
                    <a href="exerc4.php">Exercício 4</a>
                    <a href="exerc5.php">Exercício 5</a>
                    <a href="dbOperations.php">Operações BD</a>
                </div>
            </div>
            <a href="../sobre.php"> Sobre</a>
            <a href="../contato.php" style="float: right"> Contato</a>
        </div>
    </div> 


    <!--Título-->
    <div class="content1">
        <div>
            <h1 style="color: darkblue">PHP</h1>
        </div>
    </div>


    <div class="content2">
        <div id="main">
            <p> 3) Faça um programa que calcule a área de um trapézio e o volume de uma pirâmide. Usar dados estáticos.</p>
                    <br />
            
            <?PHP
               function areaTrapezio($baseMenor, $baseMaior, $altura){
                echo "b = $baseMenor, B = $baseMaior e h = $altura<br>";

                $area = ($baseMaior + $baseMenor) * $altura / 2;
                echo "A área do trapézio é $area<br><br>";
              }

              function volumePiramide($comprimento, $largura, $altura){
                echo "comprimento da base = $comprimento, largura da base = $largura e h = $altura<br>";

                $volume = (1/3) * ($comprimento * $largura) * $altura;
                echo "O volume da pirâmide é $volume<br><br>";
              }
              
                areaTrapezio(5, 15, 8);
                volumePiramide(10, 15, 5);
            ?>
        </div>
    
    </div> 
</body>
</html>