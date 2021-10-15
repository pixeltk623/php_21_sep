<!DOCTYPE html>
<html>

<head>
	<title></title>
	<style type="text/css"></style>
</head>

<body>
	<h1>Media In HTML5 </h1>

	<h1>Video</h1>

	<button type="button" onclick="playAndPause()">Play/Pause</button>
 
	<button type="button" onclick="makeBig()">Make Big</button>

	<button type="button" onclick="makeNormal()">Make Normal</button>

	<br>
	<br>

	<video id="myvideo" controls width="500" controlsList="nodownload" autoplay muted >
		<source src="video.mp4" type="video/mp4"> 
	</video>


	<!-- <h1>Video</h1>

	<video controls width="500" controlsList = "nodownload" muted autoplay>
		<source src="../assets/video1.mp4" type="video/mp4">
	</video> -->

	<!-- <h2>Audio</h2>

	<audio controls controlsList = "nodownload" autoplay muted>
		<source src="../assets/2.mp3" type="audio/mp3">
	</audio> -->

	<!-- <h2>YouTube</h2>

	<iframe src="https://www.youtube.com/embed/6o5Vd0BcAbA?autoplay=0&&mute=1&list=PLd9tDukllEepYrfX-zy6NLbLRmHdPsukE" width="500" height="300" allowfullscreen ></iframe> -->

	<script type="text/javascript">
		var myVideo = document.getElementById('myvideo');

		//alert(myvideo)

		console.log(myVideo);

		function playAndPause() {

			//console.log(myvideo.paused);

			if (myVideo.paused) {
				myVideo.play();
			} else {
				myVideo.pause();

			}
		}

		function makeBig() {
			myVideo.width = "800";
		}

		function makeNormal() {
			myVideo.width = "500";
		}
	</script>
</body>

</html>