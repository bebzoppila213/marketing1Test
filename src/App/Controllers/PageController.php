<?php 
    namespace App\Controllers;
    use MiladRahimi\PhpRouter\View\View;
    use MiladRahimi\PhpRouter\Url;
    use Laminas\Diactoros\ServerRequest;
    class PageController
    {
        public function index(View $view, Url $url, ServerRequest $request)
        {   
            $formUrl = $url->make('send-form');
            return $view->make('index', ['links' => InfoController::gelAllLinksAndNames($url), 'formUrl' => $formUrl, 'messages' => '']);
        }

        public function advantages(View $view, Url $url)
        {
            return $view->make('advantages', ['links' => InfoController::gelAllLinksAndNames($url), 'url' => $url]);
        }

        public function contacts(View $view, Url $url)
        {
            return $view->make('contacts', ['links' => InfoController::gelAllLinksAndNames($url)]);
        }

    }

?>