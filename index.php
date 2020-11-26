<pre><?php

require './lib/autoload.php';


$smarty = new Template();
Rotas::get_Pagina();

//Valores para o template
$smarty->assign('Nome', 'MATEUS DOS SANTOS MARCELINO');

$smarty->display('index.tpl');