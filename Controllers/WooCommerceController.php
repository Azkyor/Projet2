<?php

namespace Controllers;
use Entity\Livres;
class WooCommerceController extends Controller
{
    public function index()
    {
$curl = curl_init();

curl_setopt_array($curl, array(
  CURLOPT_URL => 'https://sirege.fr/wp-json/wc/v3/products?_fields[]=name&_fields[]=regular_price',
  CURLOPT_RETURNTRANSFER => true,
  CURLOPT_ENCODING => '',
  CURLOPT_MAXREDIRS => 10,
  CURLOPT_TIMEOUT => 0,
  CURLOPT_FOLLOWLOCATION => true,
  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
  CURLOPT_CUSTOMREQUEST => 'GET',
  CURLOPT_HTTPHEADER => array(
    'Authorization: Basic Y2tfMmVkZDZmMmIwOTIyZTZlNjA5ZDUzNTNlZjcwYzZkNjQ4MWQ1ZDM2NTpjc19iMTBlMTU1ZDUyNDE0MGMxZWJkZTJmNmMwOWExOWI0NjY2ZjJjMjYy'
  ),
));

$response = curl_exec($curl);
echo'<pre>';
print_r(json_decode($response));
curl_close($curl);
echo $this->twig->render('index.html', $response);
echo '</pre>';

    }
}
?>