<?php
     require_once(__DIR__ . '/vendor/autoload.php');
     use \Mailjet\Resources;
     define('API_PUBLIC_KEY', 'aee058db0d0dc5441c77264665820d6c');
     define('API_PRIVATE_KEY', '49e785866db690480b84300eff775c13');
     $mj = new \Mailjet\Client(API_PUBLIC_KEY,API_PRIVATE_KEY ,true,['version' => 'v3.1']);
 
    if(!empty($_POST['nom']) && !empty($_POST['prenom'])){
        $nom=htmlspecialchars($_POST['nom']);
        $prenom=htmlspecialchars($_POST['prenom']);
        $mail=htmlspecialchars($_POST['mail']);
        $tel=htmlspecialchars($_POST['tel']);
        $message=htmlspecialchars($_POST['message']);
        
    
    if(filter_var($mail, FILTER_VALIDATE_EMAIL)){
        $body = [
            'Messages' => [
            [
                'From' => [
                'Email' => "$mail",
                'Name' => "$nom,$prenom"
                ],
                'To' => [
                [
                    'Email' => "abdoamddah@gmial.com",
                    'Name' => "abdelkbir"
                ]
                ],
                'Subject' => "$nom,$prenom",
                'TextPart' => '$tel,$mail,message', 
                'HTMLPart' => "$tel,$mail,$message",
                'CustomID' => "AppGettingStartedTest"
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
        header('Location: contact.php');
        die();
    }
