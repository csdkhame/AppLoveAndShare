 
 
 <br>
 
 
 
   
 
   <?  include ("bootstrap/fonts/all.php");?> 

 
 
 
 
 
 
 
 <TABLE cellSpacing=0 cellPadding=0 width=100% border=0>
 <TBODY>
        <TR>
          <TD width="100%" vAlign=top><!-- Admin -->
            <TABLE width="100%" align=center cellSpacing=0 cellPadding=0 border=0>
				<TR>
					
				</TR>
				<TR>
					<TD valign="top">  <?
					
					
 require_once("css/maincss.php")	;
					
  // include("includes/class.resizepic.php");
					
//////////////////////////////////////////// ʴ¡ Project   
if($_GET[op] == ""){
	$db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
 
 
?>


<div id="save_data_open" style="display:none"> </div>


<input name="price_park_driver" type="hidden" class="sload_park_driver" id="main_check_open" style="width:60px; background:#FFFFFF" value="<? echo $arr[shop][price_park_driver];?>" />
                   
  <form action="" name="myform_main"  id="myform_main" method="post">
  
<?
 include("mod/content/menu/place.php");
?> 
 
     
<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tbody>
    <tr>
      <td valign="top"><table width="100%" cellspacing="2" cellpadding="1" >
    <tr bgcolor="#990000" height=25>
     <td width="50" align="center" bgcolor="#999999"><CENTER>
            <font color="#FFFFFF">แก้ไข</font>     
     </CENTER></td>
     <td width="50" align="center" bgcolor="#999999"><font color="#FFFFFF">ลบ</font></td>
      
     
     <td width="200" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">EN</font></td>
     
   
     <td width="200" height="30" align="center" bgcolor="#999999"><font color="#FFFFFF">TH</font></td>
     <td width="200" align="center" bgcolor="#999999"><font color="#FFFFFF">CN</font></td>
     <td width="250" align="center" bgcolor="#999999"><font color="#FFFFFF">ประเภทรายรับ</font></td>
     <td align="center" bgcolor="#999999"><font color="#FFFFFF">ติดต่อ</font></td>
     <td width="60" align="center" bgcolor="#999999"><font color="#FFFFFF">สถานะ</font></td>
    </tr>  
  <?
 
	$db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
 
$res[place] = $db->select_query("SELECT * FROM shopping_product   WHERE  sub='".$_GET[sub]."' ORDER BY  id ASC  ");
while($arr[place] = $db->fetch($res[place])){
 
 
 
	
	 
 $res[com] = $db->select_query("SELECT * FROM shopping_product_main WHERE id='".$_GET[main]."' ");
 $arr[main] = $db->fetch($res[com]);
 
 	 
 $res[type] = $db->select_query("SELECT * FROM plan_product_price_name WHERE id='".$arr[place][price_plan]."' ");
 $arr[type] = $db->fetch($res[type]);
 
 
 $res[type2] = $db->select_query("SELECT * FROM plan_product_price_name WHERE id='".$arr[place][price_plan_2]."' ");
 $arr[type2] = $db->fetch($res[type2]);
 
 $res[type3] = $db->select_query("SELECT * FROM plan_product_price_name WHERE id='".$arr[place][price_plan_3]."' ");
 $arr[type3] = $db->fetch($res[type3]);
 
 

 
 ///
 
 if($arr[place][price_list]==0){ 
 
 
 
 $res[country] = $db->select_query("SELECT * FROM web_country  ORDER BY  sort_country    ");
while($arr[country] = $db->fetch($res[country])){
 
 
  		$db->add_db('product_price_list_all',array(
		 
		"country"=>$arr[country][id], 
		"country_name"=>$arr[country][name_en], 
			"country_name_th"=>$arr[country][name_th], 
		 "sort_country"=>$arr[country][sort_country], 
	 	"status"=>$arr[country][status],   
		"product_id"=>$arr[place][id]
 
 
		));
		
		
		
	  $db->connectdb(DB_NAME_APP, DB_USERNAME, DB_PASSWORD);
        $db->update_db('shopping_product', array(
 
			  "price_list" =>1
 
		)," id='".$arr[place][id]."' ");

 
}
 
 
 }
 
 
 /////
 

			///////////////
 
 
 

	//Comment Icon
	if($arr[place][enable_comment]){
		$CommentIcon = " <IMG SRC=\"images/icon/suggest.gif\" WIDTH=\"13\" HEIGHT=\"9\" BORDER=\"0\" ALIGN=\"absmiddle\">";
	}else{
		$CommentIcon = "";
	}
			$bgcolor = ($i++ & 1) ? $bg1 : $bg2; 
 
?> 

 
 
     <tr  bgcolor='<?=$bgcolor?>'>
       <td height="30" align="center">
       
       
       
       
      
        <script>
	 
 
 
 $("#btn_menu_edit_place_<? echo $arr[place][id];?>").click(function(){
 
			 
 $('#topic_edit').html('แก้ไข <? echo $arr[place][topic_en];?>:<? echo $arr[project][topic_th];?>');
			 
  var url_page_type_<? echo $arr[place][id];?>= "go.php?name=content/load&file=place&op=sub_edit&id=<? echo $arr[place][id];?>&main=<? echo $arr[place][main];?>&sub=<? echo $arr[place][sub];?>";
 
  $('#show_data_page').load(url_page_type_<? echo $arr[place][id];?>);
 
 
	   });
	   
 
	   </script>
 
       
 
       <? echo $arr[sub][main];?>
       
     <a  id="btn_menu_edit_place_<? echo $arr[place][id];?>" >
       <i class="fa  fa-edit" style="width:40px; font-size:30px; color:#666666"  ></i>
       
       </a> 
     
     
     
   </td>
     <td height="30" align="center">
       
       
       
       
       <script>
		

			$( document ).ready(function() {
		
		
		$("#btn_menu_del_place_<? echo $arr[place][id];?>").click(function(){ 
  
  
	   swal({
		title: "<font style='font-size:28px'><b> คุณแน่ใจหรือไม่",
		text: "<font style='font-size:22px'>ว่าต้องการลบ <? echo $arr[place][topic_th];?>",
		type: "error",
		showCancelButton: true,
		animation:  false ,
		
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'ใช่',
		cancelButtonText: "ไม่ใช่",
		closeOnConfirm: true,
		closeOnCancel: true,
		html: true
	},
	function(isConfirm){
    if (isConfirm){
	 
 
///

 
  $.post('go.php?name=content/load&file=place&op=sub_del&id=<? echo $arr[place][id];?>',$('#myform').serialize(),function(response){
  $('#div_send_data_msg').html(response);  });  
  
 
  var url_page_type= "empty_style.php?name=content/load&file=place&main=<? echo $arr[place][main];?>&sub=<? echo $arr[place][sub];?>";
 
  $('#show_data_page').load(url_page_type);

///
 
 
	//  alert('dd');
    } else {
      swal("Cancelled", "", "error");
    }
	});
	   
	    

});

});

		
		
		 
		</script>
       
       
       
       
       
       
       
       <a  id="btn_menu_del_place_<? echo $arr[place][id];?>"><i class="fa  fa-trash" style="width:40px; font-size:30px; color:#FF0000"  ></i> 
         
         
         </a>
       
       
       
       
     </td>
     <td align="center">  
       <? echo $arr[place][topic_en];?></a></td>
         <td align="center">
           
           <? echo $arr[place][topic_th];?></a>  
           
         </td>
         <td align="center"> <? echo $arr[place][topic_cn];?> </td>
         <td>
   
         
 <style>
 .div-menu-price-plan{
  padding:5px;   border-radius: 5px; border: 1px solid #dadada;background-color:#FFFFFF;     margin-bottom: 5px; box-shadow: 0px  0px 0px #DADADA  ; margin-top: 5px;
 	 
 }
 
 
 
.checkbox-plan-1{ width:18px; height:18px; }
 .checkbox-plan-2{ width:18px; height:18px; }
.checkbox-plan-3{ width:18px; height:18px; }
 </style>    
         
         
         
         
         
         
         <script>
		 
		 
 
 $("#btn_menu_pay_plan_1_<? echo $arr[place][id];?>").click(function(){
 	 
 $('#topic_edit').html('ค่าตอบแทน> <? echo $arr[place][topic_th];?>');
			 
  var url_page_type= "go.php?name=content/load&file=price&op=sub_add&id=<? echo $arr[place][id];?>&sub=<? echo $arr[place][sub];?>&main=<? echo $arr[place][main];?>&plan_id=<? echo $arr[place][price_plan];?>&plan_number=1";
 
 $('#show_data_page').load(url_page_type);
  
	      });
	   
	   </script>
       
       
                <script>
	 
 
 
 $("#btn_menu_pay_plan_2_<? echo $arr[place][id];?>").click(function(){
 
			 
 $('#topic_edit').html('ค่าตอบแทน> <? echo $arr[place][topic_th];?>');
			 
  var url_page_type= "go.php?name=content/load&file=price&op=sub_add&id=<? echo $arr[place][id];?>&sub=<? echo $arr[place][sub];?>&main=<? echo $arr[place][main];?>&plan_id=<? echo $arr[place][price_plan_2];?>&plan_number=2";
 
 $('#show_data_page').load(url_page_type);
  
	      });
	   
	   </script>
         
         
 <script>
 
 $("#btn_menu_pay_plan_3_<? echo $arr[place][id];?>").click(function(){
 
			 
 $('#topic_edit').html('ค่าตอบแทน> <? echo $arr[place][topic_th];?>');
			 
  var url_page_type= "go.php?name=content/load&file=price&op=sub_add&id=<? echo $arr[place][id];?>&sub=<? echo $arr[place][sub];?>&main=<? echo $arr[place][main];?>&plan_id=<? echo $arr[place][price_plan_3];?>&plan_number=3";
 
 $('#show_data_page').load(url_page_type);
  
	      });
	   
	   </script>
         
         
		 
		<? if( $arr[place][price_plan]>0){ ?>
         
         
 
 
 
 
 
 
         
         
         <?
		 
		 
 	$db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
	
	
	$allplan_1 = $db->num_rows('plan_product_price_setting',"id","product_id=".$arr[place][id]." and plan_master=1");	
	
	
	if($allplan_1==0){ 
	
  		$db->add_db('plan_product_price_setting',array(
  	
		 "plan_id"=>$arr[place][price_plan],
		 "product_id"=>$arr[place][id],		 		 
		 "plan_master"=>1 
 
		
			));
			
			?>
            
           
         
      <script>
	 
 
 $("#all_place").click();
 
	   </script>        
           
           
           
           
            
            
            <?
			
			
			
	 		
	}
	
 
   
		 ?>
         
          <?
		  
		if($allplan_1>0){ 
	
 
 
  $res[open_1] = $db->select_query("SELECT * FROM plan_product_price_setting WHERE product_id='".$arr[place][id]."' and plan_id='".$arr[place][price_plan]."' and plan_master=1");
 $arr[open_1] = $db->fetch($res[open_1]);
 
 
 //echo $arr[open_1][id];
	 		
	}
	
		  
		  
		  
		  
		  if($arr[open_1][open_driver] == 1){
		  	$chk_1_driver = 'checked="checked"';
		  }
		  
		 else {
		  	$chk_1_driver = '';
		  }
 
		  
		  
		  
		   if($arr[open_1][open_counter] == 1){
		  	$chk_1_counter = 'checked="checked"';
		  }
		  	    else {
		  	$chk_1_counter = '';
		  }
 
		  
		  
		  
		  if($arr[open_1][open_all] == 1){
		  	$chk_1_all = 'checked="checked"';
		  }
		  
		    else {
		  	$chk_1_all = '';
		  }
 
 
 
 
		  ?>
          
          
 
          
         
 
<div class="div-menu-price-plan">
         
         
         
         <table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tbody>
    <tr>
      <td width="25">
      
      <a   id="btn_menu_pay_plan_1_<? echo $arr[place][id];?>" data-toggle="modal" data-target="#myModal_texts"  >  
         <i class="fa fa-gg-circle" style="width:20px; font-size:20px; color:#1CBBB4"></i> 
         
         </a></td>
      <td> <b><?  echo $arr[type][topic_th];?></td>
    </tr>
  </tbody>
</table>

 <table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tbody>
    <tr>
      <td><input setid="<?=$arr[open_1][id]?>"  plan="1"  mainplan="<? echo $arr[place][price_plan];?>"    opentype="open_driver"  name="open_driver_1_<? echo $arr[place][id];?>"  id="open_driver_1_<? echo $arr[place][id];?>"   type="checkbox" class="checkbox-plan-1"  value="1"  <?=$chk_1_driver?> /></td>
      <td>คนขับ</td>
      <td><input  setid="<?=$arr[open_1][id]?>" plan="1"  mainplan="<? echo $arr[place][price_plan];?>" opentype="open_counter"  name="open_counter_1_<? echo $arr[place][id];?>"  id="open_counter_1_<? echo $arr[place][id];?>"  type="checkbox" class="checkbox-plan-1"    <?=$chk_1_counter?>/></td>
      <td>เคาน์เตอร์</td>
      <td><input   setid="<?=$arr[open_1][id]?>" plan="1"   mainplan="<? echo $arr[place][price_plan];?>" opentype="open_all" name="open_all_1_<? echo $arr[place][id];?>"  id="open_all_1_<? echo $arr[place][id];?>"   type="checkbox" class="checkbox-plan-1"  value="1" <?=$chk_1_all?> /> </td>
      <td>สมาชิก</td>
    </tr>
  </tbody>
</table>

 
        <script>
	 
 
 
 $(".checkbox-plan-1").click(function(){
 
	 //alert($(this).attr('id'));
 
 
	  var data_plan = $(this).attr("plan");
	 var data_mainplan = $(this).attr("mainplan"); 
	  
	  
	   var data_type = $(this).attr("opentype");
	   
	     var data_id = $(this).attr("setid");
	 
 
///	 alert(data_id);
	 
	 if ($('#'+$(this).attr('id')).prop('checked')) {
		 
 $('#main_check_open').val(1);
    //blah blah
}
	  else  {
		  
	 $('#main_check_open').val(0);	  
		  
	  }
	 
	 
	 
	 
	

 	 
  var url_page_type_<? echo $arr[place][id];?>= "go.php?name=content/load&file=place&op=open&id=<? echo $arr[place][id];?>&main=<? echo $arr[place][main];?>&sub=<? echo $arr[place][sub];?>";
  
  url_page_type_<? echo $arr[place][id];?> =url_page_type_<? echo $arr[place][id];?>+"&plan="+data_plan;
  
  url_page_type_<? echo $arr[place][id];?> =url_page_type_<? echo $arr[place][id];?>+"&mainplan="+data_mainplan;
  
    url_page_type_<? echo $arr[place][id];?> =url_page_type_<? echo $arr[place][id];?>+"&type="+data_type;
	
	 url_page_type_<? echo $arr[place][id];?> =url_page_type_<? echo $arr[place][id];?>+"&status="+document.getElementById('main_check_open').value;
	 
	  url_page_type_<? echo $arr[place][id];?> =url_page_type_<? echo $arr[place][id];?>+"&setid="+data_id ;
  
 
 setTimeout(function () {
$('#save_data_open').load(url_page_type_<? echo $arr[place][id];?>);
 
}, 500); //w
 
 
 
  
 
 
	   });
	   
 
	   </script>







 
 
 </div>
 
 


      <? } ?>   
      
      
      		<? if( $arr[place][price_plan_2]>0){ ?>
            
            
            
            
             
         <?
		 
		 
 	$db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
	
	
	$allplan_2= $db->num_rows('plan_product_price_setting',"id","product_id=".$arr[place][id]." and plan_master=2");	
	
	
	if($allplan_2==0){ 
	
  		$db->add_db('plan_product_price_setting',array(
  	
		 "plan_id"=>$arr[place][price_plan_2],
		 "product_id"=>$arr[place][id],		 		 
		 "plan_master"=>2 
 
		
			));
			
?>	

         
      <script>
	 
 
 $("#all_place").click();
 
	   </script>      		
			
<?	} 
		 ?>
            
            
            
<?
		  
		if($allplan_2>0){ 
	

 
  $res[open_2] = $db->select_query("SELECT * FROM plan_product_price_setting WHERE product_id='".$arr[place][id]."' and plan_id='".$arr[place][price_plan_2]."' and plan_master=2");
 $arr[open_2] = $db->fetch($res[open_2]);
 
 
 
	 		
	}
	
		  
		  
		  
		  
		  if($arr[open_2][open_driver] == 1){
		  	$chk_2_driver = 'checked="checked"';
		  }
		  else {
		  	$chk_2_driver = '';
		  }
		  
		  
		  
		   if($arr[open_2][open_counter] == 1){
		  	$chk_2_counter = 'checked="checked"';
		  }
		  
	 else {
		  	$chk_2_counter = '';
		  }
		  
		  
		  if($arr[open_2][open_all] == 1){
		  	$chk_2_all = 'checked="checked"';
		  }
		  
	 else {
		  	$chk_2_all = '';
		  }
		  
 
 
		  ?>
            
            
            
            
            
       <div class="div-menu-price-plan">     
         
         
         <table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tbody>
    <tr>
      <td width="25"><a   id="btn_menu_pay_plan_2_<? echo $arr[place][id];?>" data-toggle="modal" data-target="#myModal_texts"  >  
     <i class="fa fa-gg-circle" style="width:20px; font-size:20px; color:#1CBBB4"></i> 
         
         </a></td>
      <td> <b><?  echo $arr[type2][topic_th];?></td>
    </tr>
  </tbody>
</table>


 <table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tbody>
    <tr>
      <td><input  setid="<?=$arr[open_2][id]?>" plan="2"  mainplan="<? echo $arr[place][price_plan_2];?>"    opentype="open_driver"  name="open_driver_2_<? echo $arr[place][id];?>"  id="open_driver_2_<? echo $arr[place][id];?>"   type="checkbox" class="checkbox-plan-2"  value="1" <?=$chk_2_driver?> /></td>
      <td>คนขับ</td>
      <td><input  setid="<?=$arr[open_2][id]?>" plan="2"  mainplan="<? echo $arr[place][price_plan_2];?>" opentype="open_counter"  name="open_counter_2_<? echo $arr[place][id];?>"  id="open_counter_2_<? echo $arr[place][id];?>"  type="checkbox" class="checkbox-plan-2"  <?=$chk_2_counter?> /></td>
      <td>เคาน์เตอร์</td>
      <td><input   setid="<?=$arr[open_2][id]?>" plan="2"   mainplan="<? echo $arr[place][price_plan_2];?>" opentype="open_all" name="open_all_2_<? echo $arr[place][id];?>"  id="open_all_2_<? echo $arr[place][id];?>"   type="checkbox" class="checkbox-plan-2"  value="1" <?=$chk_2_all?>/></td>
      <td>สมาชิก</td>
    </tr>
  </tbody>
</table>

 
        <script>
	 
 
 
 $(".checkbox-plan-2").click(function(){
 
	 //alert($(this).attr('id'));
 
 
	  var data_plan = $(this).attr("plan");
	 var data_mainplan = $(this).attr("mainplan"); 
	  
	  
	   var data_type = $(this).attr("opentype");
	 
	     var data_id = $(this).attr("setid");
	 
	 
	 if ($('#'+$(this).attr('id')).prop('checked')) {
		 
 $('#main_check_open').val(1);
    //blah blah
}
	  else  {
		  
	 $('#main_check_open').val(0);	  
		  
	  }
	 
	 
	 
	 
	

 	 
  var url_page_type_<? echo $arr[place][id];?>= "go.php?name=content/load&file=place&op=open&id=<? echo $arr[place][id];?>&main=<? echo $arr[place][main];?>&sub=<? echo $arr[place][sub];?>";
  
  url_page_type_<? echo $arr[place][id];?> =url_page_type_<? echo $arr[place][id];?>+"&plan="+data_plan;
  
  url_page_type_<? echo $arr[place][id];?> =url_page_type_<? echo $arr[place][id];?>+"&mainplan="+data_mainplan;
  
    url_page_type_<? echo $arr[place][id];?> =url_page_type_<? echo $arr[place][id];?>+"&type="+data_type;
	    url_page_type_<? echo $arr[place][id];?> =url_page_type_<? echo $arr[place][id];?>+"&setid="+data_id;
	
	 url_page_type_<? echo $arr[place][id];?> =url_page_type_<? echo $arr[place][id];?>+"&status="+document.getElementById('main_check_open').value;
  
 
 setTimeout(function () {
$('#save_data_open').load(url_page_type_<? echo $arr[place][id];?>);
 
}, 500); //w
 
 
	   });
	   
 
	   </script>
 



</div>

      <? } ?>   
      
      
            		<? if( $arr[place][price_plan_3]>0){ ?>
                    
                    
                      <?
		 
		 
 	$db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
	
	
	$allplan_3= $db->num_rows('plan_product_price_setting',"id","product_id=".$arr[place][id]." and plan_master=3");	
	
	
	if($allplan_3==0){ 
	
  		$db->add_db('plan_product_price_setting',array(
  	
		 "plan_id"=>$arr[place][price_plan_3],
		 "product_id"=>$arr[place][id],		 		 
		 "plan_master"=>3 
 
		
			));
			
		?>
        
                 
      <script>
	 
 
 $("#all_place").click();
 
	   </script>      
        <?	
			
			
	 		
	}
		
   
		 ?>
         
         <?
		  
		if($allplan_3>0){ 
	

 
  $res[open_3] = $db->select_query("SELECT * FROM plan_product_price_setting WHERE product_id='".$arr[place][id]."' and plan_id='".$arr[place][price_plan_3]."' and plan_master=3");
 $arr[open_3] = $db->fetch($res[open_3]);
 
	 		
	}
	
		  
		  
		  
		  
		  if($arr[open_3][open_driver] == 1){
		  	$chk_3_driver = 'checked="checked"';
		  }
		  
		  else {
		  	$chk_3_driver = '';
		  }
		  
		  
		  
		   if($arr[open_3][open_counter] == 1){
		  	$chk_3_counter = 'checked="checked"';
		  }
		  
		  else {
		  	$chk_3_counter = '';
		  }
		  
		  
		  
		  if($arr[open_3][open_all] == 1){
		  	$chk_3_all = 'checked="checked"';
		  }
		  
		  else {
		  	$chk_3_all = '';
		  }
		  
 
 
		  ?>
            
         
 <div class="div-menu-price-plan">
         
 <table width="100%" border="0" cellspacing="2" cellpadding="2">
  <tbody>
    <tr>
      <td width="25"><a   id="btn_menu_pay_plan_3_<? echo $arr[place][id];?>" data-toggle="modal" data-target="#myModal_texts"  >  
     <i class="fa fa-gg-circle" style="width:20px; font-size:20px; color:#1CBBB4"></i> 
         
         </a></td>
      <td> <b><?  echo $arr[type3][topic_th];?></td>
    </tr>
  </tbody>
</table>



 <table width="100%" border="0" cellspacing="3" cellpadding="3">
  <tbody>
    <tr>
      <td><input setid="<?=$arr[open_3][id]?>" plan="3"  mainplan="<? echo $arr[place][price_plan_3];?>"    opentype="open_driver"  name="open_driver_3_<? echo $arr[place][id];?>"  id="open_driver_3_<? echo $arr[place][id];?>"   type="checkbox" class="checkbox-plan-3"  value="1" <?=$chk_3_driver?>/></td>
      <td>คนขับ</td>
      <td><input  setid="<?=$arr[open_3][id]?>" plan="3"  mainplan="<? echo $arr[place][price_plan_3];?>" opentype="open_counter"  name="open_counter_3_<? echo $arr[place][id];?>"  id="open_counter_3_<? echo $arr[place][id];?>"  type="checkbox" class="checkbox-plan-3"  <?=$chk_3_counter?> /></td>
      <td>เคาน์เตอร์</td>
      <td><input   setid="<?=$arr[open_3][id]?>" plan="3"   mainplan="<? echo $arr[place][price_plan_3];?>" opentype="open_all" name="open_all_3_<? echo $arr[place][id];?>"  id="open_all_3_<? echo $arr[place][id];?>"   type="checkbox" class="checkbox-plan-3"  value="1"  <?=$chk_3_all?> /></td>
      <td>สมาชิก</td>
    </tr>
  </tbody>
</table>

 
        <script>
	 
 
 
 $(".checkbox-plan-3").click(function(){
 
	 //alert($(this).attr('id'));
 
 
	  var data_plan = $(this).attr("plan");
	 var data_mainplan = $(this).attr("mainplan"); 
	  
	  
	   var data_type = $(this).attr("opentype");
	 
    var data_id = $(this).attr("setid");
	 
	 
	 if ($('#'+$(this).attr('id')).prop('checked')) {
		 
 $('#main_check_open').val(1);
    //blah blah
}
	  else  {
		  
	 $('#main_check_open').val(0);	  
		  
	  }
	 
	 
	 
	 
	

 	 
  var url_page_type_<? echo $arr[place][id];?>= "go.php?name=content/load&file=place&op=open&id=<? echo $arr[place][id];?>&main=<? echo $arr[place][main];?>&sub=<? echo $arr[place][sub];?>";
  
  url_page_type_<? echo $arr[place][id];?> =url_page_type_<? echo $arr[place][id];?>+"&plan="+data_plan;
  
  url_page_type_<? echo $arr[place][id];?> =url_page_type_<? echo $arr[place][id];?>+"&mainplan="+data_mainplan;
  
    url_page_type_<? echo $arr[place][id];?> =url_page_type_<? echo $arr[place][id];?>+"&type="+data_type;
	
 url_page_type_<? echo $arr[place][id];?> =url_page_type_<? echo $arr[place][id];?>+"&setid="+data_id;
	
	
	 url_page_type_<? echo $arr[place][id];?> =url_page_type_<? echo $arr[place][id];?>+"&status="+document.getElementById('main_check_open').value;
  
 
 setTimeout(function () {
$('#save_data_open').load(url_page_type_<? echo $arr[place][id];?>);
 
}, 500); //w
 
 
	   });
	   
 
	   </script>







 
</div>



      <? } ?>   
         
         
         
         
         
         </td>
         <td align="center"><table width="100%" border="0" cellspacing="2" cellpadding="2">
           <tbody>
             <tr>
               <td width="30">      
               
               
               
               
               
               
               
               
                  <script>
	 
 
 $("#btn_menu_contact_<? echo $arr[place][id];?>").click(function(){
 
			 
 $('#topic_edit').html('แก้ไข <? echo $arr[place][topic_en];?>:<? echo $arr[project][topic_th];?>');
			 
  var url_page_type_<? echo $arr[place][id];?>= "go.php?name=content/load&file=contact&contact=<? echo $arr[place][id];?>&main=<? echo $arr[place][main];?>&sub=<? echo $arr[place][sub];?>";
 
  $('#show_data_page').load(url_page_type_<? echo $arr[place][id];?>);
 
 
	   });
	   
 
	   </script>
               
               
               
               
                <a   id="btn_menu_contact_<? echo $arr[place][id];?>" data-toggle="modal" data-target="#myModal_textss"  ><i class="fa  fa-user" style="width:30px; font-size:30px; color:#448CCB"  ></i>  </a></td>
               <td><?
 include("mod/content/load/list/contact.php");
?> 
 </td>
             </tr>
           </tbody>
         </table></td>
         <td align="center" id="">
           
           
           <script>
		

			$( document ).ready(function() {
				
		
		
		$("#btn_menu_status_place_<? echo $arr[place][id];?>").click(function(){ 
  
  
  	  
 if(document.getElementById('status_<? echo $arr[place][id];?>').value=="1") {
 
 
  
	   swal({
		title: "<font style='font-size:28px'><b> คุณแน่ใจหรือไม่",
		text: "<font style='font-size:22px'>ว่าต้องการปิด <? echo $arr[place][topic_th];?>",
		type: "error",
		showCancelButton: true,
		animation:  false ,
		
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'ใช่',
		cancelButtonText: "ไม่ใช่",
		closeOnConfirm: true,
		closeOnCancel: true,
		html: true
	},
	function(isConfirm){
    if (isConfirm){
	 
 
///



 
  $.post('go.php?name=content/load&file=place&op=status_close&id=<? echo $arr[place][id];?>&staus=0',$('#myform').serialize(),function(response){
  $('#div_send_data_msg').html(response);  });  
  
 
    setTimeout(function () {
  var url_page_type= "empty_style.php?name=content/load&file=place&main=<? echo $arr[place][main];?>&sub=<? echo $arr[place][sub];?>";
 
  $('#show_data_page').load(url_page_type);
 
}, 1000); //w
 
  


///
 
 
	//  alert('dd');
    } else {
      swal("Cancelled", "", "error");
    }
	});
	   
	    
 }
		
		
	
//////////

  	  
 if(document.getElementById('status_<? echo $arr[place][id];?>').value=="0") {
 
 
  
	   swal({
		title: "<font style='font-size:28px'><b> คุณแน่ใจหรือไม่",
		text: "<font style='font-size:22px'>ว่าต้องการเปิด  <? echo $arr[place][topic_th];?>",
		type: 'info',
		showCancelButton: true,
		animation:  false ,
		
		confirmButtonColor: '#DD6B55',
		confirmButtonText: 'ใช่',
		cancelButtonText: "ไม่ใช่",
		closeOnConfirm: true,
		closeOnCancel: true,
		html: true
	},
	function(isConfirm){
    if (isConfirm){
	 
 
///
 
 
  $.post('go.php?name=content/load&file=place&op=status_open&id=<? echo $arr[place][id];?>&staus=1',$('#myform').serialize(),function(response){
  $('#div_send_data_msg').html(response);  });  
  
 
    setTimeout(function () {
  var url_page_type= "empty_style.php?name=content/load&file=place&main=<? echo $arr[place][main];?>&sub=<? echo $arr[place][sub];?>";
 
  $('#show_data_page').load(url_page_type);
 
}, 1000); //w
 
 

///
 
 
	//  alert('dd');
    } else {
      swal("Cancelled", "", "error");
    }
	});
	   
	    
 }
		
	
	
	
	
	
	
	
	
		
		
		
		
		
		
		

});

});

		
		
		 
		</script>
           
           
           
           <input class="form-control" name="status_<? echo $arr[place][id];?>" type="hidden"  id="status_<? echo $arr[place][id];?>" style="width:500px; background:#FFFFFF" value="<? echo $arr[place][status];?>" />
           
           
           
           
           
           
           
           
           
           <a id="btn_menu_status_place_<? echo $arr[place][id];?>">
             
             
             <? if( $arr[place][status] ==1){ ?>
             
             <div id="place_status_<? echo $arr[place][id];?>">
               
               <font color="#FF0000" class="font-24">เปิด</font></div>
             
             <? } ?>
             
             
             <? if( $arr[place][status] <>1){ ?>
             
             <div id="place_status_<? echo $arr[place][id];?>">
               <font color="#000000" class="font-24"> ปิด</div>
             
             <? } ?>
             
             </font>
             
             </a>  
           
           &nbsp;    
           
           
           
           
           
           
         </td>
 </tr>
	  <TR>
		  <TD colspan="29" height="1" class="dotline"></TD>
	  </TR>
  <?
 } 
?>
   </table></td>
    </tr>
  </tbody>
</table>

   <div align="right" style="display:none">
   
   <br>
  <button type="button" class="btn btn-primary"   id="submit_data_sort" >
          <span id="txt_btn_save">
           บันทึกข้อมูล
          </span>
        </button>
  
<script>
 $("#submit_data_sort").click(function(){
 
  $.post('empty_style.php?name=admin/chat/admin/message/load&file=all&op=transferproduct_sort',$('#myform_main').serialize(),function(response){
  $('#div_send_data_msg').html(response);  });
 
  	  var url_page<? echo $_GET[type_sub];?> = "empty_style.php?name=admin/chat/admin/message/load&file=all";
	  url_page<? echo $_GET[type_sub];?>=url_page<? echo $_GET[type_sub];?>+"&type_sub=<? echo $_GET[type_sub];?>";
	 
      $('#show_data_page').load(url_page<? echo $_GET[type_sub];?>);
  
  
  
  /*
     $( document ).ready(function() {
	   
	   
	  var url_pagesub<? echo $_GET[sub];?> = "empty_style.php?name=admin/chat/admin/message/load&file=listsub&maintype=<? echo $_GET[sub];?>";
	 

	 
      $('#td_load_sub<? echo $_GET[sub];?>').load(url_pagesub<? echo $_GET[sub];?>);
	  });
  */
  
   
  
			   });
			  </script>
			  
    
  
   <input type="hidden" name="ACTION" value="transferproduct_del">
   <!--
 <input type="submit" class="myButton" value="delete" onclick="return delConfirm(document.myform)">  -->
   
   
   </div>
   </form> 
  <?
 
}
 ?>
 
 
 
 


