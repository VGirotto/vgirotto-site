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
                    <a href="exerc4.php">Exercício 4</a>
                    <a class="active" href="exerc5.php">Exercício 5</a>
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
            <p> 5) Programa para calcular a série de Fibonacci: O termo estático e imprima a série.</p>
                    <br />
            
            <?PHP
                function fibonacci(){
                    echo "Primeiros 40 números da sequência de Fibonacci: <br>";
                    static $num1 = 0;
                    static $num2 = 1;

                    echo "$num1, $num2, ";
            
                    for($i = 2; $i < 39; $i++){
                        $fibo = $num1 + $num2;
                        echo "$fibo, ";
                        $num1 = $num2;
                        $num2 = $fibo;
                    }
                    $fibo = $num1 + $num2;
                    echo "$fibo.";
                    
                }
              
                fibonacci();
            ?>
        </div>
    
    </div> 
</body>
</html>