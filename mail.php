<?php
    if(isset($_POST['msg']) || isset($_POST['email'])){
        $to = "racer3229@gmail.com";
        $subject = "From Portfolio";
        $message = '
                <html>
                    <head>
                        <title>'.$subject.'</title>
                    </head>
                    <body>
                        <p>Имя: '.$_POST['email'].'</p>
                        <p>Телефон: '.$_POST['msg'].'</p>                        
                    </body>
                </html>';
        $headers  = "Content-type: text/html; charset=utf-8 \r\n";
        $headers .= "From: Отправитель <from@example.com>\r\n";
        
        mail($to, $subject, $message, $headers);
    }