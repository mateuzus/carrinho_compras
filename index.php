<pre><?php

require './lib/autoload.php';


$smarty = new Template();
Rotas::get_Pagina();

//Valores para o template
$smarty->assign('Nome', 'MATEUS DOS SANTOS MARCELINO');

echo Rotas::get_SiteRAIZ();

$smarty->display('index.tpl');