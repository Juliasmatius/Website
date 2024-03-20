let counter = 0;
let counter2 = 0;
let counter3 = 0;
let counter4 = 0;

function eternalDamnation() {

  document.getElementById("counter_text").style.display = "block";


  const videoContainer = document.createElement("div");
  videoContainer.style.display = "inline-block"; // Set to inline-block
  document.body.appendChild(videoContainer);

  const video = document.createElement("video");
  video.width = 560;
  video.height = 315;
  video.id = "sillyvideo" + counter; // Unique ID for each video
  video.autoplay = true;
  video.loop = true;
  video.playbackRate = 0.8;
  videoContainer.appendChild(video);

  const source = document.createElement("source");
  source.src = "/yons_crazybox/thesilly.mp4";
  source.type = "video/mp4";
  video.appendChild(source);
  // Eternal damnation leaderboards
  // Make a counter of opened vids
  counter++;
  document.getElementById('output').innerHTML = counter;
}

function eternalDamnation2() {
  document.getElementById("counter_text").style.display = "block";

  const videoContainer = document.createElement("div");
  videoContainer.style.display = "inline-block";
  document.body.appendChild(videoContainer);

  const video = document.createElement("video");
  video.width = 560;
  video.height = 315;
  video.id = "sillyvideo2" + counter2; // Unique ID for each video
  video.autoplay = true;
  video.loop = true;
  video.playbackRate = 1; // You can set different playback rate for the second video
  videoContainer.appendChild(video);

  const source = document.createElement("source");
  source.src = "/yons_crazybox/garfield.mp4"; // Change the source path to your video
  source.type = "video/mp4";
  video.appendChild(source);

  // Increment the counter and update the output
  counter2++;
  document.getElementById('output2').innerHTML = counter2;
}

function eternalDamnation3() {
  document.getElementById("counter_text").style.display = "block";

  const videoContainer = document.createElement("div");
  videoContainer.style.display = "inline-block";
  document.body.appendChild(videoContainer);

  const video = document.createElement("video");
  video.width = 560;
  video.height = 315;
  video.id = "sillyvideo3" + counter3; // Unique ID for each video
  video.autoplay = true;
  video.loop = true;
  video.playbackRate = 0.15; // You can set different playback rate for the second video
  videoContainer.appendChild(video);

  const source = document.createElement("source");
  source.src = "/yons_crazybox/meow_meow_augh.mp4"; // Change the source path to your video
  source.type = "video/mp4";
  video.appendChild(source);

  // Increment the counter and update the output
  counter3++;
  document.getElementById('output3').innerHTML = counter3;
}

function eternalDamnation4() {
  document.getElementById("counter_text").style.display = "block";

  const videoContainer = document.createElement("div");
  videoContainer.style.display = "inline-block";
  document.body.appendChild(videoContainer);

  const video = document.createElement("video");
  video.width = 560;
  video.height = 315;
  video.id = "sillyvideo4" + counter4; // Unique ID for each video
  video.autoplay = true;
  video.loop = true;
  video.playbackRate = 3; // You can set different playback rate for the second video
  videoContainer.appendChild(video);

  const source = document.createElement("source");
  source.src = "/yons_crazybox/markipler.mp4"; // Change the source path to your video
  source.type = "video/mp4";
  video.appendChild(source);

  // Increment the counter and update the output
  counter4++;
  document.getElementById('output4').innerHTML = counter4;
}

window.addEventListener('load', function() {
  const imgage = document.getElementById("stealingTheft");
  imgage.addEventListener("click", function() {
    window.location.href = "/yons_crazybox/insanity.mp4";;
  });
})