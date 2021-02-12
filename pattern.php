<?php

$x=10;

function py_print($exp,$sep=' ',$end='<br/>'){
	$arr=explode(",",$exp);
	$x= "";
	foreach ($arr as $key => $value) {
		$x.=$sep.$value;
	}
	echo $x.$end;
}


py_print("Hello,".str_mul("2*ravi ").",Kumar {$x} ","#",'');
py_print("Hello,".str_mul("2*ravi ").",Kumar {$x} ","#");


function str_mul($exp){
	$str=explode("*", $exp);
	$num = "";
	foreach ($str as $key => $n) {
		if(ctype_digit($n)){
			$num = $n;
			break;
		}
	}
	#echo $num;
	$character = "";
	foreach ($str as $key => $n) {
		if(!ctype_digit($n)){

			$character = $n;
			break;
		}
	}
	#echo $character;
	$x= "";
	for($i=0;$i<$num;$i++){
		$x.=$character;
	}
	return $x;

}
