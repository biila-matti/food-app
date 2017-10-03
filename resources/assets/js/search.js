$('#keyword').on('input', function() {
	$.ajax({
	    dataType: "json",
	    url: '/search-bar',
	    cache: false,
	    data: {keyword: $('#keyword').val()},
	    success: function (result) {
	    	$('#foods li').remove();
	        $.each( result, function($name, $id) {
	        	$('#foods').append('<li><a href="#'+$id+'">'+$name+'</a></li>');
	        });
	    },
	});
});

$('#foods a').click(function() {
	console.log($(this).html());
	// $('#selected').append('<li>'++'</li>');
});