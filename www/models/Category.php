<?php

class Category {
    
    public static function getCategoriesList () {
        
        $db = Db::getConnection();
        
        $categoryList = array();
        
        $result = $db->query('SELECT brand_id,brand_name,parent_id FROM brands');

        $arr = array();
        foreach ($result as $item) {
            if($item['parent_id'] == 0 ) {
                //parent
                $arr[$item['brand_id']] [] = $item['brand_name'];
            }else {
                //child
                $arr[$item['parent_id']] ['next_lvl'][$item['brand_id']] = $item['brand_name'];
            }
        }
        return $arr;
    }
}