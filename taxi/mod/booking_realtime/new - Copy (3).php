  
<script src="js/sweet/dist/sweetalert-dev.js"></script>
<link rel="stylesheet" href="js/sweet/dist/sweetalert.css?v=<?=time()?>">



<script>

 $(".text-topic-action-mod-3" ).html("ช็อปปิ้ง > ดิวตี้ฟรี <? ///=$arr[shop][topic_th]?>");
 
 
  </script> 


<?

if($_GET[type]=='edit'){ 



 $db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
$res[project] = $db->select_query("SELECT * FROM  order_booking   WHERE id = '".$_GET[id]."'  order by outdate desc limit  1 ");
	///$res[contact_phone] = $db->select_query("SELECT * FROM  contact_phone WHERE company = '".$arr[product][admin_company]."' ");
 $arr[project] = $db->fetch($res[project]);


$_GET[place]=$arr[project][program]; ?>


<script>

 $(".text-topic-action-mod-3" ).html("แก้ไข <?=$arr[project][invoice]?>");
 
 
  </script> 

<?


} 

 
 
  
		$db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
		$res[shop] = $db->select_query("SELECT * FROM shopping_product  WHERE id='".$_GET[place]."' ");
		$arr[shop] = $db->fetch($res[shop]);
		
 
		$res[shopmain] = $db->select_query("SELECT * FROM shopping_product_main  WHERE id='".$arr[shop][main]."' ");
		$arr[shopmain] = $db->fetch($res[shopmain]);
		
		$res[shopsub] = $db->select_query("SELECT * FROM shopping_product_main  WHERE id='".$arr[shop][main]."' ");
		$arr[shopsub] = $db->fetch($res[shopsub]);
		

		$arr[project][program]=$_GET[place];
?>

 
 



 

 <script>
 		 
  $( document ).ready(function() {
 
 
 $('#btn_chk_booking_place').click(function(){  
  
 //		alert(0); 
 
 
 
 //     var driver= $('#drivername<?=$i;?>').val();
	  
	  
	  /*
 	  
      var url_map = "empty_style.php<?=$load_transfer_action?>/form/load/data&file=map&driver="+driver; 
	  
	  $('#load_data_driver_<?=$arr[product][id].$i;?>').html('<?=$part_img_load_small?>'); 
	  
	     $('#load_data_driver_<?=$arr[product][id].$i;?>').load(url_map); 
		 
		 
		 */
		 
		 
	    });	 
		 


	
	
		 $('#btn_chk_booking_place_gps').click(function(){  
		 
 
 //     var driver= $('#drivername<?=$i;?>').val();
	  
   
	  /*
   
      var url_map = "empty_style.php<?=$load_transfer_action?>/form/load/data&file=map&driver="+driver; 
	  
	  $('#load_data_driver_<?=$arr[product][id].$i;?>').html('<?=$part_img_load_small?>'); 
	  
	     $('#load_data_driver_<?=$arr[product][id].$i;?>').load(url_map); 
 	 
		 */
		 
 

    });


			 
			     });
			 
			 </script>       
                    
 
 
 

<? $coldata="col-md-6";?>
<? $coldata3="col-md-6";?>
 

<div class="box box-default" style="margin-top:50px; "> 





 






 
    
  <div class="box-body" style="padding:auto"> <?  include ("mod/booking_realtime/load/form/place.php");?>       
   

