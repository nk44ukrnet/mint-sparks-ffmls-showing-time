<?php
/*
 * Template Name: Realtor: Scheduled Showings
 */
get_header();
?>

    <main class="app-main">
        <div class="app-container">
            <div class="app-main-with-sidebar">

                <?php get_sidebar(); ?>

                <div class="app-main-content">

                    <div class="app-main-content__header content-header">
                        <h2 class="content-header__heading">Scheduled Showings</h2>
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

                        <div class="app-panel app-panel_green app-panel-scheduled-showings active">
                            <div class="app-panel__head panel-head expand-head">
                                <div class="panel-head__text">
                                    <h2 class="panel-head__heading">
                                        15619 Premiere Drive Suite 104B Tampa
                                    </h2>
                                    <div class="panel-head__status">
                                        Showings available
                                    </div>
                                </div>
                                <div class="panel-head__sign">
                                    <span></span>
                                </div>
                            </div>
                            <div class="app-panel__content panel-content-type-scheduled-showings">
                                <div class="panel-content-type-scheduled-showings__top">
                                    <div class="app-property-details-table_inner">
                                        <div class="panel-content-type-scheduled-showings__col">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-placeholder.png"
                                                 alt="image" loading="lazy"
                                                 class="panel-content-type-scheduled-showings__img">
                                            <div class="panel-content-type-scheduled-showings__row">
                                                <div class="panel-content-type-scheduled-showings__title">Listing
                                                    Price
                                                </div>
                                                <div class="panel-content-type-scheduled-showings__value">$229,900</div>
                                            </div>
                                        </div>
                                        <div class="panel-content-type-scheduled-showings__col">
                                            <div class="panel-content-type-scheduled-showings__row">
                                                <div class="panel-content-type-scheduled-showings__title">
                                                    Scheduled Showing date:
                                                </div>
                                                <div class="panel-content-type-scheduled-showings__value">
                                                    07.16.2022
                                                </div>
                                            </div>
                                            <div class="panel-content-type-scheduled-showings__row">
                                                <div class="panel-content-type-scheduled-showings__title">
                                                    Scheduled Showing time:
                                                </div>
                                                <div class="panel-content-type-scheduled-showings__value">
                                                    7:30 AM
                                                </div>
                                            </div>
                                            <div class="panel-content-type-scheduled-showings__row">
                                                <div class="panel-content-type-scheduled-showings__title">
                                                    Showing request status:
                                                </div>
                                                <div class="panel-content-type-scheduled-showings__value">
                                                    date and time reviewed by the seller
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="app-panel-event active">
                                        <a href="#!" class="app-panel-event__head">Event Log</a>
                                        <div class="app-panel-event__content">
                                            <div class="app-panel-event__item">
                                                <div class="app-panel-event__title">
                                                    Showing requested by <a href="mailto:realtor@brokerage.com">realtor@brokerage.com</a>
                                                </div>
                                                <div class="app-panel-event__value">
                                                    07.12.2022
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer panel-content-type-scheduled-showings__bottom">
                                    <a href="#!" class="app-btn app-btn_green">Cancel Showing</a>
                                </div>
                            </div>
                        </div>

                        <div class="app-panel app-panel_green app-panel-scheduled-showings active">
                            <div class="app-panel__head panel-head expand-head">
                                <div class="panel-head__text">
                                    <h2 class="panel-head__heading">
                                        15619 Premiere Drive Suite 104B Tampa
                                    </h2>
                                    <div class="panel-head__status">
                                        Showings available
                                    </div>
                                </div>
                                <div class="panel-head__sign">
                                    <span></span>
                                </div>
                            </div>
                            <div class="app-panel__content panel-content-type-scheduled-showings">
                                <div class="panel-content-type-scheduled-showings__top">
                                    <div class="app-property-details-table_inner">
                                        <div class="panel-content-type-scheduled-showings__col">
                                            <img src="<?php echo get_template_directory_uri(); ?>/assets/img/img-placeholder.png"
                                                 alt="image" loading="lazy"
                                                 class="panel-content-type-scheduled-showings__img">
                                            <div class="panel-content-type-scheduled-showings__row">
                                                <div class="panel-content-type-scheduled-showings__title">Listing
                                                    Price
                                                </div>
                                                <div class="panel-content-type-scheduled-showings__value">$229,900</div>
                                            </div>
                                        </div>
                                        <div class="panel-content-type-scheduled-showings__col">
                                            <div class="panel-content-type-scheduled-showings__row">
                                                <div class="panel-content-type-scheduled-showings__title">
                                                    Scheduled Showing date:
                                                </div>
                                                <div class="panel-content-type-scheduled-showings__value">
                                                    07.16.2022
                                                </div>
                                            </div>
                                            <div class="panel-content-type-scheduled-showings__row">
                                                <div class="panel-content-type-scheduled-showings__title">
                                                    Scheduled Showing time:
                                                </div>
                                                <div class="panel-content-type-scheduled-showings__value">
                                                    7:30 AM
                                                </div>
                                            </div>
                                            <div class="panel-content-type-scheduled-showings__row">
                                                <div class="panel-content-type-scheduled-showings__title">
                                                    Showing request status:
                                                </div>
                                                <div class="panel-content-type-scheduled-showings__value">
                                                    date and time reviewed by the seller
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="app-panel-event active">
                                        <a href="#!" class="app-panel-event__head">Event Log</a>
                                        <div class="app-panel-event__content">
                                            <div class="app-panel-event__item app-panel-event__item_bordered">
                                                <div class="app-panel-event__title">
                                                    Showing requested by <a href="mailto:realtor@brokerage.com">realtor@brokerage.com</a>
                                                </div>
                                                <div class="app-panel-event__value">
                                                    07.12.2022
                                                </div>
                                            </div>
                                            <div class="app-panel-event__item app-panel-event__item_bordered">
                                                <div class="app-panel-event__title">
                                                    Showing date and time rejected by the seller
                                                </div>
                                                <div class="app-panel-event__value">
                                                    07.12.2022
                                                </div>
                                            </div>
                                            <div class="app-panel-event__item">
                                                <div class="app-panel-event__title">
                                                    Showing date and time offered by the seller
                                                </div>
                                                <div class="app-panel-event__value">
                                                    07.12.2022
                                                </div>
                                            </div>
                                            <div class="app-panel-event__action event-action">
                                                <div class="event-action__top">
                                                    <div class="event-action__title">
                                                        <strong>Please select one of the following date and
                                                            time</strong> options
                                                        suggested by the seller <strong>or reject the offered date and
                                                            time</strong> by
                                                        clicking
                                                    </div>
                                                    <div class="event-action__value">07.13.2022</div>
                                                </div>
                                                <div class="event-action__holder">
                                                    <div class="event-action__cell">
                                                        <p>Date: 07.16.2022</p>
                                                        <p>Time: 1:00 PM </p>
                                                        <a href="#!">Select</a>
                                                    </div>
                                                    <div class="event-action__cell">
                                                        <p>Date: 07.16.2022</p>
                                                        <p>Time: 1:30 PM </p>
                                                        <a href="#!">Select</a>
                                                    </div>
                                                    <div class="event-action__cell">
                                                        <p>Date: 07.16.2022</p>
                                                        <p>Time: 2:00 PM </p>
                                                        <a href="#!">Select</a>
                                                    </div>
                                                    <div class="event-action__cell">
                                                        <p>None Of</p>
                                                        <p>These Work</p>
                                                        <a href="#!" class="disabled">Select</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="panel-footer panel-content-type-scheduled-showings__bottom">
                                    <a href="#!" class="app-btn app-btn_green">Cancel Showing</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="app-pagination">
                        <a href="#!" class="page">←</a>

                        <a href="#!" class="page extra">1</a>
                        <a href="#!" class="page extra">2</a>
                        <a href="#!" class="page extra">3</a>

                        <div class="dots">...</div>

                        <a href="#!" class="page">7</a>
                        <a href="#!" class="page current">8</a>
                        <a href="#!" class="page">9</a>

                        <div class="dots">...</div>

                        <a href="#!" class="page extra">25</a>
                        <a href="#!" class="page extra">26</a>
                        <a href="#!" class="page extra">27</a>

                        <a href="#!" class="page">→</a>
                    </div>

                </div>


            </div>
        </div>
    </main>

<?php get_footer();
