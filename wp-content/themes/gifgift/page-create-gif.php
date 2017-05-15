<?php /* Template Name: Create GIF */ ?>
<?php get_header();?>
<div class="container">
<div class="inner-pages-inner">
   <!-- demo-section  -->
 <!-- demo-section  -->
      <section class="demo-section v-center">
        <div class="diff">
        <h1><span>Create GIF</span></h1>
          <div class="row">
            <div class="col-md-8 col-sm-8 col-xs-12 options-section">
              <!-- <h3>Options</h3 -->
              <form class="options-form" action="" method="POST">
              <div class="form-group">
                  <div class = "upload-form">
                  <?php

$useragent=$_SERVER['HTTP_USER_AGENT'];

if(preg_match('/(android|bb\d+|meego).+mobile|avantgo|bada\/|blackberry|blazer|compal|elaine|fennec|hiptop|iemobile|ip(hone|od)|iris|kindle|lge |maemo|midp|mmp|netfront|opera m(ob|in)i|palm( os)?|phone|p(ixi|re)\/|plucker|pocket|psp|series(4|6)0|symbian|treo|up\.(browser|link)|vodafone|wap|windows (ce|phone)|xda|xiino/i',$useragent)||preg_match('/1207|6310|6590|3gso|4thp|50[1-6]i|770s|802s|a wa|abac|ac(er|oo|s\-)|ai(ko|rn)|al(av|ca|co)|amoi|an(ex|ny|yw)|aptu|ar(ch|go)|as(te|us)|attw|au(di|\-m|r |s )|avan|be(ck|ll|nq)|bi(lb|rd)|bl(ac|az)|br(e|v)w|bumb|bw\-(n|u)|c55\/|capi|ccwa|cdm\-|cell|chtm|cldc|cmd\-|co(mp|nd)|craw|da(it|ll|ng)|dbte|dc\-s|devi|dica|dmob|do(c|p)o|ds(12|\-d)|el(49|ai)|em(l2|ul)|er(ic|k0)|esl8|ez([4-7]0|os|wa|ze)|fetc|fly(\-|_)|g1 u|g560|gene|gf\-5|g\-mo|go(\.w|od)|gr(ad|un)|haie|hcit|hd\-(m|p|t)|hei\-|hi(pt|ta)|hp( i|ip)|hs\-c|ht(c(\-| |_|a|g|p|s|t)|tp)|hu(aw|tc)|i\-(20|go|ma)|i230|iac( |\-|\/)|ibro|idea|ig01|ikom|im1k|inno|ipaq|iris|ja(t|v)a|jbro|jemu|jigs|kddi|keji|kgt( |\/)|klon|kpt |kwc\-|kyo(c|k)|le(no|xi)|lg( g|\/(k|l|u)|50|54|\-[a-w])|libw|lynx|m1\-w|m3ga|m50\/|ma(te|ui|xo)|mc(01|21|ca)|m\-cr|me(rc|ri)|mi(o8|oa|ts)|mmef|mo(01|02|bi|de|do|t(\-| |o|v)|zz)|mt(50|p1|v )|mwbp|mywa|n10[0-2]|n20[2-3]|n30(0|2)|n50(0|2|5)|n7(0(0|1)|10)|ne((c|m)\-|on|tf|wf|wg|wt)|nok(6|i)|nzph|o2im|op(ti|wv)|oran|owg1|p800|pan(a|d|t)|pdxg|pg(13|\-([1-8]|c))|phil|pire|pl(ay|uc)|pn\-2|po(ck|rt|se)|prox|psio|pt\-g|qa\-a|qc(07|12|21|32|60|\-[2-7]|i\-)|qtek|r380|r600|raks|rim9|ro(ve|zo)|s55\/|sa(ge|ma|mm|ms|ny|va)|sc(01|h\-|oo|p\-)|sdk\/|se(c(\-|0|1)|47|mc|nd|ri)|sgh\-|shar|sie(\-|m)|sk\-0|sl(45|id)|sm(al|ar|b3|it|t5)|so(ft|ny)|sp(01|h\-|v\-|v )|sy(01|mb)|t2(18|50)|t6(00|10|18)|ta(gt|lk)|tcl\-|tdg\-|tel(i|m)|tim\-|t\-mo|to(pl|sh)|ts(70|m\-|m3|m5)|tx\-9|up(\.b|g1|si)|utst|v400|v750|veri|vi(rg|te)|vk(40|5[0-3]|\-v)|vm40|voda|vulc|vx(52|53|60|61|70|80|81|83|85|98)|w3c(\-| )|webc|whit|wi(g |nc|nw)|wmlb|wonu|x700|yas\-|your|zeto|zte\-/i',substr($useragent,0,4)))

