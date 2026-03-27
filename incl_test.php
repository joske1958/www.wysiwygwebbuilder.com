
<?php
// incl_test.php used in wbs 
ini_set('display_errors', 'On');
error_reporting(E_ALL);
include_once("incl_metro_functions.php");
// include_once("dummy.php");
// WIG_help("my_help=WIG_window");
// WIG_tooltip("ON");
// echo "<br>:<br>:";
// WIG_menu("caption=dropdown","my_option=w_dropdown","class=bg-white fg-blue");
// WIG_dropdown("caption=drop_test","w_dropdown=WIG_fill|||my_caption=fill%%%WIG_msg|||my_caption=wig_msg |||txt=hello|||exec=WIG_container%%%WIG_toastr |||my_caption=wig_toastr|||txt=toast");
// WIG_dropdown("caption=first");
// WIG_toast("my_pos=tr","delay=5000");
// echo "<script type=\"text/javascript\">  $(document).ready(function() { JAV_p('WIG_progress'); } );</script>";

// WIG_iframe("iframe=?incl_metro_functions.php=JAV_p");
// WIG_btn("caption=iframe","cmd=WIG_iframe|||iframe=?incl_metro_functions.php=JAV_notify");

// echo'<embed src="incl_metro_functions.php?JAV_notify=test|||10000|||lime|||400px">';



	

function WIG_test_4()
{
echo "WIG_test_4 is called at : ";	

}


WIG_demo();
return;
echo "<br>";
WIG_btn("caption=container","cmd=WIG_container|||delay=60000|||DEBUG=ON");
WIG_btn("caption=jav notify","cmd=JAV_notify|||hello|||8000|||yellow|||400px");
WIG_btn("caption=wig_test4","cmd=JAV_p|||WIG_container=cmd=WIG_dt|||DEBUG=ON|||delay=5000");
WIG_btn("caption=wig_test4 jav_p","cmd=JAV_p|||WIG_container=cmd=WIG_demo|||DEBUG=NN|||delay=5000");
WIG_btn("caption=wig_test4","cmd=WIG_test_4");
WIG_btn("caption=wig_m","cmd=JAV_p|||WIG_m");

// echo "<button onclick=\"JAV_p('WIG_msg=DEBUG=ON|||delay=15000')\">Click me JAV_p('WIG_m=DEBUG=ON|||delay=15000')</button>"; 

// WIG_btn("caption=msg","cmd=WIG_msg|||my_pos=tr|||delay=5000");
// WIG_btn("caption=m","cmd=JAV_p|||WIG_m=DEBUG=ON|||my_pos=tr|||delay=10000|||exec=WIG_clock");
// WIG_btn("caption=m2","cmd=JAV_p|||WIG_m=DEBUG=ON|||my_pos=tr|||delay=10000|||exec=WIG_clock|||exec2=WIG_dialog|||exec3=WIG_metro_box|%|delay=4000");
// WIG_btn("caption=msg","cmd=JAV_p|||WIG_msg=DEBUG=ON|||my_pos=tr|||delay=10000");
// WIG_msg("my_pos=tr");
WIG_btn("caption=container test","cmd=WIG_container|||visibility=hiddens|%|exec=WIG_demo","refresh=NO");
return;
// echo "<button onclick=\"JAV_p('WIG_mm')\">prevent</button>"; 
// WIG_msg("my_pos=tr");

WIG_btn("caption=wig_m jav","cmd=JAV_p=WIG_m");
WIG_btn("caption=wig_m wig","cmd=WIG_m");
// WIG_mm();

// WIG_jscript();




	



return;




 
 




WIG_btn("caption=progress","cmd=WIG_progress|||delay=5000");
WIG_btn("caption=msg","cmd=WIG_msg|||delay=5000");
/// WIG_show_hide("WIG_clock","none","5s");
WIG_btn("caption=demo","cmd=WIG_container|||visibility=hidden|%|exec=WIG_demo");
return;
// WIG_btn("caption=wig metro","cmd=WIG_metro|||data-role=container,resizable,draggable|||DEBUG=ON");
WIG_btn("caption=show hide","cmd=WIG_show_hide|||WIG_clock|||slideInLeft|||5s","refresh=NO");

