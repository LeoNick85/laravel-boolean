require('./bootstrap');

var $ = require('jquery');
import "bootstrap";

$(document).ready(function() {
    $(".faq-element i").on("click", function() {
        $(this).toggleClass("fa-plus fa-minus");
        var current_faq = $(this).closest(".faq-element");
        current_faq.toggleClass("active");

    });
})
