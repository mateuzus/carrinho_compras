<?php



class Config
{
    //Informações apenas para quando for trocar de servidor

        const SITE_URL = "http://localhost";
        const SITE_FOLDER = "carrinho_compras";
        const SITE_NAME = "Loja do Marcelino - PHP 7.4 e MySqli";
        const SITE_EMAIL_ADM = "lojadomarcelino@gmail.com";

    //Informações do banco de dados
        const BD_HOST = "localhost";
        const BD_USER = "root";
        const BD_PASSWORD = "";
        const BD_DATABASE = "lojamarcelino";

    //Informações para o PHPmailler
        const EMAIL_HOST = "smtp.gmail.com";
        const EMAIL_USER = "lojadomarcelino@gmail.com";
        const EMAIL_NAME = "Loja do Marcelino";
        const EMAIL_PASSWORD = "90251900";
        const EMAIL_PORT = "587";
        const EMAIL_SMTPAUTH = "true";
        const EMAIL_SMTPSECURY = "tls";
        const EMAIL_COPY = "lojadomarcelino@gmail.com";


}