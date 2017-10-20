
 <?
 $db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
$res[projecttype] = $db->select_query("SELECT * FROM shopping_product_sub where   id=".$_GET[type]."  ");
$arr[projecttype] = $db->fetch($res[projecttype]);



$ArrDayName[Sun] = 'อาทิตย์';
$ArrDayName[Mon] = 'จันทร์';
$ArrDayName[Tue] = 'อังคาร';
$ArrDayName[Wed] = 'พุธ';
$ArrDayName[Thu] = 'พฤหัสบดี';
$ArrDayName[Fri] = 'ศุกร์';
$ArrDayName[Sat] = 'เสาร์';



 $day_now =  date('D');
 ?>
 
 <script>

  $(".text-topic-action-mod-2" ).html("<? echo $arr[projecttype][topic_th];?>");

  </script> 
 
   <div style="padding:5px; margin-top:30px;">
  
       <?
 
 $db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
 
$res[project] = $db->select_query("SELECT * FROM shopping_product   WHERE sub=".$_GET[type]." and status=1  ");
while($arr[project] = $db->fetch($res[project])){
 
 ?>
 
 
 
 <div style="padding-bottom:10px; padding-top:10px; border-bottom:1px solid #DADADA;    <? if( $arr[project][status]==0){?>
 
 
 opacity:0.4;   pointer-events: none;   
 
 <? } ?>
 
  
   ">
   
   <? if( $province==1){ 
 
   $provincename='ภูเก็ต';
  }  ?>
   
   
   
   
   <table width="100%" border="0" cellspacing="2" cellpadding="2">
     <tbody>
    <tr>
      <td colspan="2" style="border-bottom : 2px solid #DADADA;" >
      
      
         <? if($arr[project][pic_logo]==1){ ?>
      
      <img src="../data/pic/place/<? echo $arr[project][id];?>_logo.jpg" width="100%"  alt="" style=" border-radius: 10px; border: 1px solid #ddd; margin-bottom:5px;"/>
      
      
      <? } ?>
        
         <b>  <span class="font-28" style="color:<?=$main_color?>"><? echo $arr[project][topic_th];?> </span><br>
        <span class="font-28" style="color:#333333"><b><? echo $arr[project][topic_en];?></span>  
        
        
         </td>
      </tr>
     <!-- ***************** Open Time ************************* --> 
     <?php
      $db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
 