<? 
if($_GET[op] == "sub_add"){
	//////////////////////////////////////////// ó Form
 
		$db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
 $res[project] = $db->select_query("SELECT * FROM shopping_product  WHERE id='".$_GET[id]."' ");
 $arr[project] = $db->fetch($res[project]);
		
		
		
 $db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
$res[projectmain] = $db->select_query("SELECT * FROM shopping_product_main where   id=".$_GET[main]."  ");
$arr[projectmain] = $db->fetch($res[projectmain]);
 
 
 $db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
$res[projectsub] = $db->select_query("SELECT * FROM shopping_product_sub where   id=".$_GET[sub]."  ");
$arr[projectsub] = $db->fetch($res[projectsub]);
 
 
 
 
?>
  <FORM NAME="myform"   id="myform"   enctype="multipart/form-data">
  <?
 include("mod/content/menu/place.php");
?> 
  
  <table width="100%" border="0" cellspacing="0" cellpadding="3">
      <tr>
        <td width="100%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tbody>
            <tr>
              <td width="700" valign="top"><table width="100%" border="0" cellspacing="3" cellpadding="3">
                <tr>
                  <td width="150"><strong>หมวดหมู่ : </strong></td>
                  <td style="font-size:18px;"><?=$arr[projectmain][topic_th]?></td>
                </tr>
                <tr>
                  <td><strong>ประเภท : </strong></td>
                  <td style="font-size:18px;"><? echo $arr[projectsub][topic_en];?>
                    <input class="form-control" name="sub" type="hidden"  id="sub" style="width:500px; background:#FFFFFF" value="<?=$_GET[sub]?>" />
                    <input class="form-control"  name="main" type="hidden"  id="main" style="width:500px; background:#FFFFFF" value="<?=$_GET[main]?>" /></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFDE9"><strong>ค่าตอบแทน 1 : </strong></td>
                  <td bgcolor="#FFFDE9" style="font-size:16px;">
                  
                  
                  <select  class="form-control" name="price_plan" id="price_plan" style="width:500px;; font-size:16px; padding:5px; height:40px" >
                    <option value="">- เลือกประเภทค่าตอบแทน -</option>
                    <?
                                  $db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
 
                                    $res[category] = $db->select_query("SELECT * FROM plan_product_price_name ORDER BY id  limit 100 ");
                      
                                  while($arr[category] = $db->fetch($res[category])) {
 
                                    echo "<option value=\"".$arr[category][id]."\"";
                                    if($arr[category][id] ==$arr[project][price_plan]) {
                                      echo " Selected";
                                    }
                                    echo ">".$arr[category][topic_th]." </option>";
                                  }
                                  $db->closedb ();
                                  ?>
                  </select></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFDE9"><strong>ค่าตอบแทน 2 : </strong></td>
                  <td bgcolor="#FFFDE9" style="font-size:16px;"><select  class="form-control" name="price_plan_2" id="price_plan_2" style="width:500px;; font-size:16px; padding:5px; height:40px" >
                    <option value="">- เลือกประเภทค่าตอบแทน -</option>
                    <?
                                  $db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
 
                                    $res[category] = $db->select_query("SELECT * FROM plan_product_price_name ORDER BY id  limit 100 ");
                      
                                  while($arr[category] = $db->fetch($res[category])) {
 
                                    echo "<option value=\"".$arr[category][id]."\"";
                                    if($arr[category][id] ==$arr[project][price_plan]) {
                                      echo " Selected";
                                    }
                                    echo ">".$arr[category][topic_th]." </option>";
                                  }
                                  $db->closedb ();
                                  ?>
                  </select></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFDE9"><strong>ค่าตอบแทน 3 : </strong></td>
                  <td bgcolor="#FFFDE9" style="font-size:16px;"><select  class="form-control" name="price_plan_3" id="price_plan3" style="width:500px;; font-size:16px; padding:5px; height:40px" >
                    <option value="">- เลือกประเภทค่าตอบแทน -</option>
                    <?
                                  $db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
 
                                    $res[category] = $db->select_query("SELECT * FROM plan_product_price_name ORDER BY id  limit 100 ");
                      
                                  while($arr[category] = $db->fetch($res[category])) {
 
                                    echo "<option value=\"".$arr[category][id]."\"";
                                    if($arr[category][id] ==$arr[project][price_plan]) {
                                      echo " Selected";
                                    }
                                    echo ">".$arr[category][topic_th]." </option>";
                                  }
                                  $db->closedb ();
                                  ?>
                  </select></td>
                </tr>
                <tr>
                  <td><strong>ชื่อ EN : </strong></td>
                  <td><input class="form-control" name="topic_en" type="text"  id="topic_en" style="width:500px; background:#FFFFFF" value="<? echo $arr[project][topic_en];?>" /></td>
                </tr>
                <tr>
                  <td><strong>ชื่อ TH :</strong></td>
                  <td><input class="form-control" name="topic_th" type="text"  id="topic_th" style="width:500px; background:#FFFFFF" value="<? echo $arr[project][topic_th];?>" /></td>
                </tr>
                <tr>
                  <td><strong>ชื่อ CN :</strong></td>
                  <td><input class="form-control"  name="topic_cn" type="text"  id="topic_cn" style="width:500px; background:#FFFFFF" value="<? echo $arr[project][topic_cn];?>" /></td>
                </tr>
                <tr>
                  <td><strong>จังหวัด :</strong></td>
                  <td><select  class="form-control" name="province" id="province" style="width:500px;; font-size:16px; padding:5px; height:40px" >
                    <option value="">- เลือกจังหวัด -</option>
                    <?
                                  $db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
                         
                                    //$res[category] = $db->select_query("SELECT * FROM ".TB_transferplace." where pro < 4 and status = 1 ORDER BY topic ");
                                    $res[category] = $db->select_query("SELECT * FROM web_province ORDER BY id  limit 100 ");
                      
                                  while($arr[category] = $db->fetch($res[category])) {
 
                                    echo "<option value=\"".$arr[category][id]."\"";
                                    if($arr[category][id] ==$arr[project][province]) {
                                      echo " Selected";
                                    }
                                    echo ">".$arr[category][name_th]." </option>";
                                  }
                                  $db->closedb ();
                                  ?>
                    </select></td>
                </tr>
                <tr>
                  <td><strong>ที่อยู่ :</strong></td>
                  <td><textarea class="form-control" name="address" rows="3"  id="address" style="width:500px; background:#FFFFFF"></textarea></td>
                </tr>
                <tr>
                  <td><strong>Link แผนที่ :</strong></td>
                  <td><input class="form-control" name="map" type="text"  id="map" style="width:500px; background:#FFFFFF" value="<? echo $arr[project][map];?>" /></td>
                </tr>
                <tr style="display:none">
                  <td><strong>แผนที่ :</strong></td>
                  <td>ละติดจูด&nbsp;
                    <input class="form-control" name="lat" type="text"  id="lat" style="width:120px; background:#FFFFFF" value="<? echo $arr[project][start_time];?>" />
                    &nbsp; ลองติจูด&nbsp;
                    <input  class="form-control"name="lng" type="text"  id="lng" style="width:120px; background:#FFFFFF" value="<? echo $arr[project][finish_time];?>" /></td>
                </tr>
                <tr>
                  <td><strong>เบอร์โทรศัพท์ :</strong></td>
                  <td><input class="form-control" name="phone" type="text"  id="phone" style="width:500px; background:#FFFFFF" value="<? echo $arr[project][phone];?>" /></td>
                </tr>
                <tr>
                  <td><strong>อีเมล์ :</strong></td>
                  <td><input class="form-control" name="email" type="text"  id="email" style="width:500px; background:#FFFFFF" value="<? echo $arr[project][email];?>" />
                    </td>
                </tr>
                <tr>
                  <td><strong>เวลาทำการ :</strong></td>
                  <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                      <tr>
                        <td width="60">เปิด</td>
                        <td width="80"><input class="form-control" name="start_time" type="text"   id="start_time" style="width:70px; background:#FFFFFF" value="<? echo $arr[project][start_time];?>" /></td>
                        <td width="60">ปิด&nbsp;</td>
                        <td><input class="form-control" name="finish_time" type="text"  id="finish_time" style="width:70px; background:#FFFFFF" value="<? echo $arr[project][finish_time];?>" /></td>
                      </tr>
                    </tbody>
                  </table></td>
                </tr>
                <tr>
                  <td><strong>เวลาทำการ :</strong></td>
                  <td><table width="500" border="0" cellspacing="2" cellpadding="2">
                    <tr>
                      <td width="15"><input name="Sun" type="checkbox" class="checkbox-plan"  value="1" checked="checked" /></td>
                      <td width="40">Sun</td>
                      <td width="15"><input name="Mon" type="checkbox" class="checkbox-plan"  value="1" checked="checked" /></td>
                      <td width="40">Mon</td>
                      <td width="15"><input name="Tue" type="checkbox" class="checkbox-plan"  value="1" checked="checked" /></td>
                      <td width="40">Tue</td>
                      <td width="15"><input name="Wed" type="checkbox" class="checkbox-plan"  value="1" checked="checked" /></td>
                      <td width="40">Wed</td>
                      <td width="15"><input name="Thu" type="checkbox" class="checkbox-plan"  value="1" checked="checked" /></td>
                      <td width="40">Thu</td>
                      <td width="15"><input name="Fri" type="checkbox" class="checkbox-plan"  value="1" checked="checked" /></td>
                      <td width="40">Fri</td>
                      <td width="15"><input name="Sat" type="checkbox" class="checkbox-plan"  value="1" checked="checked" /></td>
                      <td>Sat</td>
                    </tr>
                  </table></td>
                </tr>
                <tr>
                  <td>&nbsp;</td>
                  <td><button type="button" class="btn btn-primary btn-lg"   id="submit_data" > <span id="txt_btn_save2"> บันทึกข้อมูล </span> </button>
                    <script>
  $("#submit_data").click(function(){
	  
	  
  if(document.getElementById('topic_th').value=="") {
alert('กรุณากรอกชื่อภาษาไทย'); 
document.getElementById('topic_th').focus() ; 
return false ;
}

	  
	  
 if(document.getElementById('start_time').value=="") {
alert('กรุณากรอกเวลาเปิด'); 
document.getElementById('start_time').focus() ; 
return false ;
}

 if(document.getElementById('finish_time').value=="") {
alert('กรุณากรอกเวลาปิด'); 
document.getElementById('finish_time').focus() ; 
return false ;
}


 if(document.getElementById('province').value=="") {
alert('กรุณาเลือกจังหวัด'); 
document.getElementById('province').focus() ; 
return false ;
}




 if(document.getElementById('address').value=="") {
alert('กรุณากรอกที่อยู่'); 
document.getElementById('address').focus() ; 
return false ;
}

 if(document.getElementById('phone').value=="") {
alert('กรุณากรอกเบอร์โทรศัพท์'); 
document.getElementById('phone').focus() ; 
return false ;
}


	  
	  
	  
	  
	  
	  
	  
	  
	  
	  
				 
 
 		 
  $.post('go.php?name=content/load&file=place&op=sub_add_action&id=<?=$_GET[id];?>&main=<?=$_GET[main];?>&sub=<?=$_GET[sub];?>',$('#myform').serialize(),function(response){
  $('#div_send_data_msg').html(response);  });
  
  
 
   var url_page_type= "go.php?name=content/load&file=place&main=<?=$_GET[main];?>&sub=<?=$_GET[sub];?>";
	  
 
  $('#show_data_page').load(url_page_type);
	  
	  
  
  
			   });
			    </script></td>
                </tr>
              </table></td>
              <td valign="top"><table width="100%" border="0" cellspacing="3" cellpadding="3">
                <tbody>
                  <tr>
                    <td width="120" valign="middle"><strong>โลโก้ : </strong></td>
                    <td valign="top"> 
                    
                    
            <div class="<?= $coldata?>">
 
 <div class="take_photo" ><center>
 
 
 

<i class="fa  fa-camera take-photo-icon"  id="icon_camera_id_logo"></i><br>
เลือกภาพถ่าย
<div style="padding:5px;">
  
  <div class="progress" style="width:100%;;border-radius:8px; margin-top: 10px; border:none " id="area_image_album_load_main">
  <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="40"
  aria-valuemin="0" aria-valuemax="100" id="area_image_album_load_id_logo" style="width:0%;border-radius:5px;border:none">
      </div>
  </div>
  
  
  </div>
    
    

    

 <img
 
   <? if($_GET[id]){ ?>

  src="../data/fileupload/store/register/<?=$arr[web_driver_edit][code];?>_id_logo.jpg" 

<? }  ?>
 
 
 
 
 
  id="image_id_logo" name="image_id_logo"  style="width:300px; padding:5px; margin-top:-20px;border-radius:15px; " />

</div>
 
 
  
    </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    </td>
                  </tr>
                  <tr>
                    <td><strong>โบรชัวร์ : </strong></td>
                    <td><div class="<?= $coldata?>">
 
 <div class="take_photo" ><center>
 
 
 

<i class="fa  fa-camera take-photo-icon"  id="icon_camera_id_book"></i><br>

เลือกโบรชัวร์ 1

<div style="padding:5px;">
  
  <div class="progress" style="width:100%;;border-radius:8px; margin-top: 10px; border:none " id="area_image_album_load_main">
  <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="40"
  aria-valuemin="0" aria-valuemax="100" id="area_image_album_load_id_book" style="width:0%;border-radius:5px;border:none">
      </div>
  </div>
  
  
  </div>
    
    

    

 <img
 
   <? if($_GET[id]){ ?>

  src="../data/fileupload/store/register/<?=$arr[web_driver_edit][code];?>_id_book.jpg" 

<? }  ?>
 
 
 
 
  id="image_id_book" name="image_id_book"  style="width:300px; padding:5px; margin-top:-20px;border-radius:15px; " />

</div>
 
 
  
    </div>
    
    
    
    
 
    <div class="<?= $coldata?>">
 
 <div class="take_photo" ><center>
    
    
<i class="fa  fa-camera take-photo-icon"  id="icon_camera_id_book_2"></i><br>

เลือกโบรชัวร์ 2

<div style="padding:5px;">
  
  <div class="progress" style="width:100%;;border-radius:8px; margin-top: 10px; border:none " id="area_image_album_load_main">
  <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="40"
  aria-valuemin="0" aria-valuemax="100" id="area_image_album_load_id_book_2" style="width:0%;border-radius:5px;border:none">
      </div>
  </div>
  
  
  </div>
    
    

    

 <img
 
   <? if($_GET[id]){ ?>

  src="../data/fileupload/store/register/<?=$arr[web_driver_edit][code];?>_id_book_2.jpg" 

<? }  ?>
 
 
 
 
  id="image_id_book_2" name="image_id_book_2"  style="width:300px; padding:5px; margin-top:-20px;border-radius:15px; " />

</div>
 
 
  
    </div>
    
 
 
 
 <div class="<?= $coldata?>">
 
 <div class="take_photo" ><center>
    
<i class="fa  fa-camera take-photo-icon"  id="icon_camera_id_book_3"></i><br>

เลือกโบรชัวร์ 3

<div style="padding:5px;">
  
  <div class="progress" style="width:100%;;border-radius:8px; margin-top: 10px; border:none " id="area_image_album_load_main">
  <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="40"
  aria-valuemin="0" aria-valuemax="100" id="area_image_album_load_id_book_3" style="width:0%;border-radius:5px;border:none">
      </div>
  </div>
  
  
  </div>
    
    

    

 <img
 
   <? if($_GET[id]){ ?>

  src="../data/fileupload/store/register/<?=$arr[web_driver_edit][code];?>_id_book_3.jpg" 

<? }  ?>
 
 
 
 
  id="image_id_book_3" name="image_id_book_3"  style="width:300px; padding:5px; margin-top:-20px;border-radius:15px; " />

</div>
 
 
  
    </div>
    
    
    
    
                    
                    
                    
                    
                    
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>    <input class="form-control" type="hidden" name="check_photo_id_logo" id="check_photo_id_logo"   onkeypress="PasswordEnter(this,event)"   value="0" >
    
    
     <input class="form-control" type="hidden" name="check_photo_id_book" id="check_photo_id_book"   onkeypress="PasswordEnter(this,event)"   value="0" ><div style="display:none">
     
     
          <input class="form-control" type="hidden" name="check_photo_id_book_2" id="check_photo_id_book_2"   onkeypress="PasswordEnter(this,event)"   value="0" ><div style="display:none">
          
          
          <input class="form-control" type="hidden" name="check_photo_id_book_3" id="check_photo_id_book_3"   onkeypress="PasswordEnter(this,event)"   value="0" ><div style="display:none">
     
     
 
 <?  include ("mod/content/photo/upload_car_pic.php");?>
 
 </div>
 
 <br>
 
  <?
 $rand = substr(str_shuffle('123456789012345678901234567890'),0,30);
 
 ?>
 




 
 

 
 
      <input class="form-control" type="hidden" name="check_code" id="check_code"   onkeypress="PasswordEnter(this,event)"   value="<?=$rand ?>" >
  
   <input class="form-control" type="hidden" name="upload_pic_type" id="upload_pic_type"  required="true" onkeypress="PasswordEnter(this,event)"   value="" >  
  
  
  
 <script>

 
    
        /////////  id driving
 $("#icon_camera_id_logo").click(function(){  
 
 
  
  document.getElementById('upload_pic_type').value='id_logo';
 
 
  $("#load_chat_camera").click(); 
  
  });
  
  
          /////////  id driving
 $("#icon_camera_id_book").click(function(){  
 
  
  document.getElementById('upload_pic_type').value='id_book';
 
 
  $("#load_chat_camera").click(); 
  
  });
  
  
  
  
  
   $("#icon_camera_id_book_2").click(function(){  
 
  
  document.getElementById('upload_pic_type').value='id_book_2';
 
 
  $("#load_chat_camera").click(); 
  
  });
  
  
  
  
   $("#icon_camera_id_book_3").click(function(){  
 
  
  document.getElementById('upload_pic_type').value='id_book_3';
 
 
  $("#load_chat_camera").click(); 
  
  });
  
 
  
  
  
  
  </script></td>
                  </tr>
                </tbody>
              </table></td>
            </tr>
          </tbody>
        </table></td>
        </tr>
    </table>
  
</FORM>
  
<?
 
}


