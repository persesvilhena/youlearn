<?php
$pag = $_GET['pag'];
?>
<?php include "includes/cabeca.dll"; ?>
<frameset cols="210,*" frameborder="0">
<frame src="painel/painel.php"></frame>
<frame src="redirect.php?<?php echo "$pag"; ?>"></frame>
<?php include "includes/fimcabeca.dll"; ?>