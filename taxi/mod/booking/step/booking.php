
<form method="post"  id="edit_form" name="edit_form">


<style>


.step-booking {
    border-radius: 50%; background-color: #FF9933;
 
    padding: 10px; 
    width: 60px;
    height: 60px; 
	text-align: justify; color:#FFFFFF;   font-size:30px; font-weight:bold; margin-top:-10px; text-align:center;
	border: solid 4px #FFFFFF;
	 box-shadow: 0 0 0px 0px #E8E6E6; position:absolute;   
	   background: #f39c12 !important;
 
 
  color: #fff;
  
}


.step-booking-small {
    border-radius: 50%; background-color:<?=$main_color?> ;
 
    padding: 5px; 
    width: 40px;
    height: 40px; 
	text-align: justify; color:#FFFFFF;   font-size:20px; font-weight:bold;  text-align:center; vertical-align: middle;
	border: solid 4px #FFFFFF;
 
	   background:  <?=$main_color?> !important;
	   

	   
	   
 
  
  color: #fff;
}



.step-booking-small-no {
    border-radius: 50%; background-color: #FF9933;
 
    padding: 5px; 
    width: 40px;
    height: 40px; 
	text-align: justify; color:#FFFFFF;   font-size:20px; font-weight:bold;   text-align:center;
	border: solid 4px #FFFFFF;
 
	   background: #999999 !important;
 
 
  color: #fff;
}



.step-booking-active {
 
	text-align: justify; color:#FFFFFF;   
	border: solid 1px <?=$main_color?>; background-color:#F6F6F6;
 
  color: #fff;
  
  	    border-radius: 10px; margin-bottom:10xp;
 
}

.step-booking-active-no {
 
	text-align: justify; color:#FFFFFF;   
	border: solid 1px #dadada; 
 
  color: #fff;
  
  	    border-radius: 10px;
 
}





</style>



<script>

 $(".text-topic-action-mod-3" ).html("ช็อปปิ้ง > ดิวตี้ฟรี <? ///=$arr[shop][topic_th]?>");
 

 
  </script> 
 
 <?
 		$db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
		$res[shop] = $db->select_query("SELECT * FROM shopping_product  WHERE id='".$_GET[place]."' ");
		$arr[shop] = $db->fetch($res[shop]);
		
 
		$res[shopmain] = $db->select_query("SELECT * FROM shopping_product_main  WHERE id='".$arr[shop][main]."' ");
		$arr[shopmain] = $db->fetch($res[shopmain]);
		
		$res[shopsub] = $db->select_query("SELECT * FROM shopping_product_main  WHERE id='".$arr[shop][main]."' ");
		$arr[shopsub] = $db->fetch($res[shopsub]);
		

		$arr[project][program]=$_GET[place];
 
 ?>
 



  <input name="program" type="hidden"  required="true" class="form-control" id="program"    value="<?=$arr[shop][id]?>" >


<div class="<?= $coldata?>" id="show_step_detail" style="margin-top:50px;padding:5px;   border-radius: 10px; border: 0px solid #ddd;background-color:#Fff;  margin-bottom: 0px; box-shadow: 0px  0px 5px #DADADA  ; ">


<script>
        $("#main_edit_booking_step_1").click(function(){ 
		
		
		$( "#time_number" ).addClass('border-alert');
//	 $( "#load_mod_popup_4" ).toggle();
   
       $("#back_booking_step_2").click();
		
		});
 
 </script>
 
 
 
  <script>
        $("#main_edit_booking_step_2").click(function(){ 
 

		
 // $( "#load_mod_popup_4" ).toggle();
   
       $("#back_booking_step_3").click();
		
		});
 
 
 </script>
 
 
   <script>
        $("#main_edit_booking_step_3").click(function(){ 
		
				 
$( "#adult_number" ).addClass('border-alert');
$( "#child_number" ).addClass('border-alert');
		
		 $("#submit_booking_step_2").click();
		 


		 
		 
	  
		
	// $( "#load_mod_popup_4" ).toggle();
	 
	 

   
 
		
		});
 
 
 </script>
 
 
 
<? 

