<html>
    <head>
        <meta charset="UTF-8">
        <title>
            Inserir Produtos
        </title>
        <body>
            <form action="inserir_produtos.php" method="get">
                <label for="nome">Nome: </label>
                <input type="text" name="nome"></br></br>

                <label for="descricao">Descrição: </label>
                <input type="text" name="descricao"></br></br>

                <label for="preco">Preço: </label>
                <input type="text" name="preco"></br></br>

                <select name="exibir_categorias">
                    <?php
                    $pdo = new PDO("sqlite:estoque.db");

                    $quey_select_categorias ="SELECT * FROM categorias";
                    $categorias = $pdo->query($quey_select_categorias);
                    foreach ($categorias as $categoria) {
                      #echo $categoria["nome"]."<br>";  
                      echo "<option values=\"".$categoria["id"]."\">".$categoria["nome"]."</option>";    
                    }
                                ?>


                    
                </select>
                <button type="submit">Enviar</button>
        </form>
            </form>
        </body>
    </head>
</html>