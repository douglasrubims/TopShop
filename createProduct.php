<?php
    require('connect.php');
    if(isset($_POST['categoria']) AND isset($_POST['nome']) AND isset($_POST['preco'])){
        $categoria_id = $_POST['categoria'];
        $nome = $_POST['nome'];
        $preco = $_POST['preco'];
        $query1 = mysqli_query($conexao, "INSERT INTO Produto (categoria_id, nome, preco) VALUES ('$categoria_id', '$nome', '$preco')") or die(mysql_error());
        $produto_id = mysqli_insert_id($conexao);
        $query2 = mysqli_query($conexao, "INSERT INTO Categoria_has_Produto (id_categoria, id_produto) VALUES ('$categoria_id', '$produto_id')") or die(mysql_error());
        $loja_id = $user['id'];
        $query3 = mysqli_query($conexao, "INSERT INTO Loja_has_Produto (id_loja, id_produto) VALUES ('$loja_id', '$produto_id')") or die(mysql_error());
        header('location: /');
    }
    $query = mysqli_query($conexao, "SELECT * FROM Categoria") or die(mysql_error());
    include('Layout/_App_Top.php');
?>

                            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-6 mx-auto">
                                <div class="card">
                                    <div class="card-header card-header-info"><h4 class="card-title">Criar Produto</h4></div>
                                    <div class="card-body">
                                        <div class="container-fluid">
                                            <div class="lead text-center"></div>
                                            <form class="form-group" method="post" action="/createProduct.php">
                                                <div class="mx-auto col-lg-8 col-md-10 col-sm-12 col-xs-12">
                                                    <label for="nome" class="sr-only">Nome da Categoria:</label>
                                                    <input class="form-control" name="nome" id="nome" type="text" size="20" placeholder="Nome do Produto" required autofocus>
                                                </div>
                                                <div class="mx-auto col-lg-8 col-md-10 col-sm-12 col-xs-12">
                                                    <label for="preco" class="sr-only">Preço:</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">R$</div>
                                                        </div>
                                                        <input class="form-control" name="preco" id="preco" type="number" min="0" step=".01" placeholder="Preço" required>
                                                    </div>
                                                </div>
                                                <div class="mx-auto col-lg-8 col-md-10 col-sm-12 col-xs-12">
                                                    <select class="form-control" name="categoria" id="categoria" required>
                                                        <option>Selecione uma categoria.</option>
<?php
    if(mysqli_num_rows($query)>0){
        while($categoria = mysqli_fetch_assoc($query)){
            echo '                                                        <option value="'.$categoria['id'].'">'.$categoria['nome'].'</option>';
        }
    }
?>

                                                    </select>
                                                </div>
                                                <div class="mx-auto col-lg-8 col-md-10 col-sm-12 col-xs-12">
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-info col-lg-12 col-md-12 col-sm-12 col-xs-12">Criar</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php include('Layout/_App_Bottom.php'); ?>