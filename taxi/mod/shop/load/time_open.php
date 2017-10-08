 
<?

 	  $db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
                         
  $res[shop] = $db->select_query("SELECT * FROM  shopping_product where id=".$_GET[type]."  ORDER BY id  ");
                      
 $arr[shop] = $db->fetch($res[shop]) ;
 
 
 /*
  	  $db->connectdb(DB_NAME_APP,DB_USERNAME,DB_PASSWORD);
                         
  $res[timecar] = $db->select_query("SELECT * FROM use_time  where id=".$_GET[id]."  ORDER BY id  ");
                      
 $arr[timecar] = $db->fetch($res[timecar]) ;
 
 */
 

?>
 

  <?
  
date_default_timezone_set("Asia/Bangkok"); 
 
 $time_finish =strtotime( date("Y-m-d,19:00:00"));
 

date_default_timezone_set('UTC'); 

 $time_start=time();
 
 $time_complete =$time_finish-$time_start;
	  
	  

    $today_h= date('H');
	
	
 $time_open_h= date('H',$time_complete);
	
	 $time_open_m= date('i',$time_complete);
 
 
   ?> 
   
   <? if($time_complete > 0 and $time_complete <  32400   ){ 
   

 
   ?>
<? if($time_open_h>0){ ?>

<?= $time_open_h?> ชั่วโมง
<? } ?>


<? if($time_open_m>0){ ?>

<?= $time_open_m?> นาที
<? } ?>
   
   
   
   
   
   
   <script>
   
 
   
   $('#btn_open_<?=$_GET[id]?>').show();
   $('#btn_close_<?=$_GET[id]?>').hide();
   
     $('#status_open_<?=$_GET[id]?>').html('เปิดให้บริการ ');
	 
	   $('#tr_time_open_<?=$_GET[id]?>').show();
   
   
   </script>
                
 <? } ?>
 
 
    <? if($time_complete > 0 and $time_complete >  32400   ){ ?>
   
   <script>
   
   
   

 
   
   $('#btn_open_<?=$_GET[id]?>').hide();
   $('#btn_close_<?=$_GET[id]?>').show();
   
  $('#tr_time_open_<?=$_GET[id]?>').hide();
  
   
   $('#status_open_<?=$_GET[id]?>').html('หมดเวลาให้บริการ');
   
  
   
   
   
   
   </script>
                
 <? } ?>
 
 
   <? 
   $time_complete =2;
   
   
   
   if($time_complete < 1 ){ ?>
   
   <script>
   
 
   
   $('#btn_open_<?=$_GET[id]?>').hide();
   $('#btn_close_<?=$_GET[id]?>').show();
   
  $('#tr_time_open_<?=$_GET[id]?>').hide();
  
   
   $('#status_open_<?=$_GET[id]?>').html('หมดเวลาให้บริการ');
   
  
   
   
   
   
   </script>
                
 <? } ?>
 
 
 
 