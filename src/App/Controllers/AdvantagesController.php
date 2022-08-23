<?php 
    namespace App\Controllers;
    use MiladRahimi\PhpRouter\View\View;
    use MiladRahimi\PhpRouter\Url;

    class AdvantagesController
    {
        public function index(View $view, Url $url)
        {
            return $view->make('advantages', ['links' => InfoController::gelAllLinksAndNames($url), 'url' => $url]);
        }
    }
?>  