$(document).ready(function() {

    $('.success').fadeOut(0).fadeIn(800).delay(3500);
    $('.error').fadeOut(0).fadeIn(800).delay(3500);

    $('.tooltip').each(function()   {
        $(this).qtip({
            content: {
                text: false
            },
            position: {
                corner: {
                    target: 'rightTop',
                    tooltip: 'bottomLeft'
                }
            },
            style: {
                name: 'green',
                border: {
                    width: 2,
                    radius: 6
                },
                padding: 8,
                textAlign: 'Center',
                tip: true
            },
            show: {
                delay: 0,
                effect: {
                    length: 200
                }
            }
        });
    });

    $('.confirm').not('.ajax').click( function(e) {

        var answer = confirm("Are you sure you want to do this?");
        if (!answer) {
            e.preventDefault();
        }
    })

    $('.delete.ajax').click( function(e) {

        if($(this).hasClass('confirm')) {
            var answer = confirm("Are you sure you want to do this?");
            if (answer) {

                var url = $(this).attr('href');
                $('.ajaxsuccess').remove();
                $.ajax({
                    type: "POST",
                    url: url,  
                    dataType: "json",
                    success: function(result){
                        $('#' + result['delete_id']).css({
                            
                            }).fadeOut(1000);
                    },
                    error: function( XMLHttpRequest, textStatus, errorThrown) {
                        alert(XMLHttpRequest + textStatus + errorThrown);
                    }
                });


            
            }
        }

        e.preventDefault();
    })

    $('form.ajax').submit( function(e) {

        e.preventDefault();
        var data = $(this).serialize();
        var action = $(this).attr('action');
        var dis = this;  
        $.ajax({
            type: "POST",
            url: action,
            data: data,
            dataType: "json",
            success: function(result){                
                if(result['action'] == 'insert') {
                    $(dis).append('<input type="hidden" name="id" value="' + result['insert_id'] + '" />');
                }
                var msg = $("#ajaxmessage");
                msg.text("Item saved!")
                msg.hide()
                msg.stop(true, true).fadeIn('slow').animate({
                    "bottom": "4px",
                    "height": "17px",
                    "font-size": "1em",
                    "left": "80px",
                    "line-height": "17px",
                    "width": "100px"
                }).delay(2000).fadeOut('slow').css({
                    "height": "100px",
                    "width": "200px",
                    "font-size": "1.4em",
                    "line-height": "100px",
                    "bottom": "100px"
                }).center();
            },
            error: function( XMLHttpRequest, textStatus, errorThrown) {
                alert('You entered some stuff my database did not like!');
            }
        });
    })

    $(".datepicker").datepicker( {dateFormat: 'yy-mm-dd'});  
    $("table.sortable").tablesorter({});


});


(function($) {
    $.fn.extend({
        center: function() {
            return this.each(function() {
                var left = ($(window).width() - $(this).outerWidth()) / 2;
                $(this).css({
                    position: 'absolute',
                    margin: 0,
                    left: (left > 0 ? left : 0) + 'px'
                });
            });
        }
    });
})(jQuery);


function dump(arr,level) {
	var dumped_text = "";
	if(!level) level = 0;

	//The padding given at the beginning of the line.
	var level_padding = "";
	for(var j=0;j<level+1;j++) level_padding += "    ";

	if(typeof(arr) == 'object') { //Array/Hashes/Objects
		for(var item in arr) {
			var value = arr[item];

			if(typeof(value) == 'object') { //If it is an array,
				dumped_text += level_padding + "'" + item + "' ...\n";
				dumped_text += dump(value,level+1);
			} else {
				dumped_text += level_padding + "'" + item + "' => \"" + value + "\"\n";
			}
		}
	} else { //Stings/Chars/Numbers etc.
		dumped_text = "===>"+arr+"<===("+typeof(arr)+")";
	}
	return dumped_text;
}