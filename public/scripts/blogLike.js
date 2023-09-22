

$(document).on('click', '.like-blog', function(e) {
    e.preventDefault();
    var blogId = $(this).data('id');
    var token = $('input[name="_token"]').val();
    var action = $(this).hasClass('text-danger') ? 'dislike' : 'like'; // check if the user has already liked the blog
    $.ajax({
        url: '/blogs/' + blogId + '/like',
        type: 'POST',
        data: {
            _token: token,
            blogId: blogId,
            action: action // add the action parameter
        },
        success: function(response) {
            if (action == 'like') {
                var likes = parseInt(response.likes);
                var likeText = likes == 1 ? ' Love' : ' Loves'; // condition to check for singular or plural form
                $('.like-blog[data-id="' + blogId + '"]').addClass('text-danger');
                $('.like-blog[data-id="' + blogId + '"]').html('<i class="fa fa-heart text-danger"></i> ' + likes + likeText);
            } else {
                var likes = parseInt(response.likes);
                var likeText = likes == 1 ? ' Love' : ' Loves'; // condition to check for singular or plural form
                $('.like-blog[data-id="' + blogId + '"]').removeClass('text-danger');
                $('.like-blog[data-id="' + blogId + '"]').addClass('text-muted');
                $('.like-blog[data-id="' + blogId + '"]').html('<i class="fa fa-heart"></i> ' + likes + likeText);
            }
        },


        error: function(xhr) {
            console.log(xhr.responseText);
        }
    });
});

