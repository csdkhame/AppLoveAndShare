<div id="load_mod_popup_2">
<div class="back-full-popup" id="header_editcar" style="left:0px;"> 
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tbody><tr>
    <td width="40"><div class="button-close-popup-mod-2"><i class="fa fa-close" style="font-size:22px; color:#FFFFFF "></i></div></td>
  <td><div style="font-size:22px; color:#FFFFFF " id="text_mod_topic_action" class="text-topic-action-mod">แก้ไขรถ</div></td>
    <td width="50" align="right"><div style="font-size:22px; color:#FFFFFF " id="head_full_popup_icon"></div></td>
  </tr>
</tbody></table>
</div>

<div class="css-full-popup" id="load_mod_popup" style="position: fixed; overflow: auto;top: 49px;"> 
<div style="top:0px; padding:10px; overflow: auto; width:100%; padding-bottom:85px;margin-top:-7px;"> 
<?php
	$path_car = '../data/pic/car/';
	$db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
	$res[project] = $db->select_query("SELECT * FROM  web_carall  where id= '".$_GET[id]."' ");
	$arr[web_car] = $db->fetch($res[project]);
 
 
	 ?>


<FORM name="myform_data" id="myform_data"   enctype="multipart/form-data" >

<? $coldata="col-md-6 col-fix";?>

 
 <div class="box box-default "  > 
 
 
  
 <div class="<?= $coldata?>">
  <h2 class="box-title" style="display:none"><span class="font-28"><b>เพิ่มรถใหม่</b></span></h2>
                  
                     
                     
                     
<table width="100%" border="0" cellspacing="2" cellpadding="0">
  <tbody>
    <tr>
      <td width="50%">   <div class="topicname">ประเภทรถ</div>
                     <select   class="form-control" name="car_type" id="car_type"   onChange="return find_tour_product();find_tour_time();" >
                       <?
