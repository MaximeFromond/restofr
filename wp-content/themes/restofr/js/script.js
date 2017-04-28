

    $(document).ready(function() { 
        
            $.ajax({
                url: 'http://localhost:8888/restofr/wp-content/themes/restofr/resto-liste-restaurants.json',
                dataType: 'json',
                success: function(json) {
                    for(var key in json) {
                        $('.json').append('<div class="restaurants">'+ json[key]['name'] +json[key] +'</div>');
                    }
                }
            });    
    });
