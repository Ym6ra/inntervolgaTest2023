$(document).ready(function(){
	$('.field input').on('mouseout', function() {
		let empty = false;
	
		$('.field input').each(function() {
		  empty = $(this).val().length == 0;
		  console.log(empty);
		});
	
		if (empty)
		  $('.actions input').attr('disabled', 'disabled');
		else
		  $('.actions input').attr('disabled', false);
	  });
});
$(document).ready( function() {
		$("#createComent").submit(function(e) {
			e.preventDefault();
			var name = $('#name').val();
			var text = $('#text').val();
			var date = $('#date').val();
			$.ajax({
				url: "add",
				type: "POST",
				data: {
					name: name,
					text: text,
					date: date,
					},
				dataType: "json",
				success: function(response) {
					console.log(response);
					// обрабатываем успешный ответ от сервера
					if (response.success === true) {
                        $(document).ajaxStop(function() { location.reload(true); });
                    }
				},
				error: function(xhr, status, error) {
					// обрабатываем ошибку
					console.log(xhr.responseText);
				}
			})
		})
	}
);
function hideRow(i) {
	var id = 'comment'+i;
	var row = document.getElementById(id);
    	row.classList.add("hiden");
	var buttonid = '#deleteComment'+i;
	var idInp = '#id'+i;
	$(buttonid).submit(function(e) {
		e.preventDefault();
		console.log(buttonid);
		var id = $(idInp).val();
		var url = 'delete/'+id;
		console.log(url);
		//console.log(id);
		$.ajax({
			url: url,
			type: "POST",
			data: {
				id: id,
				},
			dataType: "json",
			success: function(response) {
				// обрабатываем успешный ответ от сервера
                console.log(response);
					// обрабатываем успешный ответ от сервера
					if (response.success === true) {
                        $(document).ajaxStop(function() { location.reload(true); });
                    }
			},
			error: function(xhr, status, error) {
				// обрабатываем ошибку
				console.log(xhr.responseText);
				//console.log(status.responseText);
				//console.log(error.responseText);
			}
		})})
};