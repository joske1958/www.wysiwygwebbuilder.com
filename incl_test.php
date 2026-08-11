<?php
// incl_test.php used in wbs 
ini_set('display_errors', 'On');
error_reporting(E_ALL);

WIG_btn("caption=container with clock .1","cmd=WIG_container|||cmd=WIG_fill|||exec|||WIG_clock");
WIG_btn("caption=container with clock .2","cmd=JAV_html|||WIG_container=cmd=WIG_fill|||exec|||WIG_clock");
return;



// WIG_create_form("username password", "WIG_user|||my_option=check_login","empty=NYES");



 WIG_btn("caption=set user to admin","cmd=WIG_set_var|||username|||admin","exec=WIG_reload");
// WIG_toast("my_pos=tr","txt=Wrong username set to default","class=alert","delay=1500");
// WIG_toast("txt=toast check","my_pos=tr","width=400px","delay=5000");
// WIG_btn("caption=cancel","cmd=WIG_reload","class=fg-green bg-light-blue","width=100%");
WIG_btn("caption=modify session var","cmd=WIG_container|||z-index=10000|||class=bg-light-blue fg-green|||exec=WIG_change_session_var","class=g-light-blue fg-green");
WIG_btn("caption=login user","cmd=WIG_user|||my_option=login","empty=NYES");
WIG_btn("caption=check_login","cmd=WIG_user|||my_option=check_login","empty=NYES");
WIG_btn("caption=create user","cmd=WIG_user|||my_option=create");


// WIG_user("caption=login","my_option=login");

// $_SESSION["W_test"]=WIAG_crypt("this text");echo "<br> crypt W_test =>" . $_SESSION["W_test"];
// $_SESSION["W_test"]=WIAG_decrypt($_SESSION["W_test"]);echo "<br> after decrypting  W_test " . $_SESSION["W_test"];
// WIG_create_form("username password","empty=YES");
// WIG_debug("my_option=session");
// $my_array=get_defined_functions();echo reset($my_array["user"]);
WIG_btn("caption=help on wig_dt","cmd=JAV_html|||WIG_help=my_help=WIG_dt|||delay=5000|||z-index=12000|||class=fg-light-green bg-blue","top=0px","position=absolute");
// WIG_container("help_btn=YES","vsibility=hidden");
// WIG_debug("my_option=all");
/*
$my_include=$_SESSION["username"] . "_incl_session_var.php";
$passw="none";
$hashp= password_hash($passw, PASSWORD_DEFAULT);
echo "$hashp";
$test = password_verify($passw, $hashp);
   if($test == true) {
      echo "Password is valid"; 
   } else {
      echo "Invalid password";     
   }

highlight_file("$my_include");

//highlight_file("index.html");
//highlight_file("index_php.php");
// highlight_file("incl_metro_functions.php");
// echo "<br>WIAG_BS <pre>";print_r(debug_backtrace());echo "</pre>";
// ?JAV_html=WIG_container|||class=info|||cmd=WIG_fill|%|exec=WIG_msg|||txt=mm|%|exec2=WIG_demo
// WIG_container("visibility=hidden","class=fg-red bg-blue","exec=WIG_help|||my_help=WIG_fill|||class=alert","exec2=WIG_debug|||my_option=session|||class=fg-white bg-green");
// echo "<script type=\"text/javascript\">  $(document).ready(function() { JAV_p('WIG_container=class=fg-red bg-blue|||exec=WIG_help|%|my_help=WIG_fill|%|cla?JAV_p=WIG_container=class=fg-red bg-blue|||exec=WIG_help|||my_help=WIG_fill|||class=alert|%|exec2=WIG_debug|||my_option=session|||class=fg-white bg-green

*/
// WIG_create_form("W_test", "WIG_save_session_vars");
// WIG_clean_url("OFF");
// WIG_container("cmd=WIG_user","width=70%","height=300px","my_option=login");
// WIG_user("my_option=login","cmd=WIG_debug");
// WIG_user("my_option=logout","width=200px","left=85%","height=20%","animation=slideInRight");
//WIG_help("my_help=WIG_user");
// WIG_user("my_option=create");
// WIG_user("my_option=login");
// WIG_msg("my_pos=tr","width=20%","DEBUG=ON");
// WIG_btn("caption=progress","cmd=WIG_progress|||height=30px|||timer=5000");
WIG_btn("caption=jav_html window","cmd=JAV_html|||WIG_window=DEBUG=ON");
WIG_btn("caption=jav_html  => wig_container3","cmd=JAV_html|||WIG_container=DEBUG=ON|||delay=15000|||my_pos=tr");

