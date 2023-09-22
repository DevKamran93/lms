$(document).ready(function() {
// define a function to calculate the total number of days
function calculateTotalDays() {
    // alert('working')
    // get the start and end dates from your input fields
    var startDate = new Date($('#start_date').val());
    var endDate = new Date($('#end_date').val());

    // calculate the time difference in milliseconds
    var timeDiff = endDate.getTime() - startDate.getTime();

    // calculate the total number of days
    var totalDays = Math.round(timeDiff / (1000 * 60 * 60 * 24));
    // alert(totalDays)
    // display the result in a span or other HTML element
    $('#totalDays').val(totalDays);
  }

  // add a blur event to trigger the calculation when the user leaves the input field
//   $('#start_date, #end_date').blur(function() {
//     calculateTotalDays();
//   });

  // add a change event to trigger the calculation when the user changes the date
  $('#start_date, #end_date').change(function() {
    calculateTotalDays();
  });


});