?>


 
 
 
 
 
 <?
 
 
 if($_GET[op] == "sub_edit"){
	//////////////////////////////////////////// ó Form
 
		//֧
		$db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
 $res[project] = $db->select_query("SELECT * FROM shopping_product  WHERE id='".$_GET[id]."' ");
 $arr[project] = $db->fetch($res[project]);
		
		
		
 $db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
$res[projectmain] = $db->select_query("SELECT * FROM shopping_product_main where   id=".$_GET[main]."  ");
$arr[projectmain] = $db->fetch($res[projectmain]);
 
 
 $db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
$res[projectsub] = $db->select_query("SELECT * FROM shopping_product_sub where   id=".$_GET[sub]."  ");
$arr[projectsub] = $db->fetch($res[projectsub]);
 
 
?>
   
<FORM NAME="myform" id="myform"   enctype="multipart/form-data">
<?
 include("mod/content/menu/place.php");
?> 

    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="3">
      <tr>
        <td width="100%"><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tbody>
            <tr>
              <td width="700" valign="top"><table width="100%" border="0" cellspacing="3" cellpadding="3">
                <tr>
                  <td><strong>หมวดหมู่ : </strong></td>
                  <td style="font-size:18px;"><?=$arr[projectmain][topic_th]?></td>
                </tr>
                <tr>
                  <td><strong>ประเภท : </strong></td>
                  <td style="font-size:18px;"><? echo $arr[projectsub][topic_en];?>
                    <input name="sub" type="hidden"  id="sub" style="width:500px; background:#FFFFFF" value="<?=$_GET[sub]?>" />
                    <input name="main" type="hidden"  id="main" style="width:500px; background:#FFFFFF" value="<?=$_GET[main]?>" /></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFDE9"><strong>ค่าตอบแทน 1: </strong></td>
                  <td bgcolor="#FFFDE9" style="font-size:16px;"><select  class="form-control" name="price_plan" id="price_plan" style="width:500px;; font-size:16px; padding:5px; height:40px" >
                    <option value="">- เลือกประเภทค่าตอบแทน -</option>
                    <?
                                  $db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
 
                                    $res[category] = $db->select_query("SELECT * FROM plan_product_price_name ORDER BY id  limit 100 ");
                      
                                  while($arr[category] = $db->fetch($res[category])) {
 
                                    echo "<option value=\"".$arr[category][id]."\"";
                                    if($arr[category][id] ==$arr[project][price_plan]) {
                                      echo " Selected";
                                    }
                                    echo ">".$arr[category][topic_th]." </option>";
                                  }
                                  $db->closedb ();
                                  ?>
                  </select></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFDE9"><strong>ค่าตอบแทน 2: </strong></td>
                  <td bgcolor="#FFFDE9" style="font-size:16px;"><select  class="form-control" name="price_plan_2" id="price_plan4" style="width:500px;; font-size:16px; padding:5px; height:40px" >
                    <option value="">- เลือกประเภทค่าตอบแทน -</option>
                    <?
                                  $db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
 
                                    $res[category] = $db->select_query("SELECT * FROM plan_product_price_name ORDER BY id  limit 100 ");
                      
                                  while($arr[category] = $db->fetch($res[category])) {
 
                                    echo "<option value=\"".$arr[category][id]."\"";
                                    if($arr[category][id] ==$arr[project][price_plan_2]) {
                                      echo " Selected";
                                    }
                                    echo ">".$arr[category][topic_th]." </option>";
                                  }
                                  $db->closedb ();
                                  ?>
                  </select></td>
                </tr>
                <tr>
                  <td bgcolor="#FFFDE9"><strong>ค่าตอบแทน 3: </strong></td>
                  <td bgcolor="#FFFDE9" style="font-size:16px;"><select  class="form-control" name="price_plan_3" id="price_plan5" style="width:500px;; font-size:16px; padding:5px; height:40px" >
                    <option value="">- เลือกประเภทค่าตอบแทน -</option>
                    <?
                                  $db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
 
                                    $res[category] = $db->select_query("SELECT * FROM plan_product_price_name ORDER BY id  limit 100 ");
                      
                                  while($arr[category] = $db->fetch($res[category])) {
 
                                    echo "<option value=\"".$arr[category][id]."\"";
                                    if($arr[category][id] ==$arr[project][price_plan_3]) {
                                      echo " Selected";
                                    }
                                    echo ">".$arr[category][topic_th]." </option>";
                                  }
                                  $db->closedb ();
                                  ?>
                  </select></td>
                </tr>
                <tr>
                  <td><strong>ชื่อ EN : </strong></td>
                  <td><input  class="form-control" name="topic_en" type="text"  id="topic_en" style="width:500px; background:#FFFFFF" value="<? echo $arr[project][topic_en];?>" /></td>
                </tr>
                <tr>
                  <td><strong>ชื่อ TH :</strong></td>
                  <td><input class="form-control" name="topic_th" type="text"  id="topic_th" style="width:500px; background:#FFFFFF" value="<? echo $arr[project][topic_th];?>" /></td>
                </tr>
                <tr>
                  <td><strong>ชื่อ CN :</strong></td>
                  <td><input class="form-control"name="topic_cn" type="text"  id="topic_cn" style="width:500px; background:#FFFFFF" value="<? echo $arr[project][topic_cn];?>" /></td>
                </tr>
                <tr>
                  <td><strong>จังหวัด :</strong></td>
                  <td><select  class="form-control" name="province" id="province" style="width:500px;; font-size:16px; padding:5px; height:40px"  >
                    <option value="">- เลือกจังหวัด -</option>
                    <?
                                  $db->connectdb(DB_NAME,DB_USERNAME,DB_PASSWORD);
                         
                                    //$res[category] = $db->select_query("SELECT * FROM ".TB_transferplace." where pro < 4 and status = 1 ORDER BY topic ");
                                    $res[category] = $db->select_query("SELECT * FROM web_province ORDER BY id  limit 100 ");
                      
                                  while($arr[category] = $db->fetch($res[category])) {
 
                                    echo "<option value=\"".$arr[category][id]."\"";
                                    if($arr[category][id] ==$arr[project][province]) {
                                      echo " Selected";
                                    }
                                    echo ">".$arr[category][name_th]." </option>";
                                  }
                                  $db->closedb ();
                                  ?>
                    </select></td>
                </tr>
                <tr>
                  <td><strong>ที่อยู่ :</strong></td>
                  <td><textarea name="address" rows="3" class="form-control" id="address" style="width:500px; background:#FFFFFF"><?=$arr[project][address];?>
              </textarea></td>
                </tr>
                <tr>
                  <td><strong>Link แผนที่ :</strong></td>
                  <td><input class="form-control" name="map" type="text"  id="map" style="width:500px; background:#FFFFFF" value="<? echo $arr[project][map];?>" /></td>
                </tr>
                <tr style="display:none">
                  <td><strong>แผนที่ :</strong></td>
                  <td>ละติดจูด&nbsp;
                    <input  class="form-control" name="lat" type="text"  id="lat" style="width:120px; background:#FFFFFF" value="<? echo $arr[project][lat];?>" />
                    &nbsp; ลองติจูด&nbsp;
                    <input  class="form-control" name="lng" type="text"  id="lng" style="width:120px; background:#FFFFFF" value="<? echo $arr[project][lng];?>" /></td>
                </tr>
                <tr>
                  <td><strong>เบอร์โทรศัพท์ :</strong></td>
                  <td><input  class="form-control" name="phone" type="text"  id="phone" style="width:500px; background:#FFFFFF" value="<? echo $arr[project][phone];?>" /></td>
                </tr>
                <tr>
                  <td><strong>อีเมล์ :</strong></td>
                  <td><input  class="form-control" name="email" type="text"  id="email" style="width:500px; background:#FFFFFF" value="<? echo $arr[project][email];?>" /></td>
                </tr>
                <tr>
                  <td><strong>เวลาทำการ :</strong></td>
                  <td>
                  
                  
                  
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tbody>
                      <tr>
                        <td width="60">เปิด</td>
                        <td width="80"><input class="form-control" name="start_time" type="text"   id="start_time" style="width:70px; background:#FFFFFF" value="<? echo $arr[project][start_time];?>" /></td>
                        <td width="60">ปิด&nbsp;</td>
                        <td><input class="form-control" name="finish_time" type="text"  id="finish_time" style="width:70px; background:#FFFFFF" value="<? echo $arr[project][finish_time];?>" /></td>
                      </tr>
                    </tbody>
                  </table>

                  
                  </td>
                </tr>
                <tr>
                  <td><strong>เวลาทำการ :</strong></td>
                  <td> <?
		  if($arr[project][open_Sun] == 1){
		  	$chk_Sun = 'checked="checked"';
		  }
		  if($arr[project][open_Mon] == 1){
		  	$chk_Mon = 'checked="checked"';
		  }
		  if($arr[project][open_Tue] == 1){
		  	$chk_Tue = 'checked="checked"';
		  }
		  if($arr[project][open_Wed] == 1){
		  	$chk_Wed = 'checked="checked"';
		  }
		  if($arr[project][open_Thu] == 1){
		  	$chk_Thu = 'checked="checked"';
		  }
		  if($arr[project][open_Fri] == 1){
		  	$chk_Fri = 'checked="checked"';
		  }
		  if($arr[project][open_Sat] == 1){
		  	$chk_Sat = 'checked="checked"';
		  }
		  ?>
		  <table width="500" border="0" cellspacing="2" cellpadding="2">
              <tr>
                <td width="15"><input name="Sun" type="checkbox" class="checkbox-plan"  value="1" <?=$chk_Sun;?> /></td>
                <td width="40">Sun</td>
                <td width="15"><input name="Mon" type="checkbox" class="checkbox-plan"  value="1" <?=$chk_Mon;?>/></td>
                <td width="40">Mon</td>
                <td width="15"><input name="Tue" type="checkbox" class="checkbox-plan"  value="1" <?=$chk_Tue;?> /></td>
                <td width="40">Tue</td>
                <td width="15"><input name="Wed" type="checkbox" class="checkbox-plan"  value="1" <?=$chk_Wed;?> /></td>
                <td width="40">Wed</td>
                <td width="15"><input name="Thu" type="checkbox" class="checkbox-plan"  value="1" <?=$chk_Thu;?> /></td>
                <td width="40">Thu</td>
                <td width="15"><input name="Fri" type="checkbox" class="checkbox-plan"  value="1" <?=$chk_Fri;?> /></td>
                <td width="40">Fri</td>
                <td width="15"><input name="Sat" type="checkbox" class="checkbox-plan"  value="1" <?=$chk_Sat;?> /></td>
                <td>Sat</td>
              </tr>
          </table></td>
                </tr>
                <tr>
                  <td width="150">&nbsp;</td>
                  <td><button type="button" class="btn btn-primary btn-lg"   id="submit_data" > <span id="txt_btn_save3"> บันทึกข้อมูล </span></button>
                    <script>
  $("#submit_data").click(function(){
	  
	  
	  
	  
	  
	  
  if(document.getElementById('topic_th').value=="") {
alert('กรุณากรอกชื่อภาษาไทย'); 
document.getElementById('topic_th').focus() ; 
return false ;
}

	  
	  
 if(document.getElementById('start_time').value=="") {
alert('กรุณากรอกเวลาเปิด'); 
document.getElementById('start_time').focus() ; 
return false ;
}

 if(document.getElementById('finish_time').value=="") {
alert('กรุณากรอกเวลาปิด'); 
document.getElementById('finish_time').focus() ; 
return false ;
}


 if(document.getElementById('province').value=="") {
alert('กรุณาเลือกจังหวัด'); 
document.getElementById('province').focus() ; 
return false ;
}

 

 if(document.getElementById('address').value=="") {
alert('กรุณากรอกที่อยู่'); 
document.getElementById('address').focus() ; 
return false ;
}

 if(document.getElementById('phone').value=="") {
alert('กรุณากรอกเบอร์โทรศัพท์'); 
document.getElementById('phone').focus() ; 
return false ;
}

 
 		 
  $.post('go.php?name=content/load&file=place&op=sub_edit_action&id=<?=$_GET[id];?>',$('#myform').serialize(),function(response){
  $('#div_send_data_msg').html(response);  });
  
 
  var url_page_type= "empty_style.php?name=content/load&file=place&main=<? echo $arr[project][main];?>&sub=<? echo $arr[project][sub];?>";
	  
  
 $('#show_data_page').load(url_page_type);
	  
	  
  
  
			   });
			    </script></td>
                </tr>
              </table></td>
              <td valign="top"><table width="100%" border="0" cellspacing="3" cellpadding="3">
                <tbody>
                  <tr>
                    <td width="120" valign="middle"><strong>โลโก้ : </strong></td>
                    <td valign="top"> 
                    
                    
            <div class="<?= $coldata?>">
 
 <div class="take_photo" ><center>
 
 
 

<i class="fa  fa-camera take-photo-icon"  id="icon_camera_id_logo"></i><br>
เลือกภาพถ่าย
<div style="padding:5px;">
  
  <div class="progress" style="width:100%;;border-radius:8px; margin-top: 10px; border:none " id="area_image_album_load_main">
  <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="40"
  aria-valuemin="0" aria-valuemax="100" id="area_image_album_load_id_logo" style="width:0%;border-radius:5px;border:none">
      </div>
  </div>
  
  
  </div>
    
 

    

 <img
 
   <? if($arr[project][pic_logo]==1){ ?>

  src="../data/pic/place/<?=$_GET[id];?>_logo.jpg?v=<?=time()?>" 

<? }  ?>
 
 
 
 
 
  id="image_id_logo" name="image_id_logo"  style="width:300px; padding:5px; margin-top:-20px;border-radius:15px; " />

</div>
 
 
  
    </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    </td>
                  </tr>
                  <tr>
                    <td><strong>โบรชัวร์ : </strong></td>
                    <td><div class="<?= $coldata?>">
 
 <div class="take_photo" ><center>
 
 
 

<i class="fa  fa-camera take-photo-icon"  id="icon_camera_id_book"></i><br>

เลือกโบรชัวร์ 1

<div style="padding:5px;">
  
  <div class="progress" style="width:100%;;border-radius:8px; margin-top: 10px; border:none " id="area_image_album_load_main">
  <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="40"
  aria-valuemin="0" aria-valuemax="100" id="area_image_album_load_id_book" style="width:0%;border-radius:5px;border:none">
      </div>
  </div>
  
  
  </div>
    
    

    

 <img
 
 <? if($arr[project][pic_book]==1){ ?>

 src="../data/pic/place/<?=$_GET[id];?>_book.jpg?v=<?=time()?>" 

<? }  ?>
 
 
 
 
  id="image_id_book" name="image_id_book"  style="width:300px; padding:5px; margin-top:-20px;border-radius:15px; " />

</div>
 
 
  
    </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
 <div class="<?= $coldata?>">
 
 <div class="take_photo" ><center>
 
 
 

<i class="fa  fa-camera take-photo-icon"  id="icon_camera_id_book_2"></i><br>

เลือกโบรชัวร์ 2

<div style="padding:5px;">
  
  <div class="progress" style="width:100%;;border-radius:8px; margin-top: 10px; border:none " id="area_image_album_load_main">
  <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="40"
  aria-valuemin="0" aria-valuemax="100" id="area_image_album_load_id_book_2" style="width:0%;border-radius:5px;border:none">
      </div>
  </div>
  
  
  </div>
    
    

    

 <img
 
 <? if($arr[project][pic_book_2]==1){ ?>

 src="../data/pic/place/<?=$_GET[id];?>_book_2.jpg?v=<?=time()?>" 

<? }  ?>
 
 
 
 
  id="image_id_book_2" name="image_id_book_2"  style="width:300px; padding:5px; margin-top:-20px;border-radius:15px; " />

</div>
 
 
  
    </div>
                    
                    
                    
                    
                    
                            
                    
                    
                    
 <div class="<?= $coldata?>">
 
 <div class="take_photo" ><center>
 
 
 

<i class="fa  fa-camera take-photo-icon"  id="icon_camera_id_book_3"></i><br>

เลือกโบรชัวร์ 3

<div style="padding:5px;">
  
  <div class="progress" style="width:100%;;border-radius:8px; margin-top: 10px; border:none " id="area_image_album_load_main">
  <div class="progress-bar progress-bar-warning progress-bar-striped active" role="progressbar" aria-valuenow="40"
  aria-valuemin="0" aria-valuemax="100" id="area_image_album_load_id_book_3" style="width:0%;border-radius:5px;border:none">
      </div>
  </div>
  
  
  </div>
    
    

    

 <img
 
 <? if($arr[project][pic_book_3]==1){ ?>

 src="../data/pic/place/<?=$_GET[id];?>_book_3.jpg?v=<?=time()?>" 

<? }  ?>
 
 
 
 
  id="image_id_book_3" name="image_id_book_3"  style="width:300px; padding:5px; margin-top:-20px;border-radius:15px; " />

</div>
 
 
  
    </div>
                    
                    
                    
                          
                    
                    
                    </td>
                  </tr>
                  <tr>
                    <td>&nbsp;</td>
                    <td>    <input class="form-control" type="hidden" name="check_photo_id_logo" id="check_photo_id_logo"   onkeypress="PasswordEnter(this,event)"   value="0" >
    
    
     <input class="form-control" type="hidden" name="check_photo_id_book" id="check_photo_id_book"   onkeypress="PasswordEnter(this,event)"   value="0" >
     
         <input class="form-control" type="hidden" name="check_photo_id_book_2" id="check_photo_id_book_2"   onkeypress="PasswordEnter(this,event)"   value="0" > 
     
        <input class="form-control" type="hidden" name="check_photo_id_book_3" id="check_photo_id_book_3"   onkeypress="PasswordEnter(this,event)"   value="0" > 
    
     <div style="display:none">
 
 <?  include ("mod/content/photo/upload_car_pic.php");?>
 
 </div>
 
 <br>
 
  <?
 $rand = substr(str_shuffle('123456789012345678901234567890'),0,30);
 
 ?>
 




 
 

 
 
      <input class="form-control" type="hidden" name="check_code" id="check_code"   onkeypress="PasswordEnter(this,event)"   value="<?=$rand ?>" >
  
   <input class="form-control" type="hidden" name="upload_pic_type" id="upload_pic_type"  required="true" onkeypress="PasswordEnter(this,event)"   value="" >  
  
  
<script>

 
    
        /////////  id driving
 $("#icon_camera_id_logo").click(function(){  
 
 
  
  document.getElementById('upload_pic_type').value='id_logo';
 
 
  $("#load_chat_camera").click(); 
  
  });
  
  
          /////////  id driving
 $("#icon_camera_id_book").click(function(){  
 
  
  document.getElementById('upload_pic_type').value='id_book';
 
 
  $("#load_chat_camera").click(); 
  
  });
  
  
  
  
  
   $("#icon_camera_id_book_2").click(function(){  
 
  
  document.getElementById('upload_pic_type').value='id_book_2';
 
 
  $("#load_chat_camera").click(); 
  
  });
  
  
  
  
   $("#icon_camera_id_book_3").click(function(){  
 
  
  document.getElementById('upload_pic_type').value='id_book_3';
 
 
  $("#load_chat_camera").click(); 
  
  });
  
 
  
  
  
  
  </script></td>
                  </tr>
                </tbody>
              </table></td>
            </tr>
          </tbody>
        </table></td>
        </tr>
    </table></td>
      </tr>
    </table>
    </FORM>
	
<? } ?>