{ ?> 
      <div class = "form-group">
          <div class="fileupload fileupload-new" data-provides="fileupload">
            <span class="btn btn-primary btn-file"><span class="fileupload-new">Start Camera</span>
            <span class="fileupload-exists">Change</span>
             <input type="hidden" value="images" class="file-loading" name="GIFSource" id="GIFSource">
             <input type="file" id="files" name="my_file_upload[]" multiple="multiple" class="files-data form-control" /></span>
            <span id="image_gallery">
            <input type="hidden" id="image_hidden_src">
            <input type="hidden" id="video_hidden_src">
            </span>            
            <a href="#" class="close fileupload-exists" data-dismiss="fileupload" style="float: none">×</a>
          </div>

                
      </div>
                        <?php }else{ ?>
                           <input type="hidden" value="webcam" name="GIFSource" id="GIFSource">
                         <?php } ?>
                  </div>
                </div>
                <div class="form-group" id="no-of-sec">
                  <label for="numFrames">Number of Seconds</label>
                  <input name="numFrames" id="numFrames" class="form-control" value="10" size="5" type="number">
                </div>
                <div class="form-group" id="gif-text">
                  <label for="gifText">GIF Text</label>
                  <input name="gifText" id="gifText" class="form-control" value="" size="30" placeholder="Add text here...">
                    <input type="hidden" value="animated" name="GIFType" id="GIFType">
	                <input type="hidden" value=".1" name="interval" id="interval">
	                <input type="hidden" value="normal" id="fontWeight">
	                <input name="fontSize" id="fontSize" value="16" type="hidden">
	                <input name="fontFamily" id="fontFamily" value="sans-serif" type="hidden">
	                <input type="hidden" name="fontColor" id="fontColor" value="#FFFFFF">
	                <input type="hidden" name="textAlign" id="textAlign" value="center">
	                <input type="hidden" name="textBaseline" id="textBaseline" value="center">
	                <input name="sampleInterval" id="sampleInterval" value="10" type="hidden">
	                <input name="numWorkers" id="numWorkers" value="2" type="hidden">
	                <input name="gifWidth" id="gifWidth" value="200" type="hidden">
	                <input name="gifHeight" id="gifHeight" value="200" type="hidden">
                </div>
               
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 pull-right">
                
                <section class="gifshot-image-preview-section"></section>
              <div id="cam-display" class="placeholder-div hidden">
                <span class="placeholder-div-dimensions"></span>
              </div>
              <div class="alert alert-warning hidden" role="alert"></div>
              <progress max="1" value="0" class="gifshot-progress-bar hidden"></progress>
              <span class="options-button-group">
            <a href="#" type="button" id="create-gif" class="btn btn-large btn-primary create-gif-button" role="button">Create GIF</a>
            <input type="hidden" id="savegif" name="savegif">
            <input type="submit" id="savegifbutton" class="btn btn-large btn-default save-gif-button hidden" value="Save to My GIF's">
            <a href="#" type="button" id="save-gif" class="btn btn-large btn-default save-gif-button hidden" role="button" download="gifshot-demo.gif">Download GIF</a>
          </span>
            </div>
            </form>
            <?php if ($_POST['savegif'] != "") {
        				define('UPLOAD_DIR', wp_upload_dir()['basedir'].'/gif/');
        				$img = $_POST['savegif'];
        				$img = str_replace('data:image/gif;base64,', '', $img);
        				$img = str_replace(' ', '+', $img);
        				$data = base64_decode($img);
        				$file_name = uniqid() . '.gif';
        				$file = UPLOAD_DIR . $file_name;
        				$success = file_put_contents($file, $data);
        				echo $success ? 'GIF Saved' : 'Unable to save the file.';
        				$user_id = add_user_meta(get_current_user_id(), 'gif', $file_name);
        			} ?>

          </div>
        </div>
      </section>


