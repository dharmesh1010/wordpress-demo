jQuery('document').ready(function($) {
    var commentform = $('#commentform'); // find the comment form

    commentform.submit(function() {
        var formdata = commentform.serialize();

        $.ajax({
            type: 'post',
            url: 'http://localhost/wordpress-demo/wp-admin/admin-ajax.php',
            data: 'action=save_comment&' + formdata,
            success: function(data, textStatus) {
                $("#notification_msg").html('');
                if (data == 1) {
                    var msg = '<span style="color:red"> Please enter comment </span>';
                    $("#notification_msg").prepend(msg);
                } else if (data == 0) {
                    var msg = '<span style="color:red"> There is one comment for this post already. You can not comment it again . </span>';
                    $("#notification_msg").prepend(msg);
                } else {
                    var msg = '<span style="color:green" > Comment has been posted successfully !! </span>';
                    $("#notification_msg").prepend(msg);
                    $(".comments-area").prepend(data);
                }
            }
        });
        return false;

    });
});