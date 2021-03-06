angular.module('app',[
    'ui.bootstrap',
    'ui.router',
    'index',
    'restangular',
    'satellizer',
    'app.inscription',
    'angularFileUpload',
	'app.home',
    'app.Signup',
    'app.inscriptionsalles',
	])


.config(['$stateProvider', '$urlRouterProvider', 'RestangularProvider', '$authProvider',
    function($stateProvider, $urlRouterProvider, RestangularProvider, $authProvider) {
        $stateProvider.
		state('home', {
			url: '/',
			templateUrl: 'app/home/header.html',
			controller: 'HomeController'
		}).
            state('acces', {
                url: '/access?redirect',
                templateUrl: '_inc/login.html'
            }).

            state('inscription',{
                url:'/inscription',
                templateUrl: '/app/inscription/inscription.html',
                controller: 'InscriptionController'
            }).
            state('signup',{
                url:'/signup',
                templateUrl:'/app/signup/signup.html',
                controller:'SignupController'
            }),

            state('salles',{
                url:'/salles',
                templateUrl:'/app/salles/inscriptionsalles.html',
                controller:'inscriptionsallesController'
            })


            $urlRouterProvider.otherwise('/');

        RestangularProvider.setBaseUrl('/api/v1');

        //stripeProvider.setPublishableKey('pk_test_Zv1o5Or0wriYZL1F5umOJeA6');

        $authProvider.facebook({
            clientId: '399588066919160'
        });

        $authProvider.google({
            clientId: '631036554609-v5hm2amv4pvico3asfi97f54sc51ji4o.apps.googleusercontent.com'
        });

        function authenticate($q, $location, $auth) {
            var deferred = $q.defer();

            if (!$auth.isAuthenticated()) {
                $location.path('/');
            } else {
                deferred.resolve();
            }

            return deferred.promise;
        }



    }]);