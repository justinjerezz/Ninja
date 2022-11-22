
window.onload = () => {
    //setInterval(iniciarTemporizador,1000);
    reloj();
}




function reloj() {

    var hoy = new Date();
    var h = hoy.getHours();
    var m = hoy.getMinutes();
    var s = hoy.getSeconds();

    m = actualizarHora(m);
    s = actualizarHora(s);

    document.getElementById('cuentaAtras').innerHTML = h + ":" + m + ":" + s;

    var t = setTimeout(function () { reloj() }, 500);

}



function actualizarHora(i) {

    if (i < 10) { i = "0" + i };  // Añadir el cero en números menores de 10

    return i;

}
















































/*  simplyCountdown('#cuentaAtras', {
       year: 2022, // obligatorio, año en el que empieza
       month: 11, // obligatorio, mes en el que empieza
       day: 22, // obligatorio, dia en el que empieza
       hours: 18, // Se pone del [0-23]
       minutes: 0, // Por defecto es 0  se elige entre este rango [0-59]
       seconds: 0, // Por defecto es 0 se selecciona entre este rango [0-59]
       words: { //words displayed into the countdown
           days: { singular: 'Día', plural: 'Días' },
           hours: { singular: 'Hora', plural: 'Horas' },
           minutes: { singular: 'Minuto', plural: 'Minutos' },
           seconds: { singular: 'Segundo', plural: 'Segundos' }
       },
       plural: true, //Uso del plurar
       inline: false, //Colocar el contador en line
       inlineClass: 'simply-countdown-inline', //inline css span class in case of inline = true
       // in case of inline set to false
       enableUTC: false,
       
       onEnd: function () {
           // Ejecuta cuando finaliza el contador
           return;
       },
       refresh: 1000, //cada cuanto refresca el contador en este caso 1seg
       sectionClass: 'simply-section', //section css class
       amountClass: 'simply-amount', // amount css class
       wordClass: 'simply-word', // word css class
       zeroPad: false,
       countUp: false // cuenta regresiva

       
});*/

