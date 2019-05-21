<?php
    require('connect.php');
    session_unset();
    session_destroy();
    include('Layout/_App_Top.php');
?>

                            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-6 mx-auto">
                                <div class="card">
                                    <div class="card-header card-header-info">
                                        <h4 class="card-title">
                                            <?php
                                                if($_SERVER['REQUEST_URI'] == '/register.php'){
                                                    echo 'Registrar Cliente';
                                                }else if($_SERVER['REQUEST_URI'] == '/register.php?client'){
                                                    echo 'Registrar Cliente';
                                                }else if($_SERVER['REQUEST_URI'] == '/register.php?store'){
                                                    echo 'Registrar Loja';
                                                }
                                            ?>

                                        </h4>
                                    </div>
                                    <div class="card-body">
                                        <div class="container-fluid">
                                            <div class="lead text-center"></div>
                                            <form class="form-group" method="post" action="/auth.php">
                                                <?php
                                                    if($_SERVER['REQUEST_URI'] == '/register.php' || $_SERVER['REQUEST_URI'] == '/register.php?client'){
                                                        echo '<div class="mx-auto col-lg-8 col-md-10 col-sm-12 col-xs-12">
                                                    <label for="nome" class="sr-only">Primeiro nome:</label>
                                                    <input class="form-control" name="nome" id="nome" type="text" size="20" placeholder="Primeiro nome" required autofocus>
                                                </div>
                                                <div class="mx-auto col-lg-8 col-md-10 col-sm-12 col-xs-12">
                                                    <label for="sobrenome" class="sr-only">Sobrenome:</label>
                                                    <input class="form-control" name="sobrenome" id="sobrenome" type="text" size="50" placeholder="Sobrenome" required>
                                                </div>
                                                <div class="mx-auto col-lg-8 col-md-10 col-sm-12 col-xs-12">
                                                    <label for="cpf" class="sr-only">CPF:</label>
                                                    <input class="form-control" name="cpf" id="cpf" type="text" size="17" placeholder="CPF" required>
                                                </div>
                                                <div class="mx-auto col-lg-8 col-md-10 col-sm-12 col-xs-12">
                                                    <label for="nascimento" class="sr-only">Data de Nascimento:</label>
                                                    <input class="form-control" name="nascimento" id="nascimento" type="date" placeholder="Data de Nascimento" required>
                                                </div>
                                                <div class="mx-auto col-lg-8 col-md-10 col-sm-12 col-xs-12">
                                                    <label for="email" class="sr-only">E-mail:</label>
                                                    <input class="form-control" name="email" id="email" type="email" placeholder="E-mail" required>
                                                </div>
                                                <div class="mx-auto col-lg-8 col-md-10 col-sm-12 col-xs-12">
                                                    <label for="senha" class="sr-only">Senha</label>
                                                    <input class="form-control" name="senha" id="senha" type="password" size="30" placeholder="Senha" required></td></tr>
                                                </div>';
                                                    }elseif($_SERVER['REQUEST_URI'] == '/register.php?store'){
                                                        echo '<div class="mx-auto col-lg-8 col-md-10 col-sm-12 col-xs-12">
                                                    <label for="nome" class="sr-only">Nome:</label>
                                                    <input class="form-control" name="nome" id="nome" type="text" size="20" placeholder="Nome" required autofocus>
                                                </div>
                                                <div class="mx-auto col-lg-8 col-md-10 col-sm-12 col-xs-12">
                                                    <label for="cnpj" class="sr-only">CNPJ:</label>
                                                    <input class="form-control" name="cnpj" id="cnpj" type="text" size="14" placeholder="CNPJ" required>
                                                </div>
                                                <div class="mx-auto col-lg-8 col-md-10 col-sm-12 col-xs-12">
                                                    <label for="email" class="sr-only">E-mail:</label>
                                                    <input class="form-control" name="email" id="email" type="email" placeholder="E-mail" required>
                                                </div>
                                                <div class="mx-auto col-lg-8 col-md-10 col-sm-12 col-xs-12">
                                                    <label for="senha" class="sr-only">Senha:</label>
                                                    <input class="form-control" name="senha" id="senha" type="password" placeholder="Senha" required>
                                                </div>';
                                                    }
                                                    if($_SERVER['REQUEST_URI'] == '/register.php' || $_SERVER['REQUEST_URI'] == '/register.php?client' || $_SERVER['REQUEST_URI'] == '/register.php?store'){
                                                        echo '<div class="mx-auto col-lg-8 col-md-10 col-sm-12 col-xs-12">
                                                    <label for="rua" class="sr-only">Rua:</label>
                                                    <input class="form-control" name="rua" id="rua" type="text" size="50" placeholder="Rua" required>
                                                </div>
                                                <div class="mx-auto col-lg-8 col-md-10 col-sm-12 col-xs-12">
                                                    <label for="numero" class="sr-only">Número:</label>
                                                    <input class="form-control" name="numero" id="numero" type="number" placeholder="Número" required>
                                                </div>
                                                <div class="mx-auto col-lg-8 col-md-10 col-sm-12 col-xs-12">
                                                    <label for="bairro" class="sr-only">Bairro:</label>
                                                    <input class="form-control" name="bairro" id="bairro" type="text" size="50" placeholder="Bairro" required>
                                                </div>
                                                <div class="mx-auto col-lg-8 col-md-10 col-sm-12 col-xs-12">
                                                    <label for="cep" class="sr-only">CEP:</label>
                                                    <input class="form-control" name="cep" id="cep" type="text" size="9" placeholder="CEP" required>
                                                </div>
                                                <div class="mx-auto col-lg-8 col-md-10 col-sm-12 col-xs-12">
                                                    <label for="cidade" class="sr-only">Cidade:</label>
                                                    <input class="form-control" name="cidade" id="cidade" type="text" size="20" placeholder="Cidade" required>
                                                </div>
                                                <div class="mx-auto col-lg-8 col-md-10 col-sm-12 col-xs-12">
                                                    <label for="estado" class="sr-only">Estado:</label>
                                                    <input class="form-control" name="estado" id="estado" type="text" size="20" placeholder="Estado" required>
                                                </div>
                                                <div class="mx-auto col-lg-8 col-md-10 col-sm-12 col-xs-12">
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-info col-lg-12 col-md-12 col-sm-12 col-xs-12">Registrar</button>
                                                    </div>
                                                </div>';
                                                    }
                                                ?>

                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php include('Layout/_App_Bottom.php'); ?>