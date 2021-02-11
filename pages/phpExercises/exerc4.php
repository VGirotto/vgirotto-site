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
                    <a href="exerc3.php">Exercício 3</a>
                    <a class="active" href="exerc4.php">Exercício 4</a>
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
        <p> 4) Programa para classificar um triângulo. Informe os tamanhos dos segmentos (a,b,c) e <br />
            classifique de acordo com equilátero, isósceles e escaleno. <br /> </p> <br />

            <form action="exerc4.php" method="post">
                <label for="a"> a </label><br>
                <input type="number" id="a" name="a" value="10"><br>
                <label for="b"> b </label><br>
                <input type="number" id="b" name="b" value="10"><br>
                <label for="c"> c </label><br>
                <input type="number" id="c" name="c" value="10"><br>
                <br>

                <input type="submit" value="Classificar">

            </form>


            <br />
            
            <?PHP
               function classificar($a, $b, $c){
                   echo "a = $a, b = $b e c = $c <br>";
                   if ($a == $b){
                        if ($a == $c){
                            echo "Esse triângulo é equilátero!<br>";
                        } else {
                            echo "Esse triângulo é isósceles!<br>";
                        }
                   } else { # $a != $b
                        if ($a == $c){
                            echo "Esse triângulo é isósceles!<br>";
                        } else if($b == $c){
                            echo "Esse triângulo é isósceles!<br>";
                        } else {
                            echo "Esse triângulo é escaleno!<br>";
                        }
                   }
                                
              }

                #lê os valores

                $a = $_POST['a'];
                $b = $_POST['b'];
                $c = $_POST['c'];
                classificar($a, $b, $c);
            ?>
        </div>
    
    </div> 
</body>
</html>