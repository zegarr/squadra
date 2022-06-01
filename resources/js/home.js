import Typed from 'typed.js';

var url = window.location.href;
var year = new Date().getFullYear()-2001;
var idioma = url.split('/').pop();
var titulo = ["POTENCIAR^500LA^500PASION^2000", "SQUADRA^2000", year+"^500 AÑOS^500 DE^500 TRAYECTORIA^2000"];
if(idioma == "en"){
  titulo = ["BOOST^500 PASSION^2000", "SQUADRA^2000", "21^500 YEARS^500 OF^500 EXPERIENCE^2000"];
}

new Typed('.tituloPrincipal', {
  strings: titulo,
  typeSpeed: 60,
  loop: true,
  showCursor: false
});