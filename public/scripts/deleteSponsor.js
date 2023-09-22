$(document).ready(function() {

    $('#updatingSponsor').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        var name = button.data('name') // Extract info from data-* attributes
        var id = button.data('id')
        var link = button.data('link')
        var type = button.data('type')
        var logo = button.data('logo')
        // Update the modal's content.
        console.log(name)
        var modal = $(this)
        modal.find('#name').val(name)
        modal.find('#sponsor_id').val(id)
        modal.find('#link').val(link)
        modal.find('#type').val(type)
        modal.find('#sponsor_id').val(id)
        modal.find('.dropify-preview').html('<img src="' + logo + '">');
        modal.find('.dropify-clear').click();
        modal.find('.dropify').dropify();
        $url =  $('#editForm');
              $url.attr('action','/updating-sponsor-of-event/'+id);
      })






      $('#deletingSponsor').on('show.bs.modal', function (event) {
        var button = $(event.relatedTarget) // Button that triggered the modal
        // Extract info from data-* attributes
        var id = button.data('id')
        // Update the modal's content.
        var modal = $(this)
        modal.find('#sponsor_id').val(id)
        $url =  $('#deleteForm');
              $url.attr('action','/deleteing-sponsor-from-event/'+id);
      })

    //   $('#updatingDepartment').on('show.bs.modal', function (event) {
    //     var button = $(event.relatedTarget) // Button that triggered the modal
    //     var name = button.data('name') // Extract info from data-* attributes
    //     var id = button.data('id')
    //     var email = button.data('email')
    //     var description = button.data('description')
    //     var phone = button.data('phone')
    //     // var name = button.data('name')
    //     // Update the modal's content.
    //     console.log(name)
    //     var modal = $(this)
    //     modal.find('#name').val(name)
    //     modal.find('#email').val(email)
    //     modal.find('#description').val(description)
    //     modal.find('#department_id').val(id)
    //     modal.find('#phone').val(phone)
    //     $url =  $('#editForm');
    //           $url.attr('action','/updating-department/'+id);
    //   })

    });
