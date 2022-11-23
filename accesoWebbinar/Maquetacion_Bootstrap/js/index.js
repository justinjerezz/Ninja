var end = new Date('2022-11-29T15:19:21+00:00');

            end = new Date(end.toLocaleString('en-US', {
                timeZone: 'Europe/Madrid'
            }))

            var _second = 1000;
            var _minute = _second * 60;
            var _hour = _minute * 60;
            var _day = _hour * 24;
            var timer;

            function formatCurrentDate(date = new Date()) {
                return new Date(date.toLocaleString('en-US', {
                    timeZone: 'Europe/Madrid'
                }))
            }

            function showRemaining() {

                //var now = new Date();

                let now = formatCurrentDate()

                var distance = end - now;

                /* console.log(end, now) */
                if (distance < 0) {

                    clearInterval(timer);
                    document.getElementById('cuentaAtras').innerHTML = 'EXPIRED!';

                    return;
                }
                var days = Math.floor(distance / _day);
                var hours = Math.floor((distance % _day) / _hour);
                var minutes = Math.floor((distance % _hour) / _minute);
                var seconds = Math.floor((distance % _minute) / _second);

                document.getElementById('cuentaAtras').innerHTML = days + ' dias, ';
                document.getElementById('cuentaAtras').innerHTML += hours + ' horas, ';
                document.getElementById('cuentaAtras').innerHTML += minutes + ' minutos y ';
                document.getElementById('cuentaAtras').innerHTML += seconds + ' segundos';
            }

            timer = setInterval(showRemaining, 1000);  
  
  
  
  
  
  /* simplyCountdown('#cuentaAtras', {
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