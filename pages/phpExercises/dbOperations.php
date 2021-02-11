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
                    <a href="exerc5.php">Exercício 5</a>
                    <a class="active" href="dbOperations.php">Operações BD</a>
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
        <p> Operações de Insert, Select, Update e Delete de itens no banco de dados.<br /> </p> <br />

            <form action="dbOperations.php" method="post">      <!-- Escolher a operação -->
                <b><label for="operation"> Operação: </label></b><br>
                <select id="operation" name="operation" style="font-size:18px">
                    <option value="insert">Insert</option>
                    <option value="update">Update</option>
                    <option value="select">Select</option>
                    <option value="delete">Delete</option>
                </select>
                

                <input type="submit" value="Escolher" style="margin-left:10px">
            </form>
            <br />
            <br />
            
            <!-- Pega a operação e conecta no BD -->
            <?PHP   

                require('../../config/db.php');
                $op = $_POST['operation'];
            ?>

            <!-- Verifica qual operação foi escolhida e exibe o formulário dela -->
            <?php if ($op == 'insert'): ?>

                <!-- Operacao de Insert -->
                <form action="dbOperations.php" method="post">
                <b><label for="insertOp"> Insert: </label></b><br><br>
                
                <label for="itemName">Nome do Item:</label><br>
                <input type="text" id="itemName" name="itemName" value=""><br>
                <br>
                <label for="insertOp"> Categoria: </label><br>
                <select id="insertOp" name="insertOp" style="font-size:18px">
                    <?php 
                        $result = pg_query($pg_conn, "SELECT * FROM category;");
                        while ($row = pg_fetch_row($result)){ 
                            echo "<option value=$row[0]>$row[1]</option>";
                        }
                    ?>
                </select>                
                <br><br>
                <input type="submit" value="Inserir" style="margin-left:10px">
            </form>
            
            <?php elseif($op == 'update'): ?>
            
                <!-- Operacao de Update -->
                <form action="dbOperations.php" method="post">
                    <b><label for="updateOp"> Update: </label></b><br><br>
                    
                    <label for="itemName">Nome Atual do Item:</label><br>
                    <input type="text" id="itemName" name="itemName" value=""><br>
                    <br>
                    <label for="itemBD">Novo Nome do Item:</label><br>
                    <input type="text" id="itemBD" name="itemBD" value=""><br>
                    <br>
                    <label for="updateOp"> Categoria: </label><br>
                    <select id="updateOp" name="updateOp" style="font-size:18px">
                        <?php 
                            $result = pg_query($pg_conn, "SELECT * FROM category;");
                            while ($row = pg_fetch_row($result)){ 
                                echo "<option value=$row[0]>$row[1]</option>";
                            }
                        ?>
                    </select>                
                    <br><br>
                    <input type="submit" value="Atualizar" style="margin-left:10px">
                </form>

            <?php elseif($op == 'select'): ?>
            
                <!-- Operacao de Update -->
                <form action="dbOperations.php" method="post">
                    <b><label for="selectOp"> Update: </label></b><br><br>
                    Apenas selecione a categoria para ver todos os items daquela categoria, <br>
                    ou pesquise um nome para encontrar um item com o exato mesmo nome. <br>
                    
                    <label for="itemName">Nome do Item:</label><br>
                    <input type="text" id="itemName" name="itemName" value=""><br>
                    <br>
                    <label for="selectOp"> Categoria: </label><br>
                    <select id="selectOp" name="selectOp" style="font-size:18px">
                        <?php 
                            $result = pg_query($pg_conn, "SELECT * FROM category;");
                            while ($row = pg_fetch_row($result)){ 
                                echo "<option value=$row[0]>$row[1]</option>";
                            }
                        ?>
                    </select>                
                    <br><br>
                    <input type="submit" value="Pesquisar" style="margin-left:10px">
                </form>
            
                <?php elseif($op == 'delete'): ?>
            
                    <!-- Operacao de Delete -->
                    <form action="dbOperations.php" method="post">
                        <b><label for="DeleteOp"> Delete: </label></b><br><br>
                        Selecione o item a ser deletado. <br>
                        
                        <label for="DeleteOp"> Itens: </label><br>
                        <select id="DeleteOp" name="DeleteOp" style="font-size:18px">
                            <?php 
                                $result = pg_query($pg_conn, "SELECT * FROM items;");
                                while ($row = pg_fetch_row($result)){ 
                                    echo "<option value=$row[0]>$row[1]</option>";
                                }
                            ?>
                        </select>                
                        <br><br>
                        <input type="submit" value="Deletar" style="margin-left:10px">
                    </form>

            <?php else: ?>

            <!-- Nenhuma das 4 operações, logo, foi executada alguma ação -->                
                <?php 
                    $item = $_POST['itemName'];
                    $insCat = $_POST['insertOp'];
                    $upCat = $_POST['updateOp'];
                    $novoItem = $_POST['itemBD'];
                    $selCat = $_POST['selectOp'];
                    $delItem = $_POST['DeleteOp'];

                    if ($insCat != NULL){ // insert
                        $result = pg_query($pg_conn, "INSERT INTO items(name, code_category) VALUES ('$item', '$insCat');");
                        if ($result == false){
                            echo "Falha na inserção do item!<br>";
                        }
                        else {
                            echo "Item inserido com sucesso!<br>";
                        }
                    } elseif ($upCat != NULL){ // update
                        $result = pg_query($pg_conn, "UPDATE items SET name = '$novoItem' WHERE name = '$item';");
                        if ($result == false){
                            echo "Falha na atualização do item!<br>";
                        }
                        else {
                            echo "Item atualizado com sucesso!<br>";
                        }
                    } elseif ($selCat != NULL){ // select
                        if($item != NULL){
                            $result = pg_query($pg_conn, "SELECT * FROM items WHERE name = '$item';");
                            if ($result == false){
                                echo "Falha na busca!<br>";
                            }
                            echo "code    -    name<br>";
                            while ($row = pg_fetch_row($result)){ 
                                echo "$row[0]    -    $row[1]<br>";
                            }
                        } else {
                            $result = pg_query($pg_conn, "SELECT * FROM items WHERE code_category = '$selCat';");
                            if ($result == false){
                                echo "Falha na busca!<br>";
                            }
                            echo "code    -    name<br>";
                            while ($row = pg_fetch_row($result)){ 
                                echo "$row[0]    -    $row[1]<br>";
                            }
                        } 
                    } elseif ($delItem != NULL){ // Delete
                        $result = pg_query($pg_conn, "DELETE FROM items WHERE cod = '$delItem';");
                        if ($result == false){
                            echo "Falha na deleção do item!<br>";
                        }
                        else {
                            echo "Item deletado com sucesso!<br>";
                        }
                    } else {
                        echo "Escolha uma operação acima.";
                    }
                    
                ?>
        
            <?php endif ?>
               
            
        </div>
    
    </div> 
</body>
</html>