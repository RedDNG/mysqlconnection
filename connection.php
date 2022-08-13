<?php
    $email = $_POST['email'];
    $bot_name = $_POST['bot_name'];
    $dc_name = $_POST['dc_name'];

    //Database connection
    $conn = new mysqli('localhost', 'root', '', 'bot_kerelmeztetes_db')

    if($conn->connecet_error){
        die('Csatlakozási hiba történt! Kérlek próbáld meg később. Hibakód: ' .$conn->connecet_error)
    }else{
        $stmt = $conn->prepare("Insert into registartion(email, bot_name, dc_name) 
        values(?, ?, ?)");
        $stmt->bind_param("sss", $email, $bot_name, $dc_name);
        $stmt->execute();
        echo "Sikeresen elküldted a kérelmedet! Hamarosan felkereslek Discordon! Kérlek várj türelemmel!"
        $stmt->close();
        $conn->cloese();
    }
?>