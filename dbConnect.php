<?php
class dbConnect {
    function __construct() {
        require_once('config.php');
        $conn = mysql_connect(DB_HOST, DB_USER, DB_PASSWORD);
        mysql_select_db(DB_DATABASE, $conn);
        if(!$conn)
        {
            die ("Произошла ошибка при подключение к базе данных");
        }
        return $conn;
    }
    public function Close(){
        mysql_close();
    }
}
?>
