<div style="background-color:<?=$main_color?>; height:120px; width:110%; margin-left:-10px; margin-left:-10px; margin-top:-10px;   ">
  <br>
  <table width="100%" border="0" cellspacing="2" cellpadding="2" style="margin-left:-5px;">
    <tbody>
      <tr>
        <td align="center" class="font-22"><font color="#FFFFFF">ยินดีต้อนรับเข้าสู่  <font color="#FFFFF"><B>we love taxi </B></font>แอพพลิเคชั่น</font> </td>
      </tr>
      <tr>
     <td align="center" class="font-22"><font color="#FFFFFF">รับ-ส่งแขก ใช้งานง่าย และระบบที่ทันสมัย  </font> </td>
      </tr>
      
            <tr>
     <td align="center" class="font-22"><font color="#FFFFFF"> </font> </td>
      </tr>
      
    </tbody>
  </table>
</div>




 

 
 
 
 
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

 
 
 
 
 <div  style="margin-top:-50px; width:100%; padding-right:0px;">
 
 
 <? //=$_SESSION['data_user_type']?>
 
 
 
 <? ///=$data_driver_name?>
 
 
 <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
    
      <td width="50%" align="center" class="tool-td-chat"> <center>
      
 
      
 
  <button type="button" class="btn btn-default "  id="index_menu_add_new_booking" style="width:100%;">
  
  
   

  <center>
  
  <div  class="circle-menu" style="background-color:#F7941D"><i class="fa fa-cart-plus"  ></i></div>
  
 <span style="padding-bottom:20px;" class="font-20"> ไปช็อปปิ้ง</span>
    

</center>

</button>
  
 
    </td>
    
 
      <td width="50%" align="center" class="tool-td-chat"> 
      
      <span data-toggle="tooltip" class="badge"   style="position:absolute; margin-left:10px; border-radius: 20px; height:25px; width:25px; background-color:#F7941D; padding-top:3px;border: solid 2px #FFFFFF; " id="number_bottom_chat"  ><span  class="font-20" ><?=$all_work?></span> </span>
      
      
      
      <center>
        <a href="?name=booking&file=all" >
          
          
        <button type="button" class="btn btn-default "   id="index_menu_booking_all"  style="width:100%">
        

  
  
    <center>
  
  <div  class="circle-menu"><i class="fa fa-street-view"  ></i>  </div>
  
 <span style="padding-bottom:20px;" class="font-20"> รับงาน  </span>
    </center>
  
  
  
  
  
   </button></a>
        
        
      </td>
    
 
    </tr>
    
    <tr>
    
    
      <td width="50%" align="center" class="tool-td-chat"> 
      
      
      
      
            <span data-toggle="tooltip" class="badge"   style="position:absolute; margin-left:10px; border-radius: 20px; height:25px; width:25px; background-color:#ff0000; padding-top:3px;border: solid 2px #FFFFFF; " id="number_bottom_chat"  ><span  class="font-20" ><?=$all_work?></span> </span>
      
      
      <center>
     
    
 
      <button type="button" class="btn btn-default "   id="index_menu_booking_today_all"   style="width:100%">
      
      
      
      
 


    <center>
  
  <div  class="circle-menu"  style="background-color:#8DC63F"><i class="fa fa-car"  ></i></div>
  
 <span style="padding-bottom:20px;" class="font-20">งานทั้งหมด </span>
    </center>




</button> 

 
    
    </td>
    
      <td width="50%" align="center" class="tool-td-chat">  <a href="?name=user" >
        
        <button type="button" class="btn btn-default "  id="index_menu_user_profile"   style="width:100%">
 
      <center>
  
  <div  class="circle-menu" style=" background-color:#00AEEF"><i class="fa fa-user"   ></i></div>
  
 <span style="padding-bottom:20px;" class="font-20">ข้อมูลส่วนตัว </span>
</div>   

</center>

  
  </button> </a>  
        
        
      </td>
    
    </tr>
    <tr>
      <td width="50%" align="center" class="tool-td-chat">   
      <button type="button" class="btn btn-default "   id="index_menu_user_payment"  style="width:100%">
 


  <center>
  
  <div  class="circle-menu"  style="background-color:#0072BC"><i class="fa fa-folder-open"  ></i></div>
  
 <span style="padding-bottom:20px;" class="font-20">รายรับ</span>
</div>   

</center>

</button> 




</td>
      <td width="50%" align="center" class="tool-td-chat">
      
      <button type="button" class="btn btn-default "  id="index_menu_user_logout"   style="width:100%">
 


  <center>
  
  <div  class="circle-menu" style="background:#FF0000"><i class="fa fa-sign-out"  ></i></div>
  
 <span style="padding-bottom:20px;" class="font-20">ออกจากระบบ</span>
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


<div class="font-24"><center><b>สถานที่สำหรับพาแขกไปช็อปปิ้ง</b></div>


 
 	<? 
///// head
include "load/popup/place.php" ;
 ?>


 







<script>
		

		
		
		
		$("#index_menu_user_logout").click(function(){ 
		
		
 
 
  
	   swal({
		title: "<font style='font-size:28px'><b> คุณแน่ใจหรือไม่",
		text: "ว่าต้องการออกจากระบบ",
		type: "error",
		showCancelButton: true,
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'ใช่',
		cancelButtonText: "ไม่ใช่",
		closeOnConfirm: true,
		closeOnCancel: true,
		html: true
	},
	function(isConfirm){
    if (isConfirm){
	 
	
swal("ออกจากระบบสำเร็จ", "success");

window.location = "signin.php";;
 
    
   
	//  alert('dd');
    } else {
      swal("Cancelled", "", "error");
    }
	});
	   
	    

});
		
		
		 
		</script>
        
<script>
			 
	////  
			 
 
$('#index_menu_add_new_booking').click(function(){  

 
 
/// $( ".outer-content-wait" ).toggle();
 $( "#alert_show_shopping_place" ).toggle();
	
 ///var url_chat_main = "new_driver.php";
 
 
 $('#load_mod_popup').html(load_main_mod);
  $('#load_mod_popup').load(url_chat_main); 
 

 
 	});
 
 
 // index_menu_booking_today
 $('#index_menu_booking_today').click(function(){  
 
 
 //$('#top_menu_today_booking').click();
  $( "#load_mod_popup" ).toggle();
	
  var url_load = "load_page_mod.php?name=booking/load&file=work_all&driver=<?=$user_id?>&day=<? echo date('Y-m-d');?>&type=auto";
 
 $('#load_mod_popup').html(load_main_mod);
  $('#load_mod_popup').load(url_load); 
  
   $("#load_booking_data").html('');
 
 });
					
 </script>  
     <div id="tab_chk_qr" class="tab-pane fade">
	
   <?
 //include("mod/load/show/step/qr_scan.php");
  /// include("mod/load/show/step/index.html");
 ?>
    </div>
 
               <script>

 
$('#index_menu_booking_today_all').click(function(){  

 $('#load_mod_data').html(load_main_mod);
	
 $('#load_mod_data').load('go.php?name=booking&file=all');
	
 
      	});
 
 
  
  $('#index_menu_user_payment').click(function(){  

 $('#load_mod_data').html(load_main_mod);
	
 $('#load_mod_data').load('go.php?name=booking/account&file=index');
	
 
      	});
 
					
					</script>      
                             