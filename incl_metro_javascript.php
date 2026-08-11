<?php
// incl_javascript.php used in wbs 
ini_set('display_errors', 'On');
error_reporting(E_ALL);
// var_dump(headers_list());
//  below begins the java functions beginning with JAV_
// https://tutorial.eyehunts.com/js/javascript-keycode-list-event-which-event-key-event-code-values/


?>


<style>
    .jav_tooltip {
      position: fixed;
      padding: 10px 20px;
      border: 1px solid #b3c9ce;
      border-radius: 4px;
      text-align: center;
      font: italic 14px/1.3 sans-serif;
      color: black;
      background: green;
      box-shadow: 3px 3px 3px rgba(0, 0, 0, .3);
    }
  </style>

<div id="mybody" ></div>

<script>

function JAV_test()
{
const nieuwElement = document.createElement('div');
nieuwElement.id = 'myid';
nieuwElement.style.cssText = 'width:100%;height:600px;position:sticky;visibility:hidden;border:2px solid red;z-index:12000;';
document.body.appendChild(nieuwElement);

}

// HELP stop refresh  
function JAV_prevent()
{
document.body.addEventListener('submit', function(event) {event.preventDefault();});
console.log(Date() + '!!! event.preventDefault on body no GET or POST !!!');
}	



// style="width:100%;height:1200px !important;left:0px;right:0px;position:sticky;border:1px solid red;z-index:0;"
function JAV_html(php_function)
{

if ( php_function === undefined  ){ php_function="WIG_msg=cmd=WIG_dt|||class=fg-red bg-blue|||my_pos=tr|||z-index=12000|||delay=10000|||exec=WIG_clock|||DEBUG=ON|||exec2=WIG_fill"; }
const element = $("<div>").appendTo($("body"));
php_function='incl_metro_functions.php?' + php_function;
Metro.makePlugin(element, "html-container",{htmlSource: php_function,insertMode: "replace"});	
}



function JAV_p(php_function)
{
if ( php_function === undefined  ){ php_function="WIG_msg=cmd=WIG_dt|||class=fg-red bg-blue|||my_pos=tr|||z-index=12000|||delay=10000|||exec=WIG_clock|||DEBUG=ON|||exec2=WIG_fill"; }
const element = $("<div>").appendTo($("#mybody"));
php_function='incl_metro_functions.php?' + php_function;
Metro.makePlugin(element, "html-container",{htmlSource: php_function,insertMode: "prepend"});	
}


function JAV_html_orig(php_function)
{
if ( php_function === undefined  ){ php_function="WIG_msg=cmd=WIG_dt|||class=fg-red bg-blue|||my_pos=tr|||z-index=12000|||delay=10000|||exec=WIG_clock|||DEBUG=ON|||exec2=WIG_fill"; }
const element = $("<div>").appendTo($("body"));
php_function='incl_metro_functions.php?' + php_function;
Metro.makePlugin(element, "html-container",{htmlSource: php_function,insertMode: "default"});	
}

// HELP call any script JAV_ or WIG_ directly without refresh 
async function JAV_p_old(php_function)
{
if ( php_function === undefined  ){ php_function="WIG_msg=cmd=WIG_dt|||class=fg-red bg-blue|||my_pos=tr|||delay=10000|||exec=WIG_clock|||DEBUG=ON|||exec2=WIG_show_hide|%|WIG_clock"; }
console.log(Date() + 'JAV_p : ' + php_function);

await fetch("incl_metro_functions.php", { // start fetch
  method: "POST",
  headers: {
    "Content-Type": "application/x-www-form-urlencoded; charset=utf-8"
  },
  body: php_function
}) // end fetch
.then((response) => response.text())
.then((responseText) => {document.querySelector("body").innerHTML += responseText})
.catch((error) => {console.log(error)})
}




</script>



