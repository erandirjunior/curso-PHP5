<?php session_start(); ?>
Bem Vindo <?php echo $_SESSION['nomeAdministrador']; ?>
<br />
Arquivo de log <a href="logado.php?ver=log">Ver Arquivo de log</a>
<br /><br />
<?php
if(isset($_GET['ver'])){
    if($_GET['ver'] == 'log'):
        $arquivo = "log.txt";
        $abrirArquivo = fopen($arquivo, "r");

        while(!feof($abrirArquivo)):
            echo fgets($abrirArquivo)."<br />";
        endwhile;
    endif;
}