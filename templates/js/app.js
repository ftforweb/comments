$(document).ready(function(){
	$('#form-message').on('submit', function(e){
		e.preventDefault();
		var form = $(this);
		var name = $('#name');
		var email = $('#email');
		var comments = $('#comments');
		if(name.val() == ''){
			name.css("border", "1px solid red");
			return;
		} else {
			name.css("border", "1px solid transparent");
		}
		if(email.val() == ''){
			email.css("border", "1px solid red");
		}
		else {
			var r = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
			if (!r.test(email.val())) {
			   	email.css("border", "1px solid red");
	        	return;
			}
			else {
				email.css("border", "1px solid transparent");
			}
		} 
		if(comments.val() == ''){
			comments.css("border", "1px solid red");
			return;
		} else {
			comments.css("border", "1px solid transparent");
		}
            $.ajax({
	      type: "POST",
	      async: false,
              url: '',
	      data: 'email='+email.val()+'&name='+name.val()+'&comments='+comments.val(),
	      dataType: "html",
	      success: function(data) {
	    	$('.message-container').append(
	    			'<div class="col-md-4 col-sm-6 col-xs-12 comment-item">'+
			          '<div class="item text-center">'+
			            '<div class="item-header">' +
			              name.val() +
			            '</div>' +
			            '<div class="item-body">' +
			              '<div class="item-body-email">'+ email.val() +'</div>' +
			              '<div class="item-body-message">' + comments.val() + '</div>'+
			            '</div>'+
			          '</div>' +
			        '</div>'
	    	);
	      }
	    });
	})
});





