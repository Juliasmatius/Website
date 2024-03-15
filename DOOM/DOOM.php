
<meta content="Juli's page" property="og:title" />
<meta content="Juli's page. But DOOM ost" property="og:description" />
<meta content="#43B581" data-react-helmet="true" name="theme-color"/>


<audio id="doom" controls>
  <source src="/DOOM/DOOM.mp3" type="audio/mpeg">
Your browser does not support the audio element.
</audio> 
<iframe id="frame" src="/" width="100%" height="100%"></iframe>

<style>
  body {
    background-color: rgb(0, 27, 41);
    overflow: hidden;
    justify-content: center;
    align-items: center;
    align-content: center;
  }
  iframe {
    border: none;
    width: 100%;
    height: 100%;
  }
</style>

<script>
  const audio = document.getElementById('doom');

  // Play the audio
  function playAudio() {
      audio.play();
  }
  document.addEventListener("click", function(event) {
      // When any part of the page is clicked, this function will be called
    playAudio();
      // You can perform any action you want here, like showing a message or triggering another function
  });

  var iframe = document.getElementById("frame");

  // Wait for the iframe to load
  iframe.onload = function() {
      // Access the content window of the iframe
      var iframeDocument = iframe.contentWindow.document;

      // Add an event listener to the iframe document to detect clicks
      iframeDocument.addEventListener("click", function(event) {
          // When any part of the iframe document is clicked, this function will be called
        playAudio();
          // You can perform any action you want here, like showing a message or triggering another function
      });
  };
</script>