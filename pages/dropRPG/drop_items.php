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
                    <a href="drop_enemies.php">Enemies</a>
                    <a class="active" href="drop_items.php">Items</a>
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
            
            <h2 class = "center"> Game Items </h2>

            <br /> 

            <table class = "center" style="width:50%">
                <tr>
                    <th colspan="3" style="color: rgb(61, 42, 1)">Shoes</th>
                </tr>
                <tr>
                    <th>Item</th>
                    <th>Agility</th>
                    <th>Critical Damage</th>
                </tr>
                <tr>
                    <td>Simple Shoes</td>
                    <td>2</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>Nice Shoes</td>
                    <td>10</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Nice Shoes +1</td>
                    <td>20</td>
                    <td>40</td>
                </tr>
            </table>
            <br /><br /> 

            <table class = "center" style="width:50%">
                <tr>
                    <th colspan="3" style="color: rgb(61, 42, 1)">Pants</th>
                </tr>
                <tr>
                    <th>Item</th>
                    <th>Agility</th>
                    <th>Damage Reflect</th>
                </tr>
                <tr>
                    <td>Simple Pants</td>
                    <td>2</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Nice Pants</td>
                    <td>10</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>Nice Pants +1</td>
                    <td>20</td>
                    <td>2</td>
                </tr>
            </table>
            <br /><br /> 

            <table class = "center" style="width:50%">
                <tr>
                    <th colspan="3" style="color: rgb(61, 42, 1)">Breastplate</th>
                </tr>
                <tr>
                    <th>Item</th>
                    <th>Defense</th>
                    <th>Critical Resistance</th>
                </tr>
                <tr>
                    <td>Simple Plate</td>
                    <td>1</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>Nice Breastplate</td>
                    <td>10</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>Nice Breastplate +1</td>
                    <td>20</td>
                    <td>5</td>
                </tr>
            </table>
            <br /><br /> 

            <table class = "center" style="width:50%">
                <tr>
                    <th colspan="4" style="color: rgb(61, 42, 1)">Gloves</th>
                </tr>
                <tr>
                    <th>Item</th>
                    <th>Attack</th>
                    <th>Critical</th>
                    <th>Life Leecher</th>
                </tr>
                <tr>
                    <td>Simple Gloves</td>
                    <td>1</td>
                    <td>1</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Nice Gloves</td>
                    <td>8</td>
                    <td>2</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>Nice Gloves +1</td>
                    <td>16</td>
                    <td>4</td>
                    <td>2</td>
                </tr>
            </table>
            <br /><br /> 

            <table class = "center" style="width:50%">
                <tr>
                    <th colspan="3" style="color: rgb(61, 42, 1)">Helmet</th>
                </tr>
                <tr>
                    <th>Item</th>
                    <th>Health Points</th>
                    <th>Critical Resistance</th>
                </tr>
                <tr>
                    <td>Simple Helmet</td>
                    <td>5</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>Nice Helmet</td>
                    <td>20</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>Nice Helmet +1</td>
                    <td>40</td>
                    <td>4</td>
                </tr>
            </table>
            <br /><br /> 

            <table class = "center" style="width:50%">
                <tr>
                    <th colspan="3" style="color: rgb(61, 42, 1)">Sword</th>
                </tr>
                <tr>
                    <th>Item</th>
                    <th>Attack</th>
                    <th>Critical Damage</th>
                </tr>
                <tr>
                    <td>Weak Sword</td>
                    <td>10</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>Nice Sword</td>
                    <td>15</td>
                    <td>20</td>
                </tr>
                <tr>
                    <td>Nice Sword +1</td>
                    <td>30</td>
                    <td>40</td>
                </tr>
            </table>
            <br /><br /> 

            <table class = "center" style="width:50%">
                <tr>
                    <th colspan="3" style="color: rgb(61, 42, 1)">Shield</th>
                </tr>
                <tr>
                    <th>Item</th>
                    <th>Defense</th>
                    <th>Damage Reflect</th>
                </tr>
                <tr>
                    <td>Weak Shield</td>
                    <td>10</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>Nice Shield</td>
                    <td>20</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>Nice Shield +1</td>
                    <td>40</td>
                    <td>6</td>
                </tr>
            </table>
            <br /><br /> 

            <table class = "center" style="width:50%">
                <tr>
                    <th colspan="3" style="color: rgb(61, 42, 1)">Necklace</th>
                </tr>
                <tr>
                    <th>Item</th>
                    <th>Health Points</th>
                    <th>Wisdom</th>
                </tr>
                <tr>
                    <td>Simple Necklace</td>
                    <td>5</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>Nice Necklace</td>
                    <td>15</td>
                    <td>5</td>
                </tr>
                <tr>
                    <td>Nice Necklace +1</td>
                    <td>30</td>
                    <td>10</td>
                </tr>
            </table>
            <br /><br /> 

            <table class = "center" style="width:50%">
                <tr>
                    <th colspan="3" style="color: rgb(61, 42, 1)">Bracelet</th>
                </tr>
                <tr>
                    <th>Item</th>
                    <th>Critical</th>
                    <th>Life Leecher</th>
                </tr>
                <tr>
                    <td>Simple Bracelet</td>
                    <td>2</td>
                    <td>0</td>
                </tr>
                <tr>
                    <td>Nice Bracelet</td>
                    <td>4</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>Nice Bracelet +1</td>
                    <td>6</td>
                    <td>4</td>
                </tr>
            </table>
            <br /><br /> 

            <table class = "center" style="width:50%">
                <tr>
                    <th colspan="3" style="color: rgb(61, 42, 1)">Pearl</th>
                </tr>
                <tr>
                    <th>Item</th>
                    <th>Critical</th>
                </tr>
                <tr>
                    <td>Pearl</td>
                    <td>2</td>
                </tr>
                <tr>
                    <td>Pearl +1</td>
                    <td>10</td>
                </tr>
                <tr>
                    <td>Pearl +2</td>
                    <td>20</td>
                </tr>
            </table>
            <br /><br /> 
            
        </div>
    </div> 
</body>
</html>