WIG_btn("caption=jav show hide","cmd=JAV_show_hide|||WIG_clock|||slideInLeft|||5s");
// WIG_btn("caption=demo","cmd=WIG_container|||visibility=hidden|%|exec=WIG_demo");
// WIG_btn("caption=jav_p toast","cmd=JAV_p|||WIG_toast=my_pos=tl|||txt=mmmmm");
// WIG_btn("caption=w_menu","cmd=WIG_container|||visibility=hidden|%|exec=WIG_menu|||my_option=w_dropdown");
echo "<br><br>";
// php_function="WIG_msg=cmd=WIG_dt|||class=fg-red bg-blue|||my_pos=tr|||delay=5000|||exec=WIG_clock|||DEBUG=ON|||exec2=WIG_show_hide|%|WIG_clock";
WIG_btn("caption=jav_p toast","cmd=JAV_p|||WIG_toast=my_pos=tl|||txt=mmmmm");
WIG_btn("caption=wig toastr","cmd=WIG_toast|||my_pos=tl|||txt=mmmmm");

// WIG_chc("data-role=box","DEBUG=NN");
// WIG_metro("data-role=notify","DEBUG=ON");
// WIG_create_form("W_calendar W_time W_select");
// WIG_dialog("cmd=WIG_fill");
// WIG_select("w_select=WIG_hello%%%1%%%two%%%three%%%four");
// WIG_resize();




	
	
	




// WIG_btn("caption=master","data-role=master","cmd=WIG_fill");
WIG_btn("caption=draggable","cmd=WIG_container|||visibility=hidden|||DEBUG=ON|||data-role=resizable|||data-role=draggable|||width=700px|||height=400px");
return;

WIG_btn("caption=msg","cmd=WIG_msg|||width=100%|||DEBUG=ON|||txt=msg testing|||my_pos=tl|||cmd=WIG_dt|||class=bg-light-green fg-blue","refresh=NO");
WIG_metro("id=WIG_box2","data-role=box","DEBUG=OFF","width=95%","height=400px","class=fg-blue bg-yellow","my_option=create","exec1=WIG_dt","exec=WIG_clock","exec2=WIG_demo");
WIG_btn("caption=jav_show_hide 10s wig_box2","cmd=JAV_show_hide|||WIG_box2|||none|||10s");
WIG_btn("caption=wig_show_hide 10s wig_box2","cmd=WIG_show_hide|||WIG_box2|||none|||10s");
WIG_btn("caption=jav_p toast","cmd=JAV_p|||WIG_toast=my_pos=tl|||txt=mmmmm");
// echo "<script type=\"text/javascript\">  $(document).ready(function() { JAV_p('WIG_toast=my_pos=tl|||txt=mmmm'); } );</script>";
WIG_btn("caption=toast","cmd=WIG_toast|||my_pos=tr|||delay=5500");
WIG_btn("caption=wizard","cmd=WIG_wizard|||class=fg-white bg-light-blue");
// WIG_container("cmd=WIG_demo");
return;
echo "<pre>";
// echo "<script type=\"text/javascript\">  $(document).ready(function() { JAV_p('WIG_msg','calling WIG_msg|||alert_danger'); } );</script>";
// echo "<script type=\"text/javascript\">  $(document).ready(function() { JAV_p('WIG_wizard'); } );</script>";
//echo "<script type=\"text/javascript\">  $(document).ready(function() { JAV_p(); } );</script>";
WIG_btn("caption=jav_p","cmd=JAV_p|||WIG_dt");
WIG_btn("caption=jav_p wizard","cmd=JAV_p|||WIG_wizard");
echo" </pre>";
return;
// WIG_change_color();
// WIG_change_color_nm("BLUE");
WIG_btn("caption=container test 2","cmd=WIG_container|%|exec2=JAV_show|||WIG_clock|%|exec=WIG_demo","refresh=NO");
WIG_btn("caption=wig_panel","cmd=WIG_container|%|exec=WIG_panel|||cmd=WIG_menu");
WIG_btn("caption=wizard","cmd=WIG_wizard|||class=bg-black fg-blue");
WIG_btn("caption=container test","cmd=WIG_container|||visibility=hiddens|%|exec=WIG_demo|||visibility=hiddens|||z-index=0","refresh=NO");
WIG_btn("caption=container test refresh","cmd=WIG_container|||visibility=hidden|%|exec=WIG_demo|||visibility=hidden|||z-index=0");
WIG_btn("caption=jav_p dt","cmd=JAV_p|||WIG_window=DEBUG=ON");
WIG_btn("caption=help","cmd=WIG_container|||visibility=hidden|%|exec2=WIG_clock|%|exec=WIG_help|||my_help=WIG_metro");
WIG_btn("caption=jav_show_hide","cmd=JAV_show_hide|||WIG_clock|||slideInLeft|||7s");  
WIG_btn("caption=msg ok","cmd=WIG_msg|||WIG_dt|||class=fg-red bg-blue|||my_pos=tr|||delay=5500|||exec=WIG_clock|||DEBUG=ON|%|exec2=WIG_show_hide|||WIG_clock|%|exec3=JAV_show_hide|||WIG_box");  
WIG_btn("caption=jav_p","cmd=JAV_p|||WIG_msg=cmd=WIG_dt|||class=fg-red bg-blue|||my_pos=tr|||delay=5000|||exec=WIG_clock|||DEBUG=ON|||exec2=WIG_show_hide|%|WIG_clock");
WIG_btn("caption=wig_box","cmd=JAV_show_hide|||WIG_box");
WIG_btn("caption=wig_window","cmd=JAV_show|||WIG_window");
WIG_btn("caption=wig_box","cmd=WIG_show|||WIG_box");
WIG_btn("caption=wig_box 2","cmd=WIG_metro|||width=1200px|||height=600px|||delay=2000|||DEBUG=ON|%|cmd=JAV_show_hide|||WIG_box");
return;
// WIG_login("my_option=show");

