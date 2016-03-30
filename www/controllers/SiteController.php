<?php

class SiteController {
    
    public function actionIndex() {
        
        $categories = array();       
        $categories = Category::getCategoriesList();
        
        $latesNews = array();
        $latesNews = News::getNews();
        
        $ourWork = array ();
        $ourWork = Work::getWork();
        
        require_once (ROOT. '/views/site/index.php');
        return true;
    }
    
     public function actionContact() {
                
        $userEmail = '';
        $userText = '';
        $result = false;
        
        if (isset($_POST['submit'])) {
            
            $userEmail = $_POST['userEmail'];
            $userText = $_POST['userText'];
    
            $errors = false;
                        
            // ��������� �����
            if (!User::checkEmail($userEmail)) {
                $errors[] = '������������ email';
            }
            
            if ($errors == false) {
                $adminEmail = 'php.start@mail.ru';
                $message = "�����: {$userText}. �� {$userEmail}";
                $subject = '���� ������';    
                $result = mail($adminEmail, $subject, $message);
                $result = true;
            }

        }
        
        require_once(ROOT . '/views/site/contact.php');
        
        return true;
    }
}