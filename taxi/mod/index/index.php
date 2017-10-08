<div style="background-color:<?=$main_color?>; height:120px; width:110%; margin-left:-10px; margin-left:-10px; margin-top:-10px;   ">
  <br>
  <table width="100%" border="0" cellspacing="2" cellpadding="2" style="margin-left:-5px;">
    <tbody>
      <tr>
        <td align="center" class="font-24"><font color="#FFFFFF">ยินดีต้อนรับเข้าสู่  <font color="#FFFFF"><B>Love and Share </B></font></font> </td>
      </tr>
      <tr  style="display:nones">
     <td align="center" class="font-24"><font color="#FFFFFF">วันที่&nbsp;<?=date("Y-m-d");?>&nbsp;เวลา  <span id="load_data_time"></span>  </font> </td>
      </tr>
      
            <tr>
     <td align="center" class="font-22"><font color="#FFFFFF"> </font> </td>
      </tr>
      
    </tbody>
  </table>
</div>
 


 <script>
 setInterval(function() {
 var url_check_data_time = "load_blank.php?name=load/update&file=time&driver=<?=$driver_id?>";
 
  
 $('#load_data_time').load(url_check_data_time);
 
  
}, 1000); // 60000 milliseconds = one minute
 
	</script>
 
 
 
 <style>
 .icon { padding-top: 20px; } 
p {
	font-family: Arial, Helvetica, sans-serif; font-size:18px;
}
 
 body,td,th {
	font-family: Arial, Helvetica, sans-serif;
}
</style>
<style>
.tool-icon-chat {
  width:100%;border-radius: 20px; 
 }
 
 .tool-icon-text {
 padding:5px; width:100%;border-radius: 15px; height:60px; background-color:#FFFFFF; font-size:32px; color: <?=$maincolor?>;
 }
 
 
 
  .tool-icon-text:hover{  
 padding:5px; width:100%;border-radius: 15px; height:60px; border:2px solid <?=$maincolor?>;background-color:#FFFFFF; box-shadow: 0px 0px 10px #999999; color:<?=$maincolor?>;
 }
 
 .tool-td-chat {
 padding:5px;border-radius: 15px; padding-bottom:10px;
 }
 
 
 
.circle-menu{
    border-radius: 50%; background-color:<?=$main_color?>; display: block;  
 
    padding: 10px; 
    width: 50px;
    height: 50px; 
 
	 color:#FFFFFF;  font-size:24px;  
	border: solid 2px #FFFFFF;
 
    text-align: center;
	vertical-align: middle; 

}

.btn-default{
	
border-radius: 20px;
	
	box-shadow: 0px  0px 5px #DADADA;  border:none;
}




</style>

 





<?

if($data_user_class=='taxi'){
	 
	 
	 $filter="drivername=".$user_id." ";
 } else { 
	 
	 $filter=""; 
	 
 }
	
 
/// $_GET[day]='2017-07-20';

$db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
 
	 $all_work = $db->num_rows('order_booking',"id","$filter");
?>

 
 
 
 
 <div  style="margin-top:-40px; width:100%; padding-right:0px;">
 
 
 <? //=$_SESSION['data_user_type']?>
 
 
 
 <? ///=$data_driver_name?>
 
 
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
    
      <td width="50%" align="center" class="tool-td-chat"> 
        
        
        
        
        
        <center>
        
        
        
        
        <button type="button" class="btn btn-default "  id="index_menu_shopping" style="width:100%;">
          
          
          
          
        <center>
            
          <div  class="circle-menu" style="background-color:#34A0E7"><i class="fa fa-cart-plus"  ></i></div>
            
          <span style="padding-bottom:20px;" class="font-20"> ช็อปปิ้ง</span>
            
            
  </center>
          
  </button>
        
        
      </td>
      <td align="center" class="tool-td-chat"><span data-toggle="tooltip" class="badge"   style="position:absolute; margin-left:10px; border-radius: 20px; height:25px; width:25px; background-color:#FF0000; padding-top:3px;border: solid 2px #FFFFFF; display:none " id="number_bottom_chat3"  ><span  class="font-20" >
        <?=$all_work?>
        </span></span>
        <center>
        <button type="button" class="btn btn-default "  id="index_menu_food" style="width:100%;">
          <center>
            <div  class="circle-menu" style="background-color:#F7941D"><i class="fa fa-cutlery"  ></i></div>
            <span style="padding-bottom:20px;" class="font-20"> ร้านอาหาร</span>
          </center>
        </button></td>
    
 
    </tr>
    
    <tr>
    
    
      <td width="50%" align="center" class="tool-td-chat"> 
      
      
      
      
            <span data-toggle="tooltip" class="badge"   style="position:absolute; margin-left:10px; border-radius: 20px; height:25px; width:25px; background-color:#ff0000; padding-top:3px;border: solid 2px #FFFFFF; display:NONE " id="number_bottom_chat"  ><span  class="font-20" >0</span> </span>
      
      
      <center>
     
    
 
      <button type="button" class="btn btn-default "  id="index_menu_transfer"   style="width:100%">
      
      
      
      
 


    <center>
  
  <div  class="circle-menu" ><i class="fa fa-car"  ></i></div>
  
 <span style="padding-bottom:20px;" class="font-20">งานรับ-ส่ง </span>
    </center>




