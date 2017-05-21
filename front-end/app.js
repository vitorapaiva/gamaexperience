'use strict';

var app = angular.module('MyInvest', []);

var controller = app.controller('FormController', function () {
    var vm = this;

    vm.inputName = '';
    vm.inputEmail = '';
    vm.motivo = '';
    vm.emailError = false;

    vm.enviarServidor = function () {
        validarCampos();
    };

    vm.verificarEmail = function () {
        if (this.inputEmail !== '') {
            vm.emailError = validarEmail();
        }
    };

    var validarCampos = function () {
        if (vm.inputName !== '' && vm.inputEmail !== '') {
            console.log('enviar');
        } else {
            console.log('conte erros');
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