$res[opentime] = $db->select_query("SELECT * FROM shopping_open_time   WHERE product_id=".$arr[project][id]." and status=1   order by id asc ");
$count_days = $db->rows($res[opentime]);
//echo $_GET[type];

     ?>
    <tr>
      <td width="100" class="font-22"><strong>เปิดบริการ</strong></td>
      <td>
      <span class="font-22">
      <?php
      if($count_days == 7){
				?>
				ทุกวัน
				<?php
			}else{
				?>
				<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td style="border-bottom: 1px dotted #abaab0; border-right:1px dotted #abaab0; ">วัน</td>
						<td style="border-bottom: 1px dotted #abaab0; border-right:1px dotted #abaab0;">เวลาเปิด</td>
						<td style="border-bottom: 1px dotted #abaab0; ">เวลาปิด</td>
					</tr>
				
				<?php
				$i = 1;
				while($arr[opentime] = $db->fetch($res[opentime])){
					
					if($arr[opentime][product_day] == $day_now){
						?>
						<tr>
						<td style="border-bottom: 1px dotted #ff6464; border-right:1px dotted #ff6464;  border-top:1px dotted #ff6464; border-left:1px dotted #ff6464;"><?=$ArrDayName[$arr[opentime][product_day]];?></td>
						<?php
						if($arr[opentime][open_always] == 1){
							?>
							<td colspan="2" style="border-bottom: 1px dotted #ff6464;border-right:1px dotted #ff6464; border-top:1px dotted #ff6464;" >
								เปิดตลอด 24 ชั่วโมง
							</td>
							
							<?php
						}else{
							?>
							<td style="border-bottom: 1px dotted #ff6464; border-right:1px dotted #abaab0; border-top:1px dotted #ff6464;"><?=$arr[opentime][start_h];?>:<?=$arr[opentime][start_m];?></td>
							<td style="border-bottom: 1px dotted #ff6464; border-right:1px dotted #ff6464; border-top:1px dotted #ff6464;" ><?=$arr[opentime][finish_h];?>:<?=$arr[opentime][finish_m];?></td>
							<?php
						}
						?>
						
					</tr>
						<?php
					}else{
						?>
						<tr>
						<td style="border-bottom: 1px dotted #abaab0; border-right:1px dotted #abaab0;"><?=$ArrDayName[$arr[opentime][product_day]];?></td>
						<?php
						if($arr[opentime][open_always] == 1){
							?>
							<td colspan="2" style="border-bottom: 1px dotted #abaab0;" >
								เปิดตลอด 24 ชั่วโมง
							</td>
							
							<?php
						}else{
							?>
							<td style="border-bottom: 1px dotted #abaab0; border-right:1px dotted #abaab0;"><?=$arr[opentime][start_h];?>:<?=$arr[opentime][start_m];?></td>
							<td style="border-bottom: 1px dotted #abaab0;"><?=$arr[opentime][finish_h];?>:<?=$arr[opentime][finish_m];?></td>
							<?php
						}
						?>
						
					</tr>
						<?php
					}
					?>
					
					
					<?php
					$i++;
				}
				?>
				</table>
				<?php
			}
      ?>
        <!--(<? echo $arr[project][start_time];?> - <? echo $arr[project][finish_time];?>)-->
      
      </span>
      </td>
    </tr>
    <?php
    if($count_days == 7){
    ?>
    <tr>
      <td   class="font-22"><strong>เวลาทำการ</strong></td>
      <td>
      <span class="font-22">
    	<?php
    	$db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
    	$res[openanytime] = $db->select_query("SELECT * FROM shopping_open_time   WHERE product_id=".$arr[project][id]." and status=1 and open_always=1  ");
    	$count_openanytime = $db->rows($res[openanytime]);
    	
    	if($count_openanytime > 0){
    		
    		$db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
    		$res[openanytime2] = $db->select_query("SELECT * FROM shopping_open_time   WHERE product_id=".$arr[project][id]." and status=1 and open_always=0  ");
    		$count_openanytime2 = $db->rows($res[openanytime2]);
    		if($count_openanytime2 > 0){
					$db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
					$res[showtimeopen] = $db->select_query("SELECT * FROM shopping_open_time   WHERE product_id=".$arr[project][id]." and status=1  order by id asc  ");
					?>
					<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td style="border-bottom: 1px dotted #abaab0; border-right:1px dotted #abaab0; ">วัน</td>
						<td style="border-bottom: 1px dotted #abaab0; border-right:1px dotted #abaab0;">เวลาเปิด</td>
						<td style="border-bottom: 1px dotted #abaab0; ">เวลาปิด</td>
					</tr>
				
				<?php
				$i = 1;
				while($arr[opentime] = $db->fetch($res[opentime])){
					
					if($arr[opentime][product_day] == $day_now){
						?>
						<tr>
						<td style="border-bottom: 1px dotted #ff6464; border-right:1px dotted #ff6464;  border-top:1px dotted #ff6464; border-left:1px dotted #ff6464;"><?=$ArrDayName[$arr[opentime][product_day]];?></td>
						<?php
						if($arr[opentime][open_always] == 1){
							?>
							<td colspan="2" style="border-bottom: 1px dotted #ff6464;border-right:1px dotted #ff6464; border-top:1px dotted #ff6464;" >
								เปิดตลาด 24 ชั่วโมง
							</td>
							
							<?php
						}else{
							?>
							<td style="border-bottom: 1px dotted #ff6464; border-right:1px dotted #abaab0; border-top:1px dotted #ff6464;"><?=$arr[opentime][start_h];?>:<?=$arr[opentime][start_m];?></td>
							<td style="border-bottom: 1px dotted #ff6464; border-right:1px dotted #ff6464; border-top:1px dotted #ff6464;" ><?=$arr[opentime][finish_h];?>:<?=$arr[opentime][finish_m];?></td>
							<?php
						}
						?>
						
					</tr>
						<?php
					}else{
						?>
						<tr>
						<td style="border-bottom: 1px dotted #abaab0; border-right:1px dotted #abaab0;"><?=$ArrDayName[$arr[opentime][product_day]];?></td>
						<?php
						if($arr[opentime][open_always] == 1){
							?>
							<td colspan="2" style="border-bottom: 1px dotted #abaab0;" >
								เปิดตลอด 24 ชั่วโมง
							</td>
							
							<?php
						}else{
							?>
							<td style="border-bottom: 1px dotted #abaab0; border-right:1px dotted #abaab0;"><?=$arr[opentime][start_h];?>:<?=$arr[opentime][start_m];?></td>
							<td style="border-bottom: 1px dotted #abaab0;"><?=$arr[opentime][finish_h];?>:<?=$arr[opentime][finish_m];?></td>
							<?php
						}
						?>
						
					</tr>
						<?php
					}
					?>
					
					
					<?php
					$i++;
				}
				?>
				</table>
					<?php
 
				}else{
					?>
					เปิดตลอด 24 ชั่วโมง
					<?php
				}
				?>
				
				<?php
			}else{
				$db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
	    	$res[start_h] = $db->select_query("SELECT * FROM shopping_open_time   WHERE product_id=".$arr[project][id]." and status=1  group by start_h ");
	    	$count_start_h = $db->rows($res[start_h]);
	    	$db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
	    	$res[start_m] = $db->select_query("SELECT id FROM shopping_open_time   WHERE product_id=".$arr[project][id]." and status=1  group by start_m ");
	    	$count_start_m = $db->rows($res[start_m]);
	    	$db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
	    	$res[finish_h] = $db->select_query("SELECT id FROM shopping_open_time   WHERE product_id=".$arr[project][id]." and status=1  group by finish_h ");
	    	$count_finish_h = $db->rows($res[finish_h]);
	    	$db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
	    	$res[finish_m] = $db->select_query("SELECT id FROM shopping_open_time   WHERE product_id=".$arr[project][id]." and status=1  group by finish_m ");
	    	$count_finish_m = $db->rows($res[finish_m]);
	    	$total_times = $count_start_h + $count_start_m + $count_finish_h + $count_finish_m;
				if($total_times == 4){
	    		$arr[start_h] = $db->fetch($res[start_h]);
					?>
					<? echo $arr[start_h][start_h];?>:<? echo $arr[start_h][start_m];?> - <? echo $arr[start_h][finish_h];?>:<? echo $arr[start_h][finish_m];?>
					<?php
				}else{
					?>
				<table width="100%" cellpadding="0" cellspacing="0">
					<tr>
						<td style="border-bottom: 1px dotted #abaab0; border-right:1px dotted #abaab0; ">วัน</td>
						<td style="border-bottom: 1px dotted #abaab0; border-right:1px dotted #abaab0;">เวลาเปิด</td>
						<td style="border-bottom: 1px dotted #abaab0; ">เวลาปิด</td>
					</tr>
				
				<?php
				$i = 1;
				while($arr[opentime] = $db->fetch($res[opentime])){
					
					if($arr[opentime][product_day] == $day_now){
						?>
						<tr>
						<td style="border-bottom: 1px dotted #ff6464; border-right:1px dotted #ff6464;  border-top:1px dotted #ff6464; border-left:1px dotted #ff6464;"><?=$ArrDayName[$arr[opentime][product_day]];?></td>
						<?php
						if($arr[opentime][open_always] == 1){
							?>
							<td colspan="2" style="border-bottom: 1px dotted #ff6464;border-right:1px dotted #ff6464; border-top:1px dotted #ff6464;" >
								เปิดตลอด 24 ชั่วโมง
							</td>
							
							<?php
						}else{
							?>
							<td style="border-bottom: 1px dotted #ff6464; border-right:1px dotted #abaab0; border-top:1px dotted #ff6464;"><?=$arr[opentime][start_h];?>:<?=$arr[opentime][start_m];?></td>
							<td style="border-bottom: 1px dotted #ff6464; border-right:1px dotted #ff6464; border-top:1px dotted #ff6464;" ><?=$arr[opentime][finish_h];?>:<?=$arr[opentime][finish_m];?></td>
							<?php
						}
						?>
						
					</tr>
						<?php
					}else{
						?>
						<tr>
						<td style="border-bottom: 1px dotted #abaab0; border-right:1px dotted #abaab0;"><?=$ArrDayName[$arr[opentime][product_day]];?></td>
						<?php
						if($arr[opentime][open_always] == 1){
							?>
							<td colspan="2" style="border-bottom: 1px dotted #abaab0;" >
								เปิดตลอด 24 ชั่วโมง
							</td>
							
							<?php
						}else{
							?>
							<td style="border-bottom: 1px dotted #abaab0; border-right:1px dotted #abaab0;"><?=$arr[opentime][start_h];?>:<?=$arr[opentime][start_m];?></td>
							<td style="border-bottom: 1px dotted #abaab0;"><?=$arr[opentime][finish_h];?>:<?=$arr[opentime][finish_m];?></td>
							<?php
						}
						?>
						
					</tr>
						<?php
					}
					?>
					
					
					<?php
					$i++;
				}
				?>
				</table>
				<?php
				}
			}
	    	
    	?>      
      </span>
      </td>
      </tr>
    <?php } ?>
    <tr>