// echo"<pre>";WIG_dropdown("caption=test","class=fg-blue bg-red");WIG_dropdown("caption=test","class=fg-blue bg-green");echo "</pre>";
WIG_btn("caption=show testFlexContainer1","cmd=JAV_show|||testFlexContainer1");
//WIG_btn("caption= javp toast","cmd=JAV_p=WIG_toastr|||txt=hello2|||delay=4000");
// echo "<script type=\"text/javascript\">  $(document).ready(function() { JAV_p('WIG_container=DEBUG=OFF|||my_option=left|||height=250px|||cmd=WIG_menu'); } );</script>";
// ?JAV_p=WIG_container|||DEBUG=OFF|||my_option=left|||height=250px|||cmd=WIG_menu|||exec=WIG_fill
// WIG_btn("caption=modify session w_toast","cmd=WIG_container|%|WIG_change_session_var|||W_toast_txt");
WIG_btn("caption=container test","cmd=WIG_container|%|exec=WIG_demo","refresh=NO");
WIG_btn("caption= javp msg","cmd=JAV_p=WIG_msg|||txt=hello|||delay=8000");
WIG_btn("caption= wig_msg","cmd=WIG_msg|||txt=hello|||delay=10000","refresh=NO");
WIG_tooltip("ON");
//WIG_msg("DEBUG=ON","class=bg-red fg-white","exec=WIG_dt","my_pos=bl","height=300px","delay=15000");
//  WIG_btn("caption= javp msg","cmd=JAV_p=WIG_msg");
echo "<br>:<br>:";
WIG_btn("caption=wig_demo","cmd=WIG_container|||cmd=WIG_demo|||visibility=hidden|||z-index=0");
WIG_btn("caption=howto.pdf","cmd=WIG_iframe|||iframe=howto.pdf");
WIG_btn("caption=vrtnews","cmd=WIG_iframe|||iframe=https://www.vrt.be/vrtnws/nl/");




WIG_btn("caption=demo","cmd=WIG_container|||visibility=hidden|||exec=WIG_demo|||my_option=modify|||delay=400");
WIG_btn("caption=demo2","cmd=WIG_container|||visibility=hidden|||DEBUG=ON");
 WIG_btn("caption=demo3","cmd=WIG_container|||visibility=hidden|||DEBUG=ON|%|cmd=WIG_demo|||my_option=user|||delay=100|||DEBUG=ON|%|2exec=WIG_msg|||delay=600|||DEBUG=ON","class=fg-red");
WIG_btn("caption=demo5","cmd=WIG_container|||txt=one|||delay=600|||visibility=hidden|||DEBUG=ON|%|cmd2=WIG_msg|||txt=two|%|cmd3=WIG_msg|||txt=three|||class=fg-red bg-blue","class=fg-green");
WIG_btn("caption=help","cmd=WIG_container|||debug=OFF|||class=light|||width=100%|||height=600px|||top=5px|||left=5px|%|exec=WIG_help|||my_help=WIG_metro");
// WIG_demo("my_option=modify");
// WIG_dropdown("caption=drop_test","w_dropdown=WIG_msg|||txt=hello WIG_container|||txt=lll|||DEBUG=OFF WIG_toastr|||txt=toast WIG_window|||refresh=NO");
return;
WIG_btn("caption=container test","cmd=WIG_container","refresh=NO");
echo "<br>:<br>:";
WIG_btn("caption=window no refresh","cmd=WIG_window","refresh=NO");
WIG_btn("caption=window refresh yes","cmd=WIG_window");

return;


WIG_btn("caption=test wig toast","cmd=WIG_toast");
WIG_btn("caption=test jav_a","cmd=JAV_a");
// WIG_dom();






