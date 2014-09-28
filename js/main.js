jQuery(document).ready(function ($) {
    if (pageProperties.enableEventTracking) {
        if (typeof mixpanel === "undefined") {
            console.log("Failed to load Mixpanel.");
        } else {
            mixpanel.register({ 'Page': pageProperties.page });
            mixpanel.track("Page View");
            mixpanel.track_links('#nav1 .logo > a', 'Clicked Logo');
            mixpanel.track_links('#nav1 li > a', 'Clicked Nav Link', function (elem) {
                return {
                    'Link Text': elem.text
                };
            });
            mixpanel.track_links('#social-buttons a', 'Clicked Social Button', function (elem) {
                return {
                    'Social Network': elem.text
                };
            });
            mixpanel.track_links('#resume-btn > a', 'Clicked Download Resume Button');
            mixpanel.track_links('#humans-txt-btn > a', 'Clicked humans.txt');
            mixpanel.track_links('#top-link > a', 'Clicked Go to Top Link');

            mixpanel.track_links('.project-description a', 'Clicked link in project description', function (elem) {
                var $elem = $(elem);
                return {
                    'Project': $elem.closest('.project').find('.project-title').text(),
                    'Link Text': $elem.text(),
                    'Link URL': $elem.attr('href')
                }
            });

            mixpanel.track_links('.project-technologies a', 'Clicked project technology link', function (elem) {
                var $elem = $(elem);
                return {
                    'Project': $elem.closest('.project').find('.project-title').text(),
                    'Link Text': $elem.text(),
                    'Link URL': $elem.attr('href')
                }
            });

            mixpanel.track_links('.project-external-links a', 'Clicked project external link', function (elem) {
                var $elem = $(elem);
                return {
                    'Project': $elem.closest('.project').find('.project-title').text(),
                    'Link Text': $elem.text(),
                    'Link URL': $elem.attr('href')
                }
            });

            mixpanel.track_links('#homepage-about-me a', 'Clicked link on homepage', function (elem) {
                return {
                    'Link Text': elem.text,
                    'Link URL': elem.href
                }
            });
        }
    }
});
