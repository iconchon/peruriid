<!DOCTYPE html>
<html lang="en">
  <head>

  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />

  <title>PERURI MAIL</title>
  </head>
<body>
<h3>ini bagian 1</h3>
<?php 
$url = 'https://rtm.peruri.co.id/trusted/';
$view = "PipelineManagementv2_2D/PipelineManagement";
$username = "testdewas";
$password = "peruri123";

$params = array(
    "username" => $username,
    "password" => $password,);

$options = array(
    CURLOPT_URL             => $url,
    CURLOPT_RETURNTRANSFER  => true,    // return web page as var
    CURLOPT_CONNECTTIMEOUT  => 10,      // timeout on connect
    CURLOPT_TIMEOUT         => 10,      // timeout on response
    CURLOPT_IPRESOLVE       => CURL_IPRESOLVE_V4,
    CURLOPT_POSTFIELDS      => $params
);
$curl_connection = curl_init();
echo "</br>curl:",$curl_connection;
curl_setopt_array( $curl_connection, $options );
$ticket = curl_exec($curl_connection);

echo "s";
echo "</br>url:",$url;
echo "</br>ticket:",$ticket;
echo "</br>view:",$view;
curl_close($curl_connection);

?>
<h3>ini bagian 2</h3>
<script src="https://rtm.peruri.co.id/javascripts/api/tableau-2.min.js"></script>
<div id="vizContainer"></div>
<script type="text/javascript">
function initViz() {
    var containerDiv = document.getElementById("vizContainer"),
    url = "<?php echo $url , $ticket, '/views/', $view;?>";
    options = {
        hideTabs: true,
        hideToolbar: true,
        width: "100%",
        height: "1024px"
    };
    var viz = new tableau.Viz(containerDiv, url, options); 
}
initViz();
</script> 
</br>
o
<h3>ini bagian 3</h3>
<script type='text/javascript' src='https://rtm.peruri.co.id/javascripts/api/viz_v1.js'></script>
<div class='tableauPlaceholder' style='width: 1100px; height: 727px;'>
	<object class='tableauViz' width='1100' height='727' style='display:none;'>
	<param name='host_url' value='https%3A%2F%2Frtm.peruri.co.id%2F' /> 
	<param name='embed_code_version' value='3' /> 
	<param name='site_root' value='' />
	<param name='name' value='PipelineManagementv2_2D&#47;PipelineManagement' />
	<param name='tabs' value='no' /><param name='toolbar' value='yes' />
	<param name='showAppBanner' value='false' />
	<param name='filter' value='iframeSizedToWindow=true' />
	</object>
</div>
</body>
</html>