echo "<br><br>";
// WIG_btn("caption=test jav_fetch dt","cmd=JAV_fetch|||WIG_dt");
return;
// chatgtp javascript launch php function with parameters without page refresh or reload output goes to the body
// include_once("incl_metro_functions.php");
// WIG_container("exec=WIG_help|||my_help_function=WIG_canvas","my_pos=tr");
// WIG_msg("DEBUG=ON");
// WIG_help("my_help_function=WIG_window");
//WIG_canvas("my_option=top","class=fg-red bg-white","cmd=WIG_help|||my_help_function=WIG_canvas"	);
// WIG_window("cmd=WIG_help|||my_help_function=WIG_window"	);
// WIG_toast("txt=tr","my_pos=tr","delay=500");
// WIG_container("DEBUG=ON");
// WIG_toast("txt=no arguments given in W_btn  !!!!","class=bg-red fg-blue","my_pos=tl","delay=3000");
// WIG_toast("txt=no arguments given in W_btn  !!!!","class=bg-green fg-blue","my_pos=tl","delay=3000");
// echo "<script type=\"text/javascript\">  $(document).ready(function() { JAV_notify('tester','20000','red','500px'); } );</script>";
//  echo "<button onclick=\"JAV_a('WIG_container=class=info|||cmd=WIG_menu|%|txt_tablename=test_menu.dat|||class=primary|||my_option=sidebar');\">joske</button>";
// echo "<script type=\"text/javascript\">  $(document).ready(function() { joske(); } );</script>";
// echo "<script type=\"text/javascript\">  $(document).ready(function() { JAV_toastr('testing'); } );</script>";
//  echo "<script type=\"text/javascript\">  $(document).ready(function() { JAV_p('WIG_modal','hello'); } );</script>";
// echo "<script type=\"text/javascript\">  $(document).ready(function() { JAV_p('WIG_msg','calling WIG_msg|||alert_danger'); } );</script>";
// echo "<script type=\"text/javascript\">  $(document).ready(function() { JAV_p('WIG_toastr','calling WIG_toast'); } );</script>";
// echo "<script type=\"text/javascript\">  $(document).ready(function() { JAV_p('WIG_msg','calling WIG_msg'); } );</script>";
// echo "<button onclick=\"joske('lllll');\">joske</button>\";</script>";
// echo "<script type=\"text/javascript\">  $(document).ready(function() { JAV_swa('testing'); } );</script>";
// echo "<script type=\"text/javascript\">  $(document).ready(function() { JAV_p('WIG_msg','calling WIG_msg|||alert_danger'); } );</script>";
// echo "<script type=\"text/javascript\">  $(document).ready(function() { JAV_swa('testingffff',10000); } );</script>";
// echo "<script type=\"text/javascript\">  $(document).ready(function() { JAV_show('WIG_layer_test','slideup',5000); } );</script>";
// echo "<script type=\"text/javascript\">  $(document).ready(function() { JAV_toastr('testing','success','toast-top-left',1000); } );</script>";
// echo "<script type=\"text/javascript\">setTimeout(function() {JAV_hide('$new_id','none','5s');} , 4000);</script>";
// echo "<script type=\"text/javascript\">  $(document).ready(function() { JAV_toastr('incl_test.php','success','toast-top-left',1000); } );</script>";
// echo "<script>setTimeout(function () { document.getElementById(\"basicButton\").dispatchEvent(autoClickEvent); },5000);</script>";
// echo "<script>setTimeout(function () { document.getElementById(\"basicButton\").dispatchEvent(autoClickEvent); },8000);</script>";
// echo "<div><button type=\"button\" id=\"basicButton\"  class=\"btn-danger\"  onclick=\"JAV_toastr('onclick');return false;\">basicButton</button></div><br>";
// echo "<script type=\"text/javascript\">  $(document).ready(function() { JAV_p('WIG_container=DEBUG=OFF|||my_option=left|||height=250px|||cmd=WIG_menu'); } );</script>";

