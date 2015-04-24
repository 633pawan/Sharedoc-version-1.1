(function() {
	$('form').ajaxForm({
		beforeSubmit: function() {	
			count = 0;
			val = $.trim( $('#files').val() );
			
			if( val == '' ){
				count= 1;
				$( "#files" ).next('span').html( "Please select your files" );
			}
			
			if(count == 0){
				for (var i = 0; i < $('#files').get(0).files.length; ++i) {
			    	fileName = $('#files').get(0).files[i].name;
			    	var extension = fileName.split('.').pop().toUpperCase();
			    	if(extension!="PNG" && extension!="JPG" && extension!="GIF" && extension!="JPEG" && extension!="PDF" && extension!="DOC" && extension!="DOCX"){
			    		count= count+ 1
			    	}
			    }
				if( count> 0)  {
				html = '';
				html+='Invalid Extension. ShareDoc currenly supports only DOC,DOCX,PDF,JPG,GIF,JPEG formats ';
				$('#uploaded_files #error_div').append( html );
				$('#error_div').delay(5000).fadeOut('slow');
				}
			}
		    
		    
		    if( count> 0){
		    	return false;
		    } else {
		    	$( "#files" ).next('span').html( "" );
		    }
	    },
		
		beforeSend:function(){
		   $('#loader').show();
		   $('#file_upload').hide();
		 //  $('#loader').wait(5);
		   $('#loader').delay(3000).fadeOut('slow');
		   
		},
	    success: function(msg) {
	    },
		complete: function(xhr) {
			$('#loader').hide();
			$('#file_upload').show();
			
			$('#files').val('');
			$('#error_div').html('');
			result = xhr.responseText;
			result = $.parseJSON(result);
			base_path = $('#base_path').val();
			
			if( result.success ){
				$('#uploaded_files #success_div').html('');
				//name = base_path+'files/'+result.success;
				var html = '';
				html = 'File has been uploaded successfully';
				//html+= '<image src="'+name+'">';
				$('#uploaded_files #success_div').append( html );
				$('#uploaded_files #success_div').delay(5000).fadeOut('slow');
				
			} else if( result.error ){
				$('#uploaded_files #error_div').html('');
				error = result.error
				html+='<p>'+error+'</p>';
				$('#uploaded_files #error_div').append( html );
			}
				
			
			$('#error_div').delay(5000).fadeOut('slow');
		}
	}); 
	
})();  