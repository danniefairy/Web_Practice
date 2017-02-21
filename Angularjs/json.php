<?php
	//純文字可以使用json傳遞
	//echo "{ \"records\":[ {\"Name\":\"Alfreds Futterkiste\",\"City\":\"Berlin\",\"Country\":\"Germany\"},{\"Name\":\"Alfreds Futterkiste\",\"City\":\"Berlin\",\"Country\":\"Germany\"}] }";
	
	//json
	//每一個object
	
	$myobj1['Name']="Fairy";
	$myobj1['City']="Taipei";
	$myobj1['Country']="Taiwan";
	$myjson1=json_encode($myobj1);

	//每二個object
	$myobj2['Name']="Dannie";
	$myobj2['City']="New Taipei City";
	$myobj2['Country']="Taiwan";
	$myjson2=json_encode($myobj2);

	//很多obj放入array
	$all[0]=$myjson1;
	$all[1]=$myjson2;
	//...
	//obj集合成json
	$alljson=json_encode($all);
	//做一下處理
	$str = str_replace("\\", "", $alljson, $count);
	$str = str_replace("\"{", "{", $str, $count);
	$str = str_replace("}\"", "}", $str, $count);
	//結果: [{"Name":"Dannie","City":"Taipei","Country":"Taiwan"},{"Name":"Dannie","City":"Taipei","Country":"Taiwan"}]
	echo $str;
?>