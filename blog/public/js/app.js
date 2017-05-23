'use strict';

var app = angular.module('MyInvest', []);

var controllerForm = app.controller('FormController', function () {
    var vm = this;

    vm.inputEmail = '';
    vm.emailError = false;

    vm.verificarEmail = function () {
        if (this.inputEmail !== '') {
            vm.emailError = validarEmail();
        }       
    };

    var validarEmail = function () {
        var atpos = vm.inputEmail.indexOf("@");
        var dotpos = vm.inputEmail.lastIndexOf(".");
        if (atpos < 1 || dotpos < atpos + 2 || dotpos + 2 >= vm.inputEmail.length) {
            return true;
        }

        return false;
    };
});