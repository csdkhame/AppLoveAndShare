<button style=" color: #fffbfb;" class="btnstatus"     data_id="<?=$arr[project][id];?>"  data_vc="<?=$arr[project][invoice];?>"   data_report_id="<?=$arr[project][report_id];?>"  col_name="driver_complete" id="btn_complete<?=$arr[project][id];?>" <? if($arr[project][driver_complete] > 0){ ?> disabled="disabled"  <? } ?> > <span id="text_1_complete_<?=$arr[project][id];?>" ><font class="font_14"> ถึงสถานที่ส่ง</span> <span id="text_2_complete_<?=$arr[project][id];?>" > เสร็จงาน</span>
</button>


<script>
 

 
$('#btn_complete<?=$arr[project][id];?>').click(function(){  

 
 $( "#load_data_check_in_check_in" ).toggle();
  
var url_chat_<? echo $arr[project][id];?> = "load_page_check_in_1.php?name=load/show&file=popup_guest&opentype=check_complete&id=<? echo $arr[project][id];?>";
 
url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
 
 
  
 
 
    $('#load_data_check_in_check_in').html(load_main_mod);
 $('#load_data_check_in_check_in').load(url_chat_<? echo $arr[project][id];?>); 
 
 
  
 
 
     	});
					
					</script>