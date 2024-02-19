<?php

//
// EXAMPLE OF CODE - NOT WORKING NOW
// 
die();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include '../../_db_config.php';


date_default_timezone_set('Europe/Bratislava');

$categories_for_file = array();
$pages_from_file = array();
$products = array();
$controled_links = array();

$url_in_db = array();
$url_in_db = getUrlFromDb($db);


//
// Zoznam kategorii zo sitemap ulozene do pola a do suboru
//
$category_from_sitemap = array();
$category_from_sitemap = getActualCategorySitemaps();

foreach($category_from_sitemap as $cat_url){
    $nechcene_kategorie = array('stoffe', 'naehzubehoer', 'schnittmuster', 'wolle', 'inspiration', 'sale');
    $one_cat_url = explode('/', $cat_url);
    $product_cat = $one_cat_url[3];

    if (!in_array($product_cat, $nechcene_kategorie)){
        $categories_for_file[] = $cat_url;
    }
}

// kontrolny vypis
foreach($categories_for_file as $cat_link){
    echo "'" . $cat_link . "',<br>";
}

// ulozenie do suboru
file_put_contents('categories.txt',  '<?php return ' . var_export($categories_from_file, true) . ';');



//
// VYTIAHNUTIE UDAJOV ZO SLEDOVANEJ STRANKY
//
$product = array();

$categories_from_file = include 'categories.txt';             	// zoznam kategorii zo suboru
$pages_from_file = include 'pages_count.txt';                 	// zoznam poctu stranok s produktami zo suboru

// ak vyprazdni vsetky kategorie, skonci skript
if (empty($categories_from_file)) {
    die('skontrolovane vsetky kategorie');
}

$first_of_cat = array_shift($categories_from_file);
$first_of_page = array_shift($pages_from_file);

$url = file_get_contents($first_of_cat . '?page=' . $first_of_page .'&products_per_page=60');

// pripojenie na url
$html2 = mb_convert_encoding($url, 'HTML-ENTITIES', "UTF-8");
$DOM = new DOMDocument();
libxml_use_internal_errors(true);
$DOM->loadHTML($html2);
libxml_clear_errors();
$finder = new DomXPath($DOM);

$classname_for_id = 'product__card-default-button wishlist';                                    // class elementu na vytiahnutie ID produktu
$classname_for_link = 'app__product-product__card-productlink';                                 // class elementu na vytiahnutie linku produktu
$classname_for_name = 'app__heading-depth__3';                                                  // class elementu na vytiahnutie mena produktu
$classname_for_category = 'app__misc-breadcrumb__navigation flex__start__center';               // class elementu na vytiahnutie kategorie produktu
$nodes_id = $finder->query("//button[contains(@class, '$classname_for_id')]/@data-id");         // vytiahnem elementy s ID produktu
$nodes_link = $finder->query("//a[contains(@class, '$classname_for_link')]/@href");             // vytiahnem elementy s linkom produktu
$nodes_name = $finder->query("//span[contains(@class, '$classname_for_name')]");                // vytiahnem elementy s menom produktu
$nodes_category = $finder->query("//nav[contains(@class, '$classname_for_category')]/span");    // vytiahnem elementy s kategoriou produktu

// ID produktov zo vsetkych stranok ulozim do pola
foreach ($nodes_id as $key => $node) {
    // vytiahnem ID produktu
    $product_id = $node->nodeValue;
    $products[$key][] = ( 
        $product_id
    );
// echo $product_id . '<br>';
}

// Linky produktov zo vsetkych stranok ulozim do pola
foreach ($nodes_link as $key => $node) {
    // vytiahnem link produktu
    $product_link = $nodes_link[$key]->nodeValue;
    $product_link = trim($product_link);

    $products[$key][] = ( 
        $product_link
    );
// echo $product_link . '<br>';
}

// Mena produktov zo vsetkych stranok ulozim do pola
foreach ($nodes_name as $key => $node) {
    // vytiahnem meno produktu
    $product_name = $nodes_name[$key]->nodeValue;
    $product_name = trim($product_name);

    $products[$key][] = ( 
        $product_name
    );
// echo $product_name . '<br>';
}

// Zistim aktualnu kategoriu produktu
foreach ($nodes_category as $key => $node) {
    // vytiahnem kategoriu produktu
    $product_category = $nodes_category[$key]->nodeValue;
}
// echo $product_category . '<br>';


// kontrolny vypis

// echo '<pre>';
// print_r($products);
// echo '</pre>';
// die();


