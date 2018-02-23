 <?php $version = "1.7.1"; ?>

<div id="welcome">
    <div class="container">
        <div class="row">
            <div class="col-md-12 abstract">
                <h1>Cross Platform</h1>
                <p>RetroArch can run on the usual platforms like Windows, Mac OS X and Linux, but it stands alone in that it can support far more platforms beyond just that.</p>
                <p>We support operating systems that not even Microsoft and Apple themselves support anymore, such as macOS X on PowerPC Macs, and RetroArch being available on Windows OSes as far back as Windows 95.</p>
                <p>On top of all that, RetroArch also runs on iOS and Android for tablets and phones, as well as on game consoles like PS3, PSP, PS Vita, Wii, Wii U, Switch, and more!</p>
                <p>The current stable version is: <?php echo $version; ?></p>
            </div>
        </div>
    </div>
</div>

<div class="doc">
    <div class="container">
        <h2>List of supported platforms</h2>

        <div class="row platforms">
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/linux.png">
                    <h4>Linux</h4>
                    <a href="index.php?page=linux-instructions">Installation instructions</a>
                    <a href="https://docs.libretro.com/compilation/ubuntu/">Compilation instructions (Ubuntu)</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/windows.png">
                    <h4>Windows 10 / 8 / 7 / Vista</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows/x86_64/RetroArch-<?php echo $version; ?>-x64-setup.exe" title="If you are unsure which version to install for your Windows computer, chances are you will want to pick this one. Use this if you are running a 64bit version of Windows Vista, Windows 7, Windows 8, Windows 8.1, or Windows 10 on your computer. This is a graphical installer. If you already have RetroArch installed, this installer will simply upgrade your existing installation.">Installer (64bit)</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows/x86/RetroArch-<?php echo $version; ?>-x86-setup.exe" title="If you are unsure which version to install for your Windows computer, chances are you will want to pick this one. Use this if you are running a 32bit version of Windows Vista, Windows 7, Windows 8, Windows 8.1, or Windows 10 on your computer. This is a graphical installer. If you already have RetroArch installed, this installer will simply upgrade your existing installation.">Installer (32bit)</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows/x86_64/RetroArch.7z" title="The same as the installer version, except packaged inside a 7zip file, in case you'd like to manually update or install RetroArch somewhere. Use this if you are running a 64bit version of Windows Vista, Windows 7, Windows 8, Windows 8.1, or Windows 10 on your computer.">Download (64bit)</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows/x86/RetroArch.7z" title="The same as the installer version, except packaged inside a 7zip file, in case you'd like to manually update or install RetroArch somewhere. Use this if you are running a 32bit version of Windows Vista, Windows 7, Windows 8, Windows 8.1, or Windows 10 on your computer.">Download (32bit)</a>
                    <a href="https://docs.libretro.com/compilation/windows/">Compilation instructions (Windows Vista and later - MinGW-W64 MSYS2)</a>
                </div>
            </div>
                    <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/windowsxp.png">
                    <h4>Windows XP and later</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows-msvc2010/x86/RetroArch-<?php echo $version; ?>-msvc2010-x86-setup.exe" title="Use this is if you are running a computer with Windows XP. This is a graphical installer. If you already have RetroArch installed, this installer will simply upgrade your existing installation. NOTE: While this version will also work for Vista and up, we highly recommend you use the other Windows version instead, as your core choice will be more limited with this version.">Installer (32bit)</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows-msvc2010/x86_64/RetroArch-<?php echo $version; ?>-msvc2010-x64-setup.exe" title="Use this is if you are running a computer with Windows XP x64 Edition. This is a graphical installer. If you already have RetroArch installed, this installer will simply upgrade your existing installation. NOTE: While this version will also work for Vista and up, we highly recommend you use the other Windows version instead, as your core choice will be more limited with this version.">Installer (64bit)</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows-msvc2010/x86/RetroArch.7z" title="The same as the installer version, except packaged inside a 7zip file, in case you'd like to manually update or install RetroArch somewhere. Use this if you are running a computer running Windows XP. NOTE: While this version will also work for Vista and up, we highly recommend you use the other Windows version instead, as your core choice will be more limited with this version.">Download (32bit)</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows-msvc2010/x86_64/RetroArch.7z" title="The same as the installer version, except packaged inside a 7zip file, in case you'd like to manually update or install RetroArch somewhere. Use this if you are running a computer running Windows XP. NOTE: While this version will also work for Vista and up, we highly recommend you use the other Windows version instead, as your core choice will be more limited with this version.">Download (64bit)</a>
                    <a href="https://docs.libretro.com/compilation/windowsXP/">Compilation instructions (Windows XP - Visual Studio 2010)</a>
                </div>
            </div>
     </div>
             <div class="row">
             <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/windows98.png">
                    <h4>Windows 98 SE / ME / 2000</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows-msvc2005/x86/RetroArch-<?php echo $version; ?>-msvc2005-x86-setup.exe" title="Use this is if you are running a computer with Windows 98 Second Edition, Windows Millenium Edition, and/or Windows 2000. This is a graphical installer. If you already have RetroArch installed, this installer will simply upgrade your existing installation. NOTE: While this version will also work for XP and up, we highly recommend you use the other Windows version instead, as your core choice will be more limited with this version.">Installer</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows-msvc2005/x86/RetroArch.7z" title="The same as the installer version, except packaged inside a 7zip file, in case you'd like to manually update or install RetroArch somewhere. Use this if you are running a computer running Windows 98 Second Edition, Windows Millenium Edition, and/or Windows 2000. NOTE: While this version will also work for XP and up, we highly recommend you use the other Windows version instead, as your core choice will be more limited with this version.">Download</a>
                    <a href="https://buildbot.libretro.com/docs/compilation/windows98/">Compilation instructions (Windows 98SE/2000 - Visual Studio 2005)</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/windows98.png">
                    <h4>Windows 95 / Windows 98</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows-msvc2003/x86/RetroArch-<?php echo $version; ?>-msvc2003-x86-setup.exe" title="Use this is if you are running a computer with Windows 95 or Windows 98 First Edition. This is a graphical installer. If you already have RetroArch installed, this installer will simply upgrade your existing installation. NOTE: While this version will also work for 98SE and up, we highly recommend you use the other Windows version instead, as your core choice will be more limited with this version.">Installer</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/windows-msvc2003/x86/RetroArch.7z" title="The same as the installer version, except packaged inside a 7zip file, in case you'd like to manually update or install RetroArch somewhere. Use this if you are running a computer running Windows 95 or Windows 98 First Edition. NOTE: While this version will also work for 98SE and up, we highly recommend you use the other Windows version instead, as your core choice will be more limited with this version.">Download</a>
                    <a href="https://docs.libretro.com/compilation/windows95-msvc-cmdline/">Compilation instructions (Windows 95/Windows 98 - Visual Studio 2003)</a>
                </div>
            </div>
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/apple.png">
                    <h4>Apple macOS / OSX</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/apple/osx/x86_64/RetroArch.dmg" title="Use this if you are using a Mac with at least MacOS X 10.7 installed or later.">Download (Intel)</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/apple/osx/x86_64/RetroArch_CG.dmg" title="Use this if you are using a Mac with at least MacOS X 10.7 installed or later. This build requires Nvidia Cg installed, and will use it. If in doubt, use the other one.">Download (Intel) (with Cg support - requires Cg installed)</a>
                                     <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/apple/osx/x86/RetroArch.dmg" title="Use this if you are using a 32bit Mac with at least MacOS X 10.6 installed or later.">Download (Intel)</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/apple/osx/x86/RetroArch_CG.dmg" title="Use this if you are using a 32bit Mac with at least MacOS X 10.6 installed or later. This build requires Nvidia Cg installed, and will use it. If in doubt, use the other one.">Download (Intel) (with Cg support - requires Cg installed)</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/apple/osx/ppc/RetroArch.zip" title="Use this if you are using a PowerMac/Powerbook with MacOS X 10.5 installed.">Download (PowerPC)</a>
                    <a href="https://docs.libretro.com/compilation/osx/">Compilation instructions (Intel)</a>
                    <a href="https://docs.libretro.com/compilation/osxppc/">Compilation instructions (PowerPC)</a>
                </div>
            </div>
              </div>
              <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/web.png">
                    <h4>Web Browsers</h4>
                    <a href="https://buildbot.libretro.com/web/">Try it online</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/android.png">
                    <h4>Android</h4>
                    <a href="https://play.google.com/store/apps/details?id=com.retroarch">Google Play</a>
                    <a href="http://fdroid.libretro.com/">F-Droid</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/android/RetroArch.apk">Download</a>
                    <a href="#">Installation instructions</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/ios.png">
                    <h4>iOS</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/apple/ios/RetroArch.zip">Download</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/apple/ios9/RetroArch.zip">Download (iOS9)</a>
                    <a href="#">Installation instructions</a>
                    <a href="https://docs.libretro.com/compilation/ios/">Compilation instructions</a>
                </div>
            </div>
     </div>
                 <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/bb.png">
                    <h4>Blackberry</h4>
                    <a href="#">Currently unavailable (N/A)</a>
                    <a href="#">Installation instructions</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/ps3.png">
                    <h4>PlayStation 3</h4>
                    <a href="https://new.xbins.org/index.php?action=catsearch&searchtxt=PS3">Download (DEX) [Xbins]</a>
                    <a href="https://new.xbins.org/index.php?action=catsearch&searchtxt=PS3">Download (CEX) [Xbins]</a>
                    <a href="https://new.xbins.org/index.php?action=catsearch&searchtxt=PS3">Download (ODE) [Xbins]</a>
                    <a href="#">Installation instructions</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/psp.png">
                    <h4>PlayStation Portable</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/playstation/psp/RetroArch.7z">Download</a>
                    <a href="#">Installation instructions</a>
                    <a href="https://docs.libretro.com/compilation/psp/">Compilation instructions</a>
                </div>
            </div>
              </div>
                           <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/psvita.png">
                    <h4>PlayStation Vita / TV</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/playstation/vita/RetroArch.vpk">Download</a>
                    <a href="#">Installation instructions</a>
                    <a href="https://docs.libretro.com/compilation/psvita/">Compilation instructions</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/xbox.png">
                    <h4>Xbox</h4>
                    <a href="https://new.xbins.org/index.php?action=catsearch&searchtxt=XBOX">Download [Xbins]</a>
                    <a href="#">Installation instructions</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/xbox360.png">
                    <h4>Xbox 360</h4>
                    <a href="#">Currently unavailable (N/A)</a>
                    <a href="#">Installation instructions</a>
                </div>
            </div>
                                              </div>
          
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/gc.png">
                    <h4>GameCube</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/nintendo/ngc/RetroArch.7z">Download</a>
                    <a href="#">Installation instructions</a>
                    <a href="https://docs.libretro.com/compilation/gamecube/">Compilation instructions</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/wii.png">
                    <h4>Wii</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/nintendo/wii/RetroArch.7z">Download</a>
                    <a href="#">Installation instructions</a>
                    <a href="https://docs.libretro.com/compilation/wii/">Compilation instructions</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/wiiu.png">
                    <h4>Wii U</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/nintendo/wiiu/RetroArch.7z">Download</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/nintendo/wiiu/RetroArch_rpx.7z">Download (rpx)</a>
                    <a href="#">Installation instructions</a>
                    <a href="https://docs.libretro.com/compilation/wiiu/">Compilation instructions</a>
                </div>
            </div>
              </div>
             <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/3ds.png">
                    <h4>3DS</h4>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/nintendo/3ds/RetroArch_3dsx.7z">Download (3dsx)</a>
                    <a href="https://buildbot.libretro.com/stable/<?php echo $version; ?>/nintendo/3ds/RetroArch_cia.7z">Download (cia)</a>
                    <a href="#">Installation instructions</a>
                    <a href="https://docs.libretro.com/compilation/3ds/">Compilation instructions</a>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/rpi.png">
                    <h4>Raspberry Pi</h4>
                    <a href="http://www.lakka.tv/get/">Download Lakka</a>
                </div>
            </div>

            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/pandora.png">
                    <h4>Open Pandora</h4>
                    <a href="#">Currently unavailable (N/A)</a>
                </div>
            </div>
                         </div>
                 <div class="row">
            <div class="col-md-3 col-sm-6">
                <div class="platform">
                    <img src="images/gcw0.png">
                    <h4>GCW Zero</h4>
                    <a href="#">Currently unavailable (N/A)</a>
                </div>
            </div>
        </div>
        <h2>App Store</h2>
        <a href="https://play.google.com/store/apps/details?id=com.retroarch"><img src="images/en_badge_web_generic.png" /></a>
        <h2>Other downloads</h2>
        <ul>
            <li><a href="http://buildbot.libretro.com/stable">Stable builds</a></li>
            <li><a href="http://buildbot.libretro.com/nightly">Nightly builds</a></li>
        </ul>
    </div>
</div>
