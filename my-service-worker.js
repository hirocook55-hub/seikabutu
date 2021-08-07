
    'use strict';
self.addEventListener('install',(Event=>{
    console.log('service worker install ...');
}));

self.addEventListener('activate',(Event)=>{
    console.info('activate',Event);
})
