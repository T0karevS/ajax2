$(document).ready(function(e){
	let form = $('.form').submit(function(ev){
			ev.preventDefault();
			let th=$(this);
	}
			$.ajax({
				url: 'send.php',
				method: 'POST',
				type: "POST",
				dataType: 'html',
				data: formData,
				success: function(data){
					alert("success");
					document.querySelector(".info").innerHTML = data;
				}

			})
	}
)