$db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
$res[programtour] = $db->select_query("SELECT * from  ".TB_carall_type."  ");
while ($arr[programtour] = $db->fetch($res[programtour])){
	   echo "<option value=\"".$arr[programtour][id]."\"";
	   if($arr[programtour][id] == $arr[web_car][car_type]){echo " Selected";}
	  // echo ">".$arr[programtour][company]."</option>";
echo ">".$arr[programtour][topic_th]." </option>";
}
$db->closedb ();
?>
                     </select></td>
      <td width="50%"> 
       <div class="topicname">ยี่ห้อรถ</div>
 
                     <select  class="form-control" id="car_brand" name="car_brand">
                     
                    <? if($arr[web_car][car_brand]<>''){ ?> 
                     
                      <option value="<?=$arr[web_car][car_brand]?>"><?=$arr[web_car][car_brand]?></option>
                      
                      <? } ?>
                     
                     <option value="">- เลือกยี่ห้อ -</option>
                       <option value="TOYOTA">TOYOTA</option>
                       <option value="HONDA">HONDA</option>
                       <option value="ISUZU">ISUZU</option>
                       <option value="MITSUBISHI">MITSUBISHI</option>
                       <option value="MAZDA">MAZDA</option>
                       <option value="NISSAN">NISSAN</option>
                       <option value="SUZUKI">SUZUKI</option>
                       <option value="HINO">HINO</option>
                       <option value="LEXUS">LEXUS</option>
                       <option value="DAIHATSU">DAIHATSU</option>
                       <option value="SUBARU">SUBARU</option>
                       <option value="MITSUOKA">MITSUOKA</option>
                       <option value="MERCEDES-BENZ">MERCEDES-BENZ</option>
                       <option value="BMW">BMW</option>
                       <option value="AUDI">AUDI</option>
                       <option value="VOLKSWAGEN">VOLKSWAGEN</option>
                       <option value="PEUGEOT">PEUGEOT</option>
                       <option value="PORSCHE">PORSCHE</option>
                       <option value="OPEL">OPEL</option>
                       <option value="SMART">SMART</option>
                       <option value="MCLAREN">MCLAREN</option>
                       <option value="WIESMANN">WIESMANN</option>
                       <option value="CHEVROLET">CHEVROLET</option>
                       <option value="JEEP">JEEP</option>
                       <option value="FORD">FORD</option>
                       <option value="CHRYSLER">CHRYSLER</option>
                       <option value="DODGE">DODGE</option>
                       <option value="HUMMER">HUMMER</option>
                       <option value="PONTIAC">PONTIAC</option>
                       <option value="BUICK">BUICK</option>
                       <option value="OLDSMOBILE">OLDSMOBILE</option>
                       <option value="INFINITI">INFINITI</option>
                       <option value="AMC">AMC</option>
                       <option value="LINCOLN">LINCOLN</option>
                       <option value="TESLA">TESLA</option>
                       <option value="CADILLAC">CADILLAC</option>
                       <option value="MINI">MINI</option>
                       <option value="ROVER">ROVER</option>
                       <option value="LAND ROVER">LAND ROVER</option>
                       <option value="ASTON MARTIN">ASTON MARTIN</option>
                       <option value="JAGUAR">JAGUAR</option>
                       <option value="ROLLS-ROYCE">ROLLS-ROYCE</option>
                       <option value="BENTLEY">BENTLEY</option>
                       <option value="AUSTIN">AUSTIN</option>
                       <option value="MG">MG</option>
                       <option value="LONDON TAXI">LONDON TAXI</option>
                       <option value="TRIUMPH">TRIUMPH</option>
                       <option value="ALFA ROMEO">ALFA ROMEO</option>
                       <option value="FIAT">FIAT</option>
                       <option value="MASERATI">MASERATI</option>
                       <option value="LOTUS">LOTUS</option>
                       <option value="FERRARI">FERRARI</option>
                       <option value="LAMBORGHINI">LAMBORGHINI</option>
                       <option value="KIA">KIA</option>
                       <option value="MUSSO">MUSSO</option>
                       <option value="DAEWOO">DAEWOO</option>
                       <option value="HYUNDAI">HYUNDAI</option>
                       <option value="SSANGYONG">SSANGYONG</option>
                       <option value="CITROEN">CITROEN</option>
                       <option value="RENAULT">RENAULT</option>
                       <option value="VOLVO">VOLVO</option>
                       <option value="SAAB">SAAB</option>
                       <option value="THAI RUNG">THAI RUNG</option>
                       <option value="PROTON">PROTON</option>
                       <option value="NAZA">NAZA</option>
                       <option value="SEAT">SEAT</option>
                       <option value="TATA">TATA</option>
                       <option value="HOLDEN">HOLDEN</option>
                       <option value="CHERY">CHERY</option>
                       <option value="DFSK">DFSK</option>
                       <option value="FOTON">FOTON</option>
                       <option value="SKODA">SKODA</option>
                     </select>
                </td>
</table>

        
                     
		    </div>  
            
            
            
            
            
   
 
  <div class="<?= $coldata?>">
                                         
                                         
                            <table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tbody>
    <tr>
      <td width="50%"><div class="topicname">รุ่น / ปีที่ผลิต</div>
                    <input class="form-control" type="text" name="car_model" id="car_model"  required="true" onkeypress="PasswordEnter(this,event)"  value="<?=$arr[web_car][car_sub_brand]?>"   ></td>
                    
                    
                    
      <td width="50%"><div class="topicname">สีรถ</div>
                     <select class="form-control" name="car_color" id="car_color">
                     
                
 
                     
          <option value="White"  <? if($arr[web_car][car_color]=='White'){ echo 'selected=selected';} ?>  >ขาว</option>
                       <option value="Black" <? if($arr[web_car][car_color]=='Black'){ echo 'selected=selected';} ?>>ดำ</option>
                       <option value="Yellow" <? if($arr[web_car][car_color]=='Yellow'){ echo 'selected=selected';} ?>>เหลือง</option>
                       <option value="Green" <? if($arr[web_car][car_color]=='Green'){ echo 'selected=selected';} ?>>เขียว</option>
                        <option value="Red" <? if($arr[web_car][car_color]=='Red'){ echo 'selected=selected';} ?>>แดง</option>
                        <option value="Gray" <? if($arr[web_car][car_color]=='Gray'){ echo 'selected=selected';} ?>>เทา</option>
                       <option value="Golden Bronze" <? if($arr[web_car][car_color]=='Golden Bronze'){ echo 'selected=selected';} ?>>บรอนด์ทอง</option>
                       <option value="Silver Bronze" <? if($arr[web_car][car_color]=='Silver Bronze'){ echo 'selected=selected';} ?>>บรอนด์เงิน</option>
                     </select>
					  </td>
    </tr>
  </tbody>
