<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vinicius Girotto - Drop RPG</title>
  <link rel="stylesheet" type="text/css" href="../../styles/gameStyle.css" />

</head>
<body>

    <div class="container" >
        <div class="navbar">
            <a href="../../index.php"> Início</a>
            <div class="dropdown">
                <button class="dropbtn">Drop RPG</button>
                <div class="dropdown-content">
                    <a href="droprpg.php">Game</a>
                    <a class="active"href="drop_enemies.php">Enemies</a>
                    <a href="drop_items.php">Items</a>
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
            <h1>Drop RPG</h1>          
        </div>
    </div>


    <div class="content2">
        <div id="main">
            
            <h2 class = "center"> Bosses </h2>

            <br /> 
            
            <table class = "center" style="width:100%">
                <tr>
                    <th>Viking</th>
                    <th colspan="7">Status</th>
                </tr>
                <tr>
                    <td rowspan="3"><img src="../../resources/enemies/Viking.png" alt="Viking image"></td>
                    <th>HP</th>
                    <th>Attack</th>
                    <th>Defense</th>
                    <th>Agility</th>
                    <th>Critical</th>
                    <th>Wisdom</th>
                    <th>Resistance</th>
                </tr>
                <tr>
                    <td>200</td>
                    <td>30</td>
                    <td>20</td>
                    <td>10</td>
                    <td>5</td>
                    <td>100</td>
                    <td>10</td>
                </tr>
                </table>
            <br />

            <table class = "center" style="width:100%">
                <tr>
                    <th>Manticore</th>
                    <th colspan="7">Status</th>
                </tr>
                <tr>
                    <td rowspan="3"><img src="../../resources/enemies/Manticore.png" alt="Manticore image"></td>
                    <th>HP</th>
                    <th>Attack</th>
                    <th>Defense</th>
                    <th>Agility</th>
                    <th>Critical</th>
                    <th>Wisdom</th>
                    <th>Resistance</th>
                </tr>
                <tr>
                    <td>200</td>
                    <td>80</td>
                    <td>60</td>
                    <td>30</td>
                    <td>1</td>
                    <td>200</td>
                    <td>5</td>
                </tr>
                </table>
            <br /><br /><br />

            <h2 class = "center"> Enemies </h2>
            <br />
            <table class = "center" style="width:100%">
                <tr>
                    <th>Wild Boar</th>
                    <th colspan="7">Status</th>
                </tr>
                <tr>
                    <td rowspan="3"><img src="../../resources/enemies/Wild_boar.png" alt="Wild Boar image"></td>
                    <th>HP</th>
                    <th>Attack</th>
                    <th>Defense</th>
                    <th>Agility</th>
                    <th>Critical</th>
                    <th>Wisdom</th>
                    <th>Resistance</th>
                </tr>
                <tr>
                    <td>100</td>
                    <td>20</td>
                    <td>12</td>
                    <td>5</td>
                    <td>5</td>
                    <td>10</td>
                    <td>20</td>
                </tr>
                </table>
            <br />

            <table class = "center" style="width:100%">
                <tr>
                    <th>Ancient</th>
                    <th colspan="7">Status</th>
                </tr>
                <tr>
                    <td rowspan="3"><img src="../../resources/enemies/Ancient.png" alt="Ancient image"></td>
                    <th>HP</th>
                    <th>Attack</th>
                    <th>Defense</th>
                    <th>Agility</th>
                    <th>Critical</th>
                    <th>Wisdom</th>
                    <th>Resistance</th>
                </tr>
                <tr>
                    <td>100</td>
                    <td>20</td>
                    <td>10</td>
                    <td>10</td>
                    <td>3.5</td>
                    <td>10</td>
                    <td>20</td>
                </tr>
                </table>
            <br />

            <table class = "center" style="width:100%">
                <tr>
                    <th>Anubis</th>
                    <th colspan="7">Status</th>
                </tr>
                <tr>
                    <td rowspan="3"><img src="../../resources/enemies/Anubis.png" alt="Anubis image"></td>
                    <th>HP</th>
                    <th>Attack</th>
                    <th>Defense</th>
                    <th>Agility</th>
                    <th>Critical</th>
                    <th>Wisdom</th>
                    <th>Resistance</th>
                </tr>
                <tr>
                    <td>100</td>
                    <td>50</td>
                    <td>20</td>
                    <td>30</td>
                    <td>5</td>
                    <td>30</td>
                    <td>20</td>
                </tr>
                </table>
            <br />

            <table class = "center" style="width:100%">
                <tr>
                    <th>Revived Statue</th>
                    <th colspan="7">Status</th>
                </tr>
                <tr>
                    <td rowspan="3"><img src="../../resources/enemies/Revived_statue.png" alt="Revived Statue image"></td>
                    <th>HP</th>
                    <th>Attack</th>
                    <th>Defense</th>
                    <th>Agility</th>
                    <th>Critical</th>
                    <th>Wisdom</th>
                    <th>Resistance</th>
                </tr>
                <tr>
                    <td>120</td>
                    <td>40</td>
                    <td>50</td>
                    <td>15</td>
                    <td>10</td>
                    <td>30</td>
                    <td>20</td>
                </tr>
                </table>
            <br />
        </div>
    </div> 
</body>
</html>