</div>
</div>
<script type="text/javascript">
   jQuery('<div class="quantity-nav"><div class="quantity-button quantity-up">+</div><div class="quantity-button quantity-down">-</div></div>').insertAfter('.quantity input');
    jQuery('.quantity').each(function() {
      var spinner = jQuery(this),
        input = spinner.find('input[type="number"]'),
        btnUp = spinner.find('.quantity-up'),
        btnDown = spinner.find('.quantity-down'),
        min = input.attr('min'),
        max = input.attr('max');

      btnUp.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue >= max) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue + 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

      btnDown.click(function() {
        var oldValue = parseFloat(input.val());
        if (oldValue <= min) {
          var newVal = oldValue;
        } else {
          var newVal = oldValue - 1;
        }
        spinner.find("input").val(newVal);
        spinner.find("input").trigger("change");
      });

    });
</script>
<script src="<?php echo get_template_directory_uri(); ?>/js/dependencies/gifshot.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/dependencies/prism.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/dependencies/esprima.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/dependencies/escodegen.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/dependencies/lodash.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/dependencies/classList.js"></script>

      <script type="text/javascript">
      	(function(window, document) {
          
    
    var createGIFButton = document.querySelector('#create-gif'),
    saveGIFButton = document.querySelector('#save-gif'),
    saveGIF = document.querySelector('#savegif'),
    saveGIFsubmit = document.querySelector('#savegifbutton'),
    downloadAttrSupported = ('download' in document.createElement('a')),
    warningAlert = document.querySelector('.alert-warning'),
    gifSource = document.querySelector('#GIFSource'),
    gifType = document.querySelector('#GIFType'),
    interval = document.querySelector("#interval"),
    numFrames = document.querySelector("#numFrames"),
    gifHeight = document.querySelector("#gifHeight"),
    gifWidth = document.querySelector("#gifWidth"),
    progressBar = document.querySelector("progress"),
    text = document.querySelector('#gifText'),
    fontWeight = document.querySelector('#fontWeight'),
    fontSize = document.querySelector('#fontSize'),
    fontFamily = document.querySelector('#fontFamily'),
    fontColor = document.querySelector('#fontColor'),
    textAlign = document.querySelector('#textAlign'),
    textBaseline = document.querySelector('#textBaseline'),
    sampleInterval = document.querySelector('#sampleInterval'),
    numWorkers = document.querySelector('#numWorkers'),
    gifshotImagePreview = document.querySelector('.gifshot-image-preview-section'),
    placeholderDiv = document.querySelector('.placeholder-div'),
    placeholderDivDimensions = document.querySelector('.placeholder-div-dimensions'),
    gifshotCode = document.querySelector('.gifshot-code'),
    video_src = document.querySelector('#video_hidden_src'),
    list = document.querySelector('#image_hidden_src'),
    getSelectedOptions = function() {
      return {
        'gifWidth': +gifWidth.value,
        'gifHeight': +gifHeight.value,
        'images': gifSource.value === 'images' ? list.value.split(", ") : false,
        'video': gifSource.value === 'video' ? [video_src.value] : false,
        'interval': +interval.value,
        'numFrames': +numFrames.value,
        'text': text.value,
        'fontWeight': fontWeight.value,
        'fontSize': fontSize.value + 'px',
        'fontFamily': fontFamily.value,
        'fontColor': fontColor.value,
        'textAlign': textAlign.value,
        'textBaseline': textBaseline.value,
        'sampleInterval': +sampleInterval.value,
        'numWorkers': +numWorkers.value
      }
    },
    passedOptions,
    updateCodeBlock = function(obj) {
      obj = obj || {};
      saveGIFButton.classList.add('hidden');

      var targetElem = obj.targetElem,
        selectedOptions = getSelectedOptions(),
        options = (function() {
          var obj = {};

          _.each(selectedOptions, function(val, key) {
            if(val) {
              obj[key] = val;
            }
          });

          return obj;
        }());
       
      if (targetElem && (targetElem.id === 'gifWidth' || targetElem.id === 'gifHeight')) {
        if(selectedOptions.gifHeight && selectedOptions.gifWidth) {
          gifshotImagePreview.innerHTML = '';
          placeholderDiv.style.height = selectedOptions.gifHeight + 'px';
          placeholderDiv.style.width = selectedOptions.gifWidth + 'px';
          placeholderDivDimensions.innerHTML = selectedOptions.gifWidth + ' x ' + selectedOptions.gifHeight;
          if(selectedOptions.gifWidth < 60 || selectedOptions.gifHeight < 20) {
            placeholderDivDimensions.classList.add('hidden');
          } else {
            placeholderDivDimensions.classList.remove('hidden');
          }
          placeholderDiv.classList.remove('hidden');
        } else {
          placeholderDiv.classList.add('hidden');
        }
      }
    },
    bindEvents = function() {
      createGIFButton.addEventListener('click', function(ev) {
        ev.preventDefault();

        passedOptions = _.merge(_.clone(getSelectedOptions()), {
          'progressCallback': function(captureProgress) {
            gifshotImagePreview.innerHTML = '';
            placeholderDiv.classList.add('hidden');
            progressBar.classList.remove('hidden');
            progressBar.value = captureProgress;
          }
        });

        var method = gifType.value === 'snapshot' ? 'takeSnapShot' : 'createGIF';

        warningAlert.classList.add('hidden');
        gifshotImagePreview.innerHTML = '';

        gifshot[method](passedOptions, function(obj) {
          if (!obj.error) {
            var image = obj.image,
              animatedImage = document.createElement('img');

            animatedImage.src = image;
            saveGIF.value = image;
            saveGIFsubmit.classList.remove('hidden');
            progressBar.classList.add('hidden');
            progressBar.value = 0;

            placeholderDiv.classList.add('hidden');
            warningAlert.classList.add('hidden');

            gifshotImagePreview.innerHTML = '';
            gifshotImagePreview.appendChild(animatedImage);

            if(downloadAttrSupported) {
              saveGIFButton.href = obj.image;
              saveGIFButton.classList.remove('hidden');
            }
          } else {
            warningAlert.innerHTML = obj.errorMsg;
            placeholderDiv.classList.add('hidden');
            warningAlert.classList.remove('hidden');
          }
        });
      }, false);

      document.addEventListener('change', function(e) {
        updateCodeBlock({
          targetElem: e.target
        });
      });

      document.addEventListener('keyup', function(e) {
        updateCodeBlock({
          targetElem: e.target
        });
      });
    };

    bindEvents();
    updateCodeBlock({
      targetElem: gifWidth
    });
}(window, document));
      </script>
