<?php
require('../config.php');
$method = strtolower($_SERVER['REQUEST_METHOD']);

if($method === 'post'){

    $title = filter_input(INPUT_POST, 'title');
    $body = filter_input(INPUT_POST, 'title');

    if($title && $body){

        $sql = $pdo->prepare('INSERT INTO notes (title, body) VALUES (:title, :body)');
/*         $sql->bindValue(':title', $title);
        $sql->bindValue(':body', $body); */
        $sql->execute([':title' => $title, ':body' => $body]);

        //apos inserir retornar o id

        $id = $pdo->lastInsertId();

        $array['result'] = [
            'id' => $id,
            'title' => $title,
            'body' => $body
        ];


        
    }else{
        $array['error'] =  'campos não enviado';
    }

}else{
    $array['error'] = 'Method não permitido';
}

require('../return.php');

exit;