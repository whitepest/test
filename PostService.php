<?php

class PostService
{
    private $post = [];

    private function createPost($name, $surname, $sex, $groupNumber, $email, $points, $year, $city)
    {
        $c = new Post;
        $c->name = $name;
        $c->surname = $surname;
        $c->sex = $sex;
        $c->groupNumber = $groupNumber;
        $c->email = $email;
        $c->points = $points;
        $c->year = $year;
        $c->city = $city;

        return $c;
    }

    public function html($text)
    {
        return htmlspecialchars($text, ENT_QUOTES);
    }

    
    // Возвращает все имеющиеся объявления в виде масссива объектов Post
    // @return Post[]
    
    public function getAllPosts()
    {
        return $this->posts;
    }

    
}