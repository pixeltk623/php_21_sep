<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <style type="text/css">
    	.hidden {
    		display: none;
    	}
    </style>
</head>
<body>

	<div class="container">
		<button type="button" id="getDataBtn">Test</button>

		<div class="spinner-border hidden" role="status">
			<span class="visually-hidden"></span>
		</div>

		<div id="complete">
			
		</div>
		<div id="richList">
			
		</div>
	</div>

	   <div id="#statustxt_n">0%</div>


	<script type="text/javascript">
		$(document).ready(function() {


		// $( "#foo" ).on( "click", function() {
		//   alert( $( this ).text() );
		// });
		//$( "#foo" ).trigger( "click" );

	    $('#getDataBtn').click(function () {
	        $.ajax({
	            type: "GET",
	            url: "https://forbes400.herokuapp.com/api/forbes400?limit=400",
	            dataType: 'json',
	            beforeSend: function () { // Before we send the request, remove the .hidden class from the spinner and default to inline-block.
	                $('.spinner-border').removeClass('hidden')

	                
			var globalUpdateProgress() {
    var i, xhr, loaded = 0, total = 0, xhr;
    for (i = 0; i < loadingXhrRequests.length; i++) {
        xhr = loadingXhrRequests[i];
        if (xhr.total && xhr.loaded) {total+=xhr.total;loaded += xhr.loaded;}
    }
    return (100 * (loaded / total));
}
var xhr = new XMLHttpRequest();
loadingXhrRequests.push(xhr);

			xhr.upload.addEventListener("progress", function(evt) {
    if(evt.lengthComputable) {
        var percent = 100 * (evt.loaded / evt.total);
        xhr.loaded = evt.loaded;
        xhr.total = evt.total;
        //note - check that you dont overwrite any important properties of xhr
        // update progress bar 
        globalUpdateProgress();//<- call this in all individual xhr progress callback
    }
});


	            
	            success: function (data) {
	                // On Success, build our rich list up and append it to the #richList div.
	                if (data.length > 0) {
	                    let richList = "<ol>";
	                    for (let i = 0; i < data.length; i++) {
	                        //console.log(data[i].uri);
	                        richList += "<li>" + data[i].uri + "</li>";
	                    }
	                    richList += "</ol>"
	                    $('#richList').html(richList);
	                }
	            },
	            complete: function () { // Set our complete callback, adding the .hidden class and hiding the spinner.
	                $('.spinner-border').addClass('hidden')
	            },
	        });
	    });

	    //$( "#getDataBtn" ).trigger( "click" );


		});
	</script>
</body>
</html>