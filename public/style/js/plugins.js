// Avoid `console` errors in browsers that lack a console.
(function() {
    
    var sidebar = document.getElementById("sidebar");  

if(navigator.userAgent.indexOf("Chrome") != -1 )
   {
if(window.innerWidth < 1025 ){
sidebar.style.width = "20%";
}else if(window.innerWidth < 1281 ){
      sidebar.style.width = "15%";
}else if(window.innerWidth < 1442 ){
      sidebar.style.width = "13%";
}else{
sidebar.style.width = "12%";
}
   }
   else if(navigator.userAgent.indexOf("Safari") != -1)
   {
       sidebar.style.width = "13%";
   }
   else if(navigator.userAgent.indexOf("Firefox") != -1 ) 
   {
if(window.innerWidth < 1025 ){
sidebar.style.width = "20%";
}else if(window.innerWidth < 1281 ){
      sidebar.style.width = "15%";
}else{
sidebar.style.width = "12%";
}
   }
   else if((navigator.userAgent.indexOf("MSIE") != -1 ) || (!!document.documentMode == true )) //IF IE > 10
   {
     sidebar.style.width = "11%";
   }  else{
sidebar.style.width = "16%";
}

    var method;
    var noop = function () {};
    var methods = [
        'assert', 'clear', 'count', 'debug', 'dir', 'dirxml', 'error',
        'exception', 'group', 'groupCollapsed', 'groupEnd', 'info', 'log',
        'markTimeline', 'profile', 'profileEnd', 'table', 'time', 'timeEnd',
        'timeline', 'timelineEnd', 'timeStamp', 'trace', 'warn'
    ];
    var length = methods.length;
    var console = (window.console = window.console || {});

    while (length--) {
        method = methods[length];

        // Only stub undefined methods.
        if (!console[method]) {
            console[method] = noop;
        }
    }
}());

// Place any jQuery/helper plugins in here.


document.getElementsByClassName("no-records-found").style('color:red');

