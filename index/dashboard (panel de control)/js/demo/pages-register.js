
// Form-Validation.js
// ====================================================================
// This file should not be included in your project.
// This is just a sample how to initialize plugins or components.
//
// - Designbudy.com -


$(document).ready(function() {


    // FORM VALIDATION FEEDBACK ICONS
    // =================================================================

    // FORM VALIDATION
    // =================================================================
    // Require Bootstrap Validator
    // http://bootstrapvalidator.com/
    // =================================================================

    $('#registration').bootstrapValidator({
        framework: 'bootstrap',
        fields: {
            firstName: {
                container: '#demo-error-container',
                validators: {
                    notEmpty: {
                        message: 'The Nombre de usuario is required'
                    },
                    stringLength: {
                        min: 6,
                        max: 20,
                        message: 'The Nombre de usuario must be more than 6 and less than 20 characters long'
                    },
                    regexp: {
                        regexp: /^[a-zA-Z0-9_\.]+$/,
                        message: 'The Nombre de usuario can only consist of alphabetical, number, dot and underscore'
                    }
                }
            },
            email: {
                container: '#demo-error-container',
                validators: {
                    notEmpty: {
                        message: 'The email address is required'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            },
            Contraseña: {
                container: '#demo-error-container',
                validators: {
                    notEmpty: {
                        message: 'The Contraseña is required'
                    },
                    different: {
                        field: 'firstName',
                        message: 'The Contraseña cannot be the same as firstName'
                    },
                    identical: {
                        field: 'confirmContraseña',
                        message: 'The Contraseña and its confirm are not the same'
                    }
                }
            }
        }
    });
});