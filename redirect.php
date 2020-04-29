<link rel="stylesheet" href="css/style.css" type="text/css">
<?php
include "conexao.php";
include "protege.php";
?>
<?php
if(isset($_GET["deletadacomsucesso"])) {
include "includes/cb2.dll";
echo "Imagem deletada com sucesso! <a class=link href=index.php?editalbum>Voltar</a>";	
include "includes/fb.dll";
}
?>
<?php
if(isset($_GET["album"])) {
include "include/index/fotos.dll";	
}
?>
<?php
if(isset($_GET["editalbum"])) {
include "include/index/editalbum.dll";	
}
?>
<?php
if(isset($_GET["files"])) {
include "include/index/arquivos.dll";	
}
?>
<?php
if(isset($_GET["index"])) {
include "include/index/index.dll";	
}
?>
<?php
if(isset($_GET["chat"])) {
include "include/index/chat.dll";	
}
?>
<?php
if(isset($_GET["cadastrados"])) {
include "include/index/cadastrados.dll";	
}
?>
<?php
if(isset($_GET["forum"])) {
include "include/index/forum.dll";	
}
?>
<?php
if(isset($_GET["forum1"])) {
include "include/index/criartopico.dll";	
}
?>
<?php
if(isset($_GET["forum2"])) {
include "include/index/vertopico.dll";
}
?>