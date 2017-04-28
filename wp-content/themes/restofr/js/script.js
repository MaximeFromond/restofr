$(document).ready(function() { 
console.log('test');
    $.ajax({
        url: 'http://localhost/restofr/wp-content/themes/restofr/resto-liste-restaurants.json',
        dataType: 'json',
        success: function(json) {
            for(var key in json) {
                $('.json').append('<div class="restaurants">'+ json[key]['name'] +json[key]['address'] +'</div>');

            }
        }
    }); 
});

