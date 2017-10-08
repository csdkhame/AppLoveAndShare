 
			<? 

if($arr[project][driver_topoint] == 1){ $text_status = "check";$btn_status = "success  btn-block btn-md btnstatus approve"; ?>
                <script>
$('#iconchk_s1_<?=$arr[project][id];?>').attr("src", "images/yes.png");
$('#checkstep_1_<?=$arr[project][id];?>').addClass("checkinstep_active");
		 		</script>
            
                <?
}
else{$text_status = "times";$btn_status = "warning  btn-block btn-md btnstatus reject"; ?>
                <script>
$('#tab_to_<?=$arr[project][id];?>').addClass("tab_alert");
  </script>
                <?
} 
?>
 
 
 
 
 
      <button style="  color: #fffbfb;" class="btnstatus"  data_id="<?=$arr[project][id];?>"  data_vc="<?=$arr[project][invoice];?>"   data_report_id="<?=$arr[project][report_id];?>" col_name="driver_topoint"  id="btn_topoint<?=$arr[project][id];?>" <? if($arr[project][driver_topoint] > 0){ ?> disabled="disabled"  <? } ?> ><font class="font_14">ถึงสถานที่รับ</font></button>
	  
	  <div style="display:none ">
      <button style="  color: #fffbfb;" class="btnstatus" data-target="#popup_topoint_<?=$arr[project][id];?>" data-toggle="modal" data-backdrop="static" data-keyboard="false" data_id="<?=$arr[project][id];?>"  data_vc="<?=$arr[project][invoice];?>"   data_report_id="<?=$arr[project][report_id];?>" col_name="driver_topoint"  id="gps_btn_topoint<?=$arr[project][id];?>" <? if($arr[project][driver_topoint] > 0){ ?> disabled="disabled"  <? } ?> ><font class="font_14">ถึงสถานที่รับ</font></button>
	  
	  
 <button type="button" class="btn btn-modal-no"  data-backdrop="static"  data-toggle="modal" data-backdrop="static" data-keyboard="false" data_id="<?=$arr[project][id];?>"  data_vc="<?=$arr[project][invoice];?>"    data-dismiss="modal" >ไม่แน่ใจ</button></div>
 
 
    <script>
 

 
$('#btn_topoint<?=$arr[project][id];?>').click(function(){  



 
 $( "#load_data_check_in_check_in" ).toggle();
  
var url_chat_<? echo $arr[project][id];?> = "load_page_check_in_1.php?name=load/show&file=popup_guest&opentype=check_to_point&id=<? echo $arr[project][id];?>";
 
 
url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
 
 
 
 
 
 
 
    $('#load_data_check_in_check_in').html(load_main_mod);
 $('#load_data_check_in_check_in').load(url_chat_<? echo $arr[project][id];?>); 
 
 
  
 
 
     	});
					
					</script>
  
<div id="popup_work_preview_map"    style="width:100%; height:100%; padding:0px;  left:0px;  top:0px;   z-index:99999; background-color:#FFFFFF; position:fixed;  display:none; margin-top:0px; overflow:hidden">
   <div class="back-full-popup">
    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="40"   ><div   id="btn_close_chat_preview_map"><i class="fa fa-arrow-circle-left" style="font-size:22px; color:#FFFFFF "> </i></div></td>
  <td   ><div style="font-size:18px; color:#FFFFFF " id="head_full_popup_map"><?="ตำแหน่งของคุณ"?></div></td>
    <td width="50" align="right"   ><div style="font-size:18px; color:#FFFFFF " id="head_full_popup_icon"><i class='fa  fa-map-marker'></i></div></td>
  </tr>
</table>
</div>
 
   <div   style=" background-color:#F6F6F6 ; height:80px;width:100%; top:43; position:fixed; padding:10px;  ; overflow:hidden;z-index:999999; " >
 
<table width="100%"  border="0" cellspacing="2" cellpadding="0" >
  <tr>
 
    <td   style=" color:#000000; padding-top:0px; font-size:18px "><b>ตำแหน่ง</b></td>
 
   
  </tr>
  <tr>
    <td id="load_work_preview_map_address"  style=" color:#333333; padding-bottom:5px; " >&nbsp;</td>
  </tr>
</table>

</div>
 
 <div   id="load_work_preview_map"   style="margin-top: 0px; height:100%; overflow:hidden;  "  >  
		 
 <?   include('google/check_system_realtime.php')?>
</div> 
 
 
              
				                </div>
 
 
 
 
 
 
   <script>
 
	$("#btn_close_chat_preview_map").click(function(){   
   $( "#popup_work_preview_map" ).toggle();
 
	 $(".messages").animate({ scrollTop: 99999 }, 3000);
  });
  
 
  
  
  
  
  
  $("#btn_send_gps_realtime_point").click(function(){  
 

document.getElementById('statetype').value='share_location';

   var url="<?=$chat_part?>go.php?name=chat&file=savedata&type=new&vc=<?=$_GET[vc]?>&state=14";
	url=url+"&lat="+document.getElementById('check_data_status_gps_realtime_lat_old').value;
	 url=url+"&lng="+document.getElementById('check_data_status_gps_realtime_lng_old').value;
 	url=url+"&state_type="+document.getElementById('statetype').value;
 
   $.post(url,$('#chat_form').serialize(),function(response){
 $('#send_chat_data').html(response);  });
 
  var url_chat = "<?=$chat_part?>go.php?name=livechat&file=sub&vc=<?=$_GET[vc]?>";
  $('#load-direct-chat').load(url_chat); 
   document.getElementById('message').value="";
   $( "#popup_work_preview_map" ).slideToggle("slow");
$( "#chat_button_tool" ).click();
 
 });
  
  
 
  
  
    	$("#chat_alert").click(function(){   
   $( "#chat_alert" ).slideToggle("slow");
 
	 $(".messages").animate({ scrollTop: 99999 }, 3000);
  });
  
	</script>
 
 
  
	  