<div id="welcome">
    <div class="container">
        <div class="row">
            <div class="col-md-12 abstract">
                <h1>Recording &amp; Streaming</h1>
                <p>RetroArch is able to record your playing session to a video file.</p>
                <p>The same mechanism also enables you to live stream your games to platforms like Twitch.tv or Youtube.</p>
            </div>
        </div>
    </div>
</div>

<div class="doc">
    <div class="container">
        <div class="row imagegrid">
            <div class="col-md-6">
                <h2>How to record your gameplay</h2>
                <p>To test recording, go to <b>Settings->Recording</b> and enable the functionnality.</p>
                <p>You also need to provide a file path with a file extension. In this example, we are recording to <i>test.mkv</i> in the current folder using the <b>Save Output Recording as...</b> entry.</p>
                <p>You then need to launch a game, and your session will be recorded.</p>
                <p>Options like <b>Use GPU Recording</b> can be used to record with <a href="index.php?page=shaders">shaders</a>.</p>
            </div>
            <div class="col-md-6">
                <img src="images/recording-settings.png">
            </div>
        </div>
        <h2>How to stream to Twitch.tv</h2>
        <div class="row imagegrid">
            <div class="col-md-6">
                <img src="images/recording-twitch-dashboard.png">
            </div>
            <div class="col-md-6">
                <p>The first thing you will need is a twitch account.</p>
                <p>Once logged in, open the user menu in the top bar and go to the <b>Dashboard</b>.</p>
                <p>In the <b>Settings tab</b> you will find your <b>Stream Key</b>. This key is required to stream to your twitch page and must be kept secret.</p>
            </div>
        </div>
        <div class="row imagegrid">
            <div class="col-md-6">
                <img src="images/recording-twitch-settings.png">
            </div>
            <div class="col-md-6">
                <p>In <b>Settings->Recording</b>, enable the feature and set the <b>Save Output Recording as...</b> option to <code>rtmp://live.twitch.tv/app/$YOUR_STREAM_KEY</code></p>
                <p>You will also need to download and load <a href="twitch.cfg">this config file</a>. It will improve the performance of the video encoding.</p>
            </div>
        </div>
        <div class="row imagegrid">
            <div class="col-md-6">
                <img src="images/recording-twitch-channel.png">
            </div>
            <div class="col-md-6">
                <p>Once done, you can start playing a game and it should appear on your Twitch channel.</p>
            </div>
        </div>
    </div>
</div>
