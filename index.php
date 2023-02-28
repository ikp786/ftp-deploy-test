<pre>


<?php
	$value = 10;
	for($i = 0; $i<$value; $i++){
  		$c = 0;
		if($i != 1){
		    $c = $i;
	    }    
	 for($j=0; $j<$i+$c; $j++){   
	 echo '*';   
	 }
   	echo '<br>';
	}




die();
$arr = [1,2,3,4,5];
$new_va = count($arr)-1;
$val = $arr[$new_va];
$arr[$new_va] = '';

$newArr = [5,1,2,3,4];

$data = [$val];

foreach($arr as $value){	
	$data[] = $value;
}
print_r($arr);
print_r($data);


die();
$ElementToSearch = 'php';
$Array = ['php','laravel','js','html'];

 $check = SearchInArray($ElementToSearch,$Array);
	echo  $check;
	function SearchInArray($ElementToSearch,$Array){
		$is_find_value = 0;
		foreach($Array as $key => $val){

			if($val == $ElementToSearch){
				$is_find_value = 1;
			}

		}
		if($is_find_value == 1){
			return true;
		}else{
			return false;	
		}
	}


?>