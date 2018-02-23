<div id="welcome">
    <div class="container">
        <div class="row">
            <div class="col-md-12 abstract">
                <h1>Installing on Linux</h1>
                <p>To install RetroArch on Linux, we recommand using your distribution default package manager.</p>
            </div>
        </div>
    </div>
</div>

<div class="doc">
    <div class="container">
        <h2>Ubuntu</h2>
        <p>Stable version:</p>
        <pre>sudo add-apt-repository ppa:libretro/stable && sudo apt-get update && sudo apt-get install retroarch</pre>
        <p>Testing version:</p>
        <pre>sudo add-apt-repository ppa:libretro/testing && sudo apt-get update && sudo apt-get install retroarch</pre>
        <h2>Arch Linux</h2>
        <p>Stable version:</p>
        <pre>sudo pacman -Sy retroarch</pre>
        <p>Git version:</p>
        <pre>yaourt -Sy retroarch-git</pre>
        <h2>Flatpak</h2>
        <p>To <a href="https://www.libretro.com/index.php/retroarch-with-flatpak/">install RetroArch with Flatpak</a>, use the <a href="https://flathub.org">Flathub</a> repository:</p>
        <pre>flatpak remote-add --user --if-not-exists flathub https://flathub.org/repo/flathub.flatpakrepo</pre>
        <pre>flatpak install --user flathub org.libretro.RetroArch</pre>
        <p>Update to the latest stable:</p>
        <pre>flatpak update --user org.libretro.RetroArch</pre>
    </div>
</div>
