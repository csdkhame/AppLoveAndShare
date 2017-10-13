<link rel="shortcut icon" href="assets/img/favicon.png" />
<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
<? $path = ''; ?> 

 <script src="../../../js/sweet/dist/sweetalert-dev.js"></script>
  <link rel="stylesheet" href="../../../js/sweet/dist/sweetalert.css?v=<?=time()?>">
  
    <!-- Bootstrap core CSS -->
   <link href="<?=$path?>assets/css/bootstrap.css" rel="stylesheet"/>

    <!-- Custom styles for this template -->
    <link href="<?=$path?>assets/css/main.css" rel="stylesheet"/>
    <link href="<?=$path?>assets/css/croppic.css" rel="stylesheet"/>

  <? // include ("../../../bootstrap/fonts/all.php");?> 
	
		<script>
		(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
			(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
			m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
			})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
			ga('create', 'UA-10627690-5', 'auto');
			ga('send', 'pageview');

	</script>
	
	



  <div class="back-full-popup"> 
    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="40"   ><div class="button-close-popup-mod" ><?=$popup_icon_left_arow;?></div></td>
  <td   ><div style="font-size:22px; color:#FFFFFF " id="text_mod_topic_action" class="text-topic-action-mod"></div></td>
    <td width="50" align="right"   ><div style="font-size:22px; color:#FFFFFF " id="head_full_popup_icon"></div></td>
  </tr>
</table>
</div>
<?php  $pic_qr = file_exists("../../../../data/pic/driver/small/".$_GET[user].".jpg");  
 if($pic_qr==1){
 	$path_file = "../../../../data/pic/driver/small/".$_GET[user].".jpg?v=".time();
 }else{
 	$path_file = "../../../../data/pic/driver/small/default-avatar.jpg";
 }
 ?>  
 		<script src=" https://code.jquery.com/jquery-2.1.3.min.js"></script>
   
	<script src="<?=$path?>assets/js/bootstrap.min.js"></script>
	<script src="<?=$path?>assets/js/jquery.mousewheel.min.js"></script>
   	<script src="<?=$path?>croppic.min.js"></script>
    <script src="<?=$path?>assets/js/main.js"></script>
<script>
	var path_file = '<?=$path_file;?>';
