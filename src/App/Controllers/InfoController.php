<?php 
    namespace App\Controllers;
    use MiladRahimi\PhpRouter\Url;

    class InfoController
    {
        public static function gelAllLinksAndNames(Url $url)
        {
            $links = ['Главная'=> $url->make('index'), 
            'Преимущества' => $url->make('advantages'),
            'Контакты' => $url->make('contacts'),
                    ];

        return $links;

        }
    }

?>