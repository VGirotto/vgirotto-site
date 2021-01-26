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
                </div>
            </div>
            <a href="../sobre.php"> Sobre</a>
            <a href="../contato.php" style="float: right"> Contato</a>
        </div>
    </div> 


    <!--Título-->
    <div class="content1">
        <div>
            <h1 style="color: blue">Espelho de Ponto</h1>
        </div>
    </div>


    <div class="content2">
        <div id="main">
            <p> Para calcular exatamente o horário de saída da jornada de trabalho de 6 horas.<br />   
            Feito em PHP.</p>
                    <br />
            
            <form action="easteregg.php" method="post">
                <label for="hora1"> Hora de Entrada </label><br>
                <input type="number" id="hora1" name="hora1" value="8" style="width: 40px">
                <input type="number" id="min1" name="min1" value="0" style="width: 40px"><br>
                <label for="hora2"> Almoço </label><br>
                <input type="number" id="hora2" name="hora2" value="12" style="width: 40px">
                <input type="number" id="min2" name="min2" value="0" style="width: 40px"><br>
                <label for="hora3"> Segundo Período </label><br>
                <input type="number" id="hora3" name="hora3" value="13" style="width: 40px">
                <input type="number" id="min3" name="min3" value="0" style="width: 40px"><br>
                <br>

                <input type="submit" value="Calcular">

            </form>


            <br />
            
            <?PHP
               function transMinutos($hora, $minutos){
                   return $hora * 60 + $minutos;
              }

                #lê os valores

                $hora1 = $_POST['hora1'];
                $min1 = $_POST['min1'];
                $hora2 = $_POST['hora2'];
                $min2 = $_POST['min2'];
                $hora3 = $_POST['hora3'];
                $min3 = $_POST['min3'];

                $preAlmoco = transMinutos($hora2, $min2) - transMinutos($hora1, $min1);
                $horasPreAlmoco = intval($preAlmoco / 60);
                $minPreAlmoco = $preAlmoco % 60;
                echo "Trabalhado pré almoço: $horasPreAlmoco horas e $minPreAlmoco minuto(s).<br>";

                $saida = transMinutos($hora3, $min3) + (360 - $preAlmoco);
                $horasSaida = intval($saida / 60);
                $minSaida = $saida % 60;

                if ($minSaida < 10){
                    echo "Horário de saída: <b>$horasSaida:0$minSaida</b>.";
                } else {
                    echo "Horário de saída: <b>$horasSaida:$minSaida</b>.";
                }
                
                

            ?>
        </div>
    
    </div> 
</body>
</html>