date_default_timezone_set('UTC'); 

// echo date('H:i:s');


?>




<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tbody>
    <tr>
      <td>
 
      
      <div id="small_step_1" class="step-booking-active" style=" padding-top:0px; " >
      
      <table width="100%" border="0" cellspacing="2" cellpadding="2" >
        <tbody>
          <tr>
            <td width="45" valign="middle"><div class="step-booking-small"  id="number_step_1" >1</div></td>
            <td class="font-26">เวลาเดินทาง 

            
            <span  id="detail_step_1" class="font-22"></span><span  id="to_detail_step_1" class="font-22"></span>
            
            
            
            </td>
            <td width="70" valign="top" class="font-24"><span class="font-24" id="main_edit_booking_step_1" style="display:none;color:#FF0000"><i class="    fa fa-edit"></i>&nbsp;แก้ไข</td>
          </tr>
        </tbody>
      </table>
      
        </div>
      
      </td>
    </tr>
    <tr>
      <td>
      
      <div id="small_step_2" class="step-booking-active-no" style=" margin-top:5px;" >
      
      
            <table width="100%" border="0" cellspacing="2" cellpadding="2">
        <tbody>
          <tr>
            <td width="45"><div class="step-booking-small-no" id="number_step_2">2</div></td>
            <td class="font-26">ข้อมูลรถ
            
                        <div  id="detail_step_2" class="font-22"></div>
            
            
            </td>
            <td width="70" valign="top" class="font-24"><span class="font-24" id="main_edit_booking_step_2" style="display:none;color:#FF0000"><i class="    fa fa-edit"></i>&nbsp;แก้ไข</td>
          </tr>
        </tbody>
      </table>
      
      
      </div>
      
      
      </td>
    </tr>
    <tr>
      <td>
      
             <div id="small_step_3" class="step-booking-active-no" style=" margin-top:5px;" >
      
            <table width="100%" border="0" cellspacing="2" cellpadding="2">
        <tbody>
          <tr>
            <td width="45"><div class="step-booking-small-no" id="number_step_3">3</div></td>
            <td class="font-26">จำนวนแขก 
            
              <span  id="detail_step_3" class="font-22"></span>
            
            
            </td>
            <td width="70" valign="top" class="font-24"><span class="font-24" id="main_edit_booking_step_3" style="display:none;color:#FF0000"><i class="    fa fa-edit"></i>&nbsp;แก้ไข</td>
          </tr>
        </tbody>
      </table>
       </div>
      
      
      
      
      
      </td>
    </tr>
  </tbody>
</table>






</div>







<div class="<?= $coldata?>" id="show_time_detail" style="margin-top:20px;padding:5px;   border-radius: 10px; border: 1px solid #ddd;background-color:#Fff;  margin-bottom: 0px; box-shadow: 0px  0px 5px #DADADA  ; ">
 


<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="65"><div class="step-booking">1</div></td>
      <td><div class="font-28" style="color:<?=$main_color?>"><b>ใช้เวลาเดินทาง</div></td>
    </tr>
  </tbody>
</table>






 <div>

 

<table width="100%" border="0" cellspacing="1" cellpadding="1" style="margin-top:-10px;">
  <tbody>
    <tr>
      <td width="60%"> 
             <div class="topicname" style="margin-left:60px;">วันที่    &nbsp; <span class="font-28">     <?=date('Y-m-d');?></span></div>
        <div class="input-group date" style="z-index:0">
        
 
     

        
          <input type="text" class="form-control" value="<?=date('Y-m-d');?>"  name="transfer_date_new" id="transfer_date_new"    style="background-color:#FFFFFF; height:40px; font-size:16px; display:none " readonly>
        
        </div>
 </td>
      
    </tr>
    <tr>
      <td>
      
      
      
      <table width="100%" border="0" cellspacing="0" cellpadding="0"  style="margin-top:0px;">
        <tbody>
          <tr style="display:none">
            <td><div class="topicname" >เวลาถึงโดยประมาณ</div></td>
          </tr>
          <tr>
            <td><table width="100%" border="0" cellspacing="1" cellpadding="1">
              <tbody>
                <tr>
                  <td width="50%">

  
 
 
 
     
                  
                 <div name="time_number" id="time_number" style="width:100%; font-size:28px; padding:0px; height:50px; font-weight:bold; padding:5px;" class="border-alert" >
                 
                 <span style="color:#333333;"  >เลือกเวลาเดินทาง</span></div>
                  
                  
                     <input  name="time"  type="hidden" class="form-control"  id="time" value="0"   >     
                     
                      <input  name="time_to"  type="hidden" class="form-control"  id="time_to" value="0"   >   
                     
                                        
                      <div  id="show_to_times" style="display:none">
              <div>
              
              <table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tbody>
    <tr>
      <td width="180"> <div class="topicname">เวลาถึงโดยประมาณ</div></td>
      <td><div class="font-24" id="text_to_time" style="color:<?=$main_color?>"></div></td>
    </tr>
  </tbody>
