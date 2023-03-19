<?php
header("Content-Type:application/json");
if (isset($_GET['id']) && $_GET['id']!="") {
	include('dbconnection.php');
	$nom = $_GET['id'];
	$result = mysqli_query($con,"SELECT * FROM `utilisateur` WHERE nom='$nom'");
	if(mysqli_num_rows($result)>0){
        $row = mysqli_fetch_array($result);

        $data['nom'] = $row['nom'];
        $data['prenom'] = $row['prenom'];
        $data['sexe'] = $row['sexe'];
        $data['datenais'] = $row['datenais'];
        $data['email'] = $row['email'];
        $data['telephone'] = $row['telephone'];
        $data['pays'] = $row['pays'];
        $data['login'] = $row['login'];
        $data['mp'] = $row['mp'];

        $response_code = 200; //$row['response_code'];
        $response_desc = ""; //$row['response_desc'];

        response($nom, $data, $response_code,$response_desc);

        mysqli_close($con);
	}else{
		response(NULL, NULL, 200,"No Record Found");
		}
    }else{
	response(NULL, NULL, 400,"Invalid Request");
	}

function response($id,$data,$response_code,$response_desc){
	$response['id'] = $id;
	$response['data'] = $data;
	$response['response_code'] = $response_code;
	$response['response_desc'] = $response_desc;
	
	$json_response = json_encode($response);
	echo $json_response;
}
?>