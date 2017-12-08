jQuery.fn.extend({
    addToArray: function(value) {
        return this.filter(":input").val(function(i, v) {
           var arr = v.split(',');
           arr.push(value);
           return arr.join(',');
        }).end();
    },
    removeFromArray: function(value) {
        return this.filter(":input").val(function(i, v) {
           return $.grep(v.split(','), function(val) {  
                    return val != value;
                  }).join(',');
        }).end();
    }
});

$(document).on('click', 'a[data-role=ingredient]',function() {
	var ingredient = $(this);
	var arr = $('input[data-role=array]');
	var check = $(arr).val().split(',');

	// add to selected list
	$(this).parent().animate({opacity: 0,'margin-bottom': '-15px'}, 200, function() {
		ingredient.parent().remove();

		var material = '<li class="new" style="opacity:0;margin-top:-15px" data-id="'+ ingredient.data('id') +'">';
		material += ingredient.html();
		material += ' <a data-role="remove" class="text-danger pull-right"><i class="fa fa-trash"></i></a></li>';

		$('#selected').append(material);
		$('.new').animate({opacity: 1,'margin-top': '0'}, 200, function() {
			$(this).removeClass('new');
		})
	});
	$(arr).addToArray($(this).data('id'));
	
});

$(document).on('click', 'li > a[data-role=remove]', function() {
	var ingredient = $(this).parent();
	var arr = $('input[data-role=array');
	ingredient.animate({opacity: 0, 'margin-bottom': '-15px'}, 200, function() {
		ingredient.remove();
		$(arr).removeFromArray(ingredient.data('id'));
	});
});

$('#keyword').on('input', getFood);

function getFood() {
	var arr = $('input[data-role=array]').val().split(',');

	$.ajax({
	    dataType: "json",
	    url: '/search-bar',
	    cache: false,
	    data: {keyword: $('#keyword').val()},
	    success: function (result) {
	    	$('#foods').empty();
	        $.each( result, function($name, $id) {
	        	if($.inArray($id.toString(), arr) == -1) {
	        		$('#foods').append('<li><a data-role="ingredient" data-id="'+ $id +'">'+$name+'</a></li>');
	        	}
	        });
	    },
	});
}