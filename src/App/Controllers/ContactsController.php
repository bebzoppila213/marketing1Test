<?php 
    namespace App\Controllers;
    use MiladRahimi\PhpRouter\View\View;
    use MiladRahimi\PhpRouter\Url;

    class ContactsController
    {
        public function index(View $view, Url $url)
        {
            return $view->make('contacts', ['links' => InfoController::gelAllLinksAndNames($url)]);
        }
    }
?>  