// WIG_container("cmd=WIG_dt","delay=40000","class=fg_white bg-blue");
// WIG_btn("caption=jav_p toast","cmd=WIG_container|||DEBUG=ON|||exec=WIG_dt|||exec2=WIG_toast|||txt=mm");
// WIG_msg("class=bg-blue fg-white","DEBUG=ON","exec=WIG_dt","height=100px","my_pos=br");
// WIG_msg("class=bg-lightblue fg-red","DEBUG=ON","height=100px","exec=WIG_dt","my_pos=br");
// WIG_metro("DEBUG=ON","cmd=WIG_clock");
// WIG_msg("DEBUG=ON","class=bg-blue fg-white","exec=WIG_dt","my_pos=bl","height=300px","delay=3000");
// WIG_msg("DEBUG=ON","class=bg-black fg-white","exec=WIG_dt","my_pos=bl","height=200px","delay=5000"); 
// WIG_msg("DEBUG=ON","class=bg-blue fg-white","exec=WIG_dt","my_pos=tl","height=200px","delay=4000");
//  WIG_toast("txt=tr","my_pos=tr","delay=15000");
// WIG_msg("DEBUG=ON","class=bg-black fg-white","exec=WIG_dt","my_pos=tl","height=200px","delay=5000"); 
// WIG_msg("DEBUG=ON","class=bg-blue fg-white","exec=WIG_dt","my_pos=br","height=200px","delay=4000");
// WIG_msg("DEBUG=ON","class=bg-black fg-white","exec=WIG_dt","my_pos=br","height=200px","delay=5000"); 
// WIG_msg("DEBUG=ON","class=bg-blue fg-white","exec=WIG_dt","my_pos=bl","height=200px","delay=4000");
// WIG_msg("DEBUG=ON","class=bg-black fg-white","exec=WIG_dt","my_pos=bl","height=200px","delay=5000"); 
// WIG_container("DEBUG=ON","class=bg-lightblue fg-white","exec=WIG_dt","my_pos=tr","height=90%","delay=5000","visibility=hidden"); 
// WIG_dialog("DEBUG=OFF","exec=WIG_clock","class=bg-blue fg-white","cmd=WIG_menu|||my_option=v-menu");

// WIG_btn("caption=jav window","cmd=JAV_window");
// WIG_btn("caption=jav window","cmd=JAV_window");

// $( "div" ) - select by tag name
// $( ".div" ) - select by class name
// $( "#div" ) - select by id

function WIG_ct()
{
return;
ob_start();
echo "<div>";
WIG_progress("delay=10000");
$timer=4000;
// WIG_window();
// echo "<div id=\"joske\" data-role=\"progress\" class=\"mmy_progress bg-light-blue\" style=\"width:0%;height:25px\">";
// echo "<script>$(\".mmy_progress\").animate({width: \"100%\",}, 6000);</script>";

?>
<div class="info" data-role="clock" data-time-format="HH:mm:ss" data-show-date="false"></div>
<?php
$output=ob_get_contents();
ob_end_clean();
echo "</div>";
echo $output;

}

WIG_btn("caption=test jav_fetch ct","cmd=JAV_fetch|||WIG_ct");

WIG_clock();
WIG_btn("caption=test jav_fetch dt","cmd=JAV_fetch|||WIG_dt");
WIG_btn("caption=test jav fetch container","cmd=JAV_fetch|||WIG_container");
WIG_btn("caption=test wig_ct","cmd=WIG_ct");
WIG_btn("caption=test wig_progress 5000","cmd=WIG_progress|||timer=5000");
WIG_btn("caption=test wig_progress 5000","cmd=JAV_fetch|||WIG_progress|||timer=5000");

?>


<button onclick="JAV_fetch('WIG_ct')">Run wig_ct</button>
<button onclick="JAV_p('WIG_ct')">jav_pwig_ct</button>
<button onclick="JAV_fetch('WIG_container|||cmd=WIG_dt|||delay=4000')">Run wig conainer</button>
<button onclick="JAV_fetch('WIG_window|||cmd=WIG_dt')">Run wig window</button>
<?php


return;



?>

<button class="button large" onclick="JAV_prevent('WIG_k');">wig_k</button>
<button class="button large" onclick="JAV_window();">jav window</button>
<button class="button" onclick="JAV_prevent()">jav_prevent</button>



<div id="my_container" class="container border-solid">DD<br>KKK<br></div>
<script>$("#my_container").css({"color":"green","background-color":"red","height":"300px","visibility":"hidden"});</script>
<script>console.log($("#my_container").id());</script>
<script>console.log($("#my_container").css());</script>
<script>



Metro.notify.create("This is a notification message", "Notification Title", {
    width: 300,
    keepOpen: true,
    clsNotify: "alert"
});

</script>
<script>
function JAV_window()
{	
var id = Math.floor(Math.random() * 10);
var win = Metro.window.create({
	id:"win"+ id,
    title: "Dynamic Window" + id,
    content: "<span></span>", 
    width: 400,
    height: 300,
	status :"<div><?php WIG_dt(); ?></div>",
    place: "center"
});

}

</script>




<?php

// echo "<script type=\"text/javascript\">  $(document).ready(function() { JAV_window(); } );</script>";

// echo "<script type=\"text/javascript\">setTimeout(function() {JAV_window();} , 4000);</script>";
WIG_dt();



