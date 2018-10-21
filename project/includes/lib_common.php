<?php
#libary common put some common function like login function and default session
function check_login($account,$pass){
	echo $account . $pass;
	$loginResult;		
	$rs = get_user($account); //check user account

	//check if there is match account
	if(count($rs)>0){

		if($rs[0]['Status']=="Inactive"){
			$loginResult = -4;
		}elseif($rs[0]['password'] <> $pass){
			$loginResult = -2;
		}else{
			$loginResult = 1;
			$_SESSION['UserID'] = $rs[0]['UserID'];
		}
	
	}else{
		$loginResult = -1;
	}
	return $loginResult;
}


function get_user($account){
	$rs = array();
	$query = "SELECT * FROM `User` WHERE Account = ? ";
	$rs = $GLOBALS['db']->fetch_array($query,array($account));
	print_r($rs);
	return $rs;
}

function format_rs_date_column($rs , $columns, $format = php_date_fmt){
	for($i = 0 ; $i < count($rs) ; $i++){  
		for($j = 0 ; $j < count($columns) ; $j++){
			if(empty($rs[$i][$columns[$j]])){ 
				$rs[$i][$columns[$j]] = "";
			}else{
				$rs[$i][$columns[$j].'String'] = $rs[$i][$columns[$j]]->format($format);
			}
		}
	}
	return $rs;
}

function format_rs_time_column($rs , $columns, $format = php_time_fmt){
	for($i = 0 ; $i < count($rs) ; $i++){  
		for($j = 0 ; $j < count($columns) ; $j++){
			if(empty($rs[$i][$columns[$j]])){ 
				$rs[$i][$columns[$j]] = "";
			}else{
				$rs[$i][$columns[$j].'String'] = $rs[$i][$columns[$j]]->format($format);
			}
		}
	}
	return $rs;
}


?>