<?php 
$url = 'https://rtm.peruri.co.id/trusted/';
$view = "PipelineManagementv2_2D/PipelineManagement";
$username = "dewas_peruri";
$password = "p3rur1@2020";

$params = array(
    "username" => $username,
    "password" => $password,
);
$options = array(
    CURLOPT_URL             => $url,
    CURLOPT_RETURNTRANSFER  => true,    // return web page as var
    CURLOPT_CONNECTTIMEOUT  => 10,      // timeout on connect
    CURLOPT_TIMEOUT         => 10,      // timeout on response
    CURLOPT_IPRESOLVE       => CURL_IPRESOLVE_V4,
    CURLOPT_POSTFIELDS      => $params
);
$curl_connection = curl_init();
curl_setopt_array( $curl_connection, $options );
$ticket = curl_exec($curl_connection);
curl_close($curl_connection);

?>

<?php echo $url , $ticket, '/views/', $view;?>


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