<script>
 function JAV_delay(n){return new Promise((resolve) => setTimeout(function() {resolve(n);}));}
 
 	
	
	function JAV_notify(my_text,my_delay,my_color,my_width)
	{
	 var my_text,my_delay,my_color,my_width;
	if ( my_text === undefined  ){ my_text="none"; }
	if ( my_color === undefined  ){ my_color="primary"; }
	if ( my_delay === undefined  ){ my_delay=10000; }
	if ( my_width === undefined  ){ my_width=550; }
	 console.log(Date() + 'JAV_notify ' + my_delay  );
	 Metro.notify.setup({timeout: my_delay});
	// alert,info,succes, primary, .secondary, .success, .alert, .warning, .yellow, .info and .light
     // Metro.notify.create(my_text, 'delay :' + my_delay + 'width :' + my_width  , {timeout:my_delay,width:my_width,clsNotify:my_color});	
	 Metro.notify.create(my_text,'' ,{timeout:my_delay,width:my_width,clsNotify:my_color});	
	}

// HELP disable the refresh of the browser 
  function JAV_disable_refresh()
  {
	window.addEventListener('beforeunload', (event) => {
  // Cancel the event as stated by the standard.
  event.preventDefault();
  event.returnValue = false;
  });  
  }


  
</script>


<script>
// HELP show clock in txt format
function JAV_clock(){
	var span = document.getElementById('span');
    var date = new Date();
    var h = date.getHours(); // 0 - 23
    var m = date.getMinutes(); // 0 - 59
    var s = date.getSeconds(); // 0 - 59       
    h = (h < 10) ? "0" + h : h;
    m = (m < 10) ? "0" + m : m;
    s = (s < 10) ? "0" + s : s;
    var time = h + ":" + m + ":" + s + " ";
	span.textContent = time;
    setTimeout(JAV_clock, 1000);    
}


// HELP enable tooltip with class ja_tooltip 
 function JAV_tooltip()
  {
    let tooltipElem;
    document.onmouseover = function(event) {
      let target = event.target;
      // if we have tooltip HTML...
      let tooltipHtml = target.dataset.tooltip;
      if (!tooltipHtml) return;
      // ...create the tooltip element
      tooltipElem = document.createElement('div');
      tooltipElem.className = 'jav_tooltip';
      tooltipElem.innerHTML = tooltipHtml;
      document.body.append(tooltipElem);
      // position it above the annotated element (top-center)
      let coords = target.getBoundingClientRect();
      let left = coords.left + (target.offsetWidth - tooltipElem.offsetWidth) / 2;
      if (left < 0) left = 0; // don't cross the left window edge
      let top = coords.top - tooltipElem.offsetHeight - 5;
      if (top < 0) { // if crossing the top window edge, show below instead
        top = coords.top + target.offsetHeight + 5;
      }
      tooltipElem.style.left = left + 'px';
      tooltipElem.style.top = top + 'px';
    };
    document.onmouseout = function(e) {

      if (tooltipElem) {
        tooltipElem.remove();
        tooltipElem = null;
      }

    };
	// console.log( Date() + 'tooltip is called');
	// JAV_notify();
}
// <script>JAV_toastr()
</script>


<script>
// HELP load .css file inside function
function JAV_loadcss( cssURL ) {
    return new Promise( function( resolve, reject ) {
        var link = document.createElement( 'link' );
        link.rel  = 'stylesheet';
        link.href = cssURL;
        document.head.appendChild( link );
        link.onload = function() { 
            resolve(); 
            console.log( 'CSS has loaded!' ); 
        };
    } );
}
</script>

<script>
// JAV_notify(my_text,my_delay,my_color,my_width)
// HELP call metro ui  JAV_notify(my_text,my_delay,my_color,my_width)
function JAV_toastr(my_text,my_delay,my_color,my_width)
{
var my_text,my_delay,my_color,my_width;
	if ( my_text === undefined  ){ my_text="none"; }
	if ( my_color === undefined  ){ my_color="info"; }
	if ( my_delay === undefined  ){ my_delay=3000; }
	if ( my_width === undefined  ){ my_width=250; }	
JAV_notify(my_text,my_delay,my_color,my_width);	
}

// HELP call metro ui  JAV_notify(my_text,my_delay,my_color,my_width)
function JAV_swa(my_text,my_delay,my_color,my_width)
{
var my_text,my_delay,my_color,my_width;
	if ( my_text === undefined  ){ my_text="none"; }
	if ( my_color === undefined  ){ my_color="info"; }
	if ( my_delay === undefined  ){ my_delay=3000; }
	if ( my_width === undefined  ){ my_width=250; }	
JAV_notify(my_text,my_delay,my_color,my_width);	
}


