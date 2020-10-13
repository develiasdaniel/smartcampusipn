/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default))

Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('user-modal-component', require('./components/UserModalComponent.vue').default);
Vue.component('air-quality-index-o3', require('./components/Aqi/AqiO3.vue').default);
Vue.component('air-quality-index-co', require('./components/Aqi/AqiCO.vue').default);
Vue.component('air-quality-index-so2', require('./components/Aqi/AqiSO2.vue').default);
Vue.component('air-quality-index-no2', require('./components/Aqi/AqiNO2.vue').default);
Vue.component('air-quality-index-pm10', require('./components/Aqi/AqiPM10.vue').default);
Vue.component('air-quality-index-pm25', require('./components/Aqi/AqiPM25.vue').default);
Vue.component('air-quality-index-general', require('./components/Aqi/AqiGeneral.vue').default);
Vue.component('air-quality-index-card', require('./components/Aqi/AqiScaleCard.vue').default);
Vue.component('air-quality-index-modal', require('./components/Aqi/AqiScaleModal.vue').default);
Vue.component('air-pollution-o3-ppm', require('./components/AirPollution/O3ppm.vue').default);
Vue.component('air-pollution-co-ppm', require('./components/AirPollution/COppm.vue').default);
Vue.component('air-pollution-so2-ppb', require('./components/AirPollution/SO2ppb.vue').default);
Vue.component('air-pollution-no2-ppb', require('./components/AirPollution/NO2ppb.vue').default);
Vue.component('air-pollution-pm25', require('./components/AirPollution/PM25.vue').default);
Vue.component('air-pollution-pm10', require('./components/AirPollution/PM10.vue').default);
Vue.component('air-pollution-break-point-card', require('./components/AirPollution/BreakPointCard.vue').default);
Vue.component('meteorology-temperature', require('./components/Meteorology/Temperature.vue').default);
Vue.component('meteorology-humidity', require('./components/Meteorology/Humidity.vue').default);
Vue.component('meteorology-pressure', require('./components/Meteorology/Pressure.vue').default);
Vue.component('meteorology-ranges', require('./components/Meteorology/Ranges.vue').default);
Vue.component('linear-regression', require('./components/Prediction/LinearRegression.vue').default);


/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
    data: {
        menu : 0
    }
});
