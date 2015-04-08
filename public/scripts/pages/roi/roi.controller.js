;(function(angular) {

    angular.module('assignment.pages.roi')
        .controller('roiController', roiController );

    function roiController($scope, badgeConsumer) {

        $scope.titleLabel = 'Roi Controller';

        $scope.bagdes = badgeConsumer.getAll();

    }

})(angular);