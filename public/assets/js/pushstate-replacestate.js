/**
 * Custom scripts
 * 
 * @author Xanders Samoth
 * @see https://team.xsamtech.com/xanderssamoth
 */
let content = document.getElementById('result');

document.addEventListener('DOMContentLoaded', () => {
    document.getElementById('l1').addEventListener('click', goOne);
    document.getElementById('l2').addEventListener('click', goTwo);
    document.getElementById('l3').addEventListener('click', goThree);

    console.log(history.state);
});

function goOne(e) {
    e.stopPropagation();
    history.replaceState({ id: 1 }, '', 'https://js-history.dev:1443/hello');

    content.innerHTML = 'Go one!'
}

function goTwo(e) {
    e.stopPropagation();
    history.pushState({ id: 234 }, '', 'another.html');
}

function goThree(e) {
    e.stopPropagation();

    let num = Math.floor(Math.random() * 10000);

    history.pushState({ id: num }, '', `#${num}`);
}