<?php

class News {
    
    public static function getNews() {
              
     $db = Db::getConnection();
     
     $newsList = array();
     
     $result = $db->query('SELECT news_id,anons,title,jpg 
                            FROM news ORDER BY news_id ASC LIMIT 4');
     $i=0;
     while ($row = $result->fetch()){
        //�������� �����
        $row['anons'] = substr($row['anons'],0,400);
        //�������� ��������� ����� ����� �������
        $row['anons'] =substr($row['anons'],0,strrpos($row['anons'],' '));
        $row['anons'] = $row['anons'].' ...';
        $newsList[$i]['news_id'] = $row['news_id'];
        $newsList[$i]['anons'] = $row['anons'];
        $newsList[$i]['title'] = $row['title'];
        $newsList[$i]['jpg'] = $row['jpg'];
        $i++;
     }
      return $newsList;            
    }


    public static function getNewsById($id) {
        
        $id = intval($id);
        
        if($id) {
            $db = Db::getConnection();
            
            $result = $db->query('SELECT* FROM news WHERE news_id='.$id);
            $result->setFetchMode(PDO::FETCH_ASSOC);
            
            return $result->fetch();
        }
    }
    
}