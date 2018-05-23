<?php
    // RAEL CUNHA TEMPLATES
    require_once("lib/template/raelgc/view/Template.php");
    require_once("lib/Medoo/Medoo.php");

    foreach (glob("app/**/*.php") as $filename){
        include $filename;
    }

    $templates = [];
    foreach (glob("app/views/*.html") as $filename){
        $templates[basename($filename, ".html")] = file_get_contents($filename);
    }

    use raelgc\view\Template;
    $tpl = new Template('app/views/index.html');

    $usuarioController = new Usuario($tpl, $templates);
    $usuarioController->checarLogin();
    $tpl = $usuarioController->returnTemplate();


    $tpl->show();
?>
