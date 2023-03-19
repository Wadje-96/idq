<?php
header("Content-Type:application/json");

	include('dbconnection.php');
	
	$ret=mysqli_query($con,"select * from utilisateur");
        $cnt=1;
        $row=mysqli_num_rows($ret);
        $lisData = array();
        if($row>0){
                while ($row=mysqli_fetch_array($ret)) {
                        $data['nom'] = $row['nom'];
                        $data['prenom'] = $row['prenom'];
                        $data['sexe'] = $row['sexe'];
                        $data['datenais'] = $row['datenais'];
                        $data['email'] = $row['email'];
                        $data['telephone'] = $row['telephone'];
                        $data['pays'] = $row['pays'];
                        $data['login'] = $row['login'];
                        $data['mp'] = $row['mp'];
                        $cnt=$cnt+1;
                        $lisData[] = $data;
                        //echo $data['nom'];
                } 
        } else {
        }

        $response_code = 200; //$row['response_code'];
        $response_desc = ""; //$row['response_desc'];

        response($response_code,$response_desc,$lisData);

        mysqli_close($con);
	
    

function response($response_code,$response_desc,$data){
	//$response['id'] = $id;
	$response['data'] = $data;
	$response['response_code'] = $response_code;
	$response['response_desc'] = $response_desc;
	
	$json_response = json_encode($response);
	echo $json_response;
}
?>