<form method="post"  id="edit_form" name="edit_form">
 			
              <!-- /.box-header -->

        
 
                              
  <div class="row" >
 
  <input name="program" type="hidden"  required="true" class="form-control" id="program"    value="<?=$arr[shop][id]?>" >
            
  <div class="<?= $coldata?>" style="display:none" >

 
  
              <div id="block_pickup_place">
                <div class="topicname">สถานที่รับ&nbsp;&nbsp;</div>
                
                <div>
                
                <ul class="nav nav-tabs" style="padding-top:0px; height:40px; margin-left:10px; border:none">
 
 
       <li    id="btn_chk_booking_place"  class="active" ><a data-toggle="tab" href="#tab_chk_name"><i class="fa  fa-bank"  fa-spin 6x style="color:#666666;font-size:18px;"></i><strong>เลือกสถาน</strong></a ></li>
 
 
 
 
      <li    id="btn_chk_booking_place_gps" ><a data-toggle="tab" href="#tab_chk_name"><i class="fa  fa-map-marker"  fa-spin 6x style="color:#666666;font-size:20px;"></i><strong>&nbsp;ระบุตำแหน่ง</strong></a ></li>
      
 
  
    

 
   

	
 
  </ul>
  
            </div>      
            
 
            <div id="load_select_place">         
                
                
  <input name="pickup_place" type="text"  required="true" class="form-control" id="pickup_place" style="padding:4px 2px;width:97%;" onkeypress="PasswordEnter(this,event)" >
       
                </div>
                
                
   		      </div> 
                
  </div>  
                     
                     
					
              <!-- /.box-header -->
              
              
              
              
              
              <div class="<?= $coldata?>">
 <div>

 

<table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tbody>
    <tr>
      <td width="60%"> 
             <div class="topicname">วันที่</div>
        <div class="input-group date" style="z-index:0">
        
        
        
     
        
        
          <input type="text" class="form-control" value="<?=date('Y-m-d');?>"  name="transfer_date_new" id="transfer_date_new"    style="background-color:#FFFFFF; height:40px; font-size:16px ">
          <div class="input-group-addon"  id="btn_transfer_date" style="cursor:pointer "> <i class="fa fa-calendar" style="font-size:24px; "></i> </div>
        </div>
 </td>
      <td width="40%">
      
      
         <div class="topicname">เวลาถึง</div>
      
      
      
      <table width="100%" border="0" cellspacing="1" cellpadding="1">
        <tbody>
          <tr>
            <td><table width="100%" border="0" cellspacing="1" cellpadding="1">
              <tbody>
                <tr>
                  <td width="50%"><select name="airout_h" id="airout_h" style="width:100%; font-size:16px; padding:0px; height:40px" >
 <?
				   for($ii=date('H');$ii<20;$ii++){
				  
				  ?>
                    <option value="<? if($ii<10){ echo 0; }?><?=$ii;?>" <?  if($arr[project][airout_h]== $ii){ echo "selected=selected";} ?> >
                      <? if($ii<10){  echo 0; } ?><?=$ii;?></option>
                    <?  } ?>
                  </select></td>
                  <td width="50%"><select name="airout_m" id="airout_m"style="width:100%; font-size:16px; padding:0px; height:40px" >
                    <?
				   for($ii=0;$ii<60;$ii++){ ?>
                    <option value="<? if($ii<10){  echo 0; }  ?><?=$ii;?>" <?  if($arr[project][airout_m]== $ii){ echo "selected=selected";} ?> >
                      <? if($ii<10){  echo 0; }   ?><?=$ii;?>
                      </option>
                    <?  } ?>
                  </select></td>
                </tr>
              </tbody>
            </table>
         </td>
            </tr>
        </tbody>
      </table></td>
    </tr>
  </tbody>
</table>
 
 
 
 

    </div> 
  </div>
              
              
              
 
              
                 
 
                          
                          
                      <?  include ("mod/booking_realtime/load/booking/pickup.php");   ?>
                          
                          
             
                    
                          
                          
                          
                   
 

              
 
                     
       
       <div class="<?= $coldata?>" style="display:none" id="block_to_place">
			            <div>
                    <div class="topicname">สถานที่ส่ง</div>
                    <input name="to_place" type="text"  required="true" class="form-control" id="to_place" style="padding:4px 2px;width:97%;" onkeypress="PasswordEnter(this,event)" value="King Power Phuket" readonly >
           		    </div> 
					 </div>  
                     
 
                   
                      <div class="<?= $coldata?>" id="show_to_times" style="display:none">
              <div>
                <div class="topicname">เวลาถึงโดยประมาณ</div><input name="ondate_time" type="hiddens"    id="ondate_time"    value="<?=$time_all?>" >  
 