</table>
                        
					</div> 
 
                    <div class="<?= $coldata?>">
                    
    
<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tbody>
    <tr>
      <td width="50%">            
                     <div class="topicname">ทะเบียนรถ</div>
                    <input class="form-control" type="text" name="plate_num" id="plate_num"  required="true" onkeypress="PasswordEnter(this,event)"  value="<?=$arr[web_car][plate_num];?>" ></td>
      <td width="50%">   <div class="topicname">จังหวัด</div>
                     <select class="form-control" name="province" id="province"  >
                       <option value="กระบี่">กระบี่ </option>
                       <option value="กรุงเทพมหานคร">กรุงเทพมหานคร</option>
                       <option value="กาญจนบุรี">กาญจนบุรี </option>
                       <option value="กาฬสินธุ์">กาฬสินธุ์ </option>
                       <option value="กำแพงเพชร">กำแพงเพชร </option>
                       <option value="ขอนแก่น">ขอนแก่น</option>
                       <option value="จันทบุรี">จันทบุรี</option>
                       <option value="ฉะเชิงเทรา">ฉะเชิงเทรา </option>
                       <option value="ชัยนาท">ชัยนาท </option>
                       <option value="ชัยภูมิ">ชัยภูมิ </option>
                       <option value="ชุมพร">ชุมพร </option>
                       <option value="ชลบุรี">ชลบุรี </option>
                       <option value="เชียงใหม่">เชียงใหม่ </option>
                       <option value="เชียงราย">เชียงราย </option>
                       <option value="ตรัง">ตรัง </option>
                       <option value="ตราด">ตราด </option>
                       <option value="ตาก">ตาก </option>
                       <option value="นครนายก">นครนายก </option>
                       <option value="นครปฐม">นครปฐม </option>
                       <option value="นครพนม">นครพนม </option>
                       <option value="นครราชสีมา">นครราชสีมา </option>
                       <option value="นครศรีธรรมราช" >นครศรีธรรมราช </option>
                       <option value="นครสวรรค์">นครสวรรค์ </option>
                       <option value="นราธิวาส">นราธิวาส </option>
                       <option value="น่าน">น่าน </option>
                       <option value="นนทบุรี">นนทบุรี </option>
                       <option value="บุรีรัมย์">บุรีรัมย์</option>
                       <option value="ประจวบคีรีขันธ์">ประจวบคีรีขันธ์ </option>
                       <option value="ปทุมธานี">ปทุมธานี </option>
                       <option value="ปราจีนบุรี">ปราจีนบุรี </option>
                       <option value="ปัตตานี">ปัตตานี </option>
                       <option value="พะเยา">พะเยา </option>
                       <option value="พระนครศรีอยุธยา">พระนครศรีอยุธยา </option>
                       <option value="พังงา">พังงา </option>
                       <option value="พิจิตร">พิจิตร </option>
                       <option value="พิษณุโลก">พิษณุโลก </option>
                       <option value="เพชรบุรี">เพชรบุรี </option>
                       <option value="เพชรบูรณ์">เพชรบูรณ์ </option>
                       <option value="แพร่">แพร่ </option>
                       <option value="พัทลุง">พัทลุง </option>
                       <option value="ภูเก็ต" selected="selected">ภูเก็ต </option>
                       <option value="มหาสารคาม">มหาสารคาม </option>
                       <option value="มุกดาหาร">มุกดาหาร </option>
                       <option value="แม่ฮ่องสอน">แม่ฮ่องสอน </option>
                       <option value="ยโสธร">ยโสธร </option>
                       <option value="ยะลา">ยะลา </option>
                       <option value="ร้อยเอ็ด">ร้อยเอ็ด </option>
                       <option value="ระนอง">ระนอง </option>
                       <option value="ระยอง">ระยอง </option>
                       <option value="ราชบุรี">ราชบุรี</option>
                       <option value="ลพบุรี">ลพบุรี </option>
                       <option value="ลำปาง">ลำปาง </option>
                       <option value="ลำพูน">ลำพูน </option>
                       <option value="เลย">เลย </option>
                       <option value="ศรีสะเกษ">ศรีสะเกษ</option>
                       <option value="สกลนคร">สกลนคร</option>
                       <option value="สงขลา">สงขลา </option>
                       <option value="สมุทรสาคร">สมุทรสาคร </option>
                       <option value="สมุทรปราการ">สมุทรปราการ </option>
                       <option value="สมุทรสงคราม">สมุทรสงคราม </option>
                       <option value="สระแก้ว">สระแก้ว </option>
                       <option value="สระบุรี">สระบุรี </option>
                       <option value="สิงห์บุรี">สิงห์บุรี </option>
                       <option value="สุโขทัย">สุโขทัย </option>
                       <option value="สุพรรณบุรี">สุพรรณบุรี </option>
                       <option value="สุราษฎร์ธานี">สุราษฎร์ธานี </option>
                       <option value="สุรินทร์">สุรินทร์ </option>
                       <option value="สตูล">สตูล </option>
                       <option value="หนองคาย">หนองคาย </option>
                       <option value="หนองบัวลำภู">หนองบัวลำภู </option>
                       <option value="อำนาจเจริญ">อำนาจเจริญ </option>
                       <option value="อุดรธานี">อุดรธานี </option>
                       <option value="อุตรดิตถ์">อุตรดิตถ์ </option>
                       <option value="อุทัยธานี">อุทัยธานี </option>
                       <option value="อุบลราชธานี">อุบลราชธานี</option>
                       <option value="อ่างทอง">อ่างทอง </option>
                       <option value="อื่นๆ">อื่นๆ</option>
                     </select>
 </td>
    </tr>
  </tbody>
