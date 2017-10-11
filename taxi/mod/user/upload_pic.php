
 <script>
 $('.text-topic-action-mod').html('ข้อมูลส่วนตัวผู้ใช้งาน');
 
 </script>
<style type="text/css">
.mainpic_index {

   padding:10px;   
   
           -moz-border-radius:50%;
        -webkit-border-radius:50%;
        border-radius:50%;

   border:1px solid #FFFFFF; background-color:#FFFFFF; 
   box-shadow: 2px 1px 5px #333333; margin-right:5px; margin-bottom:5PX;max-width:400px;
    
}
.mainpic_dv {

   padding:10px;   
 

   border:1px solid #FFFFFF; background-color:#FFFFFF; 
   box-shadow: 2px 1px 5px #333333; margin-right:5px; margin-bottom:5PX;max-width:400px;
    
}

.mainpic {
   border:8px solid #FFFFFF; background-color:#FFFFFF; 
   box-shadow: 2px 1px 10px #333333; 
		
		 height:300px; width:300px;
       border-radius: 50%;
       background:url(../../admin/file/driver/pic/<?=$arr[web_user][post_date];?>.jpg);
	       background-size: 450px ;
    background-repeat: no-repeat; background-position:center;
        }

<!--
.topicname-user { padding-top:10px; padding-left: 0px; padding-bottom:5px; font-size:18px; font-weight:bold; color: #333333 ; text-align:left; margin:0px;  
 
}
.form-control { margin-left:0px; padding-left:0px; }


 
-->
</style>  

<? $coldata="col-md-6";?>

<form method="post"  id="edit_form" name="edit_form">


 
 <div class="box box-default" style="padding-top:30px;">
 
	
   <!-- /.box-header -->
        <div class="box-body" >
          <div class="row">
          
		  
            <div class="<?= $coldata?>">
            
            
 <?php  $pic_qr = file_exists("../data/pic/driver/small/".$arr[web_user][username].".jpg");  
 if($pic_qr==1){
 	$path_file = "../data/pic/driver/small/".$arr[web_user][username].".jpg?v=".time();
 }else{
 	$path_file = "../data/pic/driver/small/default-avatar.jpg";
 }
 ?>            
<style>
	.fileInput {
    position: absolute;
    top: 0;
    right: 0;
    margin: 0;
    padding: 0;
    font-size: 20px;
    cursor: pointer;
    opacity: 0;
    filter: alpha(opacity=0);
}
</style> 
<div align="center" >
<img src="" id="img_tag"  alt="Preview Image" width="400px"  style="border: 1px solid #ddd;    border-radius: 4px;    padding: 0px;    margin: 10px;   display: nones;"/>
<button class="btn btn-md" id="but_img_tag" type="button">อัพโหลดภาพ..</button>
 <input type="file" id="imageUpload_profile" class="fileInput" name="imageUpload_profile" />

</div>
		 
                  
					 </div> 

</div>
</div>
</div>
</form>

 <script>

	$('#img_tag').click(function(){
		$('#imageUpload_profile').trigger('click');
	});
	$('#but_img_tag').click(function(){
		$('#imageUpload_profile').trigger('click');
	});
	

 $('#imageUpload_profile').change(function(){			
			readImgUrlAndPreview(this);
			function readImgUrlAndPreview(input){
				 if (input.files && input.files[0]) {
			            var reader = new FileReader();
			            reader.onload = function (e) {			            	
			                $('#img_tag').attr('src', e.target.result);
							}
			          };
			          reader.readAsDataURL(input.files[0]);
			     }	
//			     $('#imagePreview2').show();
			     
		});

 </script> 