</button> 

 
    
    </td>
      <td align="center" class="tool-td-chat"><span data-toggle="tooltip" class="badge"   style="position:absolute; margin-left:10px; border-radius: 20px; height:25px; width:25px; background-color:#ff0000; padding-top:3px;border: solid 2px #FFFFFF;  display:NONE " id="number_bottom_chat2"  ><span  class="font-20" > 0 </span></span>
        <center>
        <button type="button" class="btn btn-default "   id="index_menu_tour"   style="width:100%">
          <center>
            <div  class="circle-menu"  style="background-color:#8DC63F"><i class="fa fa-suitcase"  ></i></div>
            <span style="padding-bottom:20px;" class="font-20">จองทัวร์ </span>
          </center>
        </button></td>
    
    </tr>
    <tr>
      <td align="center" class="tool-td-chat"><center>
        <button type="button" class="btn btn-default "   id="index_menu_income"   style="width:100%">
          <center>
            <div  class="circle-menu"  style="background-color:#34A0E7"  > <i class="demo-icon icon-money-bag" style="margin-left:-3px;"></i></div>
            <span style="padding-bottom:20px;" class="font-20">รายรับ</span>
          </center>
      </button></td>
      <td align="center" class="tool-td-chat">
      
 
 
        <button type="button" class="btn btn-default "  id="index_menu_payment"   style="width:100%">
        <center>
          <div  class="circle-menu" style=" background-color:#FF0000"><i class="demo-icon icon-money-payment" style="margin-left:-5px; font-size:28px;"></i> </div>
          <span style="padding-bottom:20px;" class="font-20">รายจ่าย</span>
          </center>
        </button>
        
        
        
 </td>
    </tr>
    <tr>
      <td width="50%" align="center" class="tool-td-chat">   
        
        <button type="button" class="btn btn-default "  id="index_menu_account"   style="width:100%">
 
      <center>
  
  <div  class="circle-menu" style=" background-color:#00AEEF"><i class="fa fa-user"   ></i></div>
  
 <span style="padding-bottom:20px;" class="font-20">บัญชีของฉัน</span>
      </center>

  
  </button>  
        
 
        
        
        
        
        
        
      </td>
      <td width="50%" align="center" class="tool-td-chat">
      
      <button type="button" class="btn btn-default "  id="index_menu_setting"   style="width:100%">
 


  <center>
  
  <div  class="circle-menu" ><i class="fa fa-cog"  ></i></div>
  
 <span style="padding-bottom:20px;" class="font-20">เครื่องมือช่วยเหลือ</span>
</div>   

</center>



 </button></td>
    </tr>
    
    
  </tbody>
</table>


 <div>









<table width="100%" border="0" cellspacing="2" cellpadding="2" style="padding:5px; display:none" >
  <tbody>
     <tr>
       <td colspan="2"></td>
     </tr>
     
     <tr>
       <td width="120" class="font-22"><strong>ชื่อ-นามสกุล</strong></td>
       <td class="font-22"><?=$arr[web_user][name]?> (<?=$arr[web_user][nickname]?>)</td>
     </tr>
     
     
     <tr style="display:none">
       <td width="120" class="font-22"><strong>ชื่อเล่น</strong></td>
       <td class="font-22">s</td>
     </tr>
     
          <tr>
       <td width="120" class="font-22"><strong>โทรศัพท์</strong></td>
       <td class="font-22">
	   
	   <a href="tel:<?=$arr[web_user][phone]?>">
	   
	   <?=$arr[web_user][phone]?>
       </a>
       </td>
     </tr>
          <tr>
            <td width="120" class="font-22"><strong>ชื่อเข้าระบบ</strong></td>
            <td class="font-22"> 
              <b><?=$arr[web_user][username]?>
 </td>
          </tr>
          <tr>
            <td class="font-22"><strong>รหัสผ่าน</strong></td>
            <td class="font-22"> 
              <?=$arr[web_user][password]?><b>
            </td>
          </tr>
          
          
 
 
   </tbody>
 </table>