// HELP show object using the id + https://animate.style/ + delay in : 5s if action = none some random ani are used 
function JAV_show(my_id,my_action = "none",my_delay)
{
var my_id,my_action,my_delay; 
var my_actions = ["slideInDown","slideInLeft","slideInRight","slideInUp","fadeIn","zoomIn","bounceInLeft"];
if ( my_delay === undefined  ){ my_delay='5s'; }
 if ( my_action === "none"  )
  {
	my_action="slideInLeft"; 
	my_action = my_actions[Math.floor((Math.random()*my_actions.length))];
  }
// alert(my_id + " :::" + my_action + " :::" +  my_delay );
const element = document.getElementById(my_id);
// element.removeAttribute('style');
element.style.setProperty('visibility', 'visible');
element.style.setProperty('animation-duration', my_delay);
element.style.setProperty('animation-name', my_action);
}



// HELP hide object using the id + https://animate.style/ + delay in : 5s if action = none some random ani are used 
function JAV_hide(my_id,my_action = "none" ,my_delay)
{
var my_id,my_action,my_delay;
var my_actions = ["slideOutDown","slideOutLeft","slideOutRight","slideOutUp","fadeOut","zoomOut","bounceOutLeft"];
if ( my_delay === undefined  ){ my_delay='5s'; }
 if ( my_action === "none"  )
  {
	my_action="slideOutLeft"; 
	my_action = my_actions[Math.floor((Math.random()*my_actions.length))];
  }
my_hide_int=parseInt(my_delay, 10);
my_hide_int=my_hide_int * 900;
// console.log( Date() + 'jav_hide is called' + my_id + "..." + my_action + "...." + my_delay ); 
// alert(my_id + " :::" + my_action + " :::" +  my_delay );
const element = document.getElementById(my_id);
element.style.setProperty('animation-duration', my_delay);
element.style.setProperty('animation-name', my_action);
setTimeout(function(){ element.style.setProperty('visibility', 'hidden'); }, my_hide_int );
}



// HELP show & hide object using the id + https://animate.style/ + delay in : 5s , if action = none some random ani are used 
function JAV_show_hide(my_id,my_action = "none",my_delay)
{
var my_id,my_action,my_delay; 
const my_timer = ms => new Promise(res => setTimeout(res, ms));
var my_actions = ["slideInDown","slideInLeft","slideInRight","slideInUp","fadeIn","zoomIn","bounceInLeft"];
if ( my_delay === undefined  ){ my_delay='5s'; }
// console.log( 'jav_show_hide is called' + my_id + "..." + my_action + "...." + my_delay ); 
 if ( my_action === "none"  )
  {
	my_action="slideInLeft"; 
	my_action = my_actions[Math.floor((Math.random()*my_actions.length))];
  }
// JAV_ani_show(my_id,my_action,my_delay);
my_show_int=parseInt(my_delay, 10);
my_show_int=my_show_int * 1000;
// JAV_toastr('my_action : ' + my_action + '<br> my_delay :' + my_delay + '<br> show_delay ' + my_show_int ,'success','toast-top-left',-1);
(async function () {
  // JAV_toastr('show','success','toast-top-left',-1);
  JAV_show(my_id,my_action);
  await my_timer(my_show_int);
  my_action=my_action.replace('In','Out');
  // JAV_toastr('start hide','success','toast-top-left',-1);
  //  await my_timer(my_show_int);
  JAV_hide(my_id,my_action);
  // await my_timer(my_show_int);
  // JAV_toastr('hide end ','success','toast-top-left',-1);
  }());

}

// HELP close window
function JAV_close() 
{
window.open("", "_self");
window.close();
}
</script>



<script>
//  HELP call popupwindow with param's a,b,c,d,e,g,h,k,l,f,m
function JAV_popupwnd(a,b,c,d,e,g,h,k,l,f,m)
 {
 -1==k&&(k=screen.width/2-f/2);
 -1==l&&(l=screen.height/2-m/2);
 this.open(a," ","toolbar="+b+",menubar="+c+",location="+d+",scrollbars="+g+",resizable="+e+",status="+h+",left="+k+",top="+l+",width="+f+",height="+m)
 }
function printElement(a)
 {
  if(a=document.getElementById(a))
  {
   var b=document.body.innerHTML;
   document.body.innerHTML=a.innerHTML;
   window.print();document.body.innerHTML=b
  }
}
</script>
