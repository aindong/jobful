'use strict';

var Trainees = (function($) {

    /*
     * Variables
     ------------------------------------------*/
    var traineeFormCreate = $('#traineesFormCreate'),
        traineeFormUpdate = $('#traineeFormUpdate'),
        alertDiv          = $('#alertDiv');

    /**
     * Declare the class object
     */
    var trainees = {};

    /*
     * Public Functions
     ------------------------------------------*/
    /**
     * Create new trainee
     */
    trainees.create = function(data) {
        var url = '';

        $.ajax({
            url: url,
            type: 'POST',
            data: data,
            success: function() {

            },
            error: function() {

            }
        });
    };

    /**
     * Update an existing trainee
     */
    trainees.update = function(data, id) {
        var url = '';

        $.ajax({
            url: url,
            type: 'UPDATE',
            data: data,
            success: function() {

            },
            error: function() {

            }
        });
    };

    /**
     * Delete a trainee
     */
    trainees.delete = function(id) {
        var url = '';

        $.ajax({
            url: url,
            type: 'DELETE',
            data: data,
            success: function() {

            },
            error: function() {

            }
        });
    };

    /**
     * Get All Trainee
     */
    trainees.getAll = function(data) {
        var url = '';

        $.ajax({
            url: url,
            type: 'GET',
            data: data,
            success: function() {

            },
            error: function() {

            }
        });
    };

    trainees.showError = function(message) {
        alertDiv
            .removeClass('alert-success')
            .addClass('alert-danger')
            .html(message)
            .show();
    };

    trainees.showSuccess = function(message) {
        alertDiv
            .removeClass('alert-danger')
            .addClass('alert-success')
            .html(message)
            .show();
    };

    /*
     * Private functions
     ------------------------------------------*/

    traineeFormCreate.on('submit', function() {
        var data = $(this).serialize();
        trainees.create(data);
    });

    return trainers;
})(jQuery || jQuery == {});
