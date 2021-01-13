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
                    <a class="active" href="exerc2.php">Exercício 2</a>
                    <a href="exerc3.php">Exercício 3</a>
                    <a href="exerc4.php">Exercício 4</a>
                    <a href="exerc5.php">Exercício 5</a>
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
            <p> 2) COVID-19: Programa que estima quantos alunos podem ficar dentro de uma sala de aula. <br />
            Para evitar o contato, é preciso respeitar distância mínima entre as cadeiras, de 1,0m a 1,5 m. <br />
            Neste cenário, é necessário garantir pelo menos <b>2,25m2 por aluno</b>.<br />
            O usuário deve informar a largura e comprimento do local. <br />
            Considere a área retangular.<br />   </p><br />

            <form action="exerc2.php" method="post">
                <label for="largura"> Largura </label><br>
                <input type="number" id="largura" name="largura" value="10"><br>
                <label for="comprimento"> Comprimento </label><br>
                <input type="number" id="comprimento" name="comprimento" value="10"><br>
                <br>

                <input type="submit" value="Calcular">

            </form>


            <br />
            
            <?PHP
               function qtdAlunos($l, $c){
                   $area = $l * $c;
                   $qtd = floor($area / 2.25);
                   echo "A quantidade de alunos possíveis nessa sala, respeitando o espaço de 2,25 m² para cada <br> um é de <b>$qtd</b>.";                
              }

                #lê os valores

                $largura = $_POST['largura'];
                $comprimento = $_POST['comprimento'];
                qtdAlunos($largura, $comprimento);
            ?>
        </div>
    
    </div> 
</body>
</html>