<td class="font-22"><strong>ค่าตอบแทน</strong></td>
      <td><span id="shop_alert_menu_price_<?=$arr[project][id]?>" class="font-22"> <i class="fa fa-calculator" style="font-size:16px; color:<?=$arr[project][text_color]?>; width:20px;"></i>  ดูค่าตอบแทน</b></span></td>
    </tr>
    <tr>
<td class="font-22"><strong>ตำแหน่งที่ตั้ง</strong></td>
      <td><span id="shop_alert_menu_map_<?=$arr[project][id]?>" class="font-22"> <i class="fa fa-map-marker" style="font-size:20px; color:<?=$arr[project][text_color]?>; width:20px;"></i>แผนที่</b></span></td>
    </tr>
    <tr>
<td class="font-22"><strong>สอบถาม</strong></td>
      <td>
 
 
 
 
 <script> 
      
 $('#shop_alert_menu_map_<?=$arr[project][id]?>').click(function(){  

 $( "#load_mod_popup_4" ).toggle();
	
 
  var url_load_<?=$arr[project][id]?>= "load_page_mod_4.php?name=booking/popup&file=map&shop_id=<?=$arr[project][id]?>&lat=<?=$arr[project][lat]?>&lng=<?=$arr[shop][project]?>&type=stop";
  
    
  url_load_<?=$arr[project][id]?>=url_load_<?=$arr[project][id]?>+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
 url_load_<?=$arr[project][id]?>=url_load_<?=$arr[project][id]?>+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
  
  
  $('#load_mod_popup_4').html(load_main_mod);
  $('#load_mod_popup_4').load(url_load_<?=$arr[project][id]?>); 
	  

 	});
      
      </script>
      
      
 <?
  
 	  $db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
                         
  $res[sale] = $db->select_query("SELECT * FROM  shopping_contact where product_id=".$arr[project][id]." and type='phone'  and usertype=9 ORDER BY id  ");
                      
 	while($arr[sale] = $db->fetch($res[sale])){  
	
 
 ?>
                  
                  
      
       <a href="tel:<?=$arr[sale][phone]?>"  id="booking_edit_<?=$arr[project][id]?>"  style="color:#333333"  >
      
<span id="shop_alert_menu_call_<?=$arr[project][id]?>" class="font-22"> <i class="fa fa-phone-square" style="font-size:18px; color:<?=$arr[project][text_color]?>; width:20px;"></i>การตลาด (<?=$arr[sale][name]?>)</b></span>
</a>


<? } ?>
      
 
      
      
      </td>
    </tr>
    <tr>
      <td class="font-22"><strong>ดาวน์โหลด</strong></td>
      <td>
	  
	              
        <a style="color:#333333; text-decoration:none"   id="shop_alert_menu_index_load_<?=$arr[project][id]?>" onclick="openPopUpBrochure('<?=$arr[project][id]?>','<?=$arr[project][pic_book]?>','<?=$arr[project][pic_book_2]?>','<?=$arr[project][pic_book3]?>')" class="font-22"> <i class="fa fa-download" style="font-size:18px; color:<?=$arr[project][text_color]?>; width:20px;"></i> <span>โบร์ชัวร์</span></a>   
     </td>
    </tr>
    <tr>
      <td class="font-22"><strong>สถานะ</strong></td>
      <td id="status_open_<? echo $arr[project][id];?>" class="font-26">เปิดให้บริการ</td>
    </tr>
    <tr   id="tr_time_open_<? echo $arr[project][id];?>">
      <td class="font-22"><strong>เหลือเวลา</strong></td>
      <td>
      
      <table width="100%" border="0" cellspacing="0" cellpadding="1">
  <tbody>
    <tr>
      <td width="110" class="font-26" id="time_open_<? echo $arr[project][id];?>" style="color:#FF000">&nbsp;</td>
      
    </tr>
  </tbody>
