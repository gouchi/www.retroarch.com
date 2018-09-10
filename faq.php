<div id="welcome">
    <div class="container">
        <div class="row">
            <div class="col-md-12 abstract">
                <h1>Frequenty Asked Questions</h1>
            </div>
        </div>
    </div>
</div>

<div class="doc">
    <div class="container">
     <h1><a id="table-of-contents"></a>Table of Contents</h1>
     <div class="row platforms">
      <ul>
       <li><a href="#general-questions">General Questions</a></li>
       <li><a href="#platform-specific">Platform-specific Questions</a></li>
       <ul>
       <li><a href="#linux-platform-specific">Linux</a></li>
       <li><a href="#windows-platform-specific">Windows</a></li>
       </ul>
       <li><a href="#project-specific">Project-specific Questions</a></li>
      </ul>
     </div>
                <hr />
     <h1><a id="general-questions"></a>General questions</h1>
        <h3>Which core is the best to emulate (some console / game) ?</h3>
        <div class="row platforms">
        There is no best core, each has a different use case (accuracy, speed...).
        </div>
     <h3>I can't load / the core crashes on startup with (some game)</h3>
     <div class="row platforms">
      It's likely because:
<ul>
 <li>You are missing a required file like the BIOS, or it is named incorrectly
  (you can check it under main menu -> load core -> information -> core information)</li>
 <li>The core doesn't support your game</li>
 <li>Your ROM is a bad dump</li>
 <li>Your BIOS is a bad dump</li>
 <li>The core doesn't support the video driver you are using</li>
 <li>If you are using a disc-based game (bin + cue archive) you need to unzip it</li>
      </ul>
     </div>
     <h3>Why does some core / game run slowly ?</h3>
     <div class="row platforms">It is likely because your system is too slow.
     </div>
        <h3>I saved in game but it didn't work / RetroArch crashed and I lost my save</h3>
<div class="row platforms">RetroArch doesn't save in real time, SRAM is saved when you hit "close content".
    In some cases it's possible that closing RetroArch without closing the core first loses the saves
    from the current session (especially on Windows).
    <br /><br />
    To fix this you can enable the "SaveRAM autosave interval" option under Settings > Saving.
    Be aware that it might corrupt your save if you close RetroArch while the game is saving,
    especially in games that heavily use the SRAM and with a low autosave interval.
    Another option is to use save states.

    If you're on Android, make sure your save folder isn't located on an external SD card, 
    it won't work.
        </div>
        <h3>Why is (some core) running too fast ?</h3>
        <div class="row platforms">
            It's likely because you have VSync and / or audio disabled.
        </div>
            <hr />
     <h1><a id="platform-specific"></a>Platform-specific</h1>
      <hr />
     <h2><a id="linux-platform-specific"></a>Linux</h1>
        <h3>I can't download/update cores because the online/core updater is missing</h3>
        <div class="row platforms">
            It's likely because your Linux distribution disabled the online updater and they want you to use their own libretro-* core packages. If you still want to use our updater, you might be able to turn it back on in Settings -> User Interface -> Views -> Show Online Updater (and/or Show Core Updater), but you will need to change your cores folder (Settings -> Directory -> Cores) to a user-writable directory. If you cannot enable the updater then you may need to compile RetroArch manually; please see the <a href="http://docs.libretro.com/">docs</a> for instructions.
        </div>
     <hr />
     <h2><a id="windows-platform-specific"></a>Windows</h1>
     <h3>When I try to load a core on RetroArch it says "No Core"</h3>
     <div class="row platforms">
      It's likely because:
      <ul>
       <li>You need to download the MSVC Runtime</li>
       <li>You need to update RetroArch to a newer version</li>
       <li>The core is missing an external dependency you do not have. You can check this in the log window, it might say something like: <code>[ERROR] Error(s): libpng12.dll: cannot open shared object file: No such file or directory</code>. If you see this, please open an issue and attach the log contents.</li>
      </ul>
     </div>
        <h3>RetroArch crashes on startup</h3>
        <div class="row platforms">
            Your GPU or OS might lack OpenGL 2.0 support. To get around this, you can try changing the video driver by going to your RetroArch folder -> retroarch.cfg and change "video_driver" to either "d3d9" or "gdi". If that setting is not already there, you can add it.
        </div>
     <h3>I can't see (some core) in the download list</h3>
<div class="row platforms">
 Maybe you have accidentally downloaded the Windows XP build, which is not compatible with all cores.
    </div>
     <hr />
     <h1><a id="project-specific"></a>Project-specific</h1>
     <h3>When will the next version of RetroArch be released ?</h3>
     <div class="row platforms">
      There is no ETA. You can <a href="https://buildbot.libretro.com/nightly/">try the nightly builds to get the latest features</a>.
     </div>
        <h3>How do I report a bug ?</h3>
        <div class="row platforms">
            You need to open <a href="https://github.com/libretro">a github issue</a> in the right repository. Check if a similar issue isn't already open. Give details and steps to reproduce it.
        </div>
</div>
</div>
