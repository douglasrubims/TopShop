<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top" id="navigation">
                    <div class="container-fluid">
                        <div class="navbar-wrapper">
                            <a class="navbar-brand" href="#">
                                <?php
                                    if($_SERVER['REQUEST_URI'] == '/index.php' || $_SERVER['REQUEST_URI'] == '/'){
                                        echo 'Página inicial';
                                    }else if($_SERVER['REQUEST_URI'] == '/aboutUs.php'){
                                        echo 'Sobre nós';
                                    }else if($_SERVER['REQUEST_URI'] == '/login.php'){
                                        echo 'Logar';
                                    }else if($_SERVER['REQUEST_URI'] == '/register.php'){
                                        echo 'Registrar Cliente';
                                    }else if($_SERVER['REQUEST_URI'] == '/register.php?client'){
                                        echo 'Registrar Cliente';
                                    }else if($_SERVER['REQUEST_URI'] == '/register.php?store'){
                                        echo 'Registrar Loja';
                                    }else if($_SERVER['REQUEST_URI'] == '/createCategory.php'){
                                        echo 'Criar Categoria';
                                    }else if($_SERVER['REQUEST_URI'] == '/createProduct.php'){
                                        echo 'Criar Produto';
                                    }else{
                                        header('location: /');
                                    }
                                ?>

                            </a>
                        </div>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation" data-target="#navigation">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="navbar-toggler-icon icon-bar"></span>
                            <span class="navbar-toggler-icon icon-bar"></span>
						    <span class="navbar-toggler-icon icon-bar"></span>
                        </button>
                    </div>
                </nav>