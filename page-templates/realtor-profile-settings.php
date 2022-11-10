<?php
/*
 * Template Name: Realtor: Profile Settings
 */
get_header();
?>

    <main class="app-main">
        <div class="app-container">
            <div class="app-main-with-sidebar">

                <?php get_sidebar(); ?>

                <div class="app-main-content">

                    <div class="app-main-content__header content-header">
                        <h2 class="content-header__heading">Profile Settings</h2>
                        <form class="content-header__search">
                            <input type="search" placeholder="Search...">
                            <button type="submit">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/search-icon.png"
                                     alt="Search" loading="lazy">
                            </button>
                        </form>
                    </div>

                    <div class="app-main-content__info">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                             x="0px" y="0px"
                             viewBox="0 0 24 24" style="enable-background:new 0 0 24 24;" xml:space="preserve">
<style type="text/css">
    .st0 {
        display: none;
    }

    .st1 {
        display: inline;
        fill: none;
        stroke: #000000;
        stroke-width: 1.5;
        stroke-linecap: round;
        stroke-linejoin: round;
    }

    .st2 {
        display: inline;
    }

    .st3 {
        fill: #0B3E6F;
    }
</style>
                            <g id="Layer_1" class="st0">
                                <circle class="st1" cx="12" cy="12" r="10"/>
                                <line class="st1" x1="12" y1="16" x2="12" y2="12"/>
                                <line class="st1" x1="12" y1="8" x2="12" y2="8"/>
                                <g class="st2">
                                    <polygon class="st3"
                                             points="52.5,-22.5 59.5,-22.5 59.5,-24.5 50.5,-24.5 50.5,-12.5 59.5,-12.5 59.5,-14.5 52.5,-14.5 		"/>
                                    <polygon class="st3"
                                             points="61.1,-18.5 58,-21.6 58,-19.5 54,-19.5 54,-17.5 58,-17.5 58,-15.4 		"/>
                                </g>
                            </g>
                            <g id="Layer_1_copy">
                                <g>
                                    <path class="st3" d="M12,22.8C6.1,22.8,1.2,17.9,1.2,12C1.2,6.1,6.1,1.2,12,1.2S22.8,6.1,22.8,12C22.8,17.9,17.9,22.8,12,22.8z
			 M12,2.7c-5.1,0-9.2,4.1-9.2,9.2c0,5.1,4.1,9.3,9.2,9.3s9.2-4.1,9.2-9.3C21.2,6.9,17.1,2.7,12,2.7z"/>
                                </g>
                                <g>
                                    <path class="st3"
                                          d="M12,16.8c-0.4,0-0.8-0.3-0.8-0.8v-4c0-0.4,0.3-0.8,0.8-0.8s0.8,0.3,0.8,0.8v4C12.8,16.4,12.4,16.8,12,16.8z"
                                    />
                                </g>
                                <g>
                                    <path class="st3"
                                          d="M12,8.7c-0.4,0-0.8-0.3-0.8-0.8c0-0.4,0.3-0.8,0.7-0.8h0c0.4,0,0.8,0.3,0.8,0.8C12.8,8.4,12.4,8.7,12,8.7z"/>
                                </g>
                            </g>
</svg>
                        <p>
                            Please use the search with the property address or scroll through the properties below to
                            locate the property you would like to schedule the showing for.
                        </p>
                    </div>

                    <div class="app-main-content__holder">

                        <div class="app-panel app-panel-settings app-panel_green active">
                            <div class="app-panel__head panel-head">
                                <div class="panel-head__text">
                                    <h2 class="panel-head__heading">
                                        Your Email: <a href="mailto:realtor@brokerage.com">realtor@brokerage.com</a>
                                    </h2>
                                </div>
                            </div>
                            <form class="app-panel__content panel-content-type-settings">
                                <div class="panel-content-type-settings__top">

                                    <div class="panel-content-type-settings__col">

                                        <div class="panel-content-type-settings__holder">
                                            <label for="firstName">First Name </label>
                                            <div class="panel-content-type-settings__input">
                                                <input type="text" id="firstName" value="Agent">
                                            </div>
                                        </div>

                                        <div class="panel-content-type-settings__holder">
                                            <label for="lastName">Last Name </label>
                                            <div class="panel-content-type-settings__input">
                                                <input type="text" id="lastName" value="Orange">
                                            </div>
                                        </div>

                                        <div class="panel-content-type-settings__holder">
                                            <label for="brokerageName">Brokerage Name </label>
                                            <div class="panel-content-type-settings__input">
                                                <input type="text" id="brokerageName" value="EX/MAX Champions">
                                            </div>
                                        </div>

                                        <div class="panel-content-type-settings__holder">
                                            <label for="MLSRealtorID">MLS realtor ID </label>
                                            <div class="panel-content-type-settings__input">
                                                <input type="text" id="MLSRealtorID" value="0987654321">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="panel-content-type-settings__col">

                                        <div class="panel-content-type-settings__holder panel-content-type-settings_phone">
                                            <label>Phone number </label>
                                            <div class="panel-content-type-settings__input">
                                                <div class="panel-content-type-settings__tel">
                                                    <input type="tel" value="813">
                                                </div>
                                                <div class="panel-content-type-settings__tel">
                                                    <input type="tel" value="4567890">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel-content-type-settings__holder">
                                            <label for="additionalEmail">Additional Email </label>
                                            <div class="panel-content-type-settings__input">
                                                <input type="email" id="additionalEmail" value="Orange" placeholder="Enter Your Email">
                                            </div>
                                        </div>

                                        <div class="panel-content-type-settings__holder">
                                            <label for="password">Password </label>
                                            <div class="panel-content-type-settings__input">
                                                <a href="#!" class="color-blue" id="password">Change Password</a>
                                            </div>
                                        </div>

                                        <div class="panel-content-type-settings__holder">
                                            <label for="profile">Profile </label>
                                            <div class="panel-content-type-settings__input">
                                                <a href="#!" class="color-red" id="profile">Delete Profile</a>
                                            </div>
                                        </div>

                                    </div>

                                </div>
                                <div class="panel-footer">
                                    <a href="#!" class="app-btn app-btn_lightblue">Save information</a>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>


            </div>
        </div>
    </main>

<?php get_footer();

