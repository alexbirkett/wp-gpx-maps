<?php
 
$uploadDir = "/www.pedemontanadelgrappa.it/wp-content/uploads"; // Must be writable. The plugin will create the /gpx and /gpx/~cache subfolders
$uploadUrl = "/gpx-files"; // gpx download path
$pluginDir = ""; // wordpress plugin path
$gpxUrl = "gpx-files/kjeller-karlskoga.gpx"; // your gpx file
 
/* wordpress function wrapper */
function load_plugin_textdomain(){}
function is_admin() {return false;}
function add_action(){}
function add_shortcode(){}
function register_activation_hook(){}
function register_deactivation_hook(){}
function add_filter(){}
function get_option(){return "";}
function wp_upload_dir(){return Array ( "basedir" => $uploadDir ); }
function plugins_url(){return $uploadUrl ;}
function __($val){return $val;}
 
include $pluginDir.'wp-gpx-maps.php';
?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<title>WP GPX Maps - standalone</title>
<script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?sensor=false&v=3.9" type="text/javascript" ></script>
<script src="http://code.highcharts.com/highcharts.js" type="text/javascript" ></script>
<script src="<?php echo $pluginDir; ?>WP-GPX-Maps.js" type="text/javascript" ></script>
<style type="text/css" media="screen">
<?php
echo print_WP_GPX_Maps_styles();
?>
</style>
</head>
<body>
<?php
 
/*
plugin call with all the possible settings
more info here: http://wordpress.org/extend/plugins/wp-gpx-maps/faq/
*/
 
echo handle_WP_GPX_Maps_Shortcodes( Array (
"gpx"=> $gpxUrl,
"width"=> "100%",
"mheight"=> "450px",
"mtype"=>"HYBRID",
"gheight"=> "200px",
"showcad"=>false,
"showhr"=> false,
"waypoints"=> false,
"showspeed"=> false,
"showgrade"=> false,
"zoomonscrollwheel"=> false,
"donotreducegpx"=> false,
"pointsoffset"=> 10,
"uom"=>"0",
"uomspeed"=>"0",
"mlinecolor"=>"#3366cc",
"glinecolor"=>"#3366cc",
"glinecolorspeed"=>"#ff0000",
"glinecolorhr"=>"#ff77bd",
"glinecolorcad"=>"#beecff",
"glinecolorgrade"=>"#beecff",
"chartfrom1"=>"",
"chartto1"=>"",
"chartfrom2"=>"",
"chartto2"=> "",
"starticon"=> "",
"endicon"=> "",
"currenticon"=> "",
"waypointicon"=> "",
"nggalleries"=> "",
"ngimages"=>"",
"download"=> "",
"dtoffset"=> 0,
"skipcache"=> "",
"summary"=> "",
"summarytotlen"=> false,
"summarymaxele"=> false,
"summaryminele"=> false,
"summaryeleup"=>false,
"summaryeledown"=> false,
"summaryavgspeed"=> false,
"summarytotaltime"=>false,
) );
 
?>
 
</body>
</html>