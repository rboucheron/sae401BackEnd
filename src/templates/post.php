<?php

switch ($table) {
    case 'box':

        include('./src/controller/BoxController.php');
        $controller = new BoxController;
        Post($controller, $datas);
        break;

    case 'savor':

        include('./src/controller/SavorController.php');
        $controller = new SavorController;
        Post($controller, $datas);
        break;

    case 'aliment':

        include('./src/controller/AlimentController.php');
        $controller = new AlimentController;
        Post($controller, $datas);
        break;

    case 'drink' :
        include('./src/controller/DrinkController.php');
        $controller = new DrinkController;
        Post($controller, $datas);
        break;
        
    default:
        include('./src/httpcode/400.php');
}

function Post($controller, $datas)
{
    $controller->post($datas);
}