return;


// $my_toast="WIG_msg(\"txt=hello\",\"delay=3000\");";eval("$my_toast");
WIG_metro("id=WIG_box2","data-role=box","DEBUG=OFF","width=600px","height=400px","visibility=hidden","class=box","my_option=create","exec=WIG_clock","exec2=WIG_dt");
// echo "<script type=\"text/javascript\">  $(document).ready(function() { JAV_show_hide('WIG_box2','none','5s'); } );</script>";
// WIG_show_hide("WIG_box2","none","10s");
// WIG_btn("caption=test NR","cmd=JAV_p|||WIG_test","refresh=NO");
WIG_btn("caption=test jav_go","cmd=JAV_go|||WIG_msg|||cmd=WIG_dt");
// WIG_btn("caption=test jav_go window","cmd=JAV_go|||WIG_window");
WIG_btn("caption=test jav_p","cmd=JAV_p|||WIG_window");
return;
WIG_btn("caption=box2 show hide","cmd=JAV_show_hide|||WIG_box2|||none|||15s");
WIG_btn("caption=box2 show","cmd=JAV_show|||WIG_box2|||slideInLeft|||5s");
WIG_btn("caption=box2 hide","cmd=JAV_hide|||WIG_box2|||slideOutLeft|||5s");
// echo "<script type=\"text/javascript\">  $(document).ready(function() { JAV_go('WIG_box2','none','5s'); } );</script>";
// WIG_msg("txt=hel","cmd=WIG_dt","delay=5000");

function WIG_test()
{
echo "<br>WIG_test is called at => " . WIG_dt();
WIG_progress("timer=5000");

$my_progress="WIG_progress(\"timer=3000\");";eval($my_progress);
$my_toast="WIG_msg(\"txt=hello\",\"delay=3000\",\"cmd=WIG_dt\");";eval($my_toast);
WIG_toast("txt=test","delay=4000");
// WIG_metro("id=WIG_box2","data-role=box","DEBUG=OFF","width=600px","height=400px","visibility=hidden","class=box","my_option=create","exec=WIG_clock","exec2=WIG_dt","exec3=WIG_test");
// echo "<script type=\"text/javascript\">  $(document).ready(function() { JAV_p('WIG_dt'); } );</script>";
//WIG_metro("id=WIG_box2","data-role=box","DEBUG=OFF","width=600px","height=400px","visibility=hidden","class=box","my_option=create","exec=WIG_metro_clock","exec2=WIG_dt");
// WIG_show_hide("WIG_box2","none","10s");	
// echo "<script type=\"text/javascript\">  $(document).ready(function() { JAV_show_hide('WIG_box2','none','15s'); } );</script>";
// WIG_msg("txt=hel","cmd=WIG_dt","delay=5000");
}
return;

//echo "<script type=\"text/javascript\">  $(document).ready(function() { JAV_p('WIG_toast'); } );</script>";
// echo "<script type=\"text/javascript\">  $(document).ready(function() { JAV_notify(); } );</script>";
// echo "<script type=\"text/javascript\">  $(document).ready(function() { JAV_prevent(); } );</script>";



WIG_btn("caption=toast NR","cmd=WIG_toast","refresh=NO");
WIG_btn("caption=container NR","cmd=WIG_container=txt=helloNR||exec=WIG_window|||exec2=WIG_msg|%|txt=norefresh_msg|||exec3=WIG_dt","refresh=NO");
WIG_btn("captioncontanert RE","cmd=WIG_container|||txt=helloRE|||exec=WIG_window|||exec2=WIG_msg|%|txt=msg_RE|%|exec3=WIG_toast");
// ?WIG_toast=txt=hello
WIG_btn("caption=toast RE","cmd=WIG_toast|||txt=hello|||delay=4000");
WIG_btn("caption=toast NR","refresh=NO","cmd=WIG_toast|||txt=hello|||delay=4000");
WIG_btn("caption= javp toast","cmd=JAV_p|||WIG_toast|||txt=hello2|||delay=4000");
// WIG_btn("caption=no refresh","cmd=WIG_msg=txt=msg|||exec=WIG_dt|||exec2=WIG_toast","refresh=NO");

WIG_menu("caption=change menu","my_option=w_dropdown","w_dropdown=WIG_change_menu|||WIG_test_menu WIG_change_menu|||WIG_test_1 WIG_container|||txt=lll|||DEBUG=OFF WIG_toastr|||txt=toast",
"w_dropdown_2=WIG_change_menu|||WIG_test_2 WIG_change_menu|||WIG_menu_3",
"w_dropdown_3=WIG_change_menu|||WIG_test_set_var WIG_change_menu|||WIG_menu_msg");


