'use strict';

//app module
angular.module('fitness',[
    'ui.bootstrap',
    'ui.router',
    'restangular',
    'satellizer',
    'cloudinary',
    'angularFileUpload',
    'angular-stripe',
    'credit-cards'
	])


.config(['$stateProvider', '$urlRouterProvider', 'RestangularProvider', '$authProvider', 'stripeProvider',
    function($stateProvider, $urlRouterProvider, RestangularProvider, $authProvider, stripeProvider) {
        $stateProvider.
            state('acces', {
                url: '/access?redirect',
                templateUrl: 'angular/_shared/login.html'
            })


}]);