<div class="font-24" id="text_to_time" style="color:<?=$main_color?>"></div>
 
   		      </div> 
                
  </div>    
                     
                     
                 
                 
                 
                 
                 
                          <div class="<?= $coldata?>">
                          
                          
                      <?  include ("mod/booking_realtime/load/booking/car.php");   ?>
                          
                          
                          
                          
                          
                          
                          
                   
 
  </div> 
                   
                  
                 
                  
           <div class="<?= $coldata?>" id="show_to_times" style="display:nones">
              <div>
                <div class="topicname">ชื่อคนขับรถ</div>
                
                <? if($data_user_class=='taxi' and $_GET[type]<>'edit' ){ ?>
     
                <input name="namedriver" type="hiddens"    id="namedriver"   class="form-control"    value="<?=$data_driver_name?>" >  
                
                
             <? }  else {?>   
             
             
              <input name="namedriver" type="hiddens"    id="namedriver"   class="form-control"    value="<?=$arr[project][namedriver]?>" >  
             
             <? } ?>
                
 
<div class="font-24" id="text_to_time" style="color:<?=$main_color?>"></div>
 
   		      </div> 
                
  </div>    
                  
                  
                  
                  
                  
                     
                     
                      
                          <div class="<?= $coldata?>">
			            <div >        
                     
                     
                     <table width="100%" border="0" cellspacing="1" cellpadding="1">
  <tbody>
    <tr>
      <td width="50%" align="center">                   
                  <div class="topicname">ผู้ใหญ่</div>
                    <select class="form-control" name="adult" id="adult" style="width:100%; font-size:16px; padding:5px; height:40px" >
                    
                                         <option value="0">- เลือก -</option>
                    
                      <?
				   for($ii=1;$ii<101;$ii++){
				  
				  ?>
                      <option value="<?=$ii;?>" <?  if($arr[project][adult]== $ii){ echo "selected=selected";} ?> >
                        <?=$ii;?>
                      </option>
                      <?  } ?>
                    </select>
		         </td>
      <td width="50%" align="center"> 
        <div class="topicname">เด็ก</div>
        
        <?=$d?>
        <select class="form-control" name="child" id="child" style="width:100%; font-size:16px; padding:5px; height:40px" >
          
          <option value="" selected="selected" >- เลือก -</option>
          
          <?
 
		  
				   for($ii=0;$ii<32;$ii++){
				  
				  ?>
   <option value="<?=$ii;?>" <?  if($arr[project][child]== $ii){ echo "selected=selected";} ?> >
            <?=$ii;?>
            </option>
          <?  } ?>
          </select>
      </td>
        </tr>
  </tbody>
</table>

 
 

   <div style="padding-top:10px; color:#FF0000" class="font-22">
         ผู้ลงทะเบียนต้องอายุ 18 ปี ขึ้นไป
           </div>       
           
           

                            </div> 
 
  </div> 
                   
              
 
 
   <div class="<?= $coldata?>">
			            <div >        
                     
                     <div class="topicname">สัญชาติ <span id="img_nation"> 
                     
                <? if($arr[shop][plan_other]==0){ ?>
                 <img src="images/flag/China.png" width="40" height="40" alt="" style="margin-top:-5px;"/> 
                
                <? } ?>      
                     
                     
                     
                     </span>  </div>


                   <table width="100%" border="0" cellspacing="0" cellpadding="0" >
  <tbody>
    <tr>
      <td class="font-24"><span style="height:35px;"></span>
      
      
      
 
      
      
      <? if($arr[shop][plan_other]==1){ ?>
      
      
       
       <select class="form-control"  name="nation" id="nation" >
        
        <option value="">- เลือกประเทศ -</option>
        
        <?
  $db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
                         
                                    //$res[category] = $db->select_query("SELECT * FROM ".TB_transferplace." where pro < 4 and status = 1 ORDER BY topic ");
                                  ///  $res[category] = $db->select_query("SELECT * FROM  guest_nation  ORDER BY id  ");
								  
					  $res[category] = $db->select_query("SELECT * FROM  web_country where status=1  ORDER BY sort_country desc");
                       
                                  while($arr[category] = $db->fetch($res[category])) {
 
                                    echo "<option value=\"".$arr[category][id]."\"";
                                    if($arr[category][id] == $arr[project][nation]) {
                                      echo " Selected";
                                    }
                                    echo ">".$arr[category][name_th]." </option>";
                                  }
                                  $db->closedb ();
                                  ?>
        
      </select>
      
      
      
      <? } ?>
      
      
      
         <? if($arr[shop][plan_other]==0){ ?>
      
      
     <div class="font-22"> เฉพาะสัญชาติจีน</div>
      
      
       
       <select class="form-control"  name="nation" id="nation"  style="display:none" >
        
 
        
        <?
  $db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
                         
                                    //$res[category] = $db->select_query("SELECT * FROM ".TB_transferplace." where pro < 4 and status = 1 ORDER BY topic ");
                                  ///  $res[category] = $db->select_query("SELECT * FROM  guest_nation  ORDER BY id  ");
								  
					  $res[category] = $db->select_query("SELECT * FROM  web_country where id=45  ORDER BY sort_country desc");
                       
                                  while($arr[category] = $db->fetch($res[category])) {
 
                                    echo "<option value=\"".$arr[category][id]."\"";
                                    if($arr[category][id] == $arr[product][pickup_place]) {
                                      echo " Selected";
                                    }
                                    echo ">".$arr[category][name_th]." </option>";
                                  }
                                  $db->closedb ();
                                  ?>
        
      </select>
      
      
      
      <? } ?>
      
      
      
      
      
      
      
      </td>
      </tr>
  </tbody>