<?

 if($_GET[op] == "sub_add_action"  ){
	//////////////////////////////////////////// ó Database
 
		//include("includes/class.resizepic.php");
 
	
		//ӡŧҵ
		$db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
   
////////////////
		$db->add_db('shopping_product',array(
		
 
		
 
			"topic_cn"=>"$_POST[topic_cn]",
			"topic_th"=>"$_POST[topic_th]",
 
			 "topic_en"=>"$_POST[topic_en]",
			 
 
		// "lat"=>"$_POST[lat]",
		// "lng"=>"$_POST[lng]",
		
		"map"=>"$_POST[map]",
		
		
		"status"=>'0',
			 
	 
		 "start_time"=>"$_POST[start_time]",
		 "finish_time"=>"$_POST[finish_time]",
		
		"address"=>"$_POST[address]",
		"phone"=>"$_POST[phone]",
		"email"=>"$_POST[email]",
		"province"=>"$_POST[province]",
		"open"=>"$_POST[open]",
		
		"commission"=>"$_POST[commission]",
		"price_plan"=>"$_POST[price_plan]",
		
		"price_plan_2"=>"$_POST[price_plan_2]",
		"price_plan_3"=>"$_POST[price_plan_3]",
		
		
		"pic_logo"=>"$_POST[check_photo_id_logo]",
		"pic_book"=>"$_POST[check_photo_id_book]",
		"pic_book_2"=>"$_POST[check_photo_id_book_2]",
		"pic_book_3"=>"$_POST[check_photo_id_book_3]",
		
		
		
		"open_Sun"=>"$_POST[Sun]",
"open_Mon"=>"$_POST[Mon]",
"open_Tue"=>"$_POST[Tue]",
"open_Wed"=>"$_POST[Wed]",
"open_Thu"=>"$_POST[Thu]",
"open_Fri"=>"$_POST[Fri]",
"open_Sat"=>"$_POST[Sat]",
		
 
		
			
			"sub"=>"$_POST[sub]",
			 "main"=>"$_POST[main]"
			 
 
 
		));
		
 
$db->connectdb(DB_NAME_APP, DB_USERNAME, DB_PASSWORD);
 
$next_increment     = 0;
$qShowStatus        = "SHOW TABLE STATUS LIKE 'shopping_product'";
$qShowStatusResult  = mysql_query($qShowStatus) or die ( "Query failed: " . mysql_error() . "<br/>" . $qShowStatus );
$row = mysql_fetch_assoc($qShowStatusResult);

$last_id = $row['Auto_increment']-1;



if($_POST[check_photo_id_logo]==1){ 

@copy ("../data/fileupload/store/place/".$_POST[check_code]."_id_logo.jpg", "../data/pic/place/".$last_id."_logo.jpg" );    
 @unlink ("../data/fileupload/store/place/".$_POST[check_code]."_id_logo.jpg" ); 	
}

if($_POST[check_photo_id_book]==1){ 
 @copy ("../data/fileupload/store/place/".$_POST[check_code]."_id_book.jpg", "../data/pic/place/".$last_id."_book.jpg" );   
@unlink ("../data/fileupload/store/place/".$_POST[check_code]."_id_book.jpg" ); 	
 	
}


if($_POST[check_photo_id_book_2]==1){ 
 @copy ("../data/fileupload/store/place/".$_POST[check_code]."_id_book_2.jpg", "../data/pic/place/".$last_id."_book_2.jpg" );   
@unlink ("../data/fileupload/store/place/".$_POST[check_code]."_id_book_2.jpg" ); 	
 	
}

if($_POST[check_photo_id_book_3]==1){ 
 @copy ("../data/fileupload/store/place/".$_POST[check_code]."_id_book_3.jpg", "../data/pic/place/".$last_id."_book_3.jpg" );   
@unlink ("../data/fileupload/store/place/".$_POST[check_code]."_id_book_3.jpg" ); 	
 	
}

 
		
		
 }


