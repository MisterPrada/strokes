require('./bootstrap');


window.Vue = require('vue');
import Vue from 'vue';

var contactsRec;
window.contactsRec = contactsRec;
window.onloadCallback = function () {
    contactsRec = grecaptcha.render(document.getElementById('contacts-rec'), {
        'sitekey': '6LfVYHAaAAAAAEc_yNfnj3iA2-qTzli6RY0KBBne'
    });
};

Vue.component('contact-form', require('./components/contactForm.vue').default);

if($('#app').length){
    const app = new Vue({
        el: '#app',
    });
}
