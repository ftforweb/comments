<?php
include_once ROOT."/models/Comments.php";
class CommentsController {
    public function actionComment() {
        if (isset($_POST['name'], $_POST['email'], $_POST['comments'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $comments = $_POST['comments'];
                $result = Comments::addComents($name, $email, $comments);
        }
            
        $commentsList = Comments::getComments();
        
        require_once(ROOT. '/views/comments/comments.php');
        return true;
    }
}