</table></td>
    </tr>
    <tr>
      <td colspan="2" class="tab_alert "  style="font-size:26px">
      
      	<script>
		
 
	 var url_check_data_time_<? echo $arr[project][id];?> = "go.php?name=shop/load&file=time_open&id=<? echo $arr[project][id];?>";
 
 $('#time_open_<? echo $arr[project][id];?>').load(url_check_data_time_<? echo $arr[project][id];?>);
 
 	
 setInterval(function() {
	 
 var url_check_data_time_<? echo $arr[project][id];?> = "go.php?name=shop/load&file=time_open&id=<? echo $arr[project][id];?>";
 
 $('#time_open_<? echo $arr[project][id];?>').load(url_check_data_time_<? echo $arr[project][id];?>);

  
}, 60000); // 60000 milliseconds = one minute
 
	</script>
      
 
  
 
 
 
      
      <div id="btn_open_<? echo $arr[project][id];?>">
      
      <button id="menu_add_new_booking_text_<? echo $arr[project][id];?>" type="button tab_alert" class="btn  btn-info "  style="width:100%;text-align:center;padding:5px; background-color:<?=$main_color?> "   ><span class="font-30"><i class="fa  fa-shopping-cart" style="width:20px;"  ></i><b>&nbsp; ไปช็อปปิ้ง</b></button>
      
      </div>
      
      
      
       <div id="btn_close_<? echo $arr[project][id];?>" style=" display:none">
