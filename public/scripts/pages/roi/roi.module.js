;(function(angular) {

    angular.module('assignment.pages.roi', [
    	'ui.router',

    	'assignment.consumers'
    ])

    .config(function($stateProvider) {

        $stateProvider
		  .state('app.roi', {
		    url: "/roi",
		    views: {
				'main-view@app': {
					templateUrl: "/public/scripts/pages/roi/roi.template.html",
					controller: 'roiController'
				}
			}
		})
    })

}(angular));