</script>
	<div style="top:0px; padding:10px; overflow: hidden; width:100%; padding-bottom:50px;   ">  
	<div style="    padding-top: 20px;">
	<h4 class="centered" style=" font-size: 24px;"> ภาพประจำตัว </h4>
		<div class="row mt " id="div_img">
			<div class="col-lg-4 ">
				
				
				<div id="cropContainerModal" style="height: 300px;" align="center"   >
					<img src="<?=$path_file;?>" id="my_pic" style="width: 100%"  />
				</div>
				
			</div>
			
		
		</div>
		
		<div align="center">
		<img src="../../../images/loading.gif" width="150px;" id="img_img" style="display: none;"/>
		</div>
		
		<div >
		<div align="center" style="margin-top: 30px;">
		<button class="btn btn-bg" id="upload_img" style="    width: 100%;
    height: 40px;
    font-size: 22px;background-color: #16B3B1;color: #fff;display: none;">ยืนยัน</button>
		</div>
		<button class="btn btn-bg" id="upload_close" style="    width: 100%;
    height: 40px;
    font-size: 22px;background-color: #666;margin-top:15px;color: #fff">ปิด</button>
		</div>
		</div>
	</div>
	<div style="margin: 17px;margin-top:15px;">
	 <button class="btn btn-bg" id="upload_crop" style="    width: 90%;
    height: 40px;
    font-size: 22px;background-color: #dd4b39;color: #fff;display: none;position: fixed;z-index: 50000;">ตัดรูป</button>
	</div>

    	<script>

		$('#upload_img').click(function(){
			$('#div_img').hide();
			$('#img_img').show();
			
			var url = "../savedata_sub.php?type=upload_img&user=<?=$_GET[user];?>";
			
			 $.ajax({
					                url: url, // point to server-side PHP script 
					                dataType: 'text',  // what to expect back from the PHP script, if anything
					                cache: false,
					                contentType: false,
					                processData: false,
					                type: 'post',
					                success: function(result){
					                	console.log(result);
					                 	if(result==1){
											swal("อัพโหลดสำเร็จ!","","success");
										}else{
											swal("อัพโหลดล้มเหลว!","","error");
										}
										$('#upload_crop').hide();
										$('#div_img').show();
										$('#img_img').hide();
					                }
					     });
			
//			window.location.href = "test.php?user=<?=$_GET[user];?>";
		});
		$('#upload_close').click(function(){
			/*$('#div_img').hide();
			$('#img_img').show();*/
			window.location.href = "../../../index.php";
		});
	</script>
    <script>
    	var user = '<?=$_GET[user];?>';
		var croppicHeaderOptions = {
				//uploadUrl:'img_save_to_file.php',
				cropData:{
					"dummyData":1,
					"dummyData2":"asdas"
				},
				cropUrl:'<?=$path?>img_crop_to_file.php',
				customUploadButtonId:'cropContainerHeaderButton',
				modal:false,
				processInline:true,
				loaderHtml:'<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> ',
				onBeforeImgUpload: function(){ console.log('onBeforeImgUpload') },
				onAfterImgUpload: function(){ console.log('onAfterImgUpload') },
				onImgDrag: function(){ console.log('onImgDrag') },
				onImgZoom: function(){ console.log('onImgZoom') },
				onBeforeImgCrop: function(){ console.log('onBeforeImgCrop') },
				onAfterImgCrop:function(){ console.log('onAfterImgCrop') },
				onReset:function(){ console.log('onReset') },
				onError:function(errormessage){ console.log('onError:'+errormessage) }
		}	
		var croppic = new Croppic('croppic', croppicHeaderOptions);
		
		
		var croppicContainerModalOptions = {
				uploadUrl:'<?=$path?>img_save_to_file.php?user='+user,
				cropUrl:'<?=$path?>img_crop_to_file.php?user='+user,
//				loadPicture:'<?=$path_file;?>',
				modal:true,
				imgEyecandyOpacity:0.4,
				loaderHtml:'<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> ',
				onBeforeImgUpload: function(){ console.log('onBeforeImgUpload') },
				onAfterImgUpload: function(){ console.log('onAfterImgUpload') },
				onImgDrag: function(){ console.log('onImgDrag') },
				onImgZoom: function(){ console.log('onImgZoom') },
				onBeforeImgCrop: function(){ console.log('onBeforeImgCrop') },
				onAfterImgCrop:function(){ console.log('onAfterImgCrop') },
				onReset:function(){ console.log('onReset') },
				onError:function(errormessage){ console.log('onError:'+errormessage) }
		}
		var cropContainerModal = new Croppic('cropContainerModal', croppicContainerModalOptions);
		
		
		var croppicContaineroutputOptions = {
				uploadUrl:'<?=$path?>img_save_to_file.php',
				cropUrl:'<?=$path?>img_crop_to_file.php', 
				outputUrlId:'cropOutput',
				modal:false,
				loaderHtml:'<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> ',
				onBeforeImgUpload: function(){ console.log('onBeforeImgUpload') },
				onAfterImgUpload: function(){ console.log('onAfterImgUpload') },
				onImgDrag: function(){ console.log('onImgDrag') },
				onImgZoom: function(){ console.log('onImgZoom') },
				onBeforeImgCrop: function(){ console.log('onBeforeImgCrop') },
				onAfterImgCrop:function(){ console.log('onAfterImgCrop') },
				onReset:function(){ console.log('onReset') },
				onError:function(errormessage){ console.log('onError:'+errormessage) }
		}
		
		var cropContaineroutput = new Croppic('cropContaineroutput', croppicContaineroutputOptions);
		
		var croppicContainerEyecandyOptions = {
				uploadUrl:'<?=$path?>img_save_to_file.php',
				cropUrl:'<?=$path?>img_crop_to_file.php',
				imgEyecandy:false,				
				loaderHtml:'<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> ',
				onBeforeImgUpload: function(){ console.log('onBeforeImgUpload') },
				onAfterImgUpload: function(){ console.log('onAfterImgUpload') },
				onImgDrag: function(){ console.log('onImgDrag') },
				onImgZoom: function(){ console.log('onImgZoom') },
				onBeforeImgCrop: function(){ console.log('onBeforeImgCrop') },
				onAfterImgCrop:function(){ console.log('onAfterImgCrop') },
				onReset:function(){ console.log('onReset') },
				onError:function(errormessage){ console.log('onError:'+errormessage) }
		}
		
		var cropContainerEyecandy = new Croppic('cropContainerEyecandy', croppicContainerEyecandyOptions);
		
		var croppicContaineroutputMinimal = {
				uploadUrl:'<?=$path?>img_save_to_file.php',
				cropUrl:'<?=$path?>img_crop_to_file.php', 
				modal:false,
				doubleZoomControls:false,
			    rotateControls: false,
				loaderHtml:'<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> ',
				onBeforeImgUpload: function(){ console.log('onBeforeImgUpload') },
				onAfterImgUpload: function(){ console.log('onAfterImgUpload') },
				onImgDrag: function(){ console.log('onImgDrag') },
				onImgZoom: function(){ console.log('onImgZoom') },
				onBeforeImgCrop: function(){ console.log('onBeforeImgCrop') },
				onAfterImgCrop:function(){ console.log('onAfterImgCrop') },
				onReset:function(){ console.log('onReset') },
				onError:function(errormessage){ console.log('onError:'+errormessage) }
		}
		var cropContaineroutput = new Croppic('cropContainerMinimal', croppicContaineroutputMinimal);
		
		var croppicContainerPreloadOptions = {
				uploadUrl:'<?=$path?>img_save_to_file.php',
				cropUrl:'<?=$path?>img_crop_to_file.php',
				loadPicture:'<?=$path?>assets/img/night.jpg',
				enableMousescroll:true,
				loaderHtml:'<div class="loader bubblingG"><span id="bubblingG_1"></span><span id="bubblingG_2"></span><span id="bubblingG_3"></span></div> ',
				onBeforeImgUpload: function(){ console.log('onBeforeImgUpload') },
				onAfterImgUpload: function(){ console.log('onAfterImgUpload') },
				onImgDrag: function(){ console.log('onImgDrag') },
				onImgZoom: function(){ console.log('onImgZoom') },
				onBeforeImgCrop: function(){ console.log('onBeforeImgCrop') },
				onAfterImgCrop:function(){ console.log('onAfterImgCrop') },
				onReset:function(){ console.log('onReset') },
				onError:function(errormessage){ console.log('onError:'+errormessage) }
		}
		var cropContainerPreload = new Croppic('cropContainerPreload', croppicContainerPreloadOptions);
		
		
	</script>

<script>
	function showBtn(){


	}
	function cropBtn(){
			$('.btn').show();
			$('#upload_crop').hide();
	}
	function closeBtn(){
			$('#upload_close').show();
			$('#upload_img').hide();
			$('#upload_crop').hide();
			
//			$('#cropContainerModal').append( '<p>123</p>' );
	}
/*	$("input:file").change(function (){

			$('#my_pic').remove();
	      	$('.btn').hide();
		
      $('#upload_crop').show();

     });*/
  
     function hidePic(){
	 	/*$('#my_pic').remove();
      	$('.btn').hide();*/
	 }
	 
	 $('#upload_crop').click(function(){
	 	$('.cropControlCrop').click();
	 	$(this).hide();
	 });
</script>