<script>
jQuery(document).ready(function() {

   var video_upload = jQuery('body').on('change', '.files-data', function(e){
        e.preventDefault;
  
        var fd = new FormData();
        var files_data = jQuery('.upload-form .files-data'); 
     
        jQuery.each(jQuery(files_data), function(i, obj) {
            jQuery.each(obj.files,function(j,file){
                fd.append('my_file_upload[' + j + ']', file);
            })
        });
        
        fd.append('action', 'cvf_upload_files');   

  //var image_gallery=document.getElementById('image_gallery').value;
  var image_gallery=jQuery('#image_gallery').val();
        
        fd.append('post_id', ''); 
  fd.append('image_gallery',image_gallery); 
  
        jQuery.ajax({
            type: 'POST',
            url: '<?php echo admin_url( 'admin-ajax.php' ); ?>',
            data: fd,
            contentType: false,
            processData: false,
   			dataType: "json",
            success: function(response){ 
		    //alert(response['ul_con']);
		    //jQuery('#image_gallery').html(response['ul_con'])
         var ext = files_data.val().split('.').pop().toLowerCase();
        if($.inArray(ext, ['gif','png','jpg','jpeg']) == -1) {
          jQuery('#video_hidden_src').val(response['ul_con']);
          jQuery('#GIFSource').val('video');
          jQuery('#create-gif').find('a').trigger('click');   
          jQuery('#cam-display').css('display','block');   
          //jQuery('#image_hidden_src').remove();
           
        }else{
           jQuery('#image_hidden_src').val(response['ul_con']);
           jQuery('#GIFSource').val('images');
           jQuery('#create-gif').find('a').trigger('click');   
          jQuery('#cam-display').css('display','block'); 
            //jQuery('#video_hidden_src').remove();
		    }
     		video_src = response['ul_con'];
         
     		//ajaxResult.push(data);
            }
        });
        //return video_src;
    });
    var video_upload = jQuery('body').on('click', '#savegifbutton', function(e){
    	jQuery('#savegifbutton').unbind('click');
    });
});
</script>
<script>
!function(e){var t=function(t,n){this.$element=e(t),this.type=this.$element.data("uploadtype")||(this.$element.find(".thumbnail").length>0?"image":"file"),this.$input=this.$element.find(":file");if(this.$input.length===0)return;this.name=this.$input.attr("name")||n.name,this.$hidden=this.$element.find('input[type=hidden][name="'+this.name+'"]'),this.$hidden.length===0&&(this.$hidden=e('<input type="hidden" />'),this.$element.prepend(this.$hidden)),this.$preview=this.$element.find(".fileupload-preview");var r=this.$preview.css("height");this.$preview.css("display")!="inline"&&r!="0px"&&r!="none"&&this.$preview.css("line-height",r),this.original={exists:this.$element.hasClass("fileupload-exists"),preview:this.$preview.html(),hiddenVal:this.$hidden.val()},this.$remove=this.$element.find('[data-dismiss="fileupload"]'),this.$element.find('[data-trigger="fileupload"]').on("click.fileupload",e.proxy(this.trigger,this)),this.listen()};t.prototype={listen:function(){this.$input.on("change.fileupload",e.proxy(this.change,this)),e(this.$input[0].form).on("reset.fileupload",e.proxy(this.reset,this)),this.$remove&&this.$remove.on("click.fileupload",e.proxy(this.clear,this))},change:function(e,t){if(t==="clear")return;var n=e.target.files!==undefined?e.target.files[0]:e.target.value?{name:e.target.value.replace(/^.+\\/,"")}:null;if(!n){this.clear();return}this.$hidden.val(""),this.$hidden.attr("name",""),this.$input.attr("name",this.name);if(this.type==="image"&&this.$preview.length>0&&(typeof n.type!="undefined"?n.type.match("image.*"):n.name.match(/\.(gif|png|jpe?g)$/i))&&typeof FileReader!="undefined"){var r=new FileReader,i=this.$preview,s=this.$element;r.onload=function(e){i.html('<img src="'+e.target.result+'" '+(i.css("max-height")!="none"?'style="max-height: '+i.css("max-height")+';"':"")+" />"),s.addClass("fileupload-exists").removeClass("fileupload-new")},r.readAsDataURL(n)}else this.$preview.text(n.name),this.$element.addClass("fileupload-exists").removeClass("fileupload-new")},clear:function(e){this.$hidden.val(""),this.$hidden.attr("name",this.name),this.$input.attr("name","");if(navigator.userAgent.match(/msie/i)){var t=this.$input.clone(!0);this.$input.after(t),this.$input.remove(),this.$input=t}else this.$input.val("");this.$preview.html(""),this.$element.addClass("fileupload-new").removeClass("fileupload-exists"),e&&(this.$input.trigger("change",["clear"]),e.preventDefault())},reset:function(e){this.clear(),this.$hidden.val(this.original.hiddenVal),this.$preview.html(this.original.preview),this.original.exists?this.$element.addClass("fileupload-exists").removeClass("fileupload-new"):this.$element.addClass("fileupload-new").removeClass("fileupload-exists")},trigger:function(e){this.$input.trigger("click"),e.preventDefault()}},e.fn.fileupload=function(n){return this.each(function(){var r=e(this),i=r.data("fileupload");i||r.data("fileupload",i=new t(this,n)),typeof n=="string"&&i[n]()})},e.fn.fileupload.Constructor=t,e(document).on("click.fileupload.data-api",'[data-provides="fileupload"]',function(t){var n=e(this);if(n.data("fileupload"))return;n.fileupload(n.data());var r=e(t.target).closest('[data-dismiss="fileupload"],[data-trigger="fileupload"]');r.length>0&&(r.trigger("click.fileupload"),t.preventDefault())})}(window.jQuery)
</script>
<style type="text/css">
  .clearfix{*zoom:1;}.clearfix:before,.clearfix:after{display:table;content:"";line-height:0;}
