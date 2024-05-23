<p id='currlisten'><br>
<a id='trackinfo' href=></a>
<script>

$url = "/lastfmproxy.php"
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
        currListenElement.innerHTML = `Currently listening to<br><a id="trackinfo" target="_blank" href="${url}"><b>${artist}</b> - ${track}</a>`;
      } else {
        currListenElement.innerHTML = '<br>';
        trackInfoElement.href = '';
      }
    })
    .catch(error => console.error('Error fetching recent tracks:', error));
}

fetchRecentTrack();
setInterval(fetchRecentTrack, 15000);

</script>