/**
 * Custom scripts
 * 
 * @author Xanders Samoth
 * @see https://team.xsamtech.com/xanderssamoth
 */
let tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
const tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
    return new bootstrap.Tooltip(tooltipTriggerEl)
});
const APP = {
    init() {
        // When the page loads, check the state or hash value or both
        APP.checkState();
        // Add listeners for nav bar
        // Add listeners for popstate or hashchange
        APP.addListeners();
    },
    addListeners() {
        let navLinks = Array.from(document.getElementsByClassName('nav-link'));

        // On click, update "main" className
        navLinks.forEach(b => { b.addEventListener('click', APP.nav); });
        window.addEventListener('popstate', APP.checkState);
    },
    checkState() {
        // Do we want to drive our app by state or fragment-identifier(hash) or query?
        // Called when page loads AND after a popstate event
        console.log(history.state);

        if (!location.hash) {
            // Default first load
            history.replaceState('', '', '');
            APP.updateLayout('all');

        } else {
            let hash = location.hash.replace('#', '');

            APP.updateLayout(hash);
            document.title = hash;
        }
    },
    nav(e) {
        e.preventDefault();

        let anchor = e.target;
        let home = anchor.getAttribute('data-home');
        let name = anchor.getAttribute('data-name');
        let state = { home, name };
        let hash = `#${home.toLowerCase()}`;

        history.pushState(state, '', hash);
        APP.updateLayout(home.toLowerCase());

        document.title = home;
    },
    updateLayout(place) {
        // Accept a className and update the interface based on that
        let main = document.querySelector('main');

        main.className = place;
    }
};

document.addEventListener('DOMContentLoaded', APP.init);