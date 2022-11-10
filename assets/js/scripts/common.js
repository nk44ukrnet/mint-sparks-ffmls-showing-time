var notifications = localStorage.getItem('pp-notifications');
var request_limiter = null;

jQuery(document).ready(function () {
    // Notifications
    showNotificationFromLocaleStorage();
});

function showNotificationFromLocaleStorage() {
    if (notifications) {
        var notification = JSON.parse(notifications);

        if (notification) {
            Sweetalert2.fire(notification);
        }

        localStorage.setItem('pp-notifications', '');
    }
}

function addNotificationToLocaleStorage(notification_object) {
    localStorage.setItem('pp-notifications', JSON.stringify(notification_object));
}

//expand-collapse panel
try {
    let expandHead = document.querySelectorAll('.expand-head'),
        activeClass = 'active';

    if (expandHead) {
        for (let i = 0; i < expandHead.length; i++) {
            expandHead[i].addEventListener('click', function () {
                if (expandHead[i].closest('.app-panel')) {
                    expandHead[i].closest('.app-panel').classList.toggle(activeClass);
                }
            })
        }
    }
} catch (e) {
    console.log('expand-collapse panel error ', e);
}
//expand-collapse event
try {
    let eventHead = document.querySelectorAll('.app-panel-event__head'),
        activeClass = 'active';

    if (eventHead) {
        for (let i = 0; i < eventHead.length; i++) {
            eventHead[i].addEventListener('click', function () {
                if (eventHead[i].closest('.app-panel-event')) {
                    eventHead[i].closest('.app-panel-event').classList.toggle(activeClass);
                }
            })
        }
    }
} catch (e) {
    console.log('expand-collapse event error ', e);
}