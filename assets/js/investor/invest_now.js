"use strict";

// Class definition
var KTWizard5 = function () {
	// Base elements
	var _wizardEl;
	var _formEl;
	var _wizardObj;
	var _validations = [];

	// Private functions
	var _initWizard = function () {
		// Initialize form wizard
		_wizardObj = new KTWizard(_wizardEl, {
			startStep: 1, // initial active step number
			clickableSteps: false  // allow step clicking
		});

		// Validation before going to next page
		_wizardObj.on('change', function (wizard) {
			if (wizard.getStep() > wizard.getNewStep()) {
				return; // Skip if stepped back
			}

			// Validate form before change wizard step
			var validator = _validations[wizard.getStep() - 1]; // get validator for currnt step

			if (validator) {
				validator.validate().then(function (status) {
					if (status == 'Valid') {
						wizard.goTo(wizard.getNewStep());

						KTUtil.scrollTop();
					} else {
						Swal.fire({
							text: "Sorry, looks like there are some errors detected, please try again.",
							icon: "error",
							buttonsStyling: false,
							confirmButtonText: "Ok, got it!",
							customClass: {
								confirmButton: "btn font-weight-bold btn-light"
							}
						}).then(function () {
							KTUtil.scrollTop();
						});
					}
				});
			}

			return false;  // Do not change wizard step, further action will be handled by he validator
		});

		// Change event
		_wizardObj.on('changed', function (wizard) {
			console.log(chanelArray);
			var ChannelReplace = '<ol>';
			var ChannelsIds = {
				'food' : 'Food lover Distrct (ID no. UC5OXEAL2wW7ccJu3gEZnl0w)',
				'music' : 'Music Distrct (ID no. UChE0y4mY1TEsmY0EMKvgFiA)',
				'sport' : 'Sport Distrct (ID no. UCtai6tFt8TcMXTB--lLQ-dQ)',
			}
			var Own = '';
			var i = 1;
			var PriceTot = 0;
			var ChannelVat = '';
			for (var key in chanelArray) {
			  ChannelReplace += `<li>${i + '. ' + ChannelsIds[key]}</li>`;
			  Own += `<span>${i + '.' +chanelArray[key]+'% '}</span>`;
			  ChannelVat += `<span>${i + '.' +(parseInt(chanelArray[key]) / parseInt(ChannelPrice))  * parseInt(ChannelVat)+' '}</span>`;
			  PriceTot += (parseInt(chanelArray[key]) * ChannelPrice);
			  i++;
			}
			ChannelReplace += '</ol>';
			if(wizard.getStep() == 4){
				var getContract = $('.contract').html();
				var replaced = getContract
				.replace("{Name}", '<span class="text-warning">'+ReplaceArray['Name']+'</span>')
				.replace("{Address}", '<span class="text-warning">'+ReplaceArray['Address']+'</span>')
				.replace("{City}", '<span class="text-warning">'+ReplaceArray['City']+'</span>')
				.replace("{Vat}", '<span class="text-warning">'+ReplaceArray['Vat']+'</span>')
				.replace("{Date}", '<span class="text-warning">'+ReplaceArray['Date']+'</span>')
				.replace("{Login_name}", '<span class="text-warning">'+ReplaceArray['Login_name']+'</span>')
				.replace("{City}", '<span class="text-warning">'+ReplaceArray['City']+'</span>')
				.replace("{Date}", '<span class="text-warning">'+ReplaceArray['Date']+'</span>')
				.replace("{Name}", '<span class="text-warning">'+ReplaceArray['Name']+'</span>')
				.replace("{Channel}", '<span class="text-warning">'+ChannelReplace+'</span>')
				.replace("{Own}", '<span class="text-warning">'+Own+'</span>')
				.replace("{PriceForSubTotal}", '<span class="text-warning">'+PriceTot+'</span>')
				.replace("{Kr}", '<span class="text-warning">'+ChannelVat+'</span>')

				$('.contract').html(replaced);
			}
			KTUtil.scrollTop();
		});

		// Submit event
		_wizardObj.on('submit', function (wizard) {
			Swal.fire({
				text: "All is good! Please confirm the form submission.",
				icon: "success",
				showCancelButton: true,
				buttonsStyling: false,
				confirmButtonText: "Yes, submit!",
				cancelButtonText: "No, cancel",
				customClass: {
					confirmButton: "btn font-weight-bold btn-primary",
					cancelButton: "btn font-weight-bold btn-default"
				}
			}).then(function (result) {
				if (result.value) {
					_formEl.submit(); // Submit form
				} else if (result.dismiss === 'cancel') {
					Swal.fire({
						text: "Your form has not been submitted!.",
						icon: "error",
						buttonsStyling: false,
						confirmButtonText: "Ok, got it!",
						customClass: {
							confirmButton: "btn font-weight-bold btn-primary",
						}
					});
				}
			});
		});
	}

	var _initValidation = function () {
		// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
		// Step 1
		_validations.push(FormValidation.formValidation(
			_formEl,
			{
				fields: {
					fname: {
						validators: {
							notEmpty: {
								message: 'First name is required'
							}
						}
					},
					lname: {
						validators: {
							notEmpty: {
								message: 'Last Name is required'
							}
						}
					},
					phone: {
						validators: {
							notEmpty: {
								message: 'Phone is required'
							}
						}
					},
					email: {
						validators: {
							notEmpty: {
								message: 'Email is required'
							},
							emailAddress: {
								message: 'The value is not a valid email address'
							}
						}
					}
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					bootstrap: new FormValidation.plugins.Bootstrap()
				}
			}
		));

		// Step 2
		_validations.push(FormValidation.formValidation(
			_formEl,
			{
				fields: {
					address1: {
						validators: {
							notEmpty: {
								message: 'Address is required'
							}
						}
					},
					postcode: {
						validators: {
							notEmpty: {
								message: 'Postcode is required'
							}
						}
					},
					city: {
						validators: {
							notEmpty: {
								message: 'City is required'
							}
						}
					},
					state: {
						validators: {
							notEmpty: {
								message: 'State is required'
							}
						}
					},
					country: {
						validators: {
							notEmpty: {
								message: 'Country is required'
							}
						}
					}
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					bootstrap: new FormValidation.plugins.Bootstrap()
				}
			}
		));

		// Step 3
		_validations.push(FormValidation.formValidation(
			_formEl,
			{
				fields: {
					delivery: {
						validators: {
							notEmpty: {
								message: 'Delivery type is required'
							}
						}
					},
					packaging: {
						validators: {
							notEmpty: {
								message: 'Packaging type is required'
							}
						}
					},
					preferreddelivery: {
						validators: {
							notEmpty: {
								message: 'Preferred delivery window is required'
							}
						}
					}
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					bootstrap: new FormValidation.plugins.Bootstrap()
				}
			}
		));
	}

	return {
		// public functions
		init: function () {
			_wizardEl = KTUtil.getById('kt_wizard');
			_formEl = KTUtil.getById('kt_form');

			_initWizard();
			_initValidation();
		}
	};
}();

jQuery(document).ready(function () {
	KTWizard5.init();
});

var chanelArray = [];

$(document).ready(function(){
	$(document).on('click','label.check',function(){
		var getChannel = $(this).attr('for');
		console.log(getChannel);
		if ($('#'+getChannel).prop('checked')) {
			$('.'+getChannel).css('visibility','hidden');
			$('.'+getChannel).hide();
		}else{
			$('.'+getChannel).css('visibility','visible');
			$('.'+getChannel).show();
		}
	});

	$(document).on('change','select',function(){
		console.log($(this).val());
	    var getChannel = $(this).attr('name');
	    console.log('.'+getChannel+'_invest');
	    $('.'+getChannel+'_invest').html($(this).val()); 
		chanelArray[getChannel] = $(this).val();
	});

});