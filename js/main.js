jQuery(document).ready(function ($) {
    pageProperties.enableEventTracking = true;
    window.mixpanel = {
        register: function (properties, days) {
            console.log('mixpanel register', properties, 'Registered for ' + days + ' days.');
        },
        track: function (event_name, properties, callback) {
            console.log('mixpanel track', event_name, properties);
            if (typeof callback === 'function') {
                callback();
            }
        },
        track_links: function (query, event_name, properties) {
            $(query).click(function (e) {
                var props = {};
                if (typeof properties === 'object') {
                    props = properties;
                } else if (typeof properties === 'function') {
                    props = properties(this);
                }
                console.log('mixpanel track links', event_name, props);
                e.preventDefault();
            });
        }
    };

    if (pageProperties.enableEventTracking) {
        if (typeof mixpanel === "undefined") {
            console.log("Failed to load Mixpanel.");
        } else {
            mixpanel.register({ 'Page': pageProperties.page });
            mixpanel.track("View Page");
            mixpanel.track_links('#nav1 .logo > a', 'Clicked Logo');
            mixpanel.track_links('#nav1 li > a', 'Clicked Nav Link', function (elem) {
                return {
                    'Link': elem.text
                };
            });
            mixpanel.track_links('#social-buttons a', 'Clicked Social Button', function (elem) {
                return {
                    'Social Network': elem.text
                };
            });
            mixpanel.track_links('#resume-btn > a', 'Downloaded Resume');
            mixpanel.track_links('#humans-txt-btn > a', 'Clicked humans.txt');
            mixpanel.track_links('#top-link > a', 'Clicked Go to Top Link');
        }
    }
});
