
    'use strict';
if('serviceWorker' in navigator){
    navigator.serviceWorker.register('my-service-worker.js',{scope:'index.html'})
    .then(function(reg){
        console.log('登録に成功しました。Scopeは'+ reg.scope);
    }).catch(function(error){
        console.log('登録に失敗しました' + error);
    });
}