</table>

 

          </div>
  </div>
 
 
                    
 <div class="<?= $coldata?>" style="display:noneS">
			            <div >        
                     
                     <div class="topicname">ประเภทค่าตอบแทน</div>


                   <table width="100%" border="0" cellspacing="0" cellpadding="0" >
  <tbody>
    <tr>
      <td class="font-24"><span style="height:35px;"></span> 
      
      <?
	  $db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
	   $all_plan = $db->num_rows('plan_product_price_list',"id","status=1 and product_id=".$arr[shop][id]."");
	  
	  ?>
 
 
     <? if($all_plan>1){ ?>
 
      <select class="form-control"  name="price_plan" id="price_plan" >
 
  
 
        <option value="">- เลือกค่าตอบแทน -</option>
     
    
        
        <?
  $db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
                         
               
  $res[category] = $db->select_query("SELECT * FROM  plan_product_price_list where status=1 and product_id=".$arr[shop][id]."   ORDER BY id asc");
              while($arr[category] = $db->fetch($res[category])) {
				  
               $res[plan] = $db->select_query("SELECT * FROM plan_product_price_name  where id=".$arr[category][plan_id]."   ORDER BY  id ");
             $arr[plan] = $db->fetch($res[plan]);
 
                                    echo "<option value=\"".$arr[category][id]."\"";
                                    if($arr[category][id] == $arr[project][plan]) {
                                      echo " Selected";
                                    }
                                    echo ">".$arr[plan][topic_th]." </option>";
                                  }
                                  $db->closedb ();
                                  ?>
        
      </select>
      
      
      
          <? } ?>
      
      <? if($all_plan==1){ ?>
      
      
      

      
      
      <div style="padding:5px;   border-radius: 0px; border: 0px solid #ddd;background-color:#F6F6F6;     margin-bottom: 5px; box-shadow: 0px  0px 0px #DADADA  ;">
      
      
            <?
  $db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
                         
               
  $res[category] = $db->select_query("SELECT * FROM  plan_product_price_list where status=1 and product_id=".$arr[shop][id]."   ORDER BY id asc");
              while($arr[category] = $db->fetch($res[category])) {
				  
               $res[plan] = $db->select_query("SELECT * FROM plan_product_price_name  where id=".$arr[category][plan_id]."   ORDER BY  id ");
             $arr[plan] = $db->fetch($res[plan]);
 
                      
                                    echo "".$arr[plan][topic_th]." ";
                                  }
                                  $db->closedb ();
                                  ?>
      
      
      
             <input name="price_plan" type="hidden"    id="price_plan"   class="form-control"    value="<?=$arr[plan][id]?>" >  
      
       <div>
      
      
         <? } ?>
      
      </td>
      </tr>
  </tbody>
