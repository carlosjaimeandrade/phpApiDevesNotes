<?php
require('../config.php');
$method = strtolower($_SERVER['REQUEST_METHOD']);

if($method === 'get'){

    $sql = $pdo->query("SELECT * FROM notes");
    if($sql->rowCount()>0){
        $data = $sql->fetchAll(PDO::FETCH_ASSOC);
        foreach($data as $item){
            array_push( $array['result'],['id' => $item['id'],'title' => $item['title']]);

/*             $array['result'][] = [
                'id' => $item['id'],
                'title' => $item['title']
            ]; */
        }

    }

}else{
    $array['error'] = 'Method não permitido';
}

require('../return.php');

exit;