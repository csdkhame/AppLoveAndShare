<button style=" color: #fffbfb;" class="btnstatus"   id="btn_checkcar<?=$arr[project][id];?>" <? if($arr[project][driver_checkcar] > 0){ ?> disabled="disabled"  <? } ?> > <span id="text_1_checkcar_<?=$arr[project][id];?>" ><font class="font_14"> ตรวจเช็คสัมภาระในรถ</span> 
</button>



<script>
 

 
$('#btn_checkcar<?=$arr[project][id];?>').click(function(){  

 
 $( "#load_data_check_in_check_in" ).toggle();
  
var url_chat_<? echo $arr[project][id];?> = "load_page_check_in_1.php?name=load/show&file=popup_guest&opentype=check_checkcar&id=<? echo $arr[project][id];?>";
 
 
url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
 
 
 
 
 
  $('#head_full_popup_check_in_topic').html("ถึงสถานที่รับแขก"); 
 
    $('#load_data_check_in_check_in').html(load_main_mod);
 $('#load_data_check_in_check_in').load(url_chat_<? echo $arr[project][id];?>); 
 
 
  
 
 
     	});
					
					</script>