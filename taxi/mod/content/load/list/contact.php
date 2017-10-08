
 <? if($_GET[op] == ""){ ?>

 
 

<table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tbody>
    <tr>
      <td valign="top"><table width="100%" border="0" cellspacing="0" cellpadding="2">
  <tbody>
    <tr>
      <td valign="top"><table width="100%" cellspacing="1" cellpadding="1" >  
  <?
  
	$db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
 
$res[contact] = $db->select_query("SELECT * FROM shopping_contact  WHERE product_id='".$arr[place][id]."' and type<>'zello'  ORDER BY  id  ASC  ");
while($arr[contact] = $db->fetch($res[contact])){
	
	
	
 $res[product] = $db->select_query("SELECT * FROM shopping_product WHERE id='".$arr[place][id]."' ");
 $arr[product] = $db->fetch($res[product]);
 
  $res[con_type] = $db->select_query("SELECT * FROM shopping_contact_type WHERE id='".$arr[contact][usertype]."' ");
  $arr[con_type] = $db->fetch($res[con_type]);
 
	
 $res[conadd_type] = $db->select_query("SELECT * FROM shopping_contact_admin_type WHERE id='".$arr[contact][admintype]."' ");
  $arr[conadd_type] = $db->fetch($res[conadd_type]);
	
	
	 
	 $res[com] = $db->select_query("SELECT * FROM shopping_contact WHERE id='".$arr[contact][main]."' ");
 $arr[type] = $db->fetch($res[com]);
 


	//Comment Icon
	if($arr[contact][enable_comment]){
		$CommentIcon = " <IMG SRC=\"images/icon/suggest.gif\" WIDTH=\"13\" HEIGHT=\"9\" BORDER=\"0\" ALIGN=\"absmiddle\">";
	}else{
		$CommentIcon = "";
	}
 
 
?> 

 
 
     <tr  bgcolor='<?=$bgcolor?>'>
       <td height="30">  
       <b>  <? echo $arr[contact][name];?> </td>
         <td width="120">
           
  <? echo $arr[contact][phone];?> 
      </td>
         <td width="150"><? echo $arr[con_type][name_th];?></td>
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
</table></td>
    </tr>
  </tbody>
</table>



 <? } ?>


<? 
if($_GET[op] == "sub_add"){
	//////////////////////////////////////////// ó Form
 

$db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
$res[projecttype] = $db->select_query("SELECT * FROM shopping_contact where   id=".$_GET[main]."  ");
$arr[projecttype] = $db->fetch($res[projecttype]);
	
 
	
?>

   <?
 include("mod/content/menu/contact.php");
?> 
 

  <FORM NAME="myform"   id="myform"   enctype="multipart/form-data">
 
  <table width="100%" border="0" cellspacing="0" cellpadding="3">
      <tr>
        <td width="100%"><table width="100%" border="0" cellspacing="3" cellpadding="3">
	 
		          <tr>
		            <td width="120"><strong>ชื่อ :</strong></td>
		            <td><input name="name" type="text" class="form-control" id="name" style="width:500px; background:#FFFFFF" value="<? echo $arr[contact][topic_en];?>" /></td>
		            </tr>
		          <tr>
		            <td><strong>ตำแหน่ง :</strong></td>
		            <td><select  class="form-control" name="usertype" id="usertype" style="width:500px;; font-size:16px; padding:5px; height:40px" >
                    <option value="op">พนักงานต้อนรับ</option>
                     <option value="sale">ฝ่ายขาย</option>
 
       
                  </select>
                  
                  
                  </td>
		            </tr>
		          <tr>
		            <td><strong>เบอร์โทรศัพท์ :</strong></td>
		            <td><input name="phone" type="text" class="form-control" id="phone" style="width:500px; background:#FFFFFF" value="<? echo $arr[contact][topic_cn];?>" /></td>
		            </tr>
          <tr>
            <td>&nbsp;</td>  
            <td>       
              <button type="button" class="btn btn-primary btn-lg"   id="submit_data"   >
                <span id="txt_btn_save">
                  บันทึกข้อมูล
                  </span>
                </button>
                      <script>
  $("#submit_data").click(function(){
	  
 
   if(document.getElementById('name').value=="") {
alert('กรุณากรอกชื่อ'); 
document.getElementById('name').focus() ; 
return false ;
}

	  
   if(document.getElementById('phone').value=="") {
alert('กรุณากรอกเบอร์โทรศัพท์'); 
document.getElementById('phone').focus() ; 
return false ;
}

 	 
 
  $.post('go.php?name=content/load&file=contact&op=sub_add_action&id=<?=$_GET[id];?>&contact=<?=$_GET[contact];?>',$('#myform').serialize(),function(response){
  $('#div_send_data_msg').html(response);  });
  
   
  
   var url_page_type= "go.php?name=content/load&file=contact&main=<?=$_GET[main];?>&sub=<?=$_GET[sub];?>&contact=<?=$_GET[contact];?>";
	  
 
 $('#show_data_page').load(url_page_type);
	  
	  
  
  
			   });
			  </script>
              
              
              </td>
          </tr>
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
		$res[contact] = $db->select_query("SELECT * FROM shopping_contact  WHERE id='".$_GET[id]."' ");
		$arr[contact] = $db->fetch($res[contact]);
		
		
		
 $db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
$res[product] = $db->select_query("SELECT * FROM shopping_product where   id=".$arr[contact][product_id]."  ");
$arr[product] = $db->fetch($res[product]);
 
?>
   
   
   <?
 include("mod/content/menu/contact.php");
?> 
 
 
 
 
<FORM NAME="myform" id="myform"   enctype="multipart/form-data">
 
    <table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="3">
      <tr>
        <td width="100%"><table width="100%" border="0" cellspacing="3" cellpadding="3">
		          <tr>
		            <td><strong>ชื่อ :</strong></td>
		            <td><input name="name" type="text" class="form-control" id="name" style="width:500px; background:#FFFFFF" value="<? echo $arr[contact][name];?>" /></td>
	            </tr>
		          <tr>
		            <td><strong>ตำแหน่ง :</strong></td>
		            <td><select  class="form-control" name="usertype" id="usertype" style="width:500px;; font-size:16px; padding:5px; height:40px" >
                    
 
		              <option value="op"   <? if($arr[contact][usertype]=='op') { echo 'selected=selected' ;}  ?> >พนักงานต้อนรับ</option>
		              <option value="sale" <? if($arr[contact][usertype]=='sale') { echo 'selected=selected' ;}  ?>>ฝ่ายขาย</option>
		              </select></td>
	            </tr>
		          <tr>
		            <td><strong>เบอร์โทรศัพท์ :</strong></td>
		            <td><input name="phone" type="text" class="form-control" id="phone" style="width:500px; background:#FFFFFF" value="<? echo $arr[contact][phone];?>" /></td>
	            </tr>
	            <tr>
	              <td width="120">&nbsp;</td> 
	              <td><button type="button" class="btn btn-primary btn-lg"   id="submit_data"   > <span id="txt_btn_save"> บันทึกข้อมูล </span> </button>
	                <script>
  $("#submit_data").click(function(){
	  
 
 		 
  $.post('go.php?name=content/load&file=contact&op=sub_edit_action&id=<?=$_GET[id];?>',$('#myform').serialize(),function(response){
  $('#div_send_data_msg').html(response);  });
  
  
   var url_page_type= "go.php?name=content/load&file=contact&main=<?=$_GET[main];?>&sub=<?=$_GET[sub];?>&contact=<?=$arr[contact][product_id];?>";
	  
 
 $('#show_data_page').load(url_page_type);
	  
 
 
 
  
			   });
			  </script>
                  </td>
                </tr>
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
		$db->add_db('shopping_contact',array(
 
 
 
		 "product_id"=>"$_GET[contact]",
			
			"name"=>"$_POST[name]",
			
			"usertype"=>"$_POST[usertype]",
 
		"phone"=>"$_POST[phone]",
			
 
		));
 }


?>


 
 <?
 if($_GET[op] == "sub_edit_action"  ){
	//////////////////////////////////////////// ó Database Edit
 
 
				//ӡ䢢ŧҵ
		$db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
		
		$db->update_db('shopping_contact',array(
 
			"name"=>"$_POST[name]",
			
			"usertype"=>"$_POST[usertype]",
 
		"phone"=>"$_POST[phone]",
 
 
			
 
		)," id=$_GET[id] ");
	 
		
		
		
	}
 
 
 ?>
 
 <?
  if($_GET[op] == "sub_del"){
	//////////////////////////////////////////// óź Form
 
		$db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
		$db->del('shopping_contact'," id='".$_GET[id]."' "); 
	 
		$db->closedb ();
  }
?>