<?php
    
    $pass = $_POST["pass"];
    if ($pass != "olakase" ) 
        echo "<script> alert('Contraseņa incorrecta')</script>";
    else
        echo "<script>location='registro.html'</script>";
    
?>