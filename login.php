<?php
    require('connect.php');
    session_unset();
    session_destroy();
    include('Layout/_App_Top.php');
?>

                            <div class="col-lg-6 col-md-8 col-sm-8 col-xs-6 mx-auto">
                                <div class="card">
                                    <div class="card-header card-header-info"><h4 class="card-title">Logar</h4></div>
                                    <div class="card-body">
                                        <div class="container-fluid">
                                            <div class="lead text-center"></div>
                                            <form class="form-group" method="post" action="/auth.php">
                                                <div class="mx-auto col-lg-8 col-md-10 col-sm-12 col-xs-12">
                                                    <label for="email" class="sr-only">E-mail:</label>
                                                    <input class="form-control" name="email" id="email" type="text" placeholder="E-mail" required autofocus>
                                                </div>
                                                <div class="mx-auto col-lg-8 col-md-10 col-sm-12 col-xs-12">
                                                    <label for="senha" class="sr-only">Senha</label>
                                                    <input class="form-control" name="senha" id="senha" type="password" placeholder="Senha" required></td></tr>
                                                </div>
                                                <div class="mx-auto col-lg-8 col-md-10 col-sm-12 col-xs-12">
                                                    <div class="text-center">
                                                        <button type="submit" class="btn btn-info col-lg-12 col-md-12 col-sm-12 col-xs-12">Entrar</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
<?php include('Layout/_App_Bottom.php'); ?>