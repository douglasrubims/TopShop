<?php
    require('connect.php');
    $query = mysqli_query($conexao, "SELECT * FROM Produto") or die(mysql_error());
    include('Layout/_App_Top.php');
?>

                            <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-info">
                                        <h4 class="card-title">
<?php
    if($logado){
        echo '                                          Produtos';
    }else{
        echo '                                          Logue-se';
    }
?>

                                        </h4>
                                    </div>
                                    <div class="card-body">
<?php
    if($logado){
        if(mysqli_num_rows($query)>0){
?>
                                        <table class="table table-bordered text-center">
                                            <tr>
                                                <th class="text-center">Nome</th>
                                                <th class="text-center">Preço</th>
                                                <th class="text-center">Categoria</th>
                                                <th class="text-center">Fornecedor</th>
                                            </tr>
<?php
            while($produto = mysqli_fetch_assoc($query)){
                $id_produto = $produto['id'];
                $query1 = mysqli_query($conexao, "SELECT * FROM Categoria_has_Produto WHERE id_produto='$id_produto'") or die(mysql_error());
                $id_categoria = mysqli_fetch_assoc($query1)['id_categoria'];
                $query2 = mysqli_query($conexao, "SELECT * FROM Categoria WHERE id='$id_categoria'") or die(mysql_error());
                $categoria = mysqli_fetch_assoc($query2);
                $query3 = mysqli_query($conexao, "SELECT * FROM Loja_has_Produto WHERE id_produto='$id_produto'") or die(mysql_error());
                $id_loja = mysqli_fetch_assoc($query3)['id_loja'];
                $query4 = mysqli_query($conexao, "SELECT * FROM Loja WHERE id='$id_loja'") or die(mysql_error());
                $loja = mysqli_fetch_assoc($query4);
?>
                                            <tr>
                                                <td><?php echo $produto['nome']; ?></td>
                                                <td>R$<?php echo $produto['preco']; ?></td>
                                                <td><?php echo $categoria['nome']; ?></td>
                                                <td><?php echo $loja['nome']; ?></td>
                                            </tr>
<?php
            }
?>
                                        </table>
<?php
        }
    }else{
        echo "                                      <h4 class='text-center'><strong>Para visualizar os produtos, registre-se ou logue-se em uma conta.</strong></h4>";
    }
?>
                                    </div>
                                </div>
                            </div>
<?php include('Layout/_App_Bottom.php'); ?>