</table>

                    
         </div>           

                  
                    <div class="<?= $coldata?>">
				 
                     <div class="topicname">สีป้ายทะเบียน</div>
                     
                     <select  class="form-control"  name="plate_color"     id="plate_color">
   
                       <option value="" >-- เลือกสีป้ายทะเบียน --</option>
                       <option value="Green"  <? if($arr[web_car][plate_color]=='Green'){ echo 'selected=selected';} ?> >ป้ายเขียว</option>
                       <option value="Yellow"  <? if($arr[web_car][plate_color]=='Yellow'){ echo 'selected=selected';} ?>>ป้ายเหลือง</option>
                       <option value="Red"  <? if($arr[web_car][plate_color]=='Red'){ echo 'selected=selected';} ?>>ป้ายแดง</option>
                       <option value="Black" <? if($arr[web_car][plate_color]=='Black'){ echo 'selected=selected';} ?> >ป้ายดำ</option>
                       
                     </select>
                     
 
                     
                     
                     
            
		  </div> <!-- end col -->
					 
                   
          
	
    
    
      <style>
				
				.plate-color {
    border-radius: 50%; 
 
    padding: 10px; 
    width: 45px;
    height: 20px; 
 
	border: solid 5px #FFFFFF;
 
}



				.plate-color-active-- {
    border-radius: 50%; 
 
    padding: 10px; 
    width: 40px;
    height: 30px; 
 
	border: solid 5px #FFFFFF;
 
}



