<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
        text-align: center;
        }

        button {
        display: inline-block;
        margin: 1em 1em;
        font-size: 2em;
        cursor: pointer;
        }

        video {
        border: 1px solid lightgray;
        width: 100%;
        background-color: #eee;
        }

    </style>

</head>
<body>
    
<button id="start">
      Start Recording
    </button>
    <button id="stop" disabled>
      Stop Recording
    </button>
    <video autoplay >

   

    <script>
        const start = document.getElementById("start");
        const stop = document.getElementById("stop");
        const video = document.querySelector("video");
        let recorder, stream;

        async function startRecording() {
        stream = await navigator.mediaDevices.getDisplayMedia({
            video: { mediaSource: "screen" }
        });
        recorder = new MediaRecorder(stream);

        const chunks = [];
        recorder.ondataavailable = e => chunks.push(e.data);
        recorder.onstop = e => {
            const completeBlob = new Blob(chunks, { type: chunks[0].type });
            video.src = URL.createObjectURL(completeBlob);
        };

        recorder.start();
        }

        start.addEventListener("click", () => {
        start.setAttribute("disabled", true);
        stop.removeAttribute("disabled");

        startRecording();
        });

        stop.addEventListener("click", () => {
        stop.setAttribute("disabled", true);
        start.removeAttribute("disabled");

        recorder.stop();
        stream.getVideoTracks()[0].stop();
        });
    </script>
</body>
</html>