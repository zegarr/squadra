require('./bootstrap');

$(".share").on("click", function () {
    let url = $(this).attr("data-url");
    let nombre = $(this).attr("data-nombre-jugador");
    //copar al clipboard
    $(this).attr("title", "Link copiado!");
    bootstrap.Tooltip.getInstance($(this)).dispose();
    new bootstrap.Tooltip($(this));
    setTimeout(() => {
        bootstrap.Tooltip.getInstance('.share').toggle();
    }, 500);
    copyToClipboard(url);
    // //compartir movile
    // const shareObject = {
    //     title: 'SQUADRA - ' + nombre,
    //     text: 'Visita el perfil de ' + nombre + 'en SQUADRA',
    //     url: url
    // }
    // navigator.share(shareObject);
});

function copyToClipboard(text) {
    var sampleTextarea = document.createElement("textarea");
    document.body.appendChild(sampleTextarea);
    sampleTextarea.value = text; //save main text in it
    sampleTextarea.select(); //select textarea contenrs
    document.execCommand("copy");
    document.body.removeChild(sampleTextarea);
}
