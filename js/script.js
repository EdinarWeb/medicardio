;
//Registro de caracteristicas de PWA's
((d, w, n, c) => {

    if ('serviceWorker' in n) {
      w.addEventListener('load', () => {
        n.serviceWorker.register('./sw.js')
          .then(registration => {
            console.log('registration')
            console.log(
              'Service Worker registrado con éxito',
            registration.scope
            )
          })
          .catch(err => console.log('Error al tratar de registrar el Service Worker', err))
        })
      } 

    if ( w.Notification && Notification.permission !== 'denied' ) {
        Notification.requestPermission(status => {
        console.log(status)
        let n = new Notification('Titulo', {
          body: 'Soy una Notificacion',
          icon: './img/app/192x192.png'//opcional 
        })
      })
      }

})(document, window, navigator, console.log);

((d, w, n, c) => {

})(document, window, navigator, console.log);

((d, w, n, c) => {

})(document, window, navigator, console.log);

((d, w, n, c) => {

})(document, window, navigator, console.log);


