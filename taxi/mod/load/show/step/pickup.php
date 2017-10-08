<?
if($arr[project][driver_topoint] > 0){
	
	
	
	if($arr[project][driver_pickup] > 0){
?>
                <script>
$('#iconchk_s2_<?=$arr[project][id];?>').attr("src", "images/yes.png");
$('#checkstep_2_<?=$arr[project][id];?>').addClass("checkinstep_active");
 $('#tab_pickup_<?=$arr[project][id];?>').removeClass("tab_alert");
 </script>
 
 
 
 
                <table  cellpadding="0" cellspacing="0">
                  <tr id="tr_btn_pickup1<?=$arr[project][id];?>"  style="display: none<? if($arr[project][driver_pickup] == 1){ ?> 1  <? } ?>">
                    <td><button style=" color: #fffbfb;" class="btnstatus"     data_id="<?=$arr[project][id];?>"  data_vc="<?=$arr[project][invoice];?>"   data_report_id="<?=$arr[project][report_id];?>"  col_name="driver_pickup" id="btn_pickup_check_<?=$arr[project][id];?>" data_val="1"  <? if($arr[project][driver_pickup] == 1){ ?> disabled="disabled"  <? } ?> ><font class="font_14"> เช็คชื่อแขก</button></td>
                  </tr>
                  <tr height="5" id="cc_tr_pickup<?=$arr[project][id];?>" <? if($arr[project][driver_pickup] > 0){ ?> style="display: none"  <? } ?> ></tr>
                  <tr id="tr_btn_pickup2<?=$arr[project][id];?>"  style="display: none<? if($arr[project][driver_pickup] == 2){ ?> 1  <? } ?>">
                    <td><button style="background-color: #ff2b2b; color: #fffbfb;" class="btnstatus" data-target="#popup_chk_no_guest_<?=$arr[project][id];?>" data-toggle="modal" data-backdrop="static" data-keyboard="false"  data_id="<?=$arr[project][id];?>"  data_vc="<?=$arr[project][invoice];?>"   data_report_id="<?=$arr[project][report_id];?>"  col_name="driver_pickup" id="btn_pickup_not_check_<?=$arr[project][id];?>" data_val="2" <? if($arr[project][driver_pickup] == 2){ ?> disabled="disabled"  <? } ?> > <font class="font_14">ไม่เจอแขก</button></td>
                  </tr>
                </table>
                <?		
	}else{
		
		////// ยังไม่ได้กด check
?>
                <table  cellpadding="0" cellspacing="0">
                  <tr id="tr_btn_pickup1<?=$arr[project][id];?>"  style="display: nonea<? if($arr[project][driver_pickup] == 1){ ?> 1  <? } ?>">
                    <td><button style=" color: #fffbfb;" class="btnstatus"   data_id="<?=$arr[project][id];?>"  data_vc="<?=$arr[project][invoice];?>"   data_report_id="<?=$arr[project][report_id];?>"  col_name="driver_pickup" id="btn_pickup_check_<?=$arr[project][id];?>" data_val="1"  ><font class="font_14"> เช็คชื่อแขก</button></td>
                  </tr>
                  <tr height="5" id="cc_tr_pickup<?=$arr[project][id];?>" <? if($arr[project][driver_pickup] > 0){ ?> style="display: none"  <? } ?> ></tr>
                  <tr id="tr_btn_pickup2<?=$arr[project][id];?>"  style="display: nonea<? if($arr[project][driver_pickup] == 2){ ?> 1  <? } ?>">
                    <td><button style="background-color: #ff2b2b; color: #fffbfb;" class="btnstatus"  data-target="#popup_chk_no_guest_<?=$arr[project][id];?>" data-toggle="modal" data-backdrop="static" data-keyboard="false"  data_id="<?=$arr[project][id];?>"  data_vc="<?=$arr[project][invoice];?>"   data_report_id="<?=$arr[project][report_id];?>"  col_name="driver_pickup" id="btn_pickup_not_check_<?=$arr[project][id];?>" data_val="2"  ><font class="font_14"> ไม่เจอแขก</button></td>
                  </tr>
                </table>
                <?		
	}
?>
                <? }
else{ ?>
                <table  cellpadding="0" cellspacing="0">
                  <tr id="tr_btn_pickup1<?=$arr[project][id];?>"  style="display: nonea<? if($arr[project][driver_pickup] == 1){ ?> 1  <? } ?>">
                    <td>
 
<button style=" color: #fffbfb;" class="btnstatus"    data_id="<?=$arr[project][id];?>"  data_vc="<?=$arr[project][invoice];?>"   data_report_id="<?=$arr[project][report_id];?>"  col_name="driver_pickup" id="btn_pickup_check_<?=$arr[project][id];?>" data_val="1" <? if($arr[project][driver_pickup] == 1){ ?> disabled="disabled"  <? } ?> ><font class="font_14"> เช็คชื่อแขก</button></td>
                  </tr>
                  <tr height="5" id="cc_tr_pickup<?=$arr[project][id];?>" <? if($arr[project][driver_pickup] > 0){ ?> style="display: none"  <? } ?> ></tr>
                  <tr id="tr_btn_pickup2<?=$arr[project][id];?>"  style="display: nonea<? if($arr[project][driver_pickup] == 2){ ?> 1  <? } ?>">
                    <td><button style="background-color: #ff2b2b; color: #fffbfb;" class="btnstatus" data-target="#popup_chk_no_guest_<?=$arr[project][id];?>" data-toggle="modal" data-backdrop="static" data-keyboard="false"  data_id="<?=$arr[project][id];?>"  data_vc="<?=$arr[project][invoice];?>"   data_report_id="<?=$arr[project][report_id];?>"  col_name="driver_pickup" id="btn_pickup_not_check_<?=$arr[project][id];?>" data_val="2" <? if($arr[project][driver_pickup] == 2){ ?> disabled="disabled"  <? } ?> > <font class="font_14">ไม่เจอแขก</button></td>
                  </tr>
                </table>
                <? } ?>
				
				
				
				
				
				<? if(1==0){ ?>
                <div  id="no_guest<?=$arr[project][id];?>"  style=" display:none<? if($arr[project][driver_pickup] == 2){ ?> 1  <? } ?>">
                  <button type="button" class="btn btn-default"  style=" padding:5px; "   data-toggle="modal" data-backdrop="static" data-keyboard="false" >สาเหตุไม่พบแขก</button>
            </div> 
			<? } ?>
			
			
    <script>
 

 
  ////// เจอแขก
 
 
$('#btn_pickup_check_<?=$arr[project][id];?>').click(function(){  
 
 $( "#load_data_check_in_check_in" ).toggle(); 
  
var url_chat_<? echo $arr[project][id];?> = "load_page_check_in_1.php?name=load/show&file=popup_guest&opentype=check_pickup&id=<? echo $arr[project][id];?>&type=yes"; 
 
url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
url_chat_<? echo $arr[project][id];?>=url_chat_<? echo $arr[project][id];?>+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
 
 
 
    $('#load_data_check_in_check_in').html(load_main_mod);
 $('#load_data_check_in_check_in').load(url_chat_<? echo $arr[project][id];?>); 
 
 
  
 
 
     	});
					
					</script>
			