</table>

              
              
              
              
              <input name="airout_h" type="hidden"    id="airout_h"    value="<?=$time_all?>" >  
              
              <input name="airout_m" type="hidden"    id="airout_m"    value="<?=$time_all?>" >  
              
              
               <input name="ondate_time" type="hidden"    id="ondate_time"    value="<?=$time_all?>" >  
 

 
   		      </div> 
              
              
<div  id="show_to_times_alert" style="display:none">

</div>
              
              
              
                
  </div>    
                  
                  </td>
                </tr>
              </tbody>
            </table></td>
          </tr>
        </tbody>
      </table></td>
    </tr>
  </tbody>
</table>
 

  </div> 
  
  
   <table width="100%"  border="0" cellspacing="0" cellpadding="0">
   
  <tr>
    <td align="right"     > <div class="border-alert"  id="div_submit_booking_step_1"  style="width:100%; display:none "><button id="submit_booking_step_1"   type="button" class="btn  btn-primary " style="width:100%; display:none "><span class="font-28"><i class="    fa fa-chevron-circle-right"></i>&nbsp;ขั้นตอนต่อไป</button></div></td>
    </tr>
</table>
</div>


 
 
  
<div class="<?= $coldata?>" id="show_transfer_detail" style="margin-top:20px;padding:5px;   border-radius: 10px; border: 1px solid #ddd;background-color:#Fff;  margin-bottom: 0px; box-shadow: 0px  0px 5px #DADADA  ; display:none  ">
  
  
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody>
    <tr>
      <td width="65"><div class="step-booking">2</div></td>
      <td><div class="font-28" style="color:<?=$main_color?>"><b>ข้อมูลรถรับส่ง</div>
      
    <span class="font-22">  เลือกรถรับส่ง</span>
      
      </td>
    </tr>
  </tbody>
</table>

 
 
 

 
 <div style="margin-top:-30px;" id="show_car_detail">
 
                      <?   include ("mod/booking/load/booking/car.php");   ?>
          </div>            
                      
                 
         <table width="100%"  border="0" cellspacing="0" cellpadding="0" id="button_show_car_detail" style="display:none">
  <tr >
    <td width="100%"  style="display:none" ><button type="button"  id="back_booking_step_2" class="btn btn-block btn-default"  style="width:100%px "><span class="font-28"><i class="    fa fa-chevron-circle-left"></i>&nbsp;ย้อนกลับ</button></td>
    <td width="100%"  >
    
    <div class="border-alert"  id="div_submit_booking_step_2"  style="width:100%; display:none ">
    
     <button id="submit_booking_step_2" type="button" class="btn  btn-primary" style="width:100% "><span class="font-28"><i class="    fa fa-chevron-circle-right"></i>&nbsp;ขั้นตอนต่อไป</button></div>
     
     
     </td>
    
    </tr>
</table>
                      
  </div>
  
 
<div class="<?= $coldata?>" id="show_guest_detail" style="margin-top:20px;padding:5px;   border-radius: 10px; border: 1px solid #ddd;background-color:#Fff;  margin-bottom: 0px; box-shadow: 0px  0px 5px #DADADA  ; display:none ">
                          
  
<table width="100%" border="0" cellspacing="0" cellpadding="0" >
  <tbody>
    <tr>
      <td width="65"><div class="step-booking">3</div></td>
      <td><div class="font-28" style="color:<?=$main_color?>"><b>จำนวนแขก</div></td>
    </tr>
  </tbody>
