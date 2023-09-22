$(document).ready(function() {
    $('.js-sweetalert').click(function(e) {
        e.preventDefault();
        var promise = new Promise(function(resolve, reject) {
            swal({
                title: "Are you sure?",
                text: "Once deleted, you will not be able to recover this item!",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then(function(result) {
                resolve(result);
            }, function(err) {
                reject(err);
            });
        });
        promise.then(function(result) {
            if (result) {
                var form = document.getElementById('delete-form');
                var formData = new FormData(form);
                fetch(form.action, {
                    method: 'DELETE',
                    body: formData
                })
                .then(function(response) {
                    return response.json();
                })
                .then(function(data) {
                    // Handle success response here, e.g. redirect to a success page
                    console.log(data);
                })
                .catch(function(error) {
                    // Handle error response here
                    console.log(error);
                });
            }
        });
    });
});
