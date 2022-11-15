<?php

include './configuracao.php';

$data = array(
  'apiKey' => 'apk_45760682-piGJjisFmJXcXYlrCRdoyEOKzSolUoIp',
  'order_id' => '96874', // código interno do lojista para identificar a transacao.
  //dados do cliente
  'payer_email' => 'poulsilva@myexemple.com',
  'payer_name' => 'poul silva', // nome completo ou razao social
  'payer_cpf_cnpj' => '00000000191', // cpf ou cnpj
  'payer_phone' => '1140638785', // fixou ou móvel
  'payer_street' => 'Av Brigadeiro Faria Lima',
  'payer_number' => '1461',
  'payer_complement' => 'Torre Sul 4º Andar',
  'payer_district' => 'Jardim Paulistano',
  'payer_city' => 'São Paulo',
  'payer_state' => 'SP', // apenas sigla do estado
  'payer_zip_code' => '01452002',
  //dados do cliente
  'notification_url' => 'https://mysite.com/notification/paghiper/',
  'discount_cents' => '1100', // em centavos
  'shipping_price_cents' => '2595', // em centavos
  'shipping_methods' => 'PAC',
  'fixed_description' => true,
  'type_bank_slip' => 'boletoA4', // formato do boleto
  'days_due_date' => '5', // dias para vencimento do boleto
  'late_payment_fine' => '2',// Percentual de multa após vencimento.
  'per_day_interest' => true, // Juros após vencimento.
  'items' => array(
      array ('description' => 'piscina de bolinha',
      'quantity' => '1',
'item_id' => '1',
'price_cents' => '1012'), // em centavos
array ('description' => 'pula pula',
'quantity' => '2',
'item_id' => '1',
'price_cents' => '2000'), // em centavos
array ('description' => 'mala de viagem',
'quantity' => '3',
'item_id' => '1',
'price_cents' => '4000'), // em centavos
),
);
$data_post = json_encode( $data );
$url = "https://api.paghiper.com/transaction/create/";
$mediaType = "application/json"; // formato da requisição
$charSet = "UTF-8";
$headers = array();
$headers[] = "Accept: ".$mediaType;
$headers[] = "Accept-Charset: ".$charSet;
$headers[] = "Accept-Encoding: ".$mediaType;
$headers[] = "Content-Type: ".$mediaType.";charset=".$charSet;
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $data_post);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$result = curl_exec($ch);
$json = json_decode($result, true);
// captura o http code
$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
if($httpCode == 201):
// CÓDIGO 201 SIGNIFICA QUE O BOLETO FOI GERADO COM SUCESSO
echo $result;
// Exemplo de como capturar a resposta json
$transaction_id = $json['create_request']['transaction_id'];
$url_slip = $json['create_request']['bank_slip']['url_slip'];
$digitable_line = $json['create_request']['bank_slip']['digitable_line'];
else:
echo $result;
endif;
?>