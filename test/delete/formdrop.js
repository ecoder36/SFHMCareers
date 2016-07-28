var FormDropzone = function () {


    return {
        //main function to initiate the module
        init: function () {  

            Dropzone.options.myDropzone = {
                dictDefaultMessage: "",
                init: function() {
                    this.on("addedfile", function(file) {
                        // Create the remove button
                        var removeButton = Dropzone.createElement("<a href='javascript:;'' class='btn red btn-sm btn-block'>Remove</a>");
                        
                        // Capture the Dropzone instance as closure.
                        var _this = this;

                        // Listen to the click event
                        removeButton.addEventListener("click", function(e) {
                          // Make sure the button click doesn't submit the form:
                          e.preventDefault();
                          e.stopPropagation();

                          // Remove the file preview.
                          _this.removeFile(file);
                          // If you want to the delete the file on the server as well,
                          // you can do the AJAX request here.
                        });

                        // Add the button to the file preview element.
                        file.previewElement.appendChild(removeButton);
                    });
                }            
            }
        }
    };
    
    
    
    
    
     function _(el){
    return document.getElementById(el);
}
function uploadFile(){
    var file = _("file1").files[0];
	// alert(file.name+" | "+file.size+" | "+file.type);
	var formdata = new FormData();
	formdata.append("file1", file);
	var ajax = new XMLHttpRequest();
	ajax.upload.addEventListener("progress", progressHandler, false);
	ajax.addEventListener("load", completeHandler, false);
	ajax.addEventListener("error", errorHandler, false);
	ajax.addEventListener("abort", abortHandler, false);
	//ajax.open("POST", "fileupload.php");
        ajax.open("POST", "upload.php");
  ajax.send(formdata);

	//ajax.send(formdata);
}
function progressHandler(event){
	_("loaded_n_total").innerHTML = "Uploaded "+event.loaded+" bytes of "+event.total;
	var percent = (event.loaded / event.total) * 100;
	_("progressBar").value = Math.round(percent);
	_("status").innerHTML = Math.round(percent)+"% uploaded... please wait";
    var selectedPackage = document.getElementById("progressBar").value;
    if ( selectedPackage == 100 ) {
          document.getElementById("progressBar").style.display = "inline";
          document.getElementById("uploadb").style.display = "none";
    }
    if ( 100 > selectedPackage > 0 ) {
          document.getElementById("progressBar").style.display = "inline";
          document.getElementById("uploadb").style.display = "none";
          document.getElementById("home").style.display = "inline";
    }
    if (event.loaded == event.total ) {
          document.getElementById("loaded_n_total").style.display = "none";
          document.getElementById("uploadb").style.display = "none";
         
    }
    if (event.loaded != event.total ) {
          document.getElementById("loaded_n_total").style.display = "inline";
    }

}
function completeHandler(event){
	_("status").innerHTML = event.target.responseText;
	_("progressBar").value = 100;
}
function errorHandler(event){
	_("status").innerHTML = "Upload Failed";
}
function abortHandler(event){
	_("status").innerHTML = "Upload Aborted";
}

    
    
    
    
    
    
    
}();

jQuery(document).ready(function() {    
   FormDropzone.init();
});