<?php

 	  $db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
  $res[shop] = $db->select_query("SELECT * FROM  shopping_open_time where product_id=".$arr[project][id]." and product_day = '$day_now'     ");
 $arr[shop] = $db->fetch($res[shop]) ;
if($arr[shop][open_always] == 1){
$finish_h =  "23";
$finish_m =  "59";
$time_of_open = "00.00 - 23.59";
}else{
$finish_h =  $arr[shop][finish_h];
$finish_m =  $arr[shop][finish_m];
$time_of_open = "".$arr[shop][start_h].".".$arr[shop][start_m]." - ".$arr[shop][finish_h].".".$arr[shop][finish_m]."";
}
?>      
            <button id="menu_close_new_booking_text_<? echo $arr[project][id];?>" type="button" class="btn  btn-info "  style="width:100%;text-align:center;padding:5px; background-color:#666666; border:none; display:nones "><span class="font-30"> <b>  เปิดให้บริการ<br>
เวลา  <? echo $time_of_open; ?></button>
        </div>
      
      
      
      </td>
      </tr>
  </tbody>
</table>



</div> 
 
 <div id="broModal" class="modal" style="font-size: 0px!important; color: #000000 !important;">
  <span class="close" style="position: fixed;
    color: #f4f4f4;
    right: 15px;
    font-size: 40px;
   " id="closeModal">&times;</span>
   <i class="fa fa-times" aria-hidden="true" style="position: fixed;
    color: #f4f4f4;
    right: 15px;
    font-size: 40px;
    z-index: 5000;
   " id="close_modal" onclick="closeModal();"></i>
  <div class="modal-content" id="img01"> </div>
  <!--<div id="caption"></div>-->
