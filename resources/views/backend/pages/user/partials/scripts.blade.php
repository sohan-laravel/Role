<script>
    $('#checkPermissionAll').click(function() {
        if ($(this).is(':checked')) {
            // check all box
            $('input[type=checkbox]').prop('checked', true);
        } else {
            // uncheck all box
            $('input[type=checkbox]').prop('checked', false);
        }
    })

    function checkPermissionByGroup(className, checkThis) {
        const groupIdName = $("#" + checkThis.id);
        const classCheckBox = $('.' + className + ' input');
        if (groupIdName.is(':checked')) {
            classCheckBox.prop('checked', true);
        } else {
            classCheckBox.prop('checked', false);
        }
    }

</script>
