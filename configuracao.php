<?php

//Necessário testar em dominio com SSL
define("URL", "https://pagseguro.gabrielbn.com/");

$sandbox = true;
if ($sandbox) {
    //Credenciais do SandBox
    define("EMAIL_PAGSEGURO", "gabriel_barros0804@hotmail.com");
    define("TOKEN_PAGSEGURO", "D2819B6243994BCFBEEA523529FF0D8E");
    define("APP_ID", "app2587030363");
    define("APP_KEY", "D9D42161D5D5B6FCC4EBFFAF24F8C17B");

    define("VENDEDOR1_EMAIL", "v17935321605495318020@sandbox.pagseguro.com.br");
    define("VENDEDOR1_SENHA", "2rDY0w59ncEWcVpb");
    define("VENDEDOR1_CHAVE_PUBLICA", "PUBFBB3E20294CE4482A2F9DCCCF481B8FF");


    define("URL_PAGSEGURO", "https://ws.sandbox.pagseguro.uol.com.br/v2/");
    define("SCRIPT_PAGSEGURO", "https://stc.sandbox.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js");
    define("EMAIL_LOJA", "gabriel_barros0804@hotmail.com");
    define("MOEDA_PAGAMENTO", "BRL");
    define("URL_NOTIFICACAO", "https://sualoja.com.br/notifica.html");
} else {
    //Credenciais do PagSeguro
    define("EMAIL_PAGSEGURO", "Seu e-mail do PagSeguro");
    define("TOKEN_PAGSEGURO", "Seu token no PagSeguro");
    define("URL_PAGSEGURO", "https://ws.pagseguro.uol.com.br/v2/");
    define("SCRIPT_PAGSEGURO", "https://stc.pagseguro.uol.com.br/pagseguro/api/v2/checkout/pagseguro.directpayment.js");
    define("EMAIL_LOJA", "E-mail de suporte pós venda");
    define("MOEDA_PAGAMENTO", "BRL");
    define("URL_NOTIFICACAO", "https://sualoja.com.br/notifica.html");
}