<br>


 


 
 	<? 
///// head
///include "load/popup/place.php" ;
 ?>


 





 
<script>
			 
  
 
 
 
 
$('#index_menu_shopping').click(function(){  
 
 $("#load_mod_popup" ).toggle();
 
  var url_load= "load_page_mod.php?name=shop&file=main&id=1&lat=<?=$arr[shop][lat]?>&lng=<?=$arr[shop][lng]?>&type=stop";
  
  $('#load_mod_popup').html(load_main_mod);
 
  $('#load_mod_popup').load(url_load); 
 
 	});
 
  
  
  
  
 $('#index_menu_history_shopping').click(function(){  
  
 $( "#load_mod_popup_2" ).toggle();
 
  var url_load= "load_page_mod_2.php?name=booking&file=all&shop_id=<?=$arr[project][id]?>&lat=<?=$arr[shop][lat]?>&lng=<?=$arr[shop][lng]?>&type=stop";
  
  $('#load_mod_popup_2').html(load_main_mod);
  /// $('#load_mod_data').html(load_main_mod);
   
   
  $('#navload_topic').html('ไปที่หน้าแรก');
  
  $('#load_mod_popup_2').load(url_load); 
  
 
 });
 
 ///// food
 
 $('#index_menu_food').click(function(){  
 
 $("#load_mod_popup" ).toggle();
 
  var url_load= "load_page_mod.php?name=shop&file=main&id=2&lat=<?=$arr[shop][lat]?>&lng=<?=$arr[shop][lng]?>&type=stop";
  
  $('#load_mod_popup').html(load_main_mod);
 
  $('#load_mod_popup').load(url_load); 
 
 
 	});
	
	
 
 $('#index_menu_history_food').click(function(){  
 
  alert('กำลังจะเปิดให้บริการ');
 
 	});
 
 
  $('#index_menu_transfer').click(function(){  
 
  alert('กำลังจะเปิดให้บริการ');
 
 	});
 
 
  
  $('#index_menu_history_transfer').click(function(){  
 
  alert('กำลังจะเปิดให้บริการ');
 
 });
 
 
 
 
   $('#index_menu_tour').click(function(){  
 
  alert('กำลังจะเปิดให้บริการ');
 
 	});
 
 
  
  $('#index_menu_history_tour').click(function(){  
 
  alert('กำลังจะเปิดให้บริการ');
 
 });
 
 
 ////// income 
 
 $('#index_menu_income').click(function(){  
  
 $( "#load_mod_popup_2" ).toggle();
 
  var url_load= "load_page_mod_2.php?name=booking/account&file=index&shop_id=<?=$arr[project][id]?>&lat=<?=$arr[shop][lat]?>&lng=<?=$arr[shop][lng]?>&type=stop";
  
  $('#load_mod_popup_2').html(load_main_mod);
  /// $('#load_mod_data').html(load_main_mod);
   
   
  $('#navload_topic').html('ไปที่หน้าแรก');
  
  $('#load_mod_popup_2').load(url_load); 
  
 
 });
 
   $('#index_menu_payment').click(function(){  
 
  alert('กำลังจะเปิดให้บริการ');
 
 });
 
 
  $('#index_menu_account').click(function(){  
 
  alert('กำลังจะเปิดให้บริการ');
 
 });
 
 
   $('#index_menu_setting').click(function(){  
 
  alert('กำลังจะเปิดให้บริการ');
 
 });
 
 
 
 
					
 </script>  
 
 
 
 
 
 
     <div id="tab_chk_qr" class="tab-pane fade">
	
   <?
 //include("mod/load/show/step/qr_scan.php");
  /// include("mod/load/show/step/index.html");
 ?>
    </div>
 
             