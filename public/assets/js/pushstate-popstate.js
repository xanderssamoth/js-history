/**
 * Custom scripts
 * 
 * @author Xanders Samoth
 * @see https://team.xsamtech.com/xanderssamoth
 */
let boxes = Array.from(document.getElementsByClassName('box'));

function selectBox(id) {
    boxes.forEach(b => {
        b.classList.toggle('selected', b.id === id);
    });
}

boxes.forEach(b => {
    let boxId = b.id;

    b.addEventListener('click', e => {
        history.pushState({ boxId }, `Selected: ${boxId}`, `./selected=${boxId}`);
        selectBox(boxId);
    });
});
window.addEventListener('popstate', e => { selectBox(e.state.boxId); });
history.replaceState({ id: null }, 'Default state', './pushstate-popstate');