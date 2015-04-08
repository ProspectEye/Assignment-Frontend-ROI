;(function(angular) {

    angular.module('assignment.consumers')
        .factory('badgeConsumer', badgeConsumer);

    function badgeConsumer($resource) {

        var root = '/api/';

        var methods = {
            'getAll': {
                method:'GET',
                isArray:true
            },

            'getById': {
                method:'GET'
            },

        };

        return $resource(root+'badge/:id', { id: '@id' }, methods);
    }

}(angular));