<!--<link href="1/ninja-slider.css" rel="stylesheet" type="text/css" />
    <script src="1/ninja-slider.js" type="text/javascript"></script>-->
    <link href="load/popup/1/ninja-slider.css" rel="stylesheet" type="text/css" />
    <script src="load/popup/1/ninja-slider.js" type="text/javascript"></script>
    <style>
        
        a {color:#1155CC;}
        ul li {padding: 10px 0;}
        ul {height: 100% !important;}
    </style>
<? 
$id = $_GET[id];
 ?>
<!--<div class="css-full-popup"  id="alert_show_pic_place" style="display:none; position:fixed; overflow-y: auto ;overflow-x: none ; padding:0px; margin-top:45px; "> 
 
<div class="back-full-popup"> 
    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="40"   ><div class="button-close-popup-pic-place" ><?=$popup_icon_left_arow;?></div></td>
  <td   ><div style="font-size:22px; color:#FFFFFF " id="text_mod_topic_action_pic" class="text-topic-action-mod-place-pic">เลือกสถานที่ช็อปปิ้ง</div></td>
    <td width="50" align="right"   ><div style="font-size:22px; color:#FFFFFF " id="head_full_popup_icon"></div></td>
  </tr>
</table>
</div>-->
    <div id="ninja-slider" style="display: nones">
        <div class="slider-inner" style="margin-top:10px;height: 90%">
            <ul style="height: 100% !important;">
            <? if($_GET[pic1]==1){ ?>
                <li>
                    <a class="ns-img" href="../data/pic/place/<?=$id?>_book.jpg"></a>
                    <div class="caption">@colerise</div>
                </li>
               <? 	} ?>
               
             <? if($_GET[pic2]==1){ ?>
                <li><a class="ns-img" href="../data/pic/place/<?=$id?>_book_2.jpg"></a>
                    <div class="caption">@colerise</div>
                </li>
                <? 	} ?>
                
            <? if($_GET[pic3]==1){ ?>
                <li>
                    <a href="/"><img class="ns-img" src="../data/pic/place/<?=$id?>_book_3.jpg" style="cursor:pointer;" /></a>
                    <div class="caption">@colerise</div>
                </li>
             <? 	} ?>
               <!-- <li>
                    <a class="ns-img" href="../../../data/pic/place/23_logo.jpg"></a>
                    <div class="caption cap1">RESPONSIVE</div>
                    <div class="caption cap1 cap2">TOUCH·FRIENDLY</div>
                    <div class="caption">@colerise</div>
                </li>-->
            </ul>
            <div class="fs-icon" title="Expand/Close"></div>
        </div>
    </div>
    <!--end-->
<!-- </div> --> 
 
 <script>
$(".button-close-popup-pic-place").click(function(){   
 
 
 
 $( "#alert_show_pic_place" ).hide();
 
  });
 </script>