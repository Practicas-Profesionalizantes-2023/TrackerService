<?php
namespace App;

use PHPMailer\PHPMailer\PHPMailer;
use Carbon\Carbon;
use Seed;

final class Mailer
{
    private $phpmailer;

    public function __construct()
    {
        $this->phpmailer = new PHPMailer();
        $this->phpmailer->isSMTP();
        $this->phpmailer->Host = $_ENV["MAIL_HOST"];
        $this->phpmailer->SMTPAuth = true;
        $this->phpmailer->Port = $_ENV["MAIL_PORT"];
        $this->phpmailer->Username = $_ENV["MAIL_USER"];
        $this->phpmailer->Password = $_ENV["MAIL_PASS"];
        $this->phpmailer->setFrom($_ENV["MAIL_USER"], 'Practicas 2');
    }

    private function SendMail($email, $name, $subject, $message, $html = false)
    {
        $body = '<' . $email . '>' . $message;

        $this->phpmailer->addAddress($email, $name);
        $this->phpmailer->isHTML($html);
        $this->phpmailer->Subject = $subject;
        $this->phpmailer->Body = $body;

        return $this->phpmailer->send();
    }

    public function SendLoginMail($email, $name, $html)
    {
        $subject = '[TrackerService]: Se accedio a su cuenta de TrackerService desde una nueva direccion IP';
        $message = '
        Hola,<br>
        <br>
        Su seguridad es muy importante para nosotros. Esta dirección de correo se utilizó para acceder al panel de TrackerService desde una nueva dirección IP:
        <br>
        ------------------------------------------<br>
        email: ' . $email . '<br>
        dirección IP:' . $_SERVER['REMOTE_ADDR'] . '<br>
        hora: ' . Carbon::now() . ' <br>
        navegador: ' . $_SERVER['HTTP_USER_AGENT'] . '<br>
        ------------------------------------------<br>
        <br>
        Si fue usted, puede ignorar esta alerta. Si notó alguna actividad sospechosa en su cuenta, cambie su contraseña.
        <br>
        Si tiene alguna pregunta o inquietud, también puede visitar nuestro portal de soporte en https://sinopagasnoteayudamos.com
        <br>
        Gracias,
        <br>
        Los papus de segundo b';

        $this->SendMail($email, $name, $subject, $message, $html);
    }

    public function SendTicketClient($email, $name, $html)
    {
        $url = 'http://localhost:8181/public/trackerservice.php?email='. $email .'&u='. Seed::GenerateSeed($email);
        $subject = '[TrackerService]: Recibimos tu equipo';
        $message = '
        Hola '.$name.',<br>
        <br>
        Tenemos tu equipo, podes ver el proceso en el siguiente link:
        <br>
        ------------------------------------------<br>
        link: <a href="'.$url.'">Ver estado de tu ticket</a><br>
        ------------------------------------------<br>
        <br>
        Si tiene alguna pregunta o inquietud, también puede visitar nuestro portal de soporte en https://sinopagasnoteayudamos.com
        <br>
        Gracias,
        <br>
        Los papus de segundo b';

        $this->SendMail($email, $name, $subject, $message, $html);
    }

    public function ResendTicketClient($email, $name,$nuevo_estado,$id_equipo, $html)
    {
        $url = 'http://localhost:8181/public/trackerservice.php?email='. $email .'&u='. Seed::GenerateSeed($email).'#equipo-'.$id_equipo;
        $subject = '[TrackerService]: Tu dispositivo cambio de estado';
        $message = '
        Hola '.$name.',<br>
        <br>
        Ahora tu dispositivo esta en estado de '.$nuevo_estado.'.</br>
        Podes ver el proceso en el siguiente link:
        <br>
        ------------------------------------------<br>
        link: <a href="'.$url.'">Ver estado de tu ticket</a><br>
        ------------------------------------------<br>
        <br>
        Si tiene alguna pregunta o inquietud, también puede visitar nuestro portal de soporte en https://sinopagasnoteayudamos.com
        <br>
        Gracias,
        <br>
        Los papus de segundo b';

        $this->SendMail($email, $name, $subject, $message, $html);
    }


}