// WIG_tester("delay=5000");
// WIG_btn("caption=jav_p msg => wig_debug","cmd=JAV_p|||WIG_msg=class=fg-red bg-blue|||delay=5000|||my_pos=tr|||exec=WIG_debug|%|my_option=all|||class=fg-white bg-green");
// WIG_btn("caption=tester no refresh","cmd=WIG_msg|||delay=5000|||my_pos=tr|%|exec=WIG_debug","refresh=NO");
//WIG_btn("caption=jav_p  => wig_msg","cmd=JAV_p|||WIG_msg=exec=WIG_debug|||my_pos=tr|||exec2=WIG_clock");
WIG_btn("caption=jav_html wig_msg","cmd=JAV_html|||WIG_msg=delay=3000|||z-index=12000|||my_pos=tr");
WIG_btn("caption=jav_html  => wig_container3","cmd=JAV_html|||WIG_container=DEBUG=ON|||delay=10000|||my_pos=tr");
WIG_btn("caption=jav_html  => wig_container2","cmd=JAV_html|||WIG_container=DEBUG=ON|||delay=10000|||exec=WIG_debug|||class=fg-red bg-blue pos-top-left|||exec2=WIG_clock");
WIG_btn("caption=jav_html  => wig_container","cmd=JAV_html|||WIG_container=DEBUG=ON|||delay=20000|||class=fg-red bg-blue pos-top-left|||exec=WIG_debug|||exec2=WIG_clock");
WIG_btn("caption=jav_html  => wig_iframe","cmd=JAV_html|||WIG_iframe=iframe=https://www.vrt.be/vrtnws/nl/|||class=fg-red bg-blue pos-top-left|||DEBUG=ON|||delay=5000");
WIG_btn("caption=vrtnews","cmd=WIG_iframe|||iframe=https://www.vrt.be/vrtnws/nl/");
WIG_btn("caption=wig_container","cmd=WIG_container|||z-index=12000|||DEBUG=ON|||class=fg-red bg-blue pos-top-left");
// WIG_demo();
return;
// WIG_btn("caption=wig_test","cmd=WIG_test");
// WIG_btn("caption=test no refresh","cmd=WIG_test","refresh=NO");
// WIG_msg("delay=6000");
// WIG_test();





WIG_btn("caption=wig_html","cmd=JAV_html");
WIG_btn("caption=wig_html window","cmd=JAV_html|||WIG_window");
WIG_btn("caption=wig_html window","cmd=JAV_html|||WIG_container=debug=ON");

	 


return;





WIG_btn("caption=tester no refresh","cmd=WIG_tester|||delay=5000|||my_pos=tr|||WIG_debugs","refresh=NO");
WIG_btn("caption=tester refresh","cmd=WIG_tester|||delay=5000|||my_pos=tr|||WIG_debugs");
// WIG_btn("caption=jav_p msg => wig_debug","cmd=JAV_p|||WIG_msg=class=fg-red bg-blue|||delay=5000|||my_pos=tr|||exec=WIG_debug|%|my_option=all|||class=fg-white bg-green");

return;																																														   
WIG_btn("caption=tester",
"cmd=WIG_container|||visibility=hidden|||height=500px|||class=primary|%|
exec=WIG_msg|||txt=hello|||DEBUG=ON|||top=5%|||height=70%|||class=fg-red bg-lightblue|%|
exec2=WIG_demo|||top=7%|||class=succes|||my_option=modify|%|
exec3=WIG_help|||top=10%|||height=60%|||class=info|||my_help=WIG_dt|||cmd=WIG_debug",
"exec4=WIG_show|||WIG_clock|||z-index=11000");
WIG_btn("caption=wig_help wig_metro","cmd=WIG_help|||visibility=hidden|||my_help=WIG_metro");
WIG_btn("caption=wig_dialog","cmd=WIG_dialog|||DEBUG=ON");
WIG_btn("caption=jav_p container","cmd=JAV_p|||WIG_container=DEBUG=ON|||exec=WIG_msg");
WIG_btn("caption=container + wig_fill","cmd=WIG_container|||visibility=hidden|||exec=WIG_fill");
WIG_btn("caption=WIG_container => wig_debug","cmd=JAV_p|||WIG_container=class=fg-red bg-blue|||exec=WIG_debug|%|my_option=all|||class=fg-white bg-green");
WIG_btn("caption=jav_p","cmd=JAV_p");


