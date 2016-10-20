angular.module('app.Signup', [])

    .controller('SignupController', function($scope, $auth, $uibModal, $http, $location){


        $scope.signup = function(user) {
            $auth.signup({
                name: user.name,
                email: user.email,
                //gender: user.gender,
                password: user.password
            })
                .then(function(){
                    $scope.alerts.push({
                        type: 'success',
                        content: 'Your account has been successfully created. Please log in.'
                    })
                })
                .catch(function(response) {
                    if (typeof response.data.message === 'object') {
                        $scope.alerts.push({
                            content: response.data.message,
                            animation: 'fadeZoomFadeDown',
                            type: 'danger',
                            duration: 3
                        });
                    } else {
                        $scope.alerts.push({
                            content: response.data.message,
                            animation: 'fadeZoomFadeDown',
                            type: 'danger',
                            duration: 3
                        });
                    }
                });
            $scope.layout == 'login';
        };


    });