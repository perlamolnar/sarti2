<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body>

    <?php
        session_start();
        include('../php/functions.php'); 

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

        $conexion = connectBD(); 

        $sql="SELECT * FROM usuarios";

        $consulta = mysqli_query($conexion, $sql )or die ("Fallo en la consulta".mysqli_error($conexion));
       
        if ($consulta) {
            //echo "Hemos hecho la consulta.";

                /**
                 * This example shows settings to use when sending via Google's Gmail servers.
                 * This uses traditional id & password authentication - look at the gmail_xoauth.phps
                 * example to see how to use XOAUTH2.
                 * The IMAP section shows how to save this message to the 'Sent Mail' folder using IMAP commands.
                 */
                //Import PHPMailer classes into the global namespace
                //use PHPMailer\PHPMailer\PHPMailer;
                //require '../vendor/autoload.php';
                //Create a new PHPMailer instance

                
                require 'PHPMailer/src/Exception.php';
                require 'PHPMailer/src/PHPMailer.php';
                require 'PHPMailer/src/SMTP.php';

                $mail = new PHPMailer;
                //Tell PHPMailer to use SMTP
                $mail->isSMTP();
                //Enable SMTP debugging
                // 0 = off (for production use)
                // 1 = client messages
                // 2 = client and server messages
                $mail->SMTPDebug = 0;
                //Set the hostname of the mail server
                $mail->Host = 'smtp.gmail.com';
                // use
                // $mail->Host = gethostbyname('smtp.gmail.com');
                // if your network does not support SMTP over IPv6
                //Set the SMTP port number - 587 for authenticated TLS, a.k.a. RFC4409 SMTP submission
                $mail->Port = 587;
                //Set the encryption system to use - ssl (deprecated) or tls
                $mail->SMTPSecure = 'tls';
                //Whether to use SMTP authentication
                $mail->SMTPAuth = true;
                //Username to use for SMTP authentication - use full email address for gmail
                $mail->Username = "cursosarti2018@gmail.com";
                //Password to use for SMTP authentication
                $mail->Password = "sarti2018";
                //Set who the message is to be sent from
                $mail->setFrom('perlamolnar@hotmail.com', 'Perla Molnar');
                //Set an alternative reply-to address
                $mail->addReplyTo('perlamolnar@hotmail.com', 'Perla Molnar');
                //Set who the message is to be sent to
                $mail->addAddress('perlamolnar@hotmail.com', 'Gyongyi');

                    while($fila=mysqli_fetch_assoc($consulta)){ 
                        foreach($fila as $key => $value) {
                            //do something with $field and $value   
                            echo "$value<br>";                                       

                            //$ID = $fila['Id_usuario'];                         
                            //$Nombre= $fila['Nombre'];                            
                            //$Username = $fila['Username']; 
                            //$Tipo= $fila['Tipo'];
                            $Email= $fila['Email'];                            

                            $Subject = "Información sobre migración de datos.";

                            //creamos un mensage generico sin ninguna personalización:
                            $Message = "                                
                                        <h3>Buenos días,</h3>
                                        <p>
                                        Le informamos que los datos de los usuarios de la página se
                                        migraran a un nuevo servidor dentro de 48 horas.
                                        <br>
                                        <br>                                    
                                        En caso de tener dudas o preguntas, porfavor contacta la administradora.
                                        <br><br>
                                        Saludos,<br>
                                        Gyöngyi Molnár<br>
                                        Administradora<br>
                                        </p>                               
                                        ";     

                        } //fin de foreach   
                    
                        //  $mail->AddCC($Email, "bla");        //enviar copias           
                        $mail->AddBCC($Email, "Usuario Registrado");       // enviar copias ocultas
                    }//fin de while

                //Set the subject line
                $mail->Subject = utf8_decode($Subject);        
                //Read an HTML message body from an external file, convert referenced images to embedded,
                //convert HTML into a basic plain-text alternative body
                $mail->msgHTML(utf8_decode ($Message));
                //Replace the plain text body with one created manually
                $mail->AltBody = 'This is a plain-text message body';
                //Attach an image file
                $mail->addAttachment('../img/edit1.png');
                //send the message, check for errors
                if (!$mail->send()) {
                    echo "Mailer Error: " . $mail->ErrorInfo;
                } else {
                    echo "<br>Message sent!";
                    //Section 2: IMAP

                    function save_mail($mail)
                    {
                        //You can change 'Sent Mail' to any other folder or tag
                        $path = "{imap.gmail.com:993/imap/ssl}[Gmail]/Sent Mail";
                        //Tell your server to open an IMAP connection using the same username and password as you used for SMTP
                        $imapStream = imap_open($path, $mail->Username, $mail->Password);
                        $result = imap_append($imapStream, $path, $mail->getSentMIMEMessage());
                        imap_close($imapStream);
                        return $result;
                    }
                    
                    //Uncomment these to save your message in the 'Sent Mail' folder.
                    #if (save_mail($mail)) {
                    #    echo "Message saved!";
                    #}
                }
                //Section 2: IMAP
                //IMAP commands requires the PHP IMAP Extension, found at: https://php.net/manual/en/imap.setup.php
                //Function to call which uses the PHP imap_*() functions to save messages: https://php.net/manual/en/book.imap.php
                //You can use imap_getmailboxes($imapStream, '/imap/ssl') to get a list of available folders or labels, this can
                //be useful if you are trying to get this working on a non-Gmail IMAP server.
                         
        } else {
           echo "<h1>Error al recoger los datos de los usuarios.</h1>
                    <a href=\"../index.php\">VOLVER</a>";
        } 

        mysqli_close($conexion);   

    ?>

</body>
</html>


