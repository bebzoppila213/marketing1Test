<?php
    namespace App\Controllers;

    use Laminas\Diactoros\ServerRequest;
    use App\Email\Email;
    use MiladRahimi\PhpRouter\Url;
    use MiladRahimi\PhpRouter\View\View;


    class IndexController
    {

        public function index(View $view, Url $url)
        {
            return $view->make('index', $this->createMakeParams($url, ''));
        }

        public function sendForm(ServerRequest $request, Url $url, View $view)
        {
            $formData = $this->parseBody($request);
            $email = new Email();
            $messages = $email->send($formData['name'], $formData['phone'], $formData['spam']);
            return $view->make('index', $this->createMakeParams($url, $messages));
        }

        private function createMakeParams($url, $messages = '')
        {
            $formUrl = $url->make('send-form');
            return ['links' => InfoController::gelAllLinksAndNames($url), 'formUrl' => $formUrl, 'messages' => $messages];
        }

        private function parseBody(ServerRequest $request)
        {
            $formData = [];
            parse_str($request->getBody()->getContents(), $formData);
            return $formData;
        }
    }