</table>
                          
 <div >        
                     
                     
                     <table width="80%" border="0" cellspacing="1" cellpadding="5" style="margin-top:-5px;"  align="center">
  <tbody>
    <tr>
      <td width="50%" align="center">                   
                  <div class="topicname"><center>ผู้ใหญ่</div>
                  
                  <div name="adult_number" id="adult_number" style="width:100%; font-size:40px;padding-top:5px;  height:60px; font-weight:bold" class="border-alert" >0</div>
                  
                  
                  
                  
                   <input  name="adult"  type="hidden" class="form-control"  id="adult" value="0"   > 
              
                <input  name="child"  type="hidden" class="form-control"  id="child" value="0"   >      
                
                 <input  name="pax"  type="hidden" class="form-control"  id="pax" value="0"   >      
                
                    
		         </td>
      <td width="50%" align="center"> 
        <div class="topicname"><center>เด็ก</div>
        
         <div name="child_number" id="child_number" style="width:100%; font-size:40px; padding-top:5px; height:60px; font-weight:bold" class="border-alert" >0</div>
      </td>
        </tr>
  </tbody>
</table>

 
 

   <div style="padding-top:10px; padding-bottom:10px; color:#FF0000; text-align:left" class="font-22"><center>
       ผู้ลงทะเบียนต้องอายุ 18 ปี ขึ้นไป 
           </div>       
           
           

                            </div> 
                            
                            
                            
                            
                      
         <table width="100%"  border="0" cellspacing="0" cellpadding="0" id="button_show_guest_detail" style="display:none">
  <tr>
    <td  width="100%"  style="display:none"><button type="button"  id="back_booking_step_3" class="btn btn-block btn-default"  style="width:100%px "><span class="font-28"><i class="    fa fa-chevron-circle-left"></i>&nbsp;ย้อนกลับ</button></td>
    <td width="100%"  >
    
<div class="border-alert"  id="div_submit_booking_step_3"  style="width:100%; display:none ">
     <button id="submit_booking_step_3" type="button" class="btn  btn-primary" style="width:100% "><span class="font-28"><i class="    fa fa-chevron-circle-right"></i>&nbsp;ขั้นตอนถัดไป</button></div></td>
    
    </tr>
</table>
                    
                    
                    
                    
                      
  </div> 
                   
            
            
   <div  id="send_booking_data"></div>
              
              