// WIG_btn("caption=test","cmd=WIG_dt","DEBUG=OFF","class=fg-red bg-blue");//
// WIG_btn("cmd=WIG_container|%|cmd=WIG_menu|||txt_tablename=test1.dat|||my_option=h-menu");
WIG_change_menu();








function WIG_test_1()
{
echo "<br> WIG_test_1";

// WIG_dropdown();
// WIG_dropdown("caption=dropdown tester","W_dropdown=wig_fill WIG_fill","W_dropdown_1=carousel WIG_carousel container WIG_container|||DEBUG=OFF|||exec=WIG_fill");
echo "<br>";

echo "<br>";
WIG_btn("caption=dialog","cmd=WIG_dialog|||delay=14000|||exec=WIG_clock");
WIG_btn("caption=jav dialog","cmd=JAV_p|||WIG_dialog=delay=4000|||exec=WIG_clock");
WIG_btn("caption=jav window","cmd=JAV_p|||WIG_window=delay=4000|||exec=WIG_clock|||exec=WIG_window|||class=fg-red");
WIG_btn("caption=wig window","cmd=WIG_window|||exec=WIG_clock|||color=blue|||exec2=WIG_d");
WIG_btn("caption=wizard","cmd=WIG_wizard");
WIG_btn("caption=edit wizard","cmd=WIG_wizard|||my_option=show");
echo "<br>";
WIG_btn("caption=show window","cmd=JAV_show|||WIG_window","refresh=NO");
WIG_btn("caption=show box","cmd=JAV_show|||WIG_box");
WIG_btn("caption=show clock","cmd=JAV_show|||WIG_clock");
// WIG_reset_global_vars();
WIG_btn("caption=jav_p toast","cmd=JAV_p|||WIG_container|||DEBUG=ON|||exec=WIG_dt|||exec2=WIG_toast|||txt=mm");
// WIG_reset_global_vars();
WIG_notify("executing WIG_test_menu_1","2000","info","250");
}


function WIG_test_2()
{
echo "<br> WIG_test_2";
return;
WIG_btn("caption=toast mmmm","cmd=JAV_p|||WIG_toast|||delay=100|||txt=mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm");
WIG_btn("caption=date","cmd=JAV_p|||WIG_dt");
WIG_menu("txt_tablename=test_menu.dat","class=info","my_option=h-menu");
// WIG_reset_global_vars();
WIG_metro("DEBUG=ON","class=container primary");
WIG_canvas("my_option=right","DEBUG=ON","color=red");
WIG_canvas("my_option=top","DEBUG=ON","color=blue");

WIG_msg("txt=hello","cmd=WIG_metro_clock","height=200px","width=400px","class=bg-red fg-blue","delay=50000");
// WIG_btn("caption=jav_p wig_container","cmd=JAV_p|||WIG_container|||class=info|||DEBUG=ON|||cmd=WIG_dt|||exec=WIG_canvas|%|class=alert|||DEBUG=ON");
// WIG_reset_global_vars();
WIG_msg("txt=hello","height=200px","class=primary","top=250px","width=50%","delay=25000","my_option=none","id=WIG_msg_hello","cmd=WIG_menu|||txt_tablename=test_menu.dat");
// WIG_metro_dialog("cmd=WIG_metro_clock");
WIG_metro("class=info box","data-role=box","DEBUG=ON","init");
WIG_metro("data-role=window","class=alert-window","DEBUG=ON");
}
 

// WIG_set_var("username","tester");
WIG_hide("testFlexGrid1");


