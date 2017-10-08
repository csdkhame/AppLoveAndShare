 
  
  <style>
  .shop-main-icon {
	border-radius: 80px;
	background-color: <?=$main_color_sorf?>;
	padding: 5px;
	width: 80px;
	height: 80px;
	text-align: justify;
	color: #FFFFFF;
	border: solid 8px #FFFFFF;
	box-shadow: 0 0 0px 2px #DADADA; text-align:center;
 
	color: #fff;
 
}

    .div-all-shop{
	 padding:5px;   border-radius: 10px; border: 0px solid #ddd;background-color:#FFFFFF;     margin-bottom: 5px; box-shadow: 0px  0px 0px #DADADA  ; margin-bottom:10px;
	 
 }
  /* 
   
       .div-all-shop:hover{
	 padding:5px;   border-radius: 10px; border: 2px solid #ddd;background-color:#FFFDE9;     margin-bottom: 5px; box-shadow: 0px  0px 10px #DADADA  ; margin-bottom:10px;
	 
 }
 
   */
  </style>
  
  
  
  
  
  
  
  

  
<div style="margin-top:55px;"> 
       <?
	   
 
	$db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
 
$res[project] = $db->select_query("SELECT * FROM shopping_product_main where id='".$_GET[id]."'  ORDER BY  id  ASC  ");
while($arr[project] = $db->fetch($res[project])){
	
	
	
  $type = $db->num_rows('shopping_product_sub',"id","main=".$arr[project][id]."");
  
  $shop = $db->num_rows('shopping_product',"id","main=".$arr[project][id]."  and status=1");
  
	
	
	if($type ==''){ 
	
	 $type ='ยังไม่มี';
	
	}
	
	
		if($shop ==''){ 
	
	 $shop ='ยังไม่มี';
	
	}
	
	
 
 ?>
 
 
   <script>

  $(".text-topic-action-mod" ).html("<? echo $arr[project][topic_th];?>");
  
  $("#head_full_popup_icon" ).html('<i class="fa <?=$arr[project][logo_code]?>" style="font-size:30px; color:<?=$arr[project][text_color]?>; "></i>');
  
  
  

  </script> 
 
 
 <div class="div-all-shop" style="padding-bottom:10px; padding-top:10px; border-bottom:0px solid #DADADA;      <? if( $arr[project][id]==11){?>
 
 
 opacity:0.4;   pointer-events: none;   
 
 <? } ?>
 
  
   ">
   <table width="100%" border="0" cellspacing="2" cellpadding="2">
     <tbody>
    <tr  style="display:none">
      <td width="80" valign="top">
        
        
        <table width="100%" border="0" cellspacing="1" cellpadding="1">
          <tbody>
            <tr>
              <td   ><div class="shop-main-icon">  <i class="fa <?=$arr[project][logo_code]?>" style="font-size:50px; color:<?=$arr[project][text_color]?>; "></i></div></td>
              </tr>
            </tbody>
          </table>
        
        
        
         
        
        
        </td>
      <td><table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tbody>
    <tr>
      <td width="120"><span class="font-32" style="color:<?=$main_color?>"><b><? echo $arr[project][topic_th];?></span><br>
        
        
        
        </td>
    </tr>
  </tbody>
</table>

        </td>
    </tr>
    <tr>
      <td colspan="2"><?  include ("mod/shop/list/sub.php");?></td>
    </tr>
  </tbody>
</table>









 
       <script> 
 
 
 
 
 		///
	$('#shop_alert_menu_price_<?=$arr[project][id]?>').click(function(){  
	
 
	

 $( "#load_mod_popup" ).toggle();
 
  var url_load_<?=$arr[project][id]?>= "load_page_mod.php?name=booking/popup&file=price&shop_id=<?=$arr[project][id]?>&lat=<?=$arr[shop][lat]?>&lng=<?=$arr[shop][lng]?>&type=stop";
  
  $('#load_mod_popup').html(load_main_mod);
  $('#load_mod_popup').load(url_load_<?=$arr[project][id]?>); 
  

	  

 	});
 
 
 
 
 
 
 /////////////
  

$('#menu_add_new_booking_<? echo $arr[project][id];?>').click(function(){  


 $( "#alert_show_shopping_place" ).hide();


 $( "#load_mod_popup" ).toggle();
 
	
  var url_load = "load_page_mod.php?name=booking&file=new&driver=<?=$user_id?>&place=<? echo $arr[project][id];?>";
 
 $('#load_mod_popup').html(load_main_mod);
  $('#load_mod_popup').load(url_load); 
 
  });
  
  
  $('#menu_add_new_booking_text_<? echo $arr[project][id];?>').click(function(){  


 


 $( "#load_mod_popup_3" ).toggle();
 
	
  var url_load = "load_page_mod_3.php?name=booking&file=new&driver=<?=$user_id?>&place=<? echo $arr[project][id];?>";
 
 $('#load_mod_popup_3').html(load_main_mod);
  $('#load_mod_popup_3').load(url_load); 
 
  });
  
  
 
 
        </script>
        
</div>
        
 
 <? } ?>
     
     
     
     
     
 
 
 
 
 
 
 
 
 
 
 
<script>
    	$("#close_alert_show_shopping_place").click(function(){   
 
 $( "#alert_show_shopping_place" ).hide();
 
  });

</script><div>