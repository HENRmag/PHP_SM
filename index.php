<?php
    require_once "app\core\core.php";

    require_once "app\lib\database\connection.php";

    require_once "app\controller\HomeController.php";
    require_once "app\controller\ErroController.php";
    require_once "app\controller\AdmController.php";

    require_once "app\model\posts.php";

    require_once "vendor\autoload.php";

    $tamplate = file_get_contents("app\Template\main.html");

    ob_start();
        $core = new Core;
        $core -> start($_GET);

        $saida = ob_get_contents();
    ob_end_clean();

    $tplPronto = str_replace('{{area_dinamica}}', $saida, $tamplate);

    echo $tplPronto;
?>