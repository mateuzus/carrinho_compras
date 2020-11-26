<pre><?php

require './lib/autoload.php';


$smarty = new Template();
Rotas::get_Pagina();

//Valores para o template
$smarty->assign('Nome', 'MATEUS DOS SANTOS MARCELINO');
$smarty->assign('GET_TEMA', Rotas::get_SiteTEMA());

//echo Rotas::pag_Carrinho();

$smarty->display('index.tpl');