<p>&nbsp;</p>
<p>
  <script>
   $("#submit_booking_step_1").click(function(){ 
   
   
      $("#main_edit_booking_step_1").show();  
   
   
   
if(document.getElementById('time').value==0) {
	
 
 
document.getElementById('time_number').click() ; 




 
/// $("#show_transfer_detail").hide();





 
return false ;
}
   
   
   
   
   
   
   
 $("#show_transfer_detail").fadeIn(1000);
 
  $("#show_time_detail").hide();
	 
 $("#show_guest_detail").hide();
 
 ///
  $("#small_step_1").removeClass("step-booking-active");
  
   $("#small_step_1").addClass("step-booking-active-no");
  
  $("#small_step_2").addClass("step-booking-active");
  
  
  
  $("#number_step_2").removeClass("step-booking-small-no");
  
   $("#number_step_2").addClass("step-booking-small");
   
   
   
   




   
if(document.getElementById('all_car').value==1) {
 
  $("#submit_booking_step_2").click();
  
 
	  
	    $("#main_edit_booking_step_2").show();  
		
		
		$("#submit_booking_step_2").show();  
		
		$("#div_submit_booking_step_2").show();  
	  
 
/// $("#show_transfer_detail").hide();
 
}
 
 
 

 

 
  
   });
   
   
   
   

   
   
   
   
   
   
   
 $("#submit_booking_step_2").click(function(){ 
   
   
   if(document.getElementById('check_all_car').value < 1 ) {
	   
alert('กรุณาเพิ่มข้อมูลรถ'); 
 
 $("#menu_add_new_car_booking").click();
   
   } else {
   





/*
   
if(document.getElementById('car_type').value=="") {
alert('กรุณาเลือกประเภทรถ'); 
 
document.getElementById('car_type').focus() ; 

 
 
return false ;
}







if(document.getElementById('car_color').value=="") {
alert('กรุณาเลือกสีรถ'); 
 
document.getElementById('car_color').focus() ; 

return false ;
}



if(document.getElementById('car_plate').value=="") {
alert('กรุณาหมายเลขทะเบียนรถ'); 
 
document.getElementById('car_plate').focus() ; 


return false ;
}

    */
   
   ///
   
   
   
   
  $("#show_transfer_detail").hide();
 
  $("#show_time_detail").hide();
	 
 $("#show_guest_detail").fadeIn(1000);
 
 
 
 
 $("#small_step_1").removeClass("step-booking-active");
 
 $("#small_step_2").removeClass("step-booking-active");
   
 $("#small_step_2").addClass("step-booking-active-no");
   
   
  
  $("#small_step_3").addClass("step-booking-active");
  
  
  
  $("#number_step_3").removeClass("step-booking-small-no");
  
   $("#number_step_3").addClass("step-booking-small");
 
 
    $("#time_number").removeClass("step-booking-activel");


  ///
  
 $("#main_edit_booking_step_2").show();  

 
   }
 
 
 
 
  
   });
   
   
   
   
   
   
   
  
 
 
 
       $("#back_booking_step_2").click(function(){ 
   
 $("#show_transfer_detail").hide();
 
 $("#show_time_detail").fadeIn(1000);
	 
 $("#show_guest_detail").hide();
  
  
  
   
  
  
   $("#small_step_2").removeClass("step-booking-active");
 
      $("#small_step_3").removeClass("step-booking-active");
	  
	   $("#small_step_3").addClass("step-booking-active-no");
   
  
  $("#small_step_1").addClass("step-booking-active");
  
  
  
  $("#number_step_2").removeClass("step-booking-small-no");
  
   $("#number_step_1").addClass("step-booking-small");
  
 
   });
   
   
   
   
   
  $("#back_booking_step_3").click(function(){ 
   
  $("#show_transfer_detail").fadeIn(1000);
 
  $("#show_time_detail").hide();
	 
 $("#show_guest_detail").hide();
 
 
 
   $("#small_step_1").removeClass("step-booking-active");
   
 $("#small_step_3").removeClass("step-booking-active");
   
  
  $("#small_step_2").addClass("step-booking-active");
  
  
  $("#main_edit_booking_step_3").show();  
 
  
   });
   
   
   
   </script>
</p>           
              
              
  </form>
  
  
  
  
  
  
  <script>
/// check login

$("#submit_booking_step_2s").click(function(){ 

 

 
});

</script>
  
  
   
  
  
  
  
  
              
              
<script>

$("#time_number").click(function(){ 

 
 $( "#load_mod_popup_4" ).toggle();
 var url_load_adult = "load_page_mod_4.php?name=booking/step/load&file=time&type=adult";
	
 url_load_adult =url_load_adult+"&id="+document.getElementById('time').value;
	
 
  $('#load_mod_popup_4').html(load_main_mod);
   $('#load_mod_popup_4').load(url_load_adult); 
  

});








$("#adult_number").click(function(){ 

 
 $( "#load_mod_popup_4" ).toggle();
 var url_load_adult = "load_page_mod_4.php?name=booking/step/load&file=adult&type=adult";
	
 url_load_adult =url_load_adult+"&id="+document.getElementById('adult').value;
	
 
  $('#load_mod_popup_4').html(load_main_mod);
   $('#load_mod_popup_4').load(url_load_adult); 
  

});



$("#child_number").click(function(){ 

 $( "#load_mod_popup_4" ).toggle();
 var url_load_adult = "load_page_mod_4.php?name=booking/step/load&file=child&type=adult";
	
 url_load_adult =url_load_adult+"&id="+document.getElementById('child').value;
	
 
  $('#load_mod_popup_4').html(load_main_mod);
   $('#load_mod_popup_4').load(url_load_adult); 
  

});



 

