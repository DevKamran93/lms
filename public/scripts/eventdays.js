$(document).ready(function() {
    // Hide all tab contents except the first one
    $('.tab-pane1:not(:first)').hide();

    // Handle tab link clicks
    $('.nav-link').click(function(e) {
        e.preventDefault();

        // Hide all tab contents
        $('.tab-pane1').hide();

        // Show the tab content for the clicked link
        $($(this).attr('href')).show();

        // Send an AJAX request to get the topics for the clicked day
        $.ajax({
            url: '/get-topics',
            method: 'GET',
            data: { day_id: $(this).attr('href').substring(4) },
            success: function(data) {
                // Replace the table contents with the new data
                $('#table-' + data.day_id).html(data.html);
            }
        });
    });
});
