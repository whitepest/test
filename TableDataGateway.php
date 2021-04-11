<?php

class TableDataGateway
{
    public function ConnectSQL()
    {
        $link = mysqli_connect("localhost", "root", "root", "database");

        if ($link == false)
        {
            die('Ошибка подключения (' . mysqli_connect_error() . ')');
        }

        return $link;
    }

    public function RequestOutSQL($link)
    {
        $sql = "SELECT key, name, surname, group_number, points FROM student";

        $result = mysqli_query($link, $sql);
        return $result;
    }

    function Launch()
    {
        $link = $this->ConnectSQL();
        return $this->RequestOutSQL($link);
    }
}