import './bootstrap';
require('bootstrap');
window.$ = require("jquery");
import Alpine from 'alpinejs';
window.feather=require("feather-icons");
require('./custom.js');
window.Alpine = Alpine;

Alpine.start();