.clearfix:after{clear:both;}
.hide-text{font:0/0 a;color:transparent;text-shadow:none;background-color:transparent;border:0;}
.input-block-level{display:block;width:100%;min-height:30px;-webkit-box-sizing:border-box;-moz-box-sizing:border-box;box-sizing:border-box;}
.btn-file{overflow:hidden;position:relative;vertical-align:middle;}.btn-file>input{position:absolute;top:0;right:0;margin:0;opacity:0;filter:alpha(opacity=0);transform:translate(-300px, 0) scale(4);font-size:23px;direction:ltr;cursor:pointer;}
.fileupload{margin-bottom:9px;}.fileupload .uneditable-input{display:inline-block;margin-bottom:0px;vertical-align:middle;cursor:text;}
.fileupload .thumbnail{overflow:hidden;display:inline-block;margin-bottom:5px;vertical-align:middle;text-align:center;}.fileupload .thumbnail>img{display:inline-block;vertical-align:middle;max-height:100%;}
.fileupload .btn{vertical-align:middle;}
.fileupload-exists .fileupload-new,.fileupload-new .fileupload-exists{display:none;}
.fileupload-inline .fileupload-controls{display:inline;}
.fileupload-new .input-append .btn-file{-webkit-border-radius:0 3px 3px 0;-moz-border-radius:0 3px 3px 0;border-radius:0 3px 3px 0;}
.thumbnail-borderless .thumbnail{border:none;padding:0;-webkit-border-radius:0;-moz-border-radius:0;border-radius:0;-webkit-box-shadow:none;-moz-box-shadow:none;box-shadow:none;}
.fileupload-new.thumbnail-borderless .thumbnail{border:1px solid #ddd;}
.control-group.warning .fileupload .uneditable-input{color:#a47e3c;border-color:#a47e3c;}
.control-group.warning .fileupload .fileupload-preview{color:#a47e3c;}
.control-group.warning .fileupload .thumbnail{border-color:#a47e3c;}
.control-group.error .fileupload .uneditable-input{color:#b94a48;border-color:#b94a48;}
.control-group.error .fileupload .fileupload-preview{color:#b94a48;}
.control-group.error .fileupload .thumbnail{border-color:#b94a48;}
.control-group.success .fileupload .uneditable-input{color:#468847;border-color:#468847;}
.control-group.success .fileupload .fileupload-preview{color:#468847;}
.control-group.success .fileupload .thumbnail{border-color:#468847;}
</style>
<?php get_footer();?>
