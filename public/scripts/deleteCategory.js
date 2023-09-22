$(document).ready(function() {

$('#updatingCategory').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var name = button.data('name') // Extract info from data-* attributes
    var id = button.data('id')
    // Update the modal's content.
    console.log(name)
    var modal = $(this)
    modal.find('#name').val(name)
    modal.find('#category_id').val(id)
    $url =  $('#editForm');
          $url.attr('action','/updating-category/'+id);
  })

  $('#deletingCategory').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    // Extract info from data-* attributes
    var id = button.data('id')
    // Update the modal's content.
    var modal = $(this)
    modal.find('#category_id').val(id)
    $url =  $('#deleteForm');
          $url.attr('action','/deleting-category/'+id);
  })

  $('#updatingDepartment').on('show.bs.modal', function (event) {
    var button = $(event.relatedTarget) // Button that triggered the modal
    var name = button.data('name') // Extract info from data-* attributes
    var id = button.data('id')
    var email = button.data('email')
    var description = button.data('description')
    var phone = button.data('phone')
    // var name = button.data('name')
    // Update the modal's content.
    console.log(name)
    var modal = $(this)
    modal.find('#name').val(name)
    modal.find('#email').val(email)
    modal.find('#description').val(description)
    modal.find('#department_id').val(id)
    modal.find('#phone').val(phone)
    $url =  $('#editForm');
          $url.attr('action','/updating-department/'+id);
  })

});
