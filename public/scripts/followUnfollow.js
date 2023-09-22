// $('#follow-button').click(function() {
//     var userId = $(this).data('user-id');
//     var userModel = $(this).data('model');
//     var token = $('input[name="_token"]').val();

//     alert(userModel);
//     $.ajax({
//         url: '/follow/'.userModel,
//         method: 'POST',
//         data: {
//             user_id: userId,
//             model: userModel,
//             _token: '{{ csrf_token() }}'
//         },
//         success: function(response) {
//             alert('User followed successfully!');
//         },
//         error: function(response) {
//             alert('Failed to follow user!');
//         }
//     });
// });

// $(document).ready(function() {
//     $('#follow-button').click(function() {
//         var userId = $(this).data('followable_id');
//         var model = $(this).data('followable_type');
//         var token = $('input[name="_token"]').val();
//         alert(userId);
//         alert(model);
//         alert(token);
//         $.ajax({
//             type: 'POST',
//             url: '/follow',
//             data: {
//                 // '_token': token,
//                 'followable_id': userId,
//                 'followable_type': model
//             },
//             success: function(data) {
//                 alert(data.message);
//             },
//             error: function(data){
//                 alert(data.message);
//             }
//         });
//     });
// });

// $(document).ready(function() {
//     // Get the follow button element
//     var followButton = $('#follow-button');

//     // Get the followable_id and followable_type values from the button
//     var followableId = followButton.data('followable_id');
//     var followableType = followButton.data('followable_type');
//     var token = $('input[name="_token"]').val();

//     // Add an event listener to the follow button
//     followButton.click(function() {
//         alert(token)
//         // Send a POST request to the follow/unfollow route
//         $.post('/follow', {
//             _token: token,
//             followable_id: followableId,
//             followable_type: followableType
//         }).done(function(data) {
//             // Update the button text and class based on the response data
//             if (data.following) {
//                 followButton.text('Following');
//                 followButton.removeClass('btn-primary');
//                 followButton.addClass('btn-secondary');
//             } else {
//                 followButton.text('Follow');
//                 followButton.removeClass('btn-secondary');
//                 followButton.addClass('btn-primary');
//             }
//         });
//     });
// });
// $(document).ready(function() {
//     $("#follow-button").click(function() {
//         var followableId = $(this).data('followable_id');
//         var followableType = $(this).data('followable_type');
//         var token = $('input[name="_token"]').val();
//         var button = $(this);
//         var followText = button.text();
//         button.prop('disabled', true);

//         $.ajax({
//             url: '/follow',
//             type: 'POST',
//             data: {
//                 followable_id: followableId,
//                 followable_type: followableType,
//                 _token: token
//             },
//             success: function(data) {
//                 if (data.following) {
//                     button.text('Following');
//                 } else {
//                     button.text('Follow');
//                 }
//                 button.prop('disabled', false);
//             },
//             error: function(xhr, textStatus, errorThrown) {
//                 button.prop('disabled', false);
//                 button.text(followText);
//                 console.log(xhr.status + ": " + xhr.responseText);
//             }
//         });
//     });
// });

$(document).on('click', '#follow-button', function(e) {
    e.preventDefault();
    var followableId = $(this).data('followable_id');
    var followableType = $(this).data('followable_type');
    var token = $('input[name="_token"]').val();
    // alert(token)
    var action = $(this).hasClass('btn-primary') ? 'follow' : 'unfollow'; // check if the user has already followed the followable
    $.ajax({
        url: '/follow',
        type: 'POST',
        data: {
            _token: token,
            followable_id : followableId,
            followable_type : followableType,
            action : action // add the action parameter
        },
        success: function(response) {
            // alert(response);
            if (action == 'follow') {
                $('#follow-button').removeClass('btn-primary');
                $('#follow-button').addClass('btn-danger');
                $('#follow-button').html('Unfollow');
            } else {
                // alert(response);
                $('#follow-button').removeClass('btn-danger');
                $('#follow-button').addClass('btn-primary');
                $('#follow-button').html('Follow');
            }
        },
        error: function(xhr) {
            console.log(xhr.responseText);

        }
    });
});


// Assuming you have a button with class "follow-button" and data attributes "user-id" and "follows" indicating the user ID and follow status

// $(document).on('click', '#follow-button', function() {
//     var userId = $(this).data('user-id');
//     var follows = $(this).data('follows');

//     $.ajax({
//       url: '/follow',
//       type: 'POST',
//       data: {user_id: userId, follows: follows},
//       success: function(response) {
//         // Update the button text or icon based on the response
//         $(this).text(response.follows ? 'Unfollow' : 'Follow');
//         $(this).data('follows', response.follows ? 1 : 0);
//       }
//     });
//   });