//
// ULOZENIE UDAJOV DO DB
//
foreach ($products as $key => $product) {

    if(!$product[1]){
        // echo '<br>';
        // echo 'nic, nie je to produkt <br>';
        // echo '<br>';
    } else {
        $product_id = $product[0];
        $product_link = $product[1];
        $product_name = $product[2];
        $product_category = $product_category;

        if(!in_array($product_link, $url_in_db)){

            $query_insert = $db->prepare("INSERT INTO example_com_main (`product_link`,`product_id`,`product_name`,`product_category`)
                                            VALUES ('$product_link', '$product_id', '$product_name', '$product_category')");
            $query_insert->execute();
            $url_in_db[] = $product_link;
            // echo 'nazov: ' . $product_name . '<br>';
            // echo 'kategoria: ' . $product_category . '<br>';
            // echo 'product id: ' . $product_id . '<br>';
            // echo 'link: ' . $product_link . '<br>';
            // echo '<br>';
        } else {
            // echo '<br>';
            // echo $product_id . ' nachadza sa v DB<br>';
            // echo '<br>';
        }
    }
}

// zniz pocet stran produktov o jednu kontrolu
$i = $first_of_page - 1;
echo $i . '<br>';
// die();

// ak nejaka strana na kontrolu este ostava, uloz do subora aktualne hodnoty
if($i > 0){
    array_unshift($pages_from_file, $i);
    array_unshift($categories_from_file, $first_of_cat);

    // do subora ulozim pole s aktualnym poctom neskontrolovanych stran
    file_put_contents('pages_count.txt',  '<?php return ' . var_export($pages_from_file, true) . ';');
    // do subora ulozim pole s aktualnymi kategoriami
    file_put_contents('categories.txt',  '<?php return ' . var_export($categories_from_file, true) . ';');
} else {
    // do subora ulozim aktualne udaje
    file_put_contents('pages_count.txt',  '<?php return ' . var_export($pages_from_file, true) . ';');
    file_put_contents('categories.txt',  '<?php return ' . var_export($categories_from_file, true) . ';');
}



// 
// Funkcie
// 

// vytiahnutie udajov z DB
function getUrlFromDb($db){

    $url_array = array();
    $query_sel = $db->prepare("SELECT id, product_link FROM `example_com_main`");
    $query_sel->execute();

    if ($query_sel->rowCount() > 0) {
        while ($row_select1 = $query_sel->fetch(PDO::FETCH_ASSOC)) {
            $id = $row_select1['id'];
            $url = $row_select1['product_link'];

            if(!in_array($url,$url_array )){
                $url_array[] = $url;
            }else{
                //vymazanie duplikatnej URL z  DB
                $query_delete = $db->prepare("DELETE FROM `example_com_main` WHERE id = '$id'");
                $query_delete->execute();
            }
        }
    }
    return $url_array;
}

// ulozenie kategorii zo sitemap stranky do pola
function getActualCategorySitemaps(){

    $product_sitemap_array = array();

    $default_sitemap =  'https://www.example.com/sitemapcategories.xml';

    $html = file_get_contents($default_sitemap);
    $html = mb_convert_encoding($html, 'UTF-8', mb_detect_encoding($html, 'UTF-8', true));

    preg_match_all('/<loc>(.*?)<\/loc>/s', $html, $matches);

    $data = $matches[1];

    foreach ($data as $url) {
        if(!in_array($url,$product_sitemap_array)){
            $product_sitemap_array[] = $url;
        }
    }
    return $product_sitemap_array;
}









//
// KOD NA ZISTENIE AKTUALNEHO MNOZSTVA DANEHO PRODUKTU NA SKLADE OBCHODU
//

include '../../_db_config.php';

date_default_timezone_set('Europe/Bratislava');
$datum = date('Y-m-d');

// udaje o produkte z DB
$data = getProductFromCategory($db);

// url na odoslanie requestu na ziskanie aktualneho mnozstva
$url = 'https://www.example.com/library/includes/ajax/addtocart.ajax.php';


foreach ($data as $one_product) {

    $main_id    = $one_product['id'];
    $product_id = $one_product['product_id'];

    date_default_timezone_set('Europe/Bratislava');
    $datum = date('Y-m-d');

    // nahodne cislo velkeho mnozstva
    $qty = rand(40000, 99999);

    // odoslem request na stranku a zistim aktualne maximalne mnozstvo na sklade
    $data_qty = getProductQty($product_id, $qty, $url);
    $max_qty = $data_qty->available;

    // ulozim ziskane mnozstvo do tabulky s aktualnym datumom
    $query_insert = $db->prepare("INSERT INTO `example_com_qty` (`product_id`,`qty`,`date`)
                                    VALUES ('$product_id','$max_qty','$datum')");
    $query_insert->execute();

    // aktualizujem datum updatu hlavnej tabulky s nazvami produkov
    $query_update = $db->prepare("UPDATE `example_com_main` SET `last_update_qty` = :last_update_qty WHERE `id` = :id  ");
    $query_update->execute([
        'last_update_qty' => $datum,
        'id' => $main_id
    ]);
}



// 
// FUNKCIE
//

// vytiahnutie produktov z DB
function getProductFromCategory($db){
    $products_category = array();

    date_default_timezone_set('Europe/Bratislava');
    $datum = date('Y-m-d');
    $date_before_day = date('Y-m-d', strtotime("-1 day", strtotime($datum)));  //1 day
    
    // vytiahnem z tabulky produkty, ktore este nie su aktualne
    $query_sel = $db->prepare("SELECT * FROM `example_com_main` WHERE (last_update_qty < '$datum' OR last_update_qty is NULL) LIMIT 100");
    $query_sel->execute();

    if ($query_sel->rowCount() > 0) {
        while ($row_select1 = $query_sel->fetch(PDO::FETCH_ASSOC)) {
            $row_id = $row_select1['id'];
            $product_id = $row_select1['product_id'];
            $last_update_qty = $row_select1['last_update_qty'];

            // ziskane udaje ulozim do pola
            $products_category[] = array(
                'id' => $row_id,
                'product_id' => $product_id, 
                'last_update_qty' => $last_update_qty
            );
        }
    }
    return $products_category;
}

// odoslanie udajov na stranku pre ziskanie aktualneho mnozstva produktu na sklade
function getProductQty($product_id, $qty, $url){
    
    // udaje posielane na stranku vo formate json
    $sending_data = array("qty" => $qty,"productid" => $product_id );
    $postdata = json_encode($sending_data);

    // odoslanie requestu s datami
    $ch = curl_init($url); 
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $postdata);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json'));
    $result = curl_exec($ch);
    curl_close($ch);

    // vytiahnute data ulozim z json na array
    $result = json_decode($result);

    return $result;
}


