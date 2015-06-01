<?php
class MessageTable
{
    protected $title;
    protected $text;
    protected $user_id_from;
    protected $user_id_to;

    public function getTitle() {
        return $this->title;
    }
    public function getText() {
        return $this->text;
    }
    public function getUserIdFrom() {
        return $this->user_id_from;
    }
    public function getUserIdTo() {
        return $this->user_id_to;
    }
    public function __construct($title, $text, $user_id_from, $user_id_to){
        $this->title = $title;
        $this->text = $text;
        $this->user_id_from = $user_id_from;
        $this->user_id_to = $user_id_to;
    }
    public function addToTableMessages (){
        try {
            $db = new PDO("mysql:dbname=users;host=localhost", "root", "" );
            $stmt = $db->prepare("INSERT INTO messages (Title, Text, user_id_from, user_id_to) VALUES(:Title, :Text,:user_id_from, :user_id_to)");
            $stmt->bindParam(':Title', $this->title);
            $stmt->bindParam(':Text', $this->text);
            $stmt->bindParam(':user_id_from', $this->user_id_from);
            $stmt->bindParam(':user_id_to', $this->user_id_to);
            $stmt->execute();
            $db = null;
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }

    }

}