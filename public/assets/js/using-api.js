/**
 * Custom scripts
 * 
 * @author Xanders Samoth
 * @see https://team.xsamtech.com/xanderssamoth
 */
let aboutBtn = document.getElementById('aboutBtn');

function loadAbout(content) {
    let res = document.getElementById('result');

    res.innerHTML = content;
}

aboutBtn.addEventListener('click', e => {
    let btnId = aboutBtn.id;
    let content = 'I am the « about » contents!<br>Use the browser\'s "<i class="bi bi-arrow-left small"></i> <i class="bi bi-arrow-right small"></i>" buttons now.';

    history.pushState({ btnId, content }, `Selected: ${btnId}`, 'about');
    loadAbout(content);
});
window.addEventListener('popstate', e => {
    if (e.state && e.state.content) {
        loadAbout(e.state.content); 

    } else {
        loadAbout(''); 
    }
});
history.replaceState({ content: '' }, 'Default state', './using-api');