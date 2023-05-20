<?php


namespace App\classes;


class Blog
{
    public $blogs = [];
    public function __construct()
    {
        $this->blogs = [
            0=>[
                'id'                =>1,
                'title'             =>'this is blog title one',
                'description_one'   =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Delectus eius hic perferendis quaerat.',
                'description_two'   =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Delectus eius hic perferendis quaerat.
                                        Cumque debitis delectus doloremque fugit in incidunt odio quisquam unde?
                                        Deserunt facilis harum magnam recusandae totam ullam!.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Delectus eius hic perferendis quaerat.
                                        Cumque debitis delectus doloremque fugit in incidunt odio quisquam unde?
                                        Deserunt facilis harum magnam recusandae totam ullam!',
                'image'             =>'blog-1.jpg',
            ],
            1=>[
                'id'                =>2,
                'title'             =>'this is blog title two',
                'description_one'   =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Delectus eius hic perferendis quaerat.',
                'description_two'   =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Delectus eius hic perferendis quaerat.
                                        Cumque debitis delectus doloremque fugit in incidunt odio quisquam unde?
                                        Deserunt facilis harum magnam recusandae totam ullam!.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Delectus eius hic perferendis quaerat.
                                        Cumque debitis delectus doloremque fugit in incidunt odio quisquam unde?
                                        Deserunt facilis harum magnam recusandae totam ullam!',
                'image'             =>'blog-2.jpg',],
            2=>[
                'id'                =>3,
                'title'             =>'this is blog title three',
                'description_one'   =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Delectus eius hic perferendis quaerat.',
                'description_two'   =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Delectus eius hic perferendis quaerat.
                                        Cumque debitis delectus doloremque fugit in incidunt odio quisquam unde?
                                        Deserunt facilis harum magnam recusandae totam ullam!.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Delectus eius hic perferendis quaerat.
                                        Cumque debitis delectus doloremque fugit in incidunt odio quisquam unde?
                                        Deserunt facilis harum magnam recusandae totam ullam!',
                'image'             =>'about.jpg',],
            3=>[
                'id'                =>3,
                'title'             =>'this is blog title three',
                'description_one'   =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Delectus eius hic perferendis quaerat.',
                'description_two'   =>'Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Delectus eius hic perferendis quaerat.
                                        Cumque debitis delectus doloremque fugit in incidunt odio quisquam unde?
                                        Deserunt facilis harum magnam recusandae totam ullam!.Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                        Delectus eius hic perferendis quaerat.
                                        Cumque debitis delectus doloremque fugit in incidunt odio quisquam unde?
                                        Deserunt facilis harum magnam recusandae totam ullam!',
                'image'             =>'about.jpg'
            ],
        ];
    }
    public function getAllBlog(){
        return $this->blogs;
    }
    public function getBlogById($id)
    {
        foreach ($this->blogs as $blog)
        {
            if($blog['id'] == $id)
            {
                return $blog;
            }
        }
    }
}