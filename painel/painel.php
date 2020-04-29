<?php
include "../conexao.php";
include "../protege.php";
?>
<link rel="stylesheet" href="../css/style.css" type="text/css">
<table border="0" bgcolor="#dfe9f7"><tr><td height="*">
<img width="188" src="../includes/logo.bmp"><br>
<body bgcolor="#dfe9f7">
<a href="perfil.php?index" class="painel"><?php echo $row["nome1"]; ?> <?php echo $row["nome2"]; ?></a><br>
<hr size="1" width="188" color="#cccccc">
<a href="../index.php?pag=index" class="painel" target="_top">Home</a><br>
<a href="../index.php?pag=album" class="painel" target="_top">Fotos</a><br>
<a href="../index.php?pag=files" class="painel" target="_top">Arquivos</a><br>
<a href="../index.php?pag=chat" class="painel" target="_top">Chat</a><br>
<a href="../index.php?pag=cadastrados" class="painel" target="_top">Cadastrados</a><br>
<a href="../index.php?pag=forum" class="painel" target="_top">Forum</a><br>
<a href="../msgs.php?pag=index" class="painel" target="_top">Mensagens</a><br>
<a href="../soli.php" class="painel" target="_top">Solicitações</a><br>
<a href="../amigos.php" class="painel" target="_top">Amigos</a><br>
<a href="../grupos.php?pag=index" class="painel" target="_top">Grupos</a><br>

</td></tr></table>