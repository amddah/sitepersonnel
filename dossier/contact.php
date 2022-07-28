<?php 
    require_once(__DIR__ . '/vendor/autoload.php');
    use \Mailjet\Resources;
    define('API_PUBLIC_KEY', 'aee058db0d0dc5441c77264665820d6c');
    define('API_PRIVATE_KEY', '49e785866db690480b84300eff775c13');
    $mj = new \Mailjet\Client(API_PUBLIC_KEY, API_PRIVATE_KEY,true,['version' => 'v3.1']);


    if(!empty($_POST['surname']) && !empty($_POST['firstname']) && !empty($_POST['email']) && !empty($_POST['message'])){
        $surname = htmlspecialchars($_POST['surname']);
        $firstname = htmlspecialchars($_POST['firstname']);
        $email = htmlspecialchars($_POST['email']);
        $tel = htmlspecialchars($_POST['tel']);
        $message = htmlspecialchars($_POST['message']);

        if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        $body = [
            'Messages' => [
            [
                'From' => [
                'Email' => "abdoamdah3@gmail.com",
                'Name' => "site personnel"
                ],
                'To' => [
                [
                    'Email' => "abdoamdah3@gmail.com",
                    'Name' => "Abdo Amddah"
                ]
                ],
                'Subject' => "contacter moi", 
                'HTMLPart' => "<br> <b>nom:</b> $surname <br><b> prenom : </b>$firstname<br><b> email:</b> $email <br><b>tel :</b> $tel <br><b> message :</b>$message" , 
            ]
            ]
        ];
            $response = $mj->post(Resources::$Email, ['body' => $body]);
            $response->success();
            echo "Email envoyé avec succès !";
        }
        else{
            echo "Email non valide";
        }

    } else {
        header('Location: index.php');
        die();
    }