</div>
 
 <script>
// Get the modal
var modal = document.getElementById('broModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById('shop_alert_menu_index_load_<?=$arr[project][id]?>');
//var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
function openPopUpBrochure(id,pic1,pic2,pic3){
    modal.style.display = "block";
//    modalImg.src = this.src;
	
	$('#img01').load('load/popup/pic_place.php?id='+id+'&pic1='+pic1+'&pic2='+pic2+'&pic3='+pic3); 
//    captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
function closeModal(){
//	alert(123);
	 $('#closeModal').click();
}
</script>
 
<script> 
 
  
 		///
 $('#shop_alert_menu_index_load_<?=$arr[project][id]?>').click(function(){  

 

 /*$('#ninja-slider').show();
 $('#show_main_tool_bottom').hide();
 $('body').css('overflow','hidden');*/
// $( "#alert_show_pic_place" ).toggle();
//  $("#pic_book_place").attr("src", "../data/fileupload/doc_place/<? echo $arr[project][logo_code];?>.jpg");
 
//   $(".text-topic-action-mod-place-pic" ).html("โบร์ชัวร์ (<?=$arr[project][topic_th]?>)");

});
 ////
 
 
 		///
$('#shop_alert_menu_price_<?=$arr[project][id]?>').click(function(){  
	
 
	

 $( "#load_mod_popup_4" ).toggle();
 
  var url_load_<?=$arr[project][id]?>= "load_page_mod_4.php?name=booking/popup&file=price&shop_id=<?=$arr[project][id]?>&lat=<?=$arr[shop][lat]?>&lng=<?=$arr[shop][lng]?>&type=stop";
  
  $('#load_mod_popup_4').html(load_main_mod);
  $('#load_mod_popup_4').load(url_load_<?=$arr[project][id]?>); 
  
 

 	});
 
 
  
 
 /////////////
 
$('#menu_add_new_booking_<? echo $arr[project][id];?>').click(function(){  


 $( "#alert_show_shopping_place" ).hide();


 $( "#load_mod_popup" ).toggle();
 
	
  var url_load = "load_page_mod.php?name=booking&file=new_easy&driver=<?=$user_id?>&place=<? echo $arr[project][id];?>";
 
 $('#load_mod_popup').html(load_main_mod);
  $('#load_mod_popup').load(url_load); 
 
  });
  
  
$('#menu_add_new_booking_text_<? echo $arr[project][id];?>').click(function(){  
  
  
$( "#alert_show_shopping_place" ).hide();


 $( "#load_mod_popup_3" ).toggle();
  
 
  
	var url_load = "load_page_mod_3.php?name=booking/step&file=booking&driver=<?=$user_id?>&place=<? echo $arr[project][id];?>";
 
  $('#load_mod_popup_3').html(load_main_mod);


///  $( "#main_index_load_page" ).toggle();
  
 
 
  $('#load_mod_popup_3').load(url_load); 
  
  
  



 
	

 
  });
  
  
 
 
        </script>
 
 <? } ?>
     

         </div>

 
<script>
$(".button-close-popup-mod-0").click(function(){   
 
 $( "#alert_show_shopping_place" ).hide();
 
});

</script>  <?// include ("load/popup/pic_place.php");?>       