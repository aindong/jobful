'use strict';

var Employers = (function($) {

    /*
     * Variables
     ------------------------------------------*/
    var employerForm = $('#employerForm'),
        alertDiv    = $('#alertDiv');

    /**
     * Declare the class object
     */
    var employers = {};

    /*
     * Public Functions
     ------------------------------------------*/
    /**
     * Create new trainee
     */
    employers.create = function(data) {
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
    employers.update = function(data, id) {
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
    employers.delete = function(id) {
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
    employers.getAll = function(data) {
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

    employer.showError = function(message) {
        alertDiv
            .removeClass('alert-success')
            .addClass('alert-danger')
            .html(message)
            .show();
    };

    employer.showSuccess = function(message) {
        alertDiv
            .removeClass('alert-danger')
            .addClass('alert-success')
            .html(message)
            .show();
    };

    /*
     * Private functions
     ------------------------------------------*/

    employerForm.on('submit', function() {
        var data = $(this).serialize();
        employers.create(data);
    });

    return employers;
})(jQuery || jQuery == {});
