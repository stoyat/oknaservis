<?php

class Work {
    
    public static function getWork() {
              
     $db = Db::getConnection();
     
     $workList = array();
     
     $result = $db->query('SELECT name,jpg 
                            FROM work ORDER BY id ASC LIMIT 8');
     $i=0;
     while ($row = $result->fetch()){
        //обрезаем анонс
        $workList[$i]['name'] = $row['name'];
        $workList[$i]['jpg'] = $row['jpg'];
        $i++;
     }
      return $workList;            
    }
    
    }