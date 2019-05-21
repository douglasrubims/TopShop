<?php
    require('connect.php');
    include('Layout/_App_Top.php');
?>

                            <div class="col-lg-12 col-md-12">
                                <div class="card">
                                    <div class="card-header card-header-info"><h4 class="card-title">Erro</h4></div>
                                    <div class="card-body">
                                        <h1 class="text-center lead"><strong>Erro! Não foi possível concluir esta ação. Tente novamente!</strong></h1>
                                        <br>
                                        <h4 class="text-center">Você será redirecionado(a) para a página inicial, caso não seja redirecionado(a), clique <a href="/">aqui</a>.</h4>
                                    </div>
                                </div>
                            </div>
                            <meta http-equiv="refresh" content="3; url=/">
<?php include('Layout/_App_Bottom.php') ?>