<?php
    class HomeController{
        function index(){
            try{
                $allPosts = Posts::selectAll();
                $loader = new \Twig\Loader\FilesystemLoader('app/View');
				$twig = new \Twig\Environment($loader);
				$template = $twig->load('home.html');

                $param = array();
				$param['postagens'] = $allPosts;
				//var_dump($colecPostagens);

				$conteudo = $template->render($param);
				echo $conteudo;

            } catch(Exception $e){
                echo $e->getMessage();
            }
        }
    }
?>