<p id='currlisten'><br>
<a id='trackinfo' href=></a>
<script>
  
$apiKey = "f27b0fc77baba3236a3876f57446d679";
$apiRoot = "http://ws.audioscrobbler.com/2.0/";
$username = "Julimiro";

// URL to make the request to
$url = "http://ws.audioscrobbler.com/2.0/?method=user.getrecenttracks&user=Julimiro&format=json&limit=1&api_key=f27b0fc77baba3236a3876f57446d679";
function fetchRecentTrack() {
  console.log("Update")
  fetch($url)
    .then(response => response.json())
    .then(data => {
      const recentTrack = data.recenttracks.track[0];
      const artist = recentTrack.artist["#text"];
      const track = recentTrack.name;
      const url = recentTrack.url;
      const nowPlaying = recentTrack["@attr"] && recentTrack["@attr"].nowplaying;

      const currListenElement = document.getElementById('currlisten');
      const trackInfoElement = document.getElementById('trackinfo');

      if (nowPlaying) {
        currListenElement.innerHTML = `Currently listening to<br><a id="trackinfo" href="${url}">${artist} - ${track}</a>`;
      } else {
        currListenElement.innerHTML = '<br>';
        trackInfoElement.href = '';
      }
    })
    .catch(error => console.error('Error fetching recent tracks:', error));
}

// Call fetchRecentTrack initially
fetchRecentTrack();

// Refresh every 5 seconds
setInterval(fetchRecentTrack, 5000);

</script>