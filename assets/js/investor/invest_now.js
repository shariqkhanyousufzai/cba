"use strict";

// Class definition
var lastPaymentId = 0;

var investmenForm = function () {
	// Base elements
	var _wizardEl;
	var _formEl;
	var _wizardObj;
	var _validations = [];
	var deleteStep = 0;
	var channelSelected = '';
	var totalVal = 0;
	
	// Private functions
	var _initWizard = function () {
		// Initialize form wizard
		_wizardObj = new KTWizard(_wizardEl, {
			startStep: 1, // initial active step number
			clickableSteps: false  // allow step clicking
		});

		// Validation before going to next page
		_wizardObj.on('change', function (wizard) {

			var checkChannel = [];
			if ($('#music').is(':checked')) {
				checkChannel.push('music');
			}
			if ($('#food').is(':checked')) {
				checkChannel.push('food');
			}
			if ($('#sport').is(':checked')) {
				checkChannel.push('sport');
			}
			if(checkChannel.length > 1 || checkChannel.length < 1){
				Swal.fire({
							text: "Sorry, looks like you selected multiple channels.Please select one",
							icon: "error",
							buttonsStyling: false,
							confirmButtonText: "Ok, got it!",
							customClass: {
								confirmButton: "btn font-weight-bold btn-light"
							}
						});
			return false;

			}else{
				channelSelected = checkChannel[0];
			}

			if(wizard.getStep() == 2){
				if($('input[name="initial_investment_'+checkChannel[0]+'"]').val() == ''){
					Swal.fire({
							text: "Sorry, looks like you did not select any amount",
							icon: "error",
							buttonsStyling: false,
							confirmButtonText: "Ok, got it!",
							customClass: {
								confirmButton: "btn font-weight-bold btn-light"
							}
						});
					return false;
				}else if( parseInt($('input[name="initial_investment_'+checkChannel[0]+'"]').val()) >= parseInt(walletAmount)){
				return true;
				
				}else{
						Swal.fire({
							text: "Sorry, You can investment should be greater or eqaul to you wallet",
							icon: "error",
							buttonsStyling: false,
							confirmButtonText: "Ok, got it!",
							customClass: {
								confirmButton: "btn font-weight-bold btn-light"
							}
						});
					return false;
				}


			}

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
			  PriceTot += (parseInt(chanelArray[key]) * parseInt(ChannelPrice));
			  i++;
			}
			$('.total_investment').val($('input[name="initial_investment_'+channelSelected+'"]').val());
			var totalValContract = $('input[name="initial_investment_'+channelSelected+'"]').val();
			ChannelReplace += '</ol>';
			if(wizard.getStep() == 3){
				if((parseInt($('input[name="initial_investment_'+channelSelected+'"]').val()) - parseInt(walletAmount)) == 0){
					$('.showwallet').show();
					$('.hidepayments').hide();

				}else{
					$('.showwallet').hide();
					$('.hidepayments').show();
				}

				var totaltxt =  parseInt($('input[name="initial_investment_'+channelSelected+'"]').val()) - parseInt($('#mywallet').html());
				$('.wallet_txt').html('- $'+$('#mywallet').html());
				$('.channelnametxt').html(channelSelected);
				$('.investmenttxt').html('$'+$('input[name="initial_investment_'+channelSelected+'"]').val());
				$('.totaltxt').html('$'+totaltxt);
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
				.replace("{Channel}", '<span class="text-warning">'+ChannelsIds[channelSelected]+'</span>')
				.replace("{Own}", '<span class="text-warning">'+Own+'</span>')
				.replace("{PriceForSubTotal}", '<span class="text-warning">'+totalValContract+'</span>')
				.replace("{Kr}", '<span class="text-warning">'+ChannelVat+'</span>')

				$('.contract').html(replaced);
			}
			if(deleteStep > 2){

				$.ajax({
			          url:BASEURL+"investor/delete_investment",
			          method: 'post',
			          data: {
			          	lastPaymentId : lastPaymentId
			          },
			          dataType: "json",
			          success: function( response ) {

			          }
			    })
				deleteStep = 0;
			}

			if(wizard.getStep() == 3){
				totalVal =  $('input[name="initial_investment_'+channelSelected+'"]').val();
				deleteStep = wizard.getStep();
				$('.save_msg').html(`<div class="alert alert-success alert-dismissible fade show">Your Channel Information Has Been Saved! Please Select Payment  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
				    <span aria-hidden="true">&times;</span>
				  </button></div>`);
				$('.contract_val').val($('.contract').html());
				$.ajax({
			          url:BASEURL+"investor/add_investment_single",
			          method: 'post',
			          data: $('#investmenForm').serialize(),
			          dataType: "json",
			          success: function( response ) {
			          	lastPaymentId = response;
			          }
			        })
			}
			KTUtil.scrollTop();
		});

		// Submit event
		_wizardObj.one('submit', function (wizard) {
			// alert('asd');
			Swal.fire({
				html: `
				All is good! Proceed To Submit
				`,
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
			return false;
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
			_formEl = KTUtil.getById('investmenForm');

			_initWizard();
			_initValidation();
		}
	};
}();

jQuery(document).ready(function () {
	investmenForm.init();
});

var chanelArray = [];

$(document).ready(function(){
	$(document).on('click','label.check',function(){
		var getChannel = $(this).attr('for');
		if ($('#'+getChannel).prop('checked')) {
			$('.'+getChannel).css('visibility','hidden');
			$('.'+getChannel).hide();
		}else{
			$('.'+getChannel).css('visibility','visible');
			$('.'+getChannel).show();
		}
	});

	$(document).on('keyup','.channel_invest',function(e){
		if(e.keyCode == 8){
			 $('.'+getChannel+'_invest').html(); 
		}
	    var getChannel = $(this).attr('data-name');
	    $('.'+getChannel+'_invest').html($(this).val()); 
		chanelArray[getChannel] = $(this).val();
	});

	
	$(document).on('click','.termsclick',function(e){
		$('.contract').toggle();
	});


	$(document).on('click','.paymentBtn',function(e){
		e.preventDefault();
		var getPaymentMethod = $(this).data('type');
		$.ajax({
	          url:BASEURL+"investor/update_payment_method",
	          method: 'post',
	          data: {
	          	getPaymentMethod : getPaymentMethod,
	          	lastPaymentId : lastPaymentId
	          },
	          dataType: "json",
	          success: function( response ) {
	          	if( response.msg == 'success'){
	          		// location.reload();
	          		window.location.href = BASEURL+'investor/my_investment_list';
	          	}
	          }
	    })
	});	
	
	$(document).on('click','.paymentBtnWallet',function(e){
		e.preventDefault();
		var getPaymentMethod = $(this).data('type');
		$.ajax({
	          url:BASEURL+"investor/update_payment_method",
	          method: 'post',
	          data: {
	          	getPaymentMethod : getPaymentMethod,
	          	lastPaymentId : lastPaymentId
	          },
	          dataType: "json",
	          success: function( response ) {
	          	if( response.msg == 'success'){
	          		// location.reload();
	          		window.location.href = BASEURL+'investor/my_investment_list';
	          	}
	          }
	    })
	});	


 // PAYPAL BUTTON
 paypal.Buttons({
 	locale: 'en_US',
 	style: {
 		size: 'small',
 		color: 'gold',
 		shape: 'pill',
 		label: 'checkout',
 	},
 	createOrder: function(data, actions) {

 		return actions.order.create({
 			purchase_units: [{
 				amount: {
 					value:  parseInt($('.total_investment').val()) - parseInt($('#mywallet').html()),
 				}
 			}]
 		});
 	},
 	onClick: function (data, actions) {
 		$('.paypal_btn_div').css({
 			'position': 'static',
 			'z-index': '-1',
 		});
 	},
 	onCancel: function(data, actions) {
 		console.log(data);
 	},
 	onError: function (err,data) {
 		console.log(data);
 	},
 	onApprove: function(data, actions) {
 		var orderId = data.orderID;
 		return actions.order.capture().then(function(details) {
 			var mapIDArray = [details.create_time,details.update_time,details.id,details.status,details.links[0].href,details.payer.address.country_code,details.payer.email_address,details.payer.name.given_name,details.payer.payer_id,details.purchase_units[0].amount.value,details.purchase_units[0].payee.merchant_id,orderId,lastPaymentId];
 			$.getJSON(BASEURL+"/payments/paypal/paypalPaymentMultiple" , { mapIDs: mapIDArray}, function(data){});
 			$.ajax({
 				url:BASEURL+"investor/update_payment_method",
 				method: 'post',
 				data: {
 					getPaymentMethod : 'PAYPAL',
 					lastPaymentId : lastPaymentId
 				},
 				dataType: "json",
 				success: function( response ) {
 					if( response.msg == 'success'){
 						location.reload();
 					}
 				}
 			})
 		});
 		 	}
 }).render('#paypal-button-container');
 // PAYPAL BUTTON END
});


$(document).ready(function(){
	//stripe sca
// Create an instance of the Stripe object with your publishable API key
    var stripe = Stripe("pk_test_51HgCEqGBlKCKevlC3VAgXGzdcE7grNHEb5ay7FRF1qrBCgvm7Ggo5JnGleSDTnC84Ik6vdv4W737l2g6f2Rm7bji00ic4lYm91");
    var checkoutButton = document.getElementById("checkout-button");

    checkoutButton.addEventListener("click", function () {
    	var fd = new FormData();
		fd.append('total', parseInt($('.total_investment').val()) - parseInt($('#mywallet').html()));
		fd.append('payment_id', lastPaymentId);
		fd.append('success_url', BASEURL+'stripe/success/'+lastPaymentId);
		fd.append('cancel_url', BASEURL);
	      fetch(BASEURL+"/stripesca/create-checkout-session.php", {
	        method: "POST",
	        body : fd
	      })
        .then(function (response) {
          return response.json();
        })
        .then(function (session) {
          return stripe.redirectToCheckout({ sessionId: session.id });
        })
        .then(function (result) {
          // If redirectToCheckout fails due to a browser or network
          // error, you should display the localized error message to your
          // customer using error.message.
          if (result.error) {
            alert(result.error.message);
          }
        })
        .catch(function (error) {
          console.error("Error:", error);
        });
    });

    
    setTimeout(function(){
    	$('.checkedchan').trigger('click');
    },500)
})