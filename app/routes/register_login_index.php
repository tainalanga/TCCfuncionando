<?php
    use \Psr\Http\Message\ServerRequestInterface as Request;
    use \Psr\Http\Message\ResponseInterface as Response;

    $app->get('/', function (Request $request, Response $response) use ($tpl, $templates) {
        if(isset($_SESSION['user'])){
            return $response->withRedirect($this->router->pathFor('dashboard'));
        }else{
            $tpl->addFile("CONTENT", $templates['naoLogado']);
        }

        $tpl->show();
    })->setName('landingPage');


    $app->get('/register', function () use ($tpl, $templates) {
        $tpl->addFile("CONTENT", $templates['formulario']);
        $tpl->show();
    });

    $app->post('/register', function (Request $request, Response $response) use ($tpl, $templates) {
        $tpl->addFile("CONTENT", $templates['formulario']);
        $error = 0;

        foreach($_POST as $input=>$value){
            if(empty($value)){
                $tpl->addFile("MESSAGE", $templates['messages/error']);
                $tpl->MESSAGE_ERROR_TEXT = "Formulário $input Vazio!";
                $tpl->block("BLOCK_MESSAGE");
    
                $error = 1;
            }
        }

        if($_POST['Senha'] != $_POST['Confirmar_senha']){
            $tpl->addFile("MESSAGE", $templates['messages/error']);
            $tpl->MESSAGE_ERROR_TEXT = "Senhas não coincidem!";
            $tpl->block("BLOCK_MESSAGE");

            $error = 1;
        }
        
        if($error == 0){
            $usuarioController = new Usuario();
            if($usuarioController->inserir($_POST)){
                return $response->withRedirect($this->router->pathFor('dashboard')); 
            }
        }

        $tpl->show();
    });

    $app->get('/login', function () use ($tpl, $templates) {
        $tpl->addFile("CONTENT", $templates['login']);
        $tpl->show();
    });

    $app->post('/login', function () use ($tpl, $templates) {
        $tpl->addFile("CONTENT", $templates['login']);
        $tpl->show();
    });