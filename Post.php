<?php

class Post
{
    public $name;

    public $surname;
    
    public $sex;
    
    public $groupNumber;
    
    public $email;
    
    public $points;
    
    public $year;
    
    public $city;
}

class TableDataGateway
{
    private function connectionSQL()
    {
        $link = mysqli_connect("localhost", "root", "root", "student");

        if ($link == false):
            print("Ошибка: Невозможно подключиться к MySQL " . mysqli_connect_error());
            exit();
        endif;

        return mysqli_set_charset($link, "utf8");
    }

    public function requestOutSQL($link)
    {
        $sql = "SELECT name, surname, group_number, points FROM studen";
        
        $result = mysqli_query($link, $sql);
        
        return $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
    }
}