?>







 
 
 
 <?
 if($_GET[op] == "sub_edit_action"  ){
	//////////////////////////////////////////// ó Database Edit
 
 
				//ӡ䢢ŧҵ
		$db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
		
		$db->update_db('shopping_product',array(
 
			"topic_cn"=>"$_POST[topic_cn]",
			"topic_th"=>"$_POST[topic_th]",
 
			 "topic_en"=>"$_POST[topic_en]",
			 
 		"map"=>"$_POST[map]",
			 
		// "lat"=>"$_POST[lat]",
		// "lng"=>"$_POST[lng]",
		//	"status"=>"1", 
	 
		 "start_time"=>"$_POST[start_time]",
		 "finish_time"=>"$_POST[finish_time]",
		
		"address"=>"$_POST[address]",
		"phone"=>"$_POST[phone]",
		"email"=>"$_POST[email]",
		"province"=>"$_POST[province]",
		"open"=>"$_POST[open]",
		
		"commission"=>"$_POST[commission]",
		"price_plan"=>"$_POST[price_plan]",
		
		"price_plan_2"=>"$_POST[price_plan_2]",
		"price_plan_3"=>"$_POST[price_plan_3]",
		
		
	// "pic_logo"=>"$_POST[check_photo_id_logo]",
	//	"pic_book"=>"$_POST[check_photo_id_book]",
	
	
	"open_Sun"=>"$_POST[Sun]",
"open_Mon"=>"$_POST[Mon]",
"open_Tue"=>"$_POST[Tue]",
"open_Wed"=>"$_POST[Wed]",
"open_Thu"=>"$_POST[Thu]",
"open_Fri"=>"$_POST[Fri]",
"open_Sat"=>"$_POST[Sat]",
	
		
		
 		"sub"=>"$_POST[sub]",
	 	 "main"=>"$_POST[main]"
		
		
		

 
 
			
 
		)," id=$_GET[id] ");
	 
		
		
		
		
 $last_id = $_GET[id];
 

if($_POST[check_photo_id_logo]==1){ 


	  $db->connectdb(DB_NAME_APP, DB_USERNAME, DB_PASSWORD);
        $db->update_db('shopping_product', array(
 
			  "pic_logo" => "1"
 
		)," id='".$_GET[id]."' ");


@unlink ("../data/pic/place/".$last_id."_logo.jpg" ); 	

@copy ("../data/fileupload/store/place/".$_POST[check_code]."_id_logo.jpg", "../data/pic/place/".$last_id."_logo.jpg" );    
 @unlink ("../data/fileupload/store/place/".$_POST[check_code]."_id_logo.jpg" ); 	
}




if($_POST[check_photo_id_book]==1){ 


	  $db->connectdb(DB_NAME_APP, DB_USERNAME, DB_PASSWORD);
        $db->update_db('shopping_product', array(
 
			  "pic_book" => "1"
 
		)," id='".$_GET[id]."' ");


@unlink ("../data/pic/place/".$last_id."_book.jpg" ); 	

 @copy ("../data/fileupload/store/place/".$_POST[check_code]."_id_book.jpg", "../data/pic/place/".$last_id."_book.jpg" );   
@unlink ("../data/fileupload/store/place/".$_POST[check_code]."_id_book.jpg" ); 	
 	
}




if($_POST[check_photo_id_book_2]==1){ 


	  $db->connectdb(DB_NAME_APP, DB_USERNAME, DB_PASSWORD);
        $db->update_db('shopping_product', array(
 
			  "pic_book_2" => "1"
 
		)," id='".$_GET[id]."' ");


@unlink ("../data/pic/place/".$last_id."_book_2.jpg" ); 	

 @copy ("../data/fileupload/store/place/".$_POST[check_code]."_id_book_2.jpg", "../data/pic/place/".$last_id."_book_2.jpg" );   
@unlink ("../data/fileupload/store/place/".$_POST[check_code]."_id_book_2.jpg" ); 	
 	
}


if($_POST[check_photo_id_book_3]==1){ 


	  $db->connectdb(DB_NAME_APP, DB_USERNAME, DB_PASSWORD);
        $db->update_db('shopping_product', array(
 
			  "pic_book_3" => "1"
 
		)," id='".$_GET[id]."' ");


@unlink ("../data/pic/place/".$last_id."_book_3.jpg" ); 	

 @copy ("../data/fileupload/store/place/".$_POST[check_code]."_id_book_3.jpg", "../data/pic/place/".$last_id."_book_3.jpg" );   
@unlink ("../data/fileupload/store/place/".$_POST[check_code]."_id_book_3.jpg" ); 	
 	
}




		
		
		
	}
 
 
 ?>
 
 
 
 
 
 <?
  if($_GET[op] == "sub_del"){
	//////////////////////////////////////////// óź Form
 
		$db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
		$db->del('shopping_product'," id='".$_GET[id]."' "); 
	 
		$db->closedb ();
  }
  
  
    if($_GET[op] == "status_open"){
	//////////////////////////////////////////// óź Form
	  $db->connectdb(DB_NAME_APP, DB_USERNAME, DB_PASSWORD);
        $db->update_db('shopping_product', array(
 
			  "status" =>1
 
		)," id='".$_GET[id]."' ");

  }
  
  
      if($_GET[op] == "status_close"){
	//////////////////////////////////////////// óź Form
	  $db->connectdb(DB_NAME_APP, DB_USERNAME, DB_PASSWORD);
        $db->update_db('shopping_product', array(
 
			  "status" =>0
 
		)," id='".$_GET[id]."' ");

  }
  
  
  
 
    
      if($_GET[op] == "open55"){
		  
		  
 
		  
	//////////////////////////////////////////// óź Form
	//  $db->connectdb(DB_NAME_APP, DB_USERNAME, DB_PASSWORD);
        $db->update_db('plan_product_price_setting', array(
 
 
		$_GET[type]=>"$_GET[status]"
		
 
	 
 
		)," product_id='".$_GET[id]."' and plan_id='".$_GET[mainplan]."' and plan_master='".$_GET[plan]."' ");

  }
  
  
  
  
        if($_GET[op] == "open"){
		  
 
		  
	//////////////////////////////////////////// óź Form
	//  $db->connectdb(DB_NAME_APP, DB_USERNAME, DB_PASSWORD);
        $db->update_db('plan_product_price_setting', array(
 
 
		$_GET[type]=>"$_GET[status]"
		
 
	 
 
		)," id='".$_GET[setid]."' ");

  }
  
  
  
  
  
  
  
  
  
?>
 
 
 
 
 

 
 