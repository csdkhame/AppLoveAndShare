<?php @header ('Content-type: text/html; charset=utf-8'); 
@session_start();
require_once("mainfile.php");
$PHP_SELF = "index.php";
GETMODULE($_GET[name],$_GET[file]);
 //require_once("js/control.php");

?>    
 <!-- Bootstrap 3.3.6 -->
  <?  include ("bootstrap/css/css.php");?>
 
  <!-- Font Awesome -->
 
  <!-- Theme style -->

  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.css?v=<?=time()?>">
  
   <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
 
 
  <!-- Font Awesome -->
 
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/AdminLTE.css?v=<?=time()?>">
  <!-- AdminLTE Skins. Choose a skin from the css/skins
       folder instead of downloading all of them to reduce the load. -->
  <link rel="stylesheet" href="dist/css/skins/_all-skins.css?v=<?=time()?>">
  
  
 
    <link href="docs/css/highlight.css" rel="stylesheet">
    <link href="dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet">

 
    <link href="docs/css/highlight.css" rel="stylesheet">
    <link href="dist/css/bootstrap3/bootstrap-switch.css" rel="stylesheet">
 
  
  
  
  
  
  
  
  <script>
    	
  $('.button-close-popup-mod-4').click(function(){   

   $( "#load_mod_popup_4" ).toggle();
 
    $( "#load_mod_popup_4" ).html('');
	
 
	
	  var url_load = "load_page_mod.php?name=booking/load&file=work_all&driver=<?=$user_id?>&day=<? echo date('Y-m-d');?>";
	  //    $("#load_booking_data").load(url_load);

     	});
  </script>
 
  <div class="back-full-popup"> 
    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="40"   ><div class="button-close-popup-mod-4" ><?=$popup_icon_left_arow;?></div></td>
  <td   ><div style="font-size:22px; color:#FFFFFF " id="text_mod_topic_action_3" class="text-topic-action-mod-4"></div></td>
    <td width="50" align="right"   ><div style="font-size:22px; color:#FFFFFF " id="head_full_popup_icon"></div></td>
  </tr>
</table>
</div>
 
  

  <div style="top:0px; padding:10px; overflow: auto; width:100%; padding-bottom:50px;   ">   
 
  <? include ("".$MODPATHFILE.""); ?>
  </div>
  <?
 ///  include ("css/maincss.php");
  
  ?>