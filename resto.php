<?php
header("Content-type: application/json");
require 'class.php';

$req = $_GET['req'] ?? null;

if ($req) 
{
    $jsonData = file_get_contents("restaurant.json");
    
    $dataList = json_decode($jsonData, true)['menu_items'];
    
    try 
    {
        $restoData = new davidResto($dataList);
    } 
    catch (Exception $th) 
    {
        echo json_encode([$th->getMessage()]);
        return;
    }

    switch ($req_type) 
    {
    	case 'ProductName': echo $restoData -> MenuItem();
    						break;
    	
    	case 'ProductDetails': echo $restoData->Details($_GET['id']);
                           	break;
        default:echo json_encode(['Invalid Request']);
    }
}

?>