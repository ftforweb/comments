<?php

class Comments {
    public static function addComents($name, $email, $comments){
        $db = Db::getConnection();
        
        $sql = 'INSERT INTO user_comments (name, email, comments) '
                .'VALUES (:name, :email, :comments)';
        
        $result = $db->prepare($sql);
        $result->bindParam(':name', $name, PDO::PARAM_STR);
        $result->bindParam(':email', $email, PDO::PARAM_STR);
        $result->bindParam(':comments', $comments, PDO::PARAM_STR);
        $result->execute();
    }
    
    public static function getComments(){
        $db = Db::getConnection();
        $commentsList = array();
        $sql = 'SELECT id, name, email, comments '
                                    . 'FROM user_comments '
                                    . 'ORDER BY id DESC '
                                    . 'LIMIT 9';
        
        $result = $db->query($sql);
        
        $i = 0;
        while($row = $result->fetch()){
            $commentsList[$i]['name'] = $row['name'];
            $commentsList[$i]['email'] = $row['email'];
            $commentsList[$i]['comments'] = $row['comments'];
            $i++;
        }

        return $commentsList;
    
    }
}
