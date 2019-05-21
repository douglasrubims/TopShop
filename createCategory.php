<?php
    require('connect.php');

    if(isset($_POST['nome'])){
        $nome = $_POST['nome'];
        $query = mysqli_query($conexao, "INSERT INTO Categoria (nome) VALUES ('$nome')") or die(mysql_error());
        header('location: /');
    }

    include('Layout/_App_Top.php');
?>

                            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-6 mx-auto">
                                <div class="card">
                                    <div class="card-header card-header-info"><h4 class="card-title">Criar Categoria</h4></div>
                                    <div class="card-body">
                                        <div class="container-fluid">
                                            <div class="lead text-center"></div>
                                            <form class="form-group" method="post" action="/createCategory.php">
                                                <div class="mx-auto col-lg-8 col-md-10 col-sm-12 col-xs-12">
                                                    <label for="nome" class="sr-only">Nome da Categoria:</label>
                                                    <input class="form-control" name="nome" id="nome" type="text" size="20" placeholder="Nome da Categoria" required autofocus>
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