$(document).ready(function () {
    $(document).on("click", ".ajax-call", function () {
        let urls = $('#myForm').attr('action');

        $.ajax({
            type: 'POST',
            url: urls,
            data: {},
            dataType: 'JSON',
            success: function (resp) {

                if (resp.table != '') {
                    $(".table-result").html(resp.table);
                }
            },

            error: function (e) {
                console.log(e)
            }
        });
    });
});

jQuery(document).on('click', '.modal-submit', function (e) {
    e.preventDefault();
    e.stopPropagation();

    var submit_btn = jQuery(this);
    var btn_name = jQuery(this).html();
    var new_btn_name = 'Loading...'
    var form = jQuery(this).parents('form:first');
    var method = jQuery(form).attr('method');
    var url = jQuery(form).attr('action');
    var modal = jQuery(this).closest('.modal').attr('id');

    jQuery(form).ajaxSubmit({
        type: method,
        url: url,
        dataType: 'JSON',
        beforeSend: function () {
            jQuery(submit_btn).html(new_btn_name);
            jQuery(submit_btn).attr('disabled', true);
        },
        success: function (data) {

            if (data.status == 1) {

                swal({
                    title: "Done",
                    text: data.message,
                    icon: "success",
                });
                jQuery(".ajax-call").trigger("click");
            } else if (data.status == 2) {

                console.log('Error');

            }

        }

    });

});


jQuery(document).on("click", ".delete-button", function (e) {
    e.preventDefault();
    e.stopPropagation();

    var submit_btn = jQuery(this);
    var btn_name = jQuery(this).html();
    var new_btn_name = 'Loading...'
    var form = jQuery(this).parents('form:first');
    var method = jQuery(form).attr('method');
    var url = jQuery(form).attr('action');

    console.log(url);

    jQuery(form).ajaxSubmit({
        type: method,
        url: url,
        dataType: 'JSON',
        beforeSend: function () {
            jQuery(submit_btn).html(new_btn_name);
            jQuery(submit_btn).attr('disabled', true);
        },
        success: function (data) {

            if (data.status == 1) {

                swal({
                    title: "Done",
                    text: data.message,
                    icon: "success",
                });
                jQuery(".ajax-call").trigger("click");
            } else if (data.status == 2) {

                console.log('Error');

            }
        }

    });
});

jQuery(document).on("click", ".edit-button", function () {
    let idvalue = $(this).val();

    var submit_btn = jQuery(this);
    var btn_name = jQuery(this).html();
    var new_btn_name = 'Loading...'
    var form = jQuery(this).parents('form:first');
    var method = jQuery(form).attr('method');
    var url = jQuery(form).attr('action');

    jQuery(form).ajaxSubmit({
        type: method,
        url: url,
        dataType: 'JSON',
        beforeSend: function () {
            jQuery(submit_btn).html(new_btn_name);
            jQuery(submit_btn).attr('disabled', true);
        },
        success: function (data) {
            console.log(data);
            let jsonData = data.result;
            console.log(data.mainid);
            $("#editid1").val(data.mainid);
            $("#cat_nameE").val(jsonData.name);
            $("#slugE").val(jsonData.slug);
            // $("#exampleModalEdit").modal('show');
        }

    });
});

jQuery(document).on('click', '.modal-edit', function (e) {
    e.preventDefault();
    e.stopPropagation();

    var submit_btn = jQuery(this);
    var btn_name = jQuery(this).html();
    var new_btn_name = 'Loading...'
    var form = jQuery(this).parents('form:first');
    var method = jQuery(form).attr('method');
    var url = jQuery(form).attr('action');
    var modal = jQuery(this).closest('.modal').attr('id');

    jQuery(form).ajaxSubmit({
        type: method,
        url: url,
        dataType: 'JSON',
        beforeSend: function () {
            jQuery(submit_btn).html(new_btn_name);
            jQuery(submit_btn).attr('disabled', true);
        },
        success: function (data) {
            console.log(data);
      /*       if (data.message == 'value Updated') {

                swal({
                    title: "Done",
                    text: data.message,
                    icon: "success",
                });
                jQuery(".ajax-call").trigger("click");
            } else if (data.message == 'Something Error') {

                console.log('Error');

            } */

        }

    });

});