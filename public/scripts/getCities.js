$(document).ready(function() {

    $('select[name="country_id"]').on('change', function(){
        var countryId = $(this).val();
        console.log('working')
        if(countryId) {
            $.ajax({
                url: '/getStates/'+countryId,
                type:"GET",
                dataType:"json",
                // beforeSend: function(){
                //     $('#loader').css("visibility", "visible");
                // },

                success:function(data) {
                    // alert(JSON.stringify(data));
                    $array = JSON.stringify(data);
                    // alert($array);
                    $('select[name="state_id"]').empty();

                    $.each(data, function(key, value){

                        $('select[name="state_id"]').append('<option value="'+ key +'">' + value + '</option>');

                    });
                },
                // complete: function(){
                //     $('#loader').css("visibility", "hidden");
                // }
            });
        } else {
            $('select[name="state_id"]').empty();
        }

    });

    $('select[name="state_id"]').on('change', function(){
        var stateId = $(this).val();
        console.log('working')
        if(stateId) {
            $.ajax({
                url: '/getCities/'+stateId,
                type:"GET",
                dataType:"json",
                // beforeSend: function(){
                //     $('#loader').css("visibility", "visible");
                // },

                success:function(data) {
                    // alert(JSON.stringify(data));
                    $array = JSON.stringify(data);
                    // alert($array);
                    $('select[name="city_id"]').empty();

                    $.each(data, function(key, value){

                        $('select[name="city_id"]').append('<option value="'+ key +'">' + value + '</option>');

                    });
                },
                // complete: function(){
                //     $('#loader').css("visibility", "hidden");
                // }
            });
        } else {
            $('select[name="city_id"]').empty();
        }

    });



});