$("#submit_booking_step_3").click(function(){ 


$("#main_edit_booking_step_3").show();  



 
if(document.getElementById('adult').value=="0" && document.getElementById('child').value=="0" ) {
alert('กรุณาเลือกจำนวนผู้ใหญ่หรือเด็กอย่างน้อย 1 คน'); 
document.getElementById('adult').focus() ; 

document.getElementById('child').focus() ; 
return false ;
}


/*

 $.post('go.php?name=booking&file=savedata&action=add&type=driver&driver=<?=$arr[web_user][id]?>',$('#edit_form').serialize(),function(response){
   $('#send_booking_data').html(response);
  });


*/
 
 $( "#load_mod_popup_4" ).toggle();
 
  var url_load_finish= "load_page_mod_4.php?name=booking/step/load&file=finish&lat=<?=$arr[shop][lat]?>&lng=<?=$arr[shop][lng]?>&type=stop";
  
  url_load_finish =url_load_finish+"&adult="+document.getElementById('adult').value;
   url_load_finish =url_load_finish+"&child="+document.getElementById('child').value;
    url_load_finish =url_load_finish+"&time="+document.getElementById('time').value;
	 url_load_finish =url_load_finish+"&car="+document.getElementById('check_use_car_id').value;
	  url_load_finish =url_load_finish+"&airout_h="+document.getElementById('airout_h').value;
	   url_load_finish =url_load_finish+"&airout_m="+document.getElementById('airout_m').value;
	     url_load_finish =url_load_finish+"&car_color="+document.getElementById('car_color').value;
	   
  
  

  
  
  $('#load_mod_popup_4').html(load_main_mod);
  $('#load_mod_popup_4').load(url_load_finish); 
  

 



 

 

/*


if(document.getElementById('guest_name').value==""  &&  document.getElementById('check_photo_passport').value=="") {
alert('กรุณากรอกชื่อแขกหรือถ่ายภาพพาสปอร์ต'); 
document.getElementById('guest_name').focus() ; 
return false ;
}


  if(document.getElementById('nation').value=="") {
alert('กรุณาเลือกสัญชาติ'); 
document.getElementById('nation').focus() ; 
return false ;
}

  if(document.getElementById('payment_type').value=="") {
alert('กรุณาเลือกช่องทางการรับเงิน'); 
document.getElementById('payment_type').focus() ; 
return false ;
}
 
 
 */
 /*
 
    swal({
		title: "<font style='font-size:28px'><b> คุณแน่ใจหรือไม่",
		text: "<font style='font-size:22px'>ว่ากรอกข้อมูลถูกต้อง",
	type: "info",
		showCancelButton: true,
		confirmButtonColor: '#5BC0DE',
		confirmButtonText: 'แน่ใจ',
		cancelButtonText: "ไม่แน่ใจ",
		closeOnConfirm: true,
		closeOnCancel: true,
		html: true
	},
	function(isConfirm){
    if (isConfirm){
 
    
 $.post('go.php?name=booking&file=savedata&action=add&type=driver&driver=<?=$arr[web_user][id]?>',$('#edit_form').serialize(),function(response){
   $('#send_booking_data').html(response);
  });
  
 
  
 ////$("#load_mod_popup" ).toggle();
  
  
  
  //$('.loader').show();
	var date_report = $("#date_report").val();
	//alert(date_report);
	
  $('#load_booking_data').html(load_main_icon_big);
	
	//var url_place_th = "go.php?name=load/all&file=all&server=th&day="+$("#date_report").val()+"";
	var url = "go.php?name=booking/load&file=work_all&find=day&day="+$("#date_report").val()+"";
	 
 
	 $('#load_booking_data').load(url); 
	
  
	//  alert('dd');
    } else {
  //    swal("Cancelled", "", "error");
  
  
  
  
    }
	
	
	});

 
 
 
 

  
 //// $("#send_booking_data").load('load.php');
  */
  
 });
 
 
 
 

 
 
 
 
</script>  




<br>
<br>
<br>
<br>
<br>







 