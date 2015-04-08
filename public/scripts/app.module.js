;(function(angular) {

    angular.module('assignment', [
        'ngResource',
        'ui.router',

        'assignment.consumers',

        'assignment.pages.roi'
    ])

    .config(function($stateProvider, $urlRouterProvider) {

		$urlRouterProvider.otherwise('/roi');

        $stateProvider
        	.state('app', {
                views: {
                	'': {
                		templateUrl: '/public/scripts/app.template.html'
                	}
                }
            });
    });

}(angular));