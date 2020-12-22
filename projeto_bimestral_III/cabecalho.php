<?php
function cabecalho(){
    session_start();
    $alt = $GLOBALS["alt"];
    $menu = $GLOBALS["menu"];
    echo "<!DOCTYPE html>
    <html>
        <head>
            <meta charset='utf-8' />
            <script src='js/jquery-3.5.1.min.js'></script>
            <link href='bootstrap/css/bootstrap.min.css' rel='stylesheet' />            
            <link href='css/main.css' rel='stylesheet' />            
            <script src='bootstrap/js/bootstrap.min.js'></script>
            <script src='js/md5.js'></script>
        </head>
        <body>                
            <nav class='navbar navbar-expand-md bg-primary navbar-dark'>
            <a href='index.php' class='navbar-brand logotipo'>
                <img src='img/logotipo.png' class='rounded' width='150' height='150' alt='$alt' />
            </a>

            <!-- botão que aparece quando a tela for pequena -->
            <button class='navbar-toggler' type='button'
                data-toggle='collapse' data-target='#menu'>
                <span class='navbar-toggler-icon'></span>
            </button>";
                if(isset($_SESSION['usuario'])){
                if($_SESSION['permissao']=='1'){
                    echo"<div class='collapse navbar-collapse' id='menu'>
                        <ul class='navbar-nav'>
                            <li role='presentation' class='dropdown'>
                                <a class='dropdown-toggle' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'>
                                Cadastrar <span class='caret'></span>
                                </a>";  
                                echo"<ul class='dropdown-menu'>";                       
                            foreach($menu as $i=>$l){
                                echo "<li class='nav-item'>
                                        <a class='menu' href='form_$i.php'>$l</a>
                                    </li>";
                            }  
                            echo "</ul>
                            </li>
                            <li role='presentation' class='dropdown'>
                            <a class='dropdown-toggle' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'>
                            Listar <span class='caret'></span>
                            </a>
                            <ul class='dropdown-menu'>";                        
                        foreach($menu as $i=>$l){
                            echo "<li class='nav-item'>
                                    <a class='menu' href='lista_$i.php'>$l</a>
                                </li>";
                        };
                        echo"</ul></li>";
                        echo"
                        <ul class='navbar-nav'>
                            <li role='presentation' >
                                <a href='logout.php' >Logout</a>
                            </li>
                        </ul>
                        ";  
                };
                if($_SESSION['permissao']=="2"){
                    echo"
                        <ul class='navbar-nav'>
                            <li role='presentation' >
                                <a href='form_livro.php' >Adicionar livros</a>
                            </li>
                        </ul>
                        <ul class='navbar-nav'>
                            <li role='presentation' >
                                <a href='lista_livreiro.php' >Meus dados</a>
                            </li>
                        </ul>
                        <ul class='navbar-nav'>
                            <li role='presentation' >
                                <a href='lista_livro.php' >Livros</a>
                            </li>
                        </ul>
                        <ul class='navbar-nav'>
                            <li role='presentation' >
                                <a href='logout.php' >Logout</a>
                            </li>
                        </ul>
                    "; 
                }
                if($_SESSION['permissao']=="3"){
                    echo"
                        <ul class='navbar-nav'>
                            <li role='presentation' >
                                <a href='pegando_livro.php' >Pegar livro</a>
                            </li>
                        </ul>
                        <ul class='navbar-nav'>
                            <li role='presentation' >
                                <a href='lista_aluno.php' >Meus dados</a>
                            </li>
                        </ul>
                        <ul class='navbar-nav'>
                            <li role='presentation' >
                                <a href='logout.php' >Logout</a>
                            </li>
                        </ul>
                    "; 
                }
            }else{
                echo"
                <ul class='navbar-nav'>       
                    <li role='presentation' class='dropdown'>
                        <a class='dropdown-toggle' data-toggle='dropdown' href='#' role='button' aria-haspopup='true' aria-expanded='false'>
                        Cadastrar <span class='caret'></span>
                    </a>
                <ul class='dropdown-menu'>
                    <li class='nav-item'>
                        <a class='menu' href='form_aluno.php'>Aluno</a>
                    </li>
                    <li class='nav-item'>
                        <a class='menu' href='form_livreiro.php'>Livreiro</a>
                    </li>
                </ul>
                    </ul></li>
                        <ul class='navbar-nav'>
                            <li role='presentation' >
                                <a href='#' data-toggle='modal'
                                    data-target='#modal_login'>Login</a>
                            </li>
                        </ul>
                ";
            }

        echo"</div></nav>
        <main role='main' class='container'>";
}
include "form_login.php";
?>