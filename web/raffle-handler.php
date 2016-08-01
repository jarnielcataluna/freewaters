<?php
/**
 * Created by PhpStorm.
 * User: Propelrr-AJ
 * Date: 01/08/16
 * Time: 8:38 PM
 */

header("Access-Control-Allow-Origin: *");
header('Content-Type: application/json');

if(isset($_POST) && !empty($_POST)){
    require_once('config/DBHandler.php');
    require_once('config/MailerHandler.php');
    $db = new DBHandler();
    $mailer = new MailerHandler();
    $db->connect();

    if(isset($_POST['email']) && !empty($_POST['email'])){
        $data['email'] = $_POST['email'];
        $code = strtoupper(substr(md5(rand()), 0, 6));
        $data['code'] = 'CODE ' . $code;

        if($db->insertRaffleLead($data)){
            $validate = $mailer->sendRaffleMail($data);
            if($validate == 'sent'){
                $response = array('status' => 'success', 'data' => array(
                    'message' => 'mail has been sent to email')
                );
            }else{
                $response = array('status' => 'error', 'data' => array(
                    'message' => $validate)
                );
            }
        }else{
            $response = array('status' => 'error', 'data' => array(
                'message' => 'insert failed')
            );
        }

    }else{
        $response = array('status' => 'error', 'data' => array(
            'message' => 'email not found')
        );
    }
}else{
    $response = array('status' => 'error', 'data' => array(
        'message' => 'invalid request')
    );
}

echo json_encode($response);




