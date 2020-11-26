<pre><?php


class Rotas
{
    public static $pag;
    private static $pasta_controller = 'controller';
    private static $pasta_view = 'view';
    private static $pasta_tema = 'tema';

     static function get_SiteHOME(){
        return Config::SITE_URL . '/' . Config::SITE_FOLDER;
    }

    static function get_SiteRAIZ(){
        return $_SERVER['DOCUMENT_ROOT'] . '/' . Config::SITE_FOLDER;
    }

    static function get_SiteTEMA(){
         return self::get_SiteHOME() . '/' . self::$pasta_view . '/' . self::$pasta_tema;
    }

    static function pag_Carrinho(){
        return self::get_SiteHOME() . '/carrinho';
    }

static function get_Pagina(){
    if(isset($_GET['pag'])){

        $pagina = $_GET['pag'];

        self::$pag = explode('/', $pagina);

        $pagina = 'controller/' . self::$pag[0] . '.php';
        //$pagina = 'controller/' . $_GET['pag'] . '.php';
        if(file_exists($pagina)){
            include $pagina;
        }else{
            include 'erro.php';
    }
    }
}
}