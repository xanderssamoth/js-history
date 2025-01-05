/**
 * Custom scripts
 * 
 * @author Xanders Samoth
 * @see https://team.xsamtech.com/xanderssamoth
 */
$(document).ready(function () {
    nav = $('.navbar');
    content = $('#content');

    // Function to retrieve URL parameters
    getContentParam = function () {
        var urlParams = new URLSearchParams(window.location.search);

        return urlParams.get('content');
    };

    // Reset all tooltips on the page
    initializeTooltips = function () {
        if (typeof bootstrap !== 'undefined') {
            // Disable all existing tooltips before resetting
            var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
            tooltipTriggerList.forEach(function (tooltipTriggerEl) {
                var tooltipInstance = bootstrap.Tooltip.getInstance(tooltipTriggerEl); // Retrieves the existing instance
                if (tooltipInstance) {
                    tooltipInstance.dispose(); // Disables the existing tooltip
                }
            });

            // Reset all tooltips
            tooltipTriggerList.map(function (tooltipTriggerEl) {
                return new bootstrap.Tooltip(tooltipTriggerEl);
            });
        }
    };

    // Fetches and inserts content into the container
    fetchAndInsert = function (href) {
        content.load(`${href} #content`, function () {
            // Force a reload of styles
            loadCSSForContent(href);
            
            // Reset all tooltips after loading
            initializeTooltips();
        });
    };

    // Load CSS for dynamic content
    loadCSSForContent = function (href) {
        // Remove previous CSS
        $('link[data-content-css]').remove();

        // Determine which CSS file to load
        var contentParam = new URL(href, window.location.origin).searchParams.get('content');

        if (contentParam) {
            var cssFile = contentParam + '.css';  // Example: "cat.css" ou "dog.css"

        } else {
            var cssFile = href.split('/').pop() + '.css';  // For example, "history-basics-ajax.css"
        }

        // Add CSS link
        var link = $('<link>', {
            rel: 'stylesheet',
            type: 'text/css',
            href: '/assets/css/' + cssFile,
            'data-content-css': true  // to identify dynamically added CSS files
        });

        $('head').append(link);
    }

    nav.find('.nav-link').on('click', function (e) {
        e.preventDefault();

        var href = $(this).attr('href');

        // Manipulate history
        history.pushState({ content: getContentParam() }, null, href);
        // Fetch and insert content
        fetchAndInsert(href);
    });

    // User goes back/forward
    $(window).on('popstate', function () {
        var contentParam = getContentParam(); // Retrieves the "content" parameter from the URL
        var currentUrl = location.pathname; // Retrieves the path of the URL

        console.log(`New content parameter: ${contentParam}`);
        console.log(`New URL: ${currentUrl}`);

        // Loads content based on the current URL
        if (contentParam) {
            fetchAndInsert(`${currentUrl}?content=${contentParam}`);

        } else {
            fetchAndInsert(currentUrl);
        }

        // To specifically handle state change, check here
        if (contentParam) {
            console.log(`"Content" parameter detected: ${contentParam}`);
            // Perform specific actions based on "content", if necessary
        }
    });

    // Ensure that the "content" parameter is taken into account on initial page load
    if (getContentParam()) {
        var initialContentParam = getContentParam();

        console.log(`Initial "content" parameter: ${initialContentParam}`);
        // Load specific content here based on this setting
    }

    // Initialize tooltips from the beginning
    initializeTooltips();
});