@-webkit-keyframes DIV-BORDER-STEP {
	 
    0%   {  }
    50%  {border-color: #FFF200 }
    100% { }
}

 @-moz-keyframes DIV-BORDER-STEP {
 
    0%   {  }
    50%  {border-color: #FFF200 }
    100% { }
}




.plate-color-active {
 
 
     border-radius: 50%; 
 
       padding: 10px; 
    width: 45px;
    height: 20px; 
 
	border: solid 5px #FFFFFF;
 
 
 
	   -moz-animation: DIV-BORDER-STEP 1s infinite;
	  
 
    -webkit-animation: DIV-BORDER-STEP 1s infinite;
	
 
}


				
				
				</style>
                     
    
 <script>
 
 
 
 
  
		 
  $(".plate-color").click(function(){ 
  
   var data_color = $(this).attr('data_color');
   
   $(".plate-color-active").addClass("plate-color");
  
    $(".plate-color").removeClass("plate-color-active");
	 $(".plate-color-active").removeClass("plate-color-active");
	
	
  
    $("#car_"+data_color).addClass("plate-color-active");
  
  
  
 
  
 
document.getElementById('plate_color_name').value=data_color;
 //// 
 
 
		 
 	 });

		 
		 
		 </script>      
         	 
 
 
  

 
                    

          <div class="<?= $coldata?>">
 
 <div class="take_photo" ><center>
 
 
 

<i class="fa  fa-camera take-photo-icon"  id="icon_camera_id_car_1"></i><br>

ถ่ายภาพด้านหน้ารถ

<div style="padding:5px;">

<div class="progress" style="width:100%;;border-radius:8px; margin-top: 10px; border:none " id="area_image_album_load_main">
  <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="40"
  aria-valuemin="0" aria-valuemax="100" id="area_image_album_load_id_car_1" style="width:0%;border-radius:5px;border:none">
      </div>
  </div>
  
  
    </div>
    
 <img   <? if($_GET[id]){ ?>

  src="<? echo $path_car.$arr[web_car][id];?>_1.jpg?v=<?=time();?>" 

<? }  ?>
  id="image_id_car_1" name="image_id_car_1"  style="width:100%; padding:5px; margin-top:-20px;border-radius:15px; " />

</div>
 
 
  
    </div>
    
   
   
    
          <div class="<?= $coldata?>">
 
 <div class="take_photo" ><center>
    
<i class="fa  fa-camera take-photo-icon"  id="icon_camera_id_car_2"></i><br>

ถ่ายภาพด้านข้างรถ

<div style="padding:5px;">

<div class="progress" style="width:100%;;border-radius:8px; margin-top: 10px; border:none " id="area_image_album_load_main">
  <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="40"
  aria-valuemin="0" aria-valuemax="100" id="area_image_album_load_id_car_2" style="width:0%;border-radius:5px;border:none">
      </div>
  </div>
  
  
    </div>


 <img 
    <? if($_GET[id]){ ?>

  src="<? echo $path_car.$arr[web_car][id];?>_2.jpg?v=<?=time();?>" 

<? }  ?>

 
 id="image_id_car_2" name="image_id_car_2"  style="width:100%; padding:5px; margin-top:-20px;border-radius:15px; " />

</div>

  
    </div>

    
    
          <div class="<?= $coldata?>">
 
 <div class="take_photo" ><center>
    
<i class="fa  fa-camera take-photo-icon"  id="icon_camera_id_car_3"></i><br>

ถ่ายภาพด้านในรถ

<div style="padding:5px;">

<div class="progress" style="width:100%;;border-radius:8px; margin-top: 10px; border:none " id="area_image_album_load_main">
  <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="40"
  aria-valuemin="0" aria-valuemax="100" id="area_image_album_load_id_car_3" style="width:0%;border-radius:5px;border:none">
      </div>
  </div>
  
  
    </div>


 <img
 
 
    <? if($_GET[id]){ ?>

  src="<? echo $path_car.$arr[web_car][id];?>_3.jpg?v=<?=time();?>" 

<? }  ?>
 
 
 
 
 
  id="image_id_car_3" name="image_id_car_3"  style="width:100%; padding:5px; margin-top:-20px;border-radius:15px; " />

</div>
 
 
  
    </div>
    
 
    
    
                
                   <div  id="send_form_data"></div>     
 <?php 
//echo " ".$path_car.$arr[web_car][id]."_1.jpg";
 $pic_car_1 = file_exists($path_car.$arr[web_car][id]."_1.jpg"); 
 $pic_car_2 = file_exists($path_car.$arr[web_car][id]."_2.jpg"); 
 $pic_car_3 = file_exists($path_car.$arr[web_car][id]."_3.jpg"); 
 ?>                         
 <input type="hidden" id="check_photo_1" value="<?=$pic_car_1;?>"/>                  
 <input type="hidden" id="check_photo_2" value="<?=$pic_car_2?>"/>                  
 <input type="hidden" id="check_photo_3" value="<?=$pic_car_3?>"/>                  
 
 <input class="form-control" type="hidden" name="add_new_car_type" id="add_new_car_type"   onkeypress="PasswordEnter(this,event)"   value="<?=$_GET[type]?>" >
   <input class="form-control" type="hidden" name="upload_pic_type" id="upload_pic_type"  required="true" onkeypress="PasswordEnter(this,event)"   value="" >
    <input class="form-control" type="hidden" name="drivername" id="drivername"   onkeypress="PasswordEnter(this,event)"   value="<?=$user_id?>" >
                    
<div class="<?= $coldata?>"><br>


 <table width="100%"  border="0" cellspacing="0" cellpadding="0" style="padding-top:0px;">
  <tr>
    <td width="50%" class="pad-r-5"><button id="submit_step_3" type="button" class="btn btn-block btn-primary" style="width:100% ">บันทึกข้อมูล</button></td>
    <td width="50%"  class="pad-l-5"><button type="reset" class="btn btn-block btn-default"  style="width:width:100%">รีเซ็ต</button></td>
  </tr>
</table><br>

</div>
</div>                 
					 

 <br>
 
  <?
 $rand = substr(str_shuffle('123456789012345678901234567890'),0,30);
 
 ?>

 <div style="display:none">
 
 <?  include ("mod/car/photo/upload_car_pic.php");?>
 
 </div> 
 
   <input class="form-control" type="hidden" name="check_photo_id_car_1" id="check_photo_id_car_1"   onkeypress="PasswordEnter(this,event)"   value="<?=$check_photo?>" >
    
    
     <input class="form-control" type="hidden" name="check_photo_id_car_2" id="check_photo_id_car_2"   onkeypress="PasswordEnter(this,event)"   value="<?=$check_photo?>" >
    
     <input class="form-control" type="hidden" name="check_photo_id_car_3" id="check_photo_id_car_3"   onkeypress="PasswordEnter(this,event)"   value="<?=$check_photo?>" >
 
      <input class="form-control" type="hidden" name="check_code" id="check_code"   onkeypress="PasswordEnter(this,event)"   value="<?=$rand ?>" >
  
 <script>

 
/////////  idcard
 $("#icon_camera_id_card").click(function(){  
 
 
  
  document.getElementById('upload_pic_type').value='id_card';
  
 
  $("#load_chat_camera").click(); 
  
  });
  
  
  /////////  id driving
 $("#icon_camera_id_driving").click(function(){  
 
  
  document.getElementById('upload_pic_type').value='id_driving';
 
 
  $("#load_chat_camera").click(); 
  
  });
  
  
  
  
  
  
  
    /////////  id driving
 $("#icon_camera_id_car").click(function(){  
   
  document.getElementById('upload_pic_type').value='id_car'; 
 
  $("#load_chat_camera").click(); 
  
  });
  
  
      /////////  id driving
 $("#icon_camera_id_insure").click(function(){  
 
  
  document.getElementById('upload_pic_type').value='id_insure';
 
 
  $("#load_chat_camera").click(); 
  
  });
  
  
  
  
  
  
  /////////  id driving
 $("#icon_camera_id_driver").click(function(){  
 
  
  document.getElementById('upload_pic_type').value='id_driver';
 
 
  $("#load_chat_camera").click(); 
  
  });
  
  
    
        /////////  id driving
 $("#icon_camera_id_car_1").click(function(){  
 
  
  document.getElementById('upload_pic_type').value='id_car_1';
 
 
  $("#load_chat_camera").click(); 
  
  });
  
  
          /////////  id driving
 $("#icon_camera_id_car_2").click(function(){  
 
  
  document.getElementById('upload_pic_type').value='id_car_2';
 
 
  $("#load_chat_camera").click(); 
  
  });
  
  
            /////////  id driving
 $("#icon_camera_id_car_3").click(function(){  
 
  
  document.getElementById('upload_pic_type').value='id_car_3';
 
 
  $("#load_chat_camera").click(); 
  
  });
  
  
  
  
  
  </script>
  
</form>
</div>
</div>
</div>
<script>

 /// check login 


$("#submit_step_3").click(function(){ 
 
if(document.getElementById('car_brand').value=="") {
alert('กรุณาเลือกยี่ห้อรถ'); 
document.getElementById('car_brand').focus() ; 
return false ;
}

 
 
 /*
if(document.getElementById('password').value=="") {
alert('กรุณากรอกรหัสผ่าน'); 
document.getElementById('password').focus() ; 
return false ;
}

*/

/*
if(document.getElementById('car_model').value=="") {
alert('กรุณากรอกชื่อรุ่น / ปีที่ผลิต'); 
document.getElementById('car_model').focus() ; 
return false ;
}

*/

if(document.getElementById('plate_num').value=="") {
alert('กรุณากรอกหมายเลขทะเบียนรถ'); 

document.getElementById('plate_num').focus() ; 
return false ;
}

if($('#check_photo_1').val()!=1){
alert('กรุณาถ่ายภาพด้านหน้ารถ'); 
document.getElementById('check_photo_1').focus() ; 
return false ;
}

if($('#check_photo_2').val()!=1){
	alert('กรุณาถ่ายภาพด้านข้างรถ'); 

document.getElementById('check_photo_id_car_2').focus() ; 
return false ;
}

if($('#check_photo_3').val()!=1){
	alert('กรุณาถ่ายภาพด้านในรถ'); 
	document.getElementById('check_photo_id_car_3').focus() ; 
return false ;
}

 

/*

if(document.getElementById('idcard').value=="") {
alert('กรุณากรอกหมายเลขบัตรประจำตัวประชาชน'); 
document.getElementById('idcard').focus() ; 
return false ;
}
if(document.getElementById('iddriving').value=="") {
alert('กรุณากรอกหมายเลขใบขับขี่'); 
document.getElementById('iddriving').focus() ; 
return false ;
}


*/
 
	   swal({
		title: "<font style='font-size:28px'><b> คุณแน่ใจหรือไม่",
		text: "<font style='font-size:22px'>ว่าข้อมูลถูกต้อง",
		type: "success",
		showCancelButton: true,
		confirmButtonColor: '<?=$main_color?>',
		confirmButtonText: 'ใช่',
		cancelButtonText: "ไม่ใช่",
		closeOnConfirm: false,
		closeOnCancel: true,
		html: true
	},
	function(isConfirm){
    if (isConfirm){
	 
	 
  var url="go.php?name=car&file=savedata&action=edit&id=<?=$_GET[id]?>&type=<?=$_GET[type]?>"
//	url=url+"&iddriver_finish="+document.getElementById('iddriver_finish').value;

	 
 $.post(url,$('#myform_data').serialize(),function(response){
//   $('#send_form_data').html(response);
//   alert(response);
	swal("แก้ไขสำเร็จ", "", "success");
  });
  

 
	//  alert('dd');
    } else {
      swal("Cancelled", "", "error");
    }
	});

  
 });
 </script>  


<script>
	$('.button-close-popup-mod-2').click(function(){
//		$( "#load_mod_popup" ).toggle();
		$("#load_mod_popup_2").hide();
		autoclickAllcar();
//		$("#slide_menu_all_car").on( "click" );
	})
</script>
