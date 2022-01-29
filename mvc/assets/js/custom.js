$(document).ready(function() {
	$(document).on("click",".ajax-call", function() {
		let urls = $('#myForm').attr('action');

		$.ajax({
            type: 'POST',
            url: urls,
            data: {},
            dataType: 'JSON',
            success: function(resp) {
            	console.log(resp.table);

            	if(resp.table!='') {
            		$(".table-result").html(resp.table);
            	}
            },

            error: function(e) {
                console.log(e)
            }
        });
	});
});