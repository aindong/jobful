'use strict';

var Trainers = (function($) {

    /*
     * Variables
     ------------------------------------------*/
    var trainerFormCreate = $('#trainerFormCreate'),
        alertDiv          = $('#alertDiv');

    /**
     * Declare the class object
     */
    var trainers = {};

    /*
     * Public Functions
     ------------------------------------------*/
    /**
     * Create new trainee
     */
    trainers.create = function(data) {
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
    trainers.update = function(data, id) {
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
    trainers.delete = function(id) {
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
    trainers.getAll = function(data) {
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

    trainer.showError = function(message) {
        alertDiv
            .removeClass('alert-success')
            .addClass('alert-danger')
            .html(message)
            .show();
    };

    trainer.showSuccess = function(message) {
        alertDiv
            .removeClass('alert-danger')
            .addClass('alert-success')
            .html(message)
            .show();
    };

    /*
     * Private functions
     ------------------------------------------*/

    trainerFormCreate.on('submit', function() {
        var data = $(this).serialize();
        trainers.create(data);
    });

    return trainers;
})(jQuery || jQuery == {});
