<div class="sidebar" data-color="purple" data-background-color="black" data-image="/Layout/img/sidebar.jpg">
                <div class="logo">
                    <a href="/" class="simple-text logo-normal">TOP SHOP</a>
                </div>
                <div class="sidebar-wrapper">
                    <ul class="nav">
                        <li class="nav-item<?php if($_SERVER['REQUEST_URI'] == '/' || $_SERVER['REQUEST_URI'] == '/index.php'){ echo ' active'; } ?>">
                            <a class="nav-link" href="/">
                                <i class="fa fa-home"></i>
                                <p>Página inicial</p>
                            </a>
                        </li>
<?php
    if($logado){
        if($type == 'client'){

        }elseif($type == 'store'){
            $active_createCategory = '';
            $active_createProduct = '';
            if($_SERVER['REQUEST_URI'] == '/createCategory.php'){
                $active_createCategory = ' active';
            }elseif($_SERVER['REQUEST_URI'] == '/createProduct.php'){
                $active_createProduct = ' active';
            }
?>
                        <li class="nav-item<?php echo $active_createCategory; ?>">
                            <a class="nav-link" href="/createCategory.php">
                                <i class="fa fa-file-medical"></i>
                                <p>Criar Categoria</p>
                            </a>
                        </li>
                        <li class="nav-item<?php echo $active_createProduct; ?>">
                            <a class="nav-link" href="/createProduct.php">
                                <i class="fa fa-shopping-cart"></i>
                                <p>Criar Produto</p>
                            </a>
                        </li>
<?php
        }
?>
                        <li class="nav-item">
                            <a class="nav-link" href="/logout.php">
                                <i class="fa fa-sign-out-alt"></i>
                                <p>Sair</p>
                            </a>
                        </li>
<?php
    }else{
        $active_login = '';
        $active_register_cliente = '';
        $active_register_loja = '';
        if($_SERVER['REQUEST_URI'] == '/login.php'){
            $active_login = ' active';
        }elseif($_SERVER['REQUEST_URI'] == '/register.php' || $_SERVER['REQUEST_URI'] == '/register.php?client'){
            $active_register_cliente = ' active';
        }elseif($_SERVER['REQUEST_URI'] == '/register.php?store'){
            $active_register_loja = ' active';
        }
?>
                        <li class="nav-item<?php echo $active_login; ?>">
                            <a class="nav-link" href="/login.php">
                                <i class="fa fa-sign-in-alt"></i>
                                <p>Logar</p>
                            </a>
                        </li>
                        <li class="nav-item<?php echo $active_register_cliente; ?>">
                            <a class="nav-link" href="/register.php?client">
                                <i class="fa fa-user-plus"></i>
                                <p>Registrar Cliente</p>
                            </a>
                        </li>
                        <li class="nav-item<?php echo $active_register_loja; ?>">
                            <a class="nav-link" href="/register.php?store">
                                <i class="fa fa-user-plus"></i>
                                <p>Registrar Loja</p>
                            </a>
                        </li>
<?php
                            }
?>
                    </ul>
                </div>
            </div>