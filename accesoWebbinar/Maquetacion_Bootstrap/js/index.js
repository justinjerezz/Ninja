var MlSeconds = 60 * 60000;
var end = new Date('2022-11-23T13:00:00+00:00');


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

                var distance = (end-MlSeconds) - now;

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


                document.getElementById('cuentaAtrasDias').innerHTML = days;
                document.getElementById('cuentaAtrasHoras').innerHTML = hours;
                document.getElementById('cuentaAtrasMinutos').innerHTML = minutes;
                document.getElementById('cuentaAtrasSegundos').innerHTML = seconds;
            }

            timer = setInterval(showRemaining, 1000);  
  
  
  