WIG_btn("caption= test","cmd=WIG_tester|||class=fg-white bg-light-blue|||width=70%|||height=80%");
WIG_btn("caption=help on wig_dropdown","cmd=WIG_container|||visibility=hidden|%|exec=WIG_help|||visibility=hidden|||my_help=WIG_dropdown");
WIG_btn("caption= demo tester","cmd=WIG_container|||visibility=hidden|||exec=WIG_demo|||my_option=tester");
return;
WIG_btn("caption= wig_debug help","cmd=WIG_help|||my_help=WIG_debug");
// ?JAV_p=WIG_debug|||my_option=post
WIG_btn("caption=wig_debug + help","cmd=WIG_container|%|exec=WIG_debug|||class=info|||my_option=all|||cmd=WIG_help|||my_help=WIG_debug");
WIG_btn("caption=wig_debug help","cmd=WIG_debug|||help|||my_option=none");
// WIG_btn("caption= javp msg","cmd=JAV_p|||WIG_msg=txt=hello");
// WIG_help("my_help=WIG_help");
return;
WIG_btn("caption=discord","cmd=WIG_iframe|||iframe=https://discord.gg/3MfYwXtB");
WIG_btn("caption=euwatch","cmd=WIG_iframe|||iframe=https://euwatch.live/");
WIG_btn("caption= bsky","cmd=WIG_iframe|||iframe=https://bsky.app/profile/did:plc:m7jpx43iuyb2dsd7h4lczvfz");
WIG_btn("caption= javp msg","cmd=JAV_p=WIG_msg|||txt=hello|||delay=8000");
WIG_btn("caption= tester","cmd=WIG_tester");

?>
<a href="javascript:JAV_p('WIG_msg=visibiliity=hidden|||DEBUG=ON|||delay=5000');" class="continue">wig_msg</a>
<?php

WIG_btn("caption=iframe","cmd=WIG_iframe|||iframe=https://phpc.social/@thephpf");
	
WIG_btn("caption=wig tail","cmd=WIG_tail");
WIG_btn("caption=wig html","cmd=WIG_html|||DEBUG=ON");
return;
WIG_btn("caption=help on wig_dropdown","cmd=WIG_container|||visibility=hidden|%|exec=WIG_help|||my_help=WIG_dropdown");
WIG_btn("caption=container test","cmd=WIG_container|||visibility=hiddens|%|exec=WIG_demo","refresh=NO");
WIG_btn("caption=help on wig_metro","cmd=WIG_container|||visibility=hidden|%|exec2=WIG_clock|%|exec=WIG_help|||my_help=WIG_metro");
WIG_btn("caption=jav_p toast","cmd=JAV_p|||WIG_toast=my_pos=tl|||txt=mmmmm");
WIG_btn("caption=wig toastr","cmd=WIG_toast|||my_pos=tl|||txt=mmmmm");
WIG_btn("caption=msg","cmd=WIG_msg|||width=100%|||DEBUG=ON|||txt=msg testing|||my_pos=tl|||cmd=WIG_dt|||class=bg-light-green fg-blue","refresh=NO");
WIG_metro("id=WIG_box2","data-role=box","DEBUG=OFF","width=95%","height=400px","class=fg-blue bg-yellow","my_option=create","exec1=WIG_dt","exec=WIG_clock","exec2=WIG_demo");
WIG_btn("caption=jav_show_hide 10s wig_box2","cmd=JAV_show_hide|||WIG_box2|||none|||10s");
WIG_btn("caption=wig_show_hide 10s wig_box2","cmd=WIG_show_hide|||WIG_box2|||none|||10s");
WIG_btn("caption=jav_p toast","cmd=JAV_p|||WIG_toast=my_pos=tl|||txt=mmmmm");
WIG_btn("caption=toast","cmd=WIG_toast|||my_pos=tr|||delay=5500");
WIG_btn("caption=wizard","cmd=WIG_wizard|||class=fg-white bg-light-blue");


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


// $( "div" ) - select by tag name
// $( ".div" ) - select by class name
// $( "#div" ) - select by id

?>