</table>

 

          </div>
  </div>
 
 
  
  
  
  
                    
  
  
    
 
 
 
 
 
 <div class="<?= $coldata?>" id="show_price" style="display:none">
 <div>





                    
                    
                    


<table width="100%" border="0" cellspacing="1" cellpadding="1"  style=" margin-top:10px;">
 
    <tr>
      <td width="35%" align="center" bgcolor="#F6F6F6"> 
      
       <input  name="price_park" type="hidden" class="form-control" id="price_park"  > 
            <div class="topicname" style="text-align:center">ค่าจอด</div>
            
            
            <div id="div_price_park" class="font-24"  style="text-align:center"> <div>
 
         
 
 
 
 
 </td>
 
      <td width="40%" align="center" bgcolor="#F6F6F6"> 
             <input  name="price_person" type="hidden" class="form-control" id="price_person"   > 
            <div class="topicname" style="text-align:center">ค่าหัว/คน</div>
               <div id="div_price_person" class="font-24" style="text-align:center"> <div>
 
   
 
 </td>
 
 
       <td width="25%" align="center" bgcolor="#F6F6F6" style="padding-right:0px;"> 
         <input  name="price_total" type="hidden" class="form-control" id="price_total"> 
            <div class="topicname"  style="text-align:center">รวม</div>
            
                    <div id="div_price_total" class="font-24" style="text-align:center"> <div>
 
        
 
 </td>
 
 
 
    </tr>
 
 
 
</table>
 
 
    </div> 
  </div>
 
 
 
 
 <div class="<?= $coldata?>" id="show_commission" style="display:none">
              <div>
                <div class="topicname">ค่าคอมมิชชั่น<br>

                <span class="font-22" style="color:#FF0000">โอนเงินเข้าบัญชีเท่านั้น</span>
                </div>
                 
 <div id="load_data_commission" class="div-all-palce">
 
 
 </div>
                
   		      </div> 
                
  </div>    
 
 
 
 
 
 
 
 
 
 
  
 
 
  <div class="<?= $coldata?>"  >
              <div style="padding:5px;   border-radius: 5px; border: 1px solid #ddd;background-color:#F6F6F6;     margin-bottom: 0px; box-shadow: 0px  0px 0px #DADADA  ; margin-top: 10px;">
                <div class="topicname" style=" margin-top:-10px;">รับเงินค่าจอด ค่าหัว<br>

               
               
                
               <span class="font-22" style="color:#FF0000">รับเงินสดหรือโอนเงินเข้าบัญชี</span> 
    
                </div>
                 
 <select class="form-control"  name="payment_type" id="payment_type" >
 
 
 <option value="money" <?  if($arr[project][payment_type]== 'money'){ echo "selected=selected";} ?>>เงินสด</option> 
 <option value="bank" <?  if($arr[project][payment_type]== 'bank'){ echo "selected=selected";} ?>>โอนเงินเข้าบัญชี</option> 
  </select> 
  
  <div id="load_pay_bank" style="display:none">
 
 <?
 
  include ("mod/booking_realtime/load/booking/bank.php");
 
 ?>
  
  </div>
  
  
                
   		      </div> 
                
  </div>    
 
 
 
 
 
 
 
                               <div class="<?= $coldata?>" style="display:none">
              <div>
                <div class="topicname">หมายเหตุ</div>
                <input class="form-control" type="text" name="remark" id="remark"   >
                
                
                
                
   		      </div> 
                
  </div>    
 
  
  <?
  if($_GET[type]=='edit'){ 
  
   include ("mod/booking_realtime/load/edit/status.php");
   
     }
  
   ?>
   
  
  
  
 
         <input class="form-control" type="hidden" name="country" id="country"  required="true" onkeypress="PasswordEnter(this,event)"   value="china" >           
                    
                    <br>

      

   <div  id="send_booking_data"></div>
   
   
   
         <div  class="<?= $coldata?>">


 <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="50%" class="pad-r-5">
    
    
      <?
  if($_GET[type]=='edit'){  ?>
    
 
    <button id="edit_booking_data" type="button" class="btn  btn-primary" style="width:100% "><span class="font-22">แก้ไขข้อมูล</button>
    
    
    <? } else { ?> 
    
        <button id="submit_booking_data" type="button" class="btn  btn-primary" style="width:100% "><span class="font-22">บันทึกข้อมูล</button>
    
    <? } ?>
    
    
    </td>
    
    <td width="50%" class="pad-l-5"><button type="reset" class="btn btn-block btn-default"  style="width:100%px "><span class="font-22">รีเซ็ต</button></td>
  </tr>
