
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="mod/user/cropit_master/dist/jquery.cropit.js"></script>

    <style>
      .cropit-preview {
        background-color: #f8f8f8;
        background-size: cover;
        border: 5px solid #ccc;
        border-radius: 3px;
        margin-top: 7px;
        width: 350px;
        height: 263px;
      }

      .cropit-preview-image-container {
        cursor: move;
      }

      .cropit-preview-background {
        opacity: .2;
        cursor: auto;
      }

      .image-size-label {
        margin-top: 10px;
      }

      input, .export {
        /* Use relative position to prevent from being covered by image background */
        position: relative;
        z-index: 10;
        display: block;
      }

      button {
        margin-top: 10px;
      }
    </style>

 <div class="image-editor" style="margin-top:40px;font-size:15px;">
      <input type="file" class="cropit-image-input">
      <div class="cropit-preview" align="center"></div>
      <div class="image-size-label">
        Resize image
      </div>
      <input type="range" class="cropit-image-zoom-input">


      <button class="export">Export</button>
    </div>
<!--<form action="#" id="edit_form">
      <div class="image-editor" style="margin-top:40px;font-size:15px;">
        <input type="file" class="cropit-image-input">
        <div class="cropit-preview"></div>
        <div class="image-size-label">
          Resize image
        </div>
        <input type="range" class="cropit-image-zoom-input">
        <input type="hidden" name="image-data" class="hidden-image-data" />
        <button type="submit">Submit</button>
      </div>
      <input name="username" value="nut" type="text"/>
</form>-->
 <!--   
      <div id="result">
      <span>$form.serialize() =</span>
      <span id="result-data"></span>
    </div>-->
    <script>
      $(function() {
        $('.image-editor').cropit({
          exportZoom: 1.25,
          imageBackground: true,
          imageBackgroundBorderWidth: 50,
          imageState: {
            src: 'http://lorempixel.com/500/400/',
          },
        });

        $('.export').click(function() {
          var imageData = $('.image-editor').cropit('export');
          window.open(imageData);
        });
      });
    </script>

<!-- <script>
      $(function() {
        $('.image-editor').cropit({imageBackground: true,});

        $('form').submit(function() {
        	alert(123);
          // Move cropped image data to hidden input
          var imageData = $('.image-editor').cropit('export');
          $('.hidden-image-data').val(imageData);
		 
		  data_form = $('#edit_form').serialize();
		  data = new FormData($('#edit_form')[0]);
    				data.append('file', $('.cropit-image-input')[0].files[0]);
					   $.ajax({
					                url: 'mod/user/savedata_sub.php?type=upload_img', // point to server-side PHP script 
					                dataType: 'text',  // what to expect back from the PHP script, if anything
					                cache: false,
					                contentType: false,
					                processData: false,
					                data: data,                         
					                type: 'post',
					                success: function(php_script_response){
//					                   alert(php_script_response);
									
									   console.log(php_script_response);
										
					                }
					     });
          // Print HTTP request params
          /*var formValue = $(this).serialize();
          $('#result-data').text(formValue);*/
			event.preventDefault();
          // Prevent the form from actually submitting
          return false;
        });
      });
    </script>-->