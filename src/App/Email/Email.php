<?php 
    namespace App\Email;
    use PHPMailer\PHPMailer\PHPMailer;

    class Email
    {   
        private $mail;

        public function __construct()
        {
            $this->mail = new PHPMailer();
            $this->settingsOptions();
            $this->mail->setFrom('login@ya.ru', 'Иван Иванов');
            $this->mail->addAddress('hr@marketing1.su', 'Вася Петров');
        }

        private function settingsOptions()
        {
            $this->mail->isSMTP(); 
            $this->mail->Host   = 'smtp.yandex.ru'; 
            $this->mail->SMTPAuth = true;          
            $this->mail->Username = 'login';       
            $this->mail->Password = 'password';   
            $this->mail->SMTPSecure = 'ssl';         
            $this->mail->Port = 465;
        }

        public function createMessages($name, $phone, $spam)
        {
            $this->mail->Subject = 'Заявка';
            $this->mail->msgHTML("<html><body>
                            <h1>Имя: $name. Телефон: $phone. Условия: $spam</h1>
                            </html></body>");
        }

        public function send($name, $phone, $spam)
        {
            $this->createMessages($name, $phone, $spam);
            if ($this->mail->send()) {
                return 'Письмо отправлено!';
            } else {
                return 'Ошибка';
            }

        }
    }