</table><br>


 <div style="display:none">
 
 <?    include ("mod/booking_realtime/photo/upload_main.php");?>
 </div>
</div>
</form>



    </div> 
  </div>
  


<script>
/// check login

$("#submit_booking_data").click(function(){ 



	
  

 

/*

 
if(document.getElementById('pickup_place').value=="") {
alert('กรุณากรอกสถานที่รับ'); 
document.getElementById('pickup_place').focus() ; 
return false ;
}




*/

 
if(document.getElementById('airout_h').value=="") {
alert('กรุณาเลือกชั่วโมง'); 
document.getElementById('airout_h').focus() ; 
return false ;
}


if(document.getElementById('airout_m').value=="") {
alert('กรุณาเลือกนาที'); 
document.getElementById('airout_m').focus() ; 
return false ;
}




 
 if(document.getElementById('check_wait_status').value=="") {
	 
 
alert('กรุณาประเภทรอส่งแขกกลับ'); 

 //// 
 document.getElementById('check_wait_area').focus() ; 
 
return false ;
}




 ////// รอ

 if(document.getElementById('check_wait_status').value=="area") {

 /// เวลากลับ
 if(document.getElementById('transfer_time').value=="") {	  
alert('กรุณาเลือกเวลากลับ');  
 document.getElementById('transfer_time').focus() ; 
 return false ;
}

/// 
 if(document.getElementById('to_place').value=="") {	  
alert('กรุณาเลือกสถานที่กลับ');  
 document.getElementById('to_place').focus() ; 
 return false ;
}


}



//////  ส่งออก

 if(document.getElementById('check_wait_status').value=="out") {

 /// เวลากลับ
 if(document.getElementById('transfer_time_airport').value=="") {	  
alert('กรุณาเลือกเวลากลับ');  
 document.getElementById('transfer_time_airport').focus() ; 
 return false ;
}

/// 
/*
 if(document.getElementById('to_place').value=="") {	  
alert('กรุณาเลือกสถานที่กลับ');  
 document.getElementById('to_place').focus() ; 
 return false ;
}

*/

}








 
/*

if(document.getElementById('airout_time').value=="") {
alert('กรุณาเลือกเวลาถึงโดยประมาณ'); 
document.getElementById('airout_time').focus() ; 
return false ;
}

 */
 
 
 
 if(document.getElementById('namedriver').value=="") {
alert('กรุณากรอกชื่อคนขับรถ'); 
document.getElementById('namedriver').focus() ; 
return false ;
}
 

if(document.getElementById('car_plate').value=="") {
alert('กรุณาหมายเลขทะเบียนรถ'); 
document.getElementById('car_plate').focus() ; 
return false ;
}

 

if(document.getElementById('adult').value=="0") {
alert('กรุณาเลือกจำนวนผู้ใหญ่'); 
document.getElementById('adult').focus() ; 
return false ;
}


if(document.getElementById('child').value=="") {
alert('กรุณาเลือกจำนวนเด็ก'); 
document.getElementById('child').focus() ; 
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
  
  
 });
 
</script>  

















 <script>
		 
 
	 
 

	
 // url_load_price=url_load_price+"&lat="+document.getElementById('check_data_status_gps_lat_old').value;
/// url_load_price=url_load_price+"&lng="+document.getElementById('check_data_status_gps_lng_old').value;
  
  
  
 $("#payment_type").change(function(){ 
 
 
   
 if(document.getElementById('payment_type').value=='bank') {
	 
	  $("#load_pay_bank").show();
	 
	 
 } else {
	 
	   $("#load_pay_bank").hide();
	 
 }
  
	 
 	 }); 
 ///
 
 
 
 
  $("#adult").change(function(){ 
   
    var url_load_price= "popup.php?name=booking&file=price";
  
    url_load_price=url_load_price+"&adult="+document.getElementById('adult').value;
	
    url_load_price=url_load_price+"&nation="+document.getElementById('nation').value;
	
	url_load_price=url_load_price+"&pro="+document.getElementById('program').value;
	
	 url_load_price=url_load_price+"&price_plan="+document.getElementById('price_plan').value;
	
  
  $('#send_booking_data').load(url_load_price); 
  
	 
 	 });
	 
	 
	   $("#price_plan").change(function(){ 
	   
	    
    var url_load_price= "popup.php?name=booking&file=price";
  
    url_load_price=url_load_price+"&adult="+document.getElementById('adult').value;
	
    url_load_price=url_load_price+"&nation="+document.getElementById('nation').value;
	
	url_load_price=url_load_price+"&pro="+document.getElementById('program').value;
	
	 url_load_price=url_load_price+"&price_plan="+document.getElementById('price_plan').value;
	
	
 
 
  
  $('#send_booking_data').load(url_load_price); 
  
 
    var url_plan = "popup.php?name=booking/load&file=com&time_h="+$("#airout_h").val()+"&price_plan="+$("#price_plan").val()+"&pro="+$("#program").val()+"";
 $('#load_data_commission').load(url_plan); 
	 
 	 });
	 
	 
	 
	 
	   $("#nation").change(function(){ 
 
    var url_load_price= "popup.php?name=booking&file=price";
  
    url_load_price=url_load_price+"&adult="+document.getElementById('adult').value;
	
    url_load_price=url_load_price+"&nation="+document.getElementById('nation').value;
	
	url_load_price=url_load_price+"&pro="+document.getElementById('program').value;
	
	 url_load_price=url_load_price+"&price_plan="+document.getElementById('price_plan').value;
	
 
 
 $('#send_booking_data').load(url_load_price); 
 
 
   var url_img = "popup.php?name=booking/load&file=nation_flag&adult="+$("#adult").val()+"&nation="+$("#nation").val()+"";

 $('#img_nation').load(url_img); 
 
	 
 	 });
	 
	  



///// คำนวณเวลา
/*
 
  $("#airout_h").change(function(){ 
 
  var urltime = "popup.php?name=booking/load&file=time_topoint&time_h="+$("#airout_h").val()+"&time_m="+$("#airout_m").val()+"&pro="+$("#program").val()+"";

 $('#send_booking_data').load(urltime); 
	 
 	 });
	 
	 
	   $("#airout_m").change(function(){ 
 
  var urltime = "popup.php?name=booking/load&file=time_topoint&time_h="+$("#airout_h").val()+"&time_m="+$("#airout_m").val()+"&pro="+$("#program").val()+"";

 $('#send_booking_data').load(urltime); 
	 
 	 });



	   $("#airout_time").change(function(){ 
 
  var urltime = "popup.php?name=booking/load&file=time_topoint&all_time="+$("#airout_time").val()+"&pro="+$("#program").val()+"";

 $('#send_booking_data').load(urltime); 
	 
 	 });
		 
		 */
		 
		 
		 
		 
		 
		 
 $('#check_wait_area').on('ifChecked', function () { 
 
    document.getElementById('check_wait_status').value='area'; 
	$("#selet_check_to_place").show();
	$("#selet_check_to_airport").hide();
 
  });
  
  
   $('#check_wait_out').on('ifChecked', function () {  
    document.getElementById('check_wait_status').value='out'; 
	$("#selet_check_to_place").hide();
	$("#selet_check_to_airport").show();
 
  });
  
  
     $('#check_wait_no').on('ifChecked', function () {  
    document.getElementById('check_wait_status').value='no'; 
	$("#selet_check_to_place").hide();
	$("#selet_check_to_airport").hide();
 
  });
  
  
  
		 
		 </script>      
         