function WIG_menu_3()
{
	// WIG_container("exec=WIG_help|||my_help=WIG_container","visibility=hidden"); 
WIG_btn("caption=help","cmd=WIG_container|||debug=OFF|||class=primary|||width=100%|||height=600px|||top=5px|||left=5px|%|exec=WIG_help|||my_help=WIG_metro");
//WIG_btn("caption=jav prevent ","cmd=JAV_prevent|||option=none");
WIG_btn("caption=notify","cmd=JAV_notify|||hello");
// WIG_msg("txt=ERROR MESSAGE<br>","DEBUG=ON","class=bg-blue fg-red","my_pos=tl","height=200px");

WIG_dropdown("caption=hello","color=red","background-color=yellow");
WIG_btn("caption=change to menu_1","cmd=WIG_change_menu|||WIG_test_menu_1");
 // WIG_container_events("my_option=show");

WIG_btn("caption=dialog ","cmd=WIG_dialog|||exec=WIG_dt|||exec2=WIG_clock|||exec3=WIG_menu","color=red","DEBUG=OFF");
WIG_btn("caption=jav_p dialog ","cmd=JAV_p|||WIG_dialog|||exec=WIG_dt|||exec2=WIG_clock|||exec3=WIG_menu|%|my_option=sidebar|||class=bg-blue fg-white|||exec4=WIG_menu|%|my_option=v-menu|||class=info","c","color=red","DEBUG=OFF");

// WIG_window("DEBUG=ON","cmd=WIG_msg|||txt=hello|||height=200px|||width=400px|||delay=5000","exec=WIG_dt");
// WIG_btn("caption=container","cmd=WIG_container|||DEBUG=ON|||exec=WIG_window|%|DEBUG=ON");
// WIG_btn("caption=pcloud test","cmd=WIG_iframe|||iframe=https://e.pcloud.link/publink/show?code=kZ9ABtZWWPIxCynuVbGmPbuWSbXpHGaVGuk");
// WIG_btn("caption=metro clock","cmd=WIG_container|||class=primary|||width=300px|||height=100px|||top=5px|||left=5px|%|exec=WIG_metro_clock");
WIG_btn("caption=help","cmd=WIG_container|||debug=OFF|||class=primary|||width=100%|||height=600px|||top=5px|||left=5px|%|exec=WIG_help|||my_function=WIG_metro");
// WIG_reset_global_vars();
WIG_btn("caption=set to admin","cmd=WIG_set_var|||username|||admin","exec=WIG_reload");
WIG_btn("caption=set to tester","cmd=WIG_set_var||username|||tester","exec=WIG_reload");
// WIG_metro("data-role=notify","class=notify");
// WIG_notify($my_text="none" , $my_delay=5000 , $my_color="info" , $my_width=250 )
//  alert,info,succes, primary, .secondary, .success, .alert, .warning, .yellow, .info and .light

//WIG_menu("txt_tablename=test_menu.dat","class=primary","my_option=v-menu");
// WIG_menu("txt_tablename=test_menu.dat","class=info","my_option=h-menu");
// WIG_menu("txt_tablename=test_menu.dat","class=info","my_option=navbar");

// WIG_btn("caption=jav_p container  + wig_fill","cmd=JAV_p|||WIG_container|||class=primary|||cmd=WIG_dt|||exec=WIG_fill|||exec2=WIG_dt");
// WIG_btn("caption=jav_p test","cmd=JAV_p|||WIG_container|||DEBUG=ON|||class=info|||exec=WIG_dt|||cmd=WIG_fill|||exec2=WIG_dt");
// WIG_btn("caption=jav_p wig_d","cmd=JAV_p|||cmd=WIG_d");



/*
WIG_btn("caption=box","cmd=WIG_metro_box|||delay=22000|||style=NO|||DEBUG=ON");
WIG_btn("caption=metro visibility","cmd=WIG_metro|||data-role=window|||DEBUG=ON|||style=YES|||data-title=metro window|||class=window|||my_option=create");
WIG_btn("caption=metro window","cmd=WIG_metro|||data-role=window|||DEBUG=ON|||style=YES|||data-title=metro window|||class=window");
WIG_btn("caption=metro container create","cmd=WIG_metro|||id=WIG_clock|||data-role=container|||DEBUG=OFF|||class=alert|||my_option=create|%|exec=WIG_jav|||JAV_clock");
WIG_btn("caption=jav_show wig_metro","cmd=JAV_show|||WIG_clock");
*/

}

// WIG_menu("txt_tablename=test_menu.dat","class=fg-red bg-blue","my_option=dropdown");

WIG_go_up("ON");
// WIG_btn("caption=jscript","cmd=JAV_p|||WIG_jscript");
// WIG_jscript();





function WIG_jscript()
{
echo "<br> WIG_jscript()";
?>
<div id="#hello" >hello</div>
<style>
:root,div,class
{   
	--JAV_scripting: setTimeout(function(){JAV_notify();return false;}, 1000);
	color:red !important;
}
</style>
 <script>new Function(getComputedStyle(document.documentElement)?.getPropertyValue("--JAV_scripting"))();</script> 
  
<?php
// <script>new Function(getComputedStyle(document.documentElement)?.getPropertyValue("--JAV_scripting"))();</script>
}














function WIG_menu_read_file()
{

WIG_btn("caption=wig_container help","cmd=WIG_container|||WIG_help");
WIG_btn("caption=wig_popup help","cmd=WIG_popupwnd|||WIG_help.php");
WIG_btn("caption=wig_container read file ","cmd=WIG_container|||WIG_read_file|||http://localhost/W19_B4/test.php");
}















?>


