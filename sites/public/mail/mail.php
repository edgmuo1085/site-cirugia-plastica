
<?php

// Email address verification
function isEmail($email)
{
    return (preg_match("/^[-_.[:alnum:]]+@((([[:alnum:]]|[[:alnum:]][[:alnum:]-]*[[:alnum:]])\.)+(ad|ae|aero|af|ag|ai|al|am|an|ao|aq|ar|arpa|as|at|au|aw|az|ba|bb|bd|be|bf|bg|bh|bi|biz|bj|bm|bn|bo|br|bs|bt|bv|bw|by|bz|ca|cc|cd|cf|cg|ch|ci|ck|cl|cm|cn|co|com|coop|cr|cs|cu|cv|cx|cy|cz|de|dj|dk|dm|do|dz|ec|edu|ee|eg|eh|er|es|et|eu|fi|fj|fk|fm|fo|fr|ga|gb|gd|ge|gf|gh|gi|gl|gm|gn|gov|gp|gq|gr|gs|gt|gu|gw|gy|hk|hm|hn|hr|ht|hu|id|ie|il|in|info|int|io|iq|ir|is|it|jm|jo|jp|ke|kg|kh|ki|km|kn|kp|kr|kw|ky|kz|la|lb|lc|li|lk|lr|ls|lt|lu|lv|ly|ma|mc|md|mg|mh|mil|mk|ml|mm|mn|mo|mp|mq|mr|ms|mt|mu|museum|mv|mw|mx|my|mz|na|name|nc|ne|net|nf|ng|ni|nl|no|np|nr|nt|nu|nz|om|org|pa|pe|pf|pg|ph|pk|pl|pm|pn|pr|pro|ps|pt|pw|py|qa|re|ro|ru|rw|sa|sb|sc|sd|se|sg|sh|si|sj|sk|sl|sm|sn|so|sr|st|su|sv|sy|sz|tc|td|tf|tg|th|tj|tk|tm|tn|to|tp|tr|tt|tv|tw|tz|ua|ug|uk|um|us|uy|uz|va|vc|ve|vg|vi|vn|vu|wf|ws|ye|yt|yu|za|zm|zw)$|(([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5])\.){3}([0-9][0-9]?|[0-1][0-9][0-9]|[2][0-4][0-9]|[2][5][0-5]))$/i", $email));
}

if (
    isset($_POST['send']) && !empty($_POST['send']) &&
    isset($_POST['inputNombres']) && !empty($_POST['inputNombres']) &&
    isset($_POST['inputEmail']) && !empty($_POST['inputEmail']) &&
    isset($_POST['inputTel']) && !empty($_POST['inputTel']) &&
    isset($_POST['inputTextArea']) && !empty($_POST['inputTextArea']) &&
    !isEmail($clientEmail)
) {
    $emailTo = 'cirugiaplasticacpr@gmail.com';

    $clientName = addslashes(trim($_POST['inputNombres']));
    $clientEmail = addslashes(trim($_POST['inputEmail']));
    $phone = addslashes(trim($_POST['inputTel']));
    $message = addslashes(trim($_POST['inputTextArea']));
    $subject = 'Contactanos Cirugia Plastica';

    $html = "Hola Rafael Barrera Vasquez," . "\n\r";
    $html .= "Acabas de ser contactado por " . $clientName . "\n\r";
    $html .= "Esta persona acaba de mencionar lo siguiente:" . "\n\r";
    $html .= $message . "\n\r";
    $html .= "Su número de contacto es : " . $phone . "\n\r";
    $html .= "Que pases un feliz día." . "\n\r";
    $html .= "Este mensaje fue enviado el " . date('d/m/Y', time());

    $headers = "From: " . $clientName . " <" . $clientEmail . ">" . "\r\n" . "Reply-To: " . $clientEmail;

    if (mail($emailTo, $subject, $html, $headers)) {
        header("location: ../../../");
    } else {
        header("location: ../../../");
    }
}
