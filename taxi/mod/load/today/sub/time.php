 <? 
 $clock_color="#009999;font-size:22px";
  $no_clock_color="#999999;font-size:22px";
  $time_color="#009999";
  $spin=" fa-spin 2x";
 ?>  

  <i class="fa fa-clock-o  <? 	if($_GET[$_GET[type]]==1){ echo $spin; } ?>" style="color:<? 	if($_GET[$_GET[type]]==1){ echo $clock_color;} else {  echo $no_clock_color; }?>" ></i> 
     <div  style="font-size:16px; margin-top:-20px; margin-left:25px;">     
 
 <? 	if($_GET[$_GET[type]]==1){ ?><font color="<?=$time_color;?>"><b>
			  <? echo ThaiTimeConvert($_GET[$_GET[type]._date]- 25200,'1','short'); ?></b></font>
<? }   else { ?> </font><font style="font-size:13px "><? echo "&nbsp;ยังไม่มี"; } ?></font>			 
			</div>