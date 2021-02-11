<!DOCTYPE html>
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Vinicius Girotto - Sobre</title>
  <link rel="stylesheet" type="text/css" href="../styles/contact.css" />

</head>
<body>

    <div class="container" >
        <div class="navbar">
            <a href="../index.php"> Início</a>
            <div class="dropdown">
                <button class="dropbtn">Drop RPG</button>
                <div class="dropdown-content">
                    <a href="dropRPG/droprpg.php">Game</a>
                    <a href="dropRPG/drop_enemies.php">Enemies</a>
                    <a href="dropRPG/drop_items.php">Items</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Python</button>
                <div class="dropdown-content">
                    <a href="python/python1.php">Estudo 1</a>
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Exercícios PHP</button>
                <div class="dropdown-content">
                    <a href="phpExercises/exerc1.php">Exercício 1</a>
                    <a href="phpExercises/exerc2.php">Exercício 2</a>
                    <a href="phpExercises/exerc3.php">Exercício 3</a>
                    <a href="phpExercises/exerc4.php">Exercício 4</a>
                    <a href="phpExercises/exerc5.php">Exercício 5</a>
                    <a href="phpExercises/dbOperations.php">Operações BD</a>
                </div>
            </div>
            <a href="sobre.php"> Sobre</a>
            <a class="active" href="contato.php" style="float: right"> Contato</a>
        </div>
    </div> 


    <!--Título-->
    <div class="content1">
        <div>
            <h1>Contato <svg class="svg-icon1" viewBox="0 0 20 15">
							<path d="M17.388,4.751H2.613c-0.213,0-0.389,0.175-0.389,0.389v9.72c0,0.216,0.175,0.389,0.389,0.389h14.775c0.214,0,0.389-0.173,0.389-0.389v-9.72C17.776,4.926,17.602,4.751,17.388,4.751 M16.448,5.53L10,11.984L3.552,5.53H16.448zM3.002,6.081l3.921,3.925l-3.921,3.925V6.081z M3.56,14.471l3.914-3.916l2.253,2.253c0.153,0.153,0.395,0.153,0.548,0l2.253-2.253l3.913,3.916H3.56z M16.999,13.931l-3.921-3.925l3.921-3.925V13.931z"></path>
						</svg></h1>
        </div>
    </div>


    <div class="content2">
        <div id="main">
            <form action="" method="post">
                <p>
                    <label for="email" style="margin-right:2%"> E-mail: </label>
                    <input id="email" name="email" required="required" type="email" placeholder="Ex: hello@email.com" size="40"/> <br />
                </p>

                <p>
                    <label for="assunto" style="margin-right:1%">Assunto:</label>
                    <input id="assunto" name="assunto" required="required" type="text" placeholder="Ex: Dúvida sobre o código em python" size="40"/> <br />
                </p>

                <p>
                    <label for="conteudo">Conteúdo:</label>
                    <textarea id="conteudo" name="conteudo" required="required" rows="20" cols="40"> </textarea><br />
                </p>

                <p>
                    <input type="submit" value="Submeter" style="font-size:20px">
                    <input type="reset" value="Redefinir" style="font-size:20px; margin-left: 50px">
                </p>
            </form>
        </div>
    
    </div> 
</body>
</html>