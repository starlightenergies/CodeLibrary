

window.onload = function () {
    document.getElementById('p1').title = "all lowercase with .html extension is best";
    document.getElementById('p2').title = "something short and meaningful, perhaps";
    document.getElementById('p3').title = "tech name (js, php, html, jquery, sql, etc)";
    document.getElementById('p4').title = "purpose (Ajax, Tutorial, Service, etc)";
    document.getElementById('p5').title = "see Prismjs.com for a full list of languages to use";
    document.getElementById('p6').title = "snippet gets placed in between pre and code tags";
    document.getElementById('p7').title = "each code section has a title above it";

    let formobj = document.getElementById('p2');
    formobj.addEventListener('focus',() => { autofiller(formobj); });
}

function autofiller(elt) {

    let page = document.getElementById('p1');


    switch (elt.id) {

        case 'p2': elt.value = page.value;break;
        default:
    }
}
