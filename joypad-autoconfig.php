<div id="welcome">
    <div class="container">
        <div class="row">
            <div class="col-md-12 abstract">
                <h1>Joypad Auto Configuration</h1>
                <p>Common joypads are automatically configured when plugged in, just like on a real game console.</p>
                <p>Ideal to start a multiplayer game when a friend visits with his own joypad.</p>
                <p>You can also configure everything manually to assign special actions to combos.</p>
            </div>
        </div>
    </div>
</div>

<div class="doc">
    <div class="container">
        <h2>How does it work?</h2>

        <p>RetroArch is shipped with a set of configuration files for the most common joypads. When you plug a joypad for the first time, we try to find a matching profile in our set. Matching is done using 3 criteria: the <b>device name</b>, the <b>vendor id</b> and the <b>product id</b>. The vendor id and product id pair is often abbreviated as <b>vid:pid</b>. We compute a matching score for each configuration file based on these 3 informations. The profile with the higher score is chosen to configure the pad.</p>

        <h2>Why is it needed?</h2>

        <p>RetroArch works on a lot of different platforms. Each of these platforms have one or more <b>input systems</b>. And these input systems differ widely in the way they enumerate the pad buttons. For this reason, your joypad buttons may be mapped differently depending on if you are using Windows, Mac or Linux.</p>

        <p>Traditional emulators lets you map each button of your pad to the original pad of the emulated system. For example, this is how OpenEMU joypad configuration interface looks like:</p>

        <p><img src="images/snes9x-joyconfig.jpg"></p>

        <p>RetroArch also allows this kind of manual mapping. However, we're trying to go further by detecting your joypad and automatically configuring it. So this step becomes obsolete.</p>

        <h2>Benefits</h2>

        <p>With RetroArch joypad auto configuration system, your joypad will be recognized and will work out of the box. This allows:</p>

        <ul>
            <li>To plug many different joypads and have them attributed to each players like it would work on a real game console.</li>
            <li>To unplug the second joypad, and replace it by another one, even if it's of a different brand and model.</li>
        </ul>

        <p>Having automatically configured joypads makes it a lot easier to navigate the RetroArch Menu with the joypad. This is very convenient when running RetroArch on a game console, where a keyboard and a mouse are not always available. It is also what makes RetroArch suitable to build your own game console using Lakka or a similar OS.</p>

        <h2>Joypad auto configuration profiles</h2>

        <div class="row">
            <div class="col-md-6">
                <p>This is what a joypad profile looks like in RetroArch.</p>

                <p>The first part is used for matching, as explained above. The vendor id and product id are in decimal format.</p>

                <p>The second part is the mapping itself, where each button is asigned to a button of the RetroPad (the joypad abstraction of RetroArch).</p>

                <p>The third part are *input descriptors* used by RetroArch to display the labels of the buttons as they are written on your joypad. So if you are using a DualShock pad, RetroArch will refer to the buttons as Cross, Circle, Square and Triangle.</p>
            </div>
            <div class="col-md-6">
<pre>input_device = "Microsoft X-Box One pad"
input_driver = "udev"
input_vendor_id = 1118
input_product_id = 721

input_b_btn = "0"
input_y_btn = "2"
input_select_btn = "6"
input_start_btn = "7"
input_up_btn = "h0up"
input_down_btn = "h0down"
input_left_btn = "h0left"
input_right_btn = "h0right"
input_a_btn = "1"
input_x_btn = "3"
input_l_btn = "4"
input_r_btn = "5"
input_l2_axis = "+2"
input_r2_axis = "+5"
input_l3_btn = "9"
input_r3_btn = "10"
input_l_x_plus_axis = "+0"
input_l_x_minus_axis = "-0"
input_l_y_plus_axis = "+1"
input_l_y_minus_axis = "-1"
input_r_x_plus_axis = "+3"
input_r_x_minus_axis = "-3"
input_r_y_plus_axis = "+4"
input_r_y_minus_axis = "-4"
input_menu_toggle_btn = "8"

input_b_btn_label = "A"
input_y_btn_label = "X"
input_select_btn_label = "Back"
input_start_btn_label = "Start"
input_up_btn_label = "D-Pad Up"
input_down_btn_label = "D-Pad Down"
input_left_btn_label = "D-Pad Left"
input_right_btn_label = "D-Pad Right"
input_a_btn_label = "B"
input_x_btn_label = "Y"
input_l_btn_label = "LB"
input_r_btn_label = "RB"
input_l2_axis_label = "LT"
input_r2_axis_label = "RT"
input_l3_btn_label = "Left Thumb"
input_r3_btn_label = "Right Thumb"
input_l_x_plus_axis_label = "Left Analog X+"
input_l_x_minus_axis_label = "Left Analog X-"
input_l_y_plus_axis_label = "Left Analog Y+"
input_l_y_minus_axis_label = "Left Analog Y-"
input_r_x_plus_axis_label = "Right Analog X+"
input_r_x_minus_axis_label = "Right Analog X-"
input_r_y_plus_axis_label = "Right Analog Y+"
input_r_y_minus_axis_label = "Right Analog Y-"
input_menu_toggle_btn_label = "Guide"</pre>
            </div>
        </div>

        <h2>Downloading or updating joypad profiles</h2>

        <div class="row">
            <div class="col-md-5">
                <p><img src="images/update-joypads.png"></p>
            </div>
            <div class="col-md-7">
                <p>The set of joypad profiles used by RetroArch can be downloaded and updated from the menu. Go to <b>Main Menu->Online Updater->Update Autoconfig Profiles</b> to get the latest version of the profile pack.</p>

                <p>A yellow message will appear at the bottom of the screen showing the download progress and the extraction of the archive.</p>
            </div>
        </div>

        <h2>Generating a joypad profile</h2>

        <p>If your joypad is not recognized by RetroArch even after updating the profiles, you can generate a profile from the menu.</p>

        <p>The first step is to proceed to a manual mapping of your pad. For this, unplug all the other joypads, and use <b>Settings->Input->User 1 Binds->User 1 Bind All</b>.Make sure that your mapping is perfect by testing every button in the menu and in some games.</p>

        <p>Finally, use <b>Settings->Inputs->User 1 Binds->User 1 Save Autoconfig</b> and the profile will be saved to your disk.</p>

        <p>You can now do a <b>Settings->Inputs->User 1 Binds->User 1 Bind Default All</b> to reset the manual settings. Otherwise they would take precedance over the profile you generated.</p>

        <p>Unplug your joypad an re-plug it. See if it is auto configured.</p>

        <p>If you are happy with your profile, you can write the <b>input descriptors</b> part and submit your profile in our git repository.</p>

        <h2>Troubleshooting joypad auto config</h2>

        <p>If for any reason your joypad is not configured properly, you may want to look at the RetroArch <b>log</b>. The log will show if a profile has been selected for your pad, and the path of the selected profile.</p>
    </div>
</div>
