<?php
session_start();
session_destroy();
session_unset();


header('Location:Tela Login.html');
echo "<script>alert('Desconectado'); history.back() </script>";
?>