<?php

session_start();//OBRIGATÓRIO COLOCAR NO INICIO DA PÁGINA 
echo session_id();

$_SESSION['nome'] = "Erandir";
echo $_SESSION['nome'];

