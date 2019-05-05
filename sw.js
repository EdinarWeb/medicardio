;
//asignar un nombre y versión al cache
const CACHE_NAME = 'v1_cache_medicardio',
  urlsToCache = [
    './',
    '/',
    './?utm=homescreen',
    './index.html',
    './index.html?utm=homescreen',
    './css/style.css',
    './css/styles.css',
    './scripts.js',
    './css/script.js',
    './sw.js',
    './css/font-awesome.css',
    './img/app/1024-1024.png',
    './img/app/512-512.png',
    './img/app/384-384.png',
    './img/app/256-256.png',
    './img/app/192-192.png',
    './img/app/128-128.png',
    './img/app/96-96.png',
    './img/app/64-64.png',
    './img/app/32-32.png',
    './img/app/16-16.png',
    './img/app/apple-touch-icon.png',
    './img/app/app/favicon.png'
    
  ]

//durante la fase de instalación, generalmente se almacena en caché los activos estáticos
self.addEventListener('install', e => {
  console.log('evento: SW Istalado')
  e.waitUntil(
    caches.open(CACHE_NAME)
      .then(cache => {
        console.log('Archivos en cache')
        return cache.addAll(urlsToCache)
          //.then(() => self.skipWaiting())
      })
      .catch(err => console.log('Falló registro de cache', err))
  )
})

//una vez que se instala el SW, se activa y busca los recursos para hacer que funcione sin conexión
self.addEventListener('activate', e => {
  console.log('Evento: SW Activado')
  const cacheWhiteList = [CACHE_NAME]

  e.waitUntil(
    caches.keys().then(cacheNames => {
        return Promise.all(
          cacheNames.map(cacheName => {
            //Eliminamos lo que ya no se necesita en cache
            if (cacheWhiteList.indexOf(cacheName) === -1) {
              return caches.delete(cacheName)
            }
          })
        )
      })
      // Le indica al SW activar el cache actual
      .then(() => {
        console.log('El cache esta limpio y actualizado')
        return self.clients.claim()
      })
  )
})

//cuando el navegador recupera una url
self.addEventListener('fetch', e => {
  console.log('Evento: SW recuperado')
  //Responder ya sea con el objeto en caché o continuar y buscar la url real
  e.respondWith(
    caches.match(e.request)
      .then(res => {
       /* if ( res ) {
          //recuperar del cache
          return res
        }*/
        //recuperar de la petición a la url
        return fetch(e.request)
        .then(res => {
          let resToCache = res.clone()

          caches.open(CACHE_NAME)
            .then(cache => {
              cache
                .put(e.request, resToCache)
                .catch(err => console.log('${e.request.url}: ${err.message}'))
            })

          return res
        })
      })
  )
})

self.addEventListener('push', e => {
  console.log('Evento Push')

  let title = 'Push Notificación Demo',
    options = {
      body: 'Click para regresar a la aplicación',
      icon: './img/app/192x192.png',
      vibrate: [100, 50, 100],
      data: { id: 1},
      actions: [
        { 'action': 'Si', 'title': 'Amo esta aplicación :)', icon: './img/app/192x192.png' },

        { 'action': 'No', 'title': 'No me gusta esta aplicación :(', icon: './img/app/192x192.png' }
      ]
    }

    e.waitUntil( self.registration.showNotification(title, options) )
})

self.addEventListener('notificationClick', e => {
  console.log(e)

  if (e.action === 'Si' ) {
    console.log('Amo esta aplicación')
    clients.openWindow('https://ed.team')
  }else if ( e.action === 'No' ) {
    console.log('No me gusta esta aplicación')
  }

  e.notification.close()
})