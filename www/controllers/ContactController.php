<?php

class ContactController {
    
    public function actionIndex() {
        
        $userName = '';
        $userTelephone = '';
        $userText = '';
        $userCity ='';
        $result = false;
        
        if (isset($_POST['submit'])) {
            
            $userName = $_POST['userName'];    
            $userTelephone = $_POST['userTelephone'];
            $userText = $_POST['userText'];
            $userCity = $_POST['userCity'];
            
            $errors = false;
                        
            // Валидация полей
            
            if (!User::checkName($userName)) {
                $errors[] = 'Имя не должно быть короче 4 символов';
            }
            
            if(!User::checkCity($userCity)) {
                $errors[] = 'В названии города должно быть не мение 4 символов';
            }
                                  
            if(!preg_match("/^[0-9]{10,10}+$/", $_POST['userTelephone'])) 
            $errors[] = 'Телефон не верно:'.'<br>'.'- в номере должно быть 10 цифр'.'<br>'.'- без скобок, дефисов и пробелов';
            
            if ($errors == false) {
                $adminEmail = 'php.start@mail.ru';
                $message = "От: {$userName}. Телефон - {$userTelephone}. Город: {$userCity}.Текст: {$userText}";
                $subject = 'Контакты';    
                $result = mail($adminEmail, $subject, $message);
                $result = true;
            }

        }
        
        require_once(ROOT . '/views/contact/index.php');
        
        return true;
    }
}