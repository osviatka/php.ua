<?php
class Database
{
    public function __construct($host, $username, $password, $database)
    {
        $this->host = $host;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }
    public function connect()
    {
$connection = mysqli_connect($this->host, $this->username, $this->password, $this->database);
if ($connection == false)
{
echo 'Cannot connect to database' . '<br>';
echo mysqli_connect_error();
exit();                             // die();   to stop script
}
 else {
return $connection;
}
}
    public function insert($name, $surname, $sex, $age, $sex2, $birthday, $familystatus, $socialstatus, $address, $doff, $bestcompany, $readbooks, $usercomment, $selectcompany, $spam, $task)
    {
        return mysqli_query($this->connect(), "INSERT form (name, surname, sex, age, sex2, birthday, familystatus, socialstatus, address, activities, whatyoulike, bookshaveread, usercomment, multiselect, spam, complexity) VALUES 
        ('$name', '$surname', '$sex', '$age', '$sex2', '$birthday', '$familystatus', '$socialstatus', '$address', '$doff', '$bestcompany', '$readbooks', '$usercomment', '$selectcompany', '$spam', '$task')");
    }
    public function select()
    {
        $result = mysqli_query($this->connect(), "SELECT * FROM form");
        return $result;
    }
}
?> //

