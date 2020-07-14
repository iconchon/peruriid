<?PHP
//NEW TRUSTED TICKET   
echo "s";

$username = "testdewas";
$pass = "peruri123"; 
ini_set("display_errors", "On");
ini_set('max_execution_time', 300);
$params = array(
  "username" => $username, "password" => $pass,
  "server" => "https://rtm.peruri.co.id/",
  "target_site"=>"",
  "submittable"=>"Go",
  "form"=>"value"
);

foreach ( $params as $key => $value) { $post_items[] = $key . '=' . $value; }
$post_string = implode ('&', $post_items);
$url = 'https://rtm.peruri.co.id/trusted';
$headers = array('Content-type: application/x-www-form-urlencoded');
$ch = curl_init();

echo "<br/>",$url;

curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 120);
curl_setopt($ch, CURLOPT_TIMEOUT, 120);
curl_setopt($ch, CURLOPT_URL, $url);

curl_setopt($ch, CURLOPT_IPRESOLVE, CURL_IPRESOLVE_V4);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post_string);
$result = curl_exec($ch);
curl_close($ch);
echo "</br> result",$result;

 
?>