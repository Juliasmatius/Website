<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>RTMP Audio Player</title>
</head>
<body>
    <h1>RTMP Audio Player</h1>
    <button onclick="play()">Play</button>
    <button onclick="pause()">Pause</button>
    <button onclick="stop()">Stop</button>
    <button onclick="next()">Next</button>

    <script>
        const player = new Audio();

        function play() {
            player.play();
        }

        function pause() {
            player.pause();
        }

        function stop() {
            player.pause();
            player.currentTime = 0;
        }

        function next() {
            // Implement logic to switch to the next audio track
            // For simplicity, you can manually change the audio source
            // Example:
            player.src = 'http://your-server-address/live/stream';
            player.play();
        }
    </script>
</body>
</html>
