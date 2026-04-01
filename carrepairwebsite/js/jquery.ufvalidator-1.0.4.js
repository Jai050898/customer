/************** Parametres for the Vslidations *************
	.req-string: Field requires string (Use to force other css classes to be required on submit)
	.req-email: Field requires email
	.req-min: Field requires minimum X characters (Add minlength parameter to input field)
	.req-numeric: Field validates numeric
	.req-date: Field validates date (dd.mm.yyyy)
	.req-both: Checks all group fields has some value if one of them filled (group by "rel" attribute)
	.req-same: Checks all group fields has same value if one of them filled (group by "rel" attribute)
*************/
(function($) {
	
	$.fn.formValidator = function(options) {
		$(this).click(function() { 
		
			var result = $.formValidator(options);
		
			if (result && jQuery.isFunction(options.onSuccess)) {
				options.onSuccess();
				return false;
			} else if (!result && jQuery.isFunction(options.onError)) {
				options.onError();
				return false;
			} else {
				return result; 
			}
		});
	};
	

$.formValidator = function (options) {
		
		// merge options with defaults
		var merged_options = $.extend({}, $.formValidator.defaults, options);
		
		// result boolean
		var boolValid = true;
		
		// result error message
		var errorMsg = '';
		
		// clean errors
		$(merged_options.scope + ' .error-input, ' + merged_options.scope + ' .error-both, ' + merged_options.scope + ' .error-same').removeClass('error-input').removeClass('error-both').removeClass('error-same');
		
		// gather inputs & check is valid
		$(merged_options.scope+' .req-email, '+merged_options.scope+' .req-string, '+merged_options.scope+' .req-val, '+merged_options.scope+' .req-vals, '+merged_options.scope+' .req-same, '+merged_options.scope+' .req-both, '+merged_options.scope+' .req-numeric, '+merged_options.scope+' .req-date, '+merged_options.scope+' .req-min').each(function() {																																																																				
			thisValid = $.formValidator.validate($(this),merged_options);
			boolValid = boolValid && thisValid.error;
			if (!thisValid.error) errorMsg  = thisValid.message;
		});
		
		// check extra bool
		if (!merged_options.extraBool() && boolValid) {
			boolValid = false;
			errorMsg = merged_options.extraBoolMsg;
		}
		
		// submit form if there is and valid
		if ((merged_options.scope != '') && boolValid) {
			$(merged_options.errorDiv).fadeOut();
		}
		
		// if there is errorMsg print it if it is not valid
		if (!boolValid && errorMsg != '') {
			
			var tempErr = (merged_options.customErrMsg != '') ? merged_options.customErrMsg : errorMsg;
			$(merged_options.errorDiv).hide().html(tempErr).fadeIn();
		}

		return boolValid;
	};
	
	$.formValidator.validate = function(obj,opts) {
		
		var valAttr = obj.val();
		var css = opts.errorClass;
		var mail_filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		var numeric_filter = /(^-?\d\d*\.\d*$)|(^-?\d\d*$)|(^-?\.\d\d*$)|(^-?\d*$)/;
		var tmpresult = true;
		var result = true;
		var errorTxt = '';
		
		// SAME FIELD VALIDATION
		if (obj.hasClass('req-same')) {
			
			tmpresult = true;
			
			group = obj.attr('rel');
			tmpresult = true;
			$(opts.scope+' .req-same[rel="'+group+'"]').each(function() { 
				if($(this).val() != valAttr || valAttr == '') {
					tmpresult = false;
				}
			});
			if (!tmpresult) {
				$(opts.scope+' .req-same[rel="'+group+'"]').parent().parent().addClass('error-same');
				errorTxt = opts.errorMsg.reqSame;
			} else {
				$(opts.scope+' .req-same[rel="'+group+'"]').parent().parent().removeClass('error-same');
			}
			
			result = result && tmpresult;
		}
		// BOTH INPUT CHECKING
		// if one field entered, the others should too.
		if (obj.hasClass('req-both')) {
			
			tmpresult = true;
			
			if (valAttr != '') {
				
				group = obj.attr('rel');

				$(opts.scope+' .req-both[rel="'+group+'"]').each(function() { 
					if($(this).val() == '') {
						tmpresult = false;
					}
				});
				
				if (!tmpresult) {
					$(opts.scope+' .req-both[rel="'+group+'"]').parent().parent().addClass('error-both');
					errorTxt = opts.errorMsg.reqBoth;
				} else {
					$(opts.scope+' .req-both[rel="'+group+'"]').parent().parent().removeClass('error-both');
				}
			}
			
			result = result && tmpresult;
		}
		// DATE VALIDATION
		if (obj.hasClass('req-date')) {
			
			tmpresult = true;
			
			var arr = valAttr.split(opts.dateSeperator);
			var curDate = new Date();
			
			if (valAttr == '') {
				
				tmpresult = true;
			} else {
				
				if (arr.length < 3) {
					tmpresult = false;
				} else {
					tmpresult = (arr[0] <= 12) && (arr[1] <= 31) && (arr[2] <= curDate.getFullYear());
				}
			}
			
			if (!tmpresult) errorTxt = opts.errorMsg.reqDate;
			result = result && tmpresult;
		}
		// E-MAIL VALIDATION
		if (obj.hasClass('req-email')) {
			tmpresult = mail_filter.test(valAttr);
			if (!tmpresult) errorTxt = (valAttr == '') ? opts.errorMsg.reqMailEmpty : opts.errorMsg.reqMailNotValid;
			result = result && tmpresult;
		}
		// MINIMUM REQUIRED FIELD VALIDATION
		if (obj.hasClass('req-min')) {
			tmpresult = (valAttr.length >= obj.attr('minlength'));
			if (!tmpresult) errorTxt = opts.errorMsg.reqMin.replace('%1',obj.attr('minlength'));
			result = result && tmpresult;
		}
		// MINIMUM REQUIRED Value VALIDATION
		if (obj.hasClass('req-val')) {
			tmpresult = (valAttr != '1');
			if (!tmpresult) errorTxt = opts.errorMsg.reqVal;
			result = result && tmpresult;
		}
		// MINIMUM REQUIRED Value VALIDATION
		if (obj.hasClass('req-vals')) {
			tmpresult = (valAttr != '1');
			if (!tmpresult) errorTxt = opts.errorMsg.reqVals;
			result = result && tmpresult;
		}
		// NUMERIC FIELD VALIDATION
		if (obj.hasClass('req-numeric')) {
			tmpresult = numeric_filter.test(valAttr);
			if (!tmpresult) errorTxt = opts.errorMsg.reqNum;
			result = result && tmpresult;
		}
		// REQUIRED FIELD VALIDATION
		if (obj.hasClass('req-string')) {
			tmpresult = (valAttr != null && valAttr != "");				
			if (!tmpresult) errorTxt = opts.errorMsg.reqString;
			result = result && tmpresult;
		}
		if (obj.attr('rel')) {
			if (result) { $('#'+obj.attr('rel')).removeClass(css); } else { $('#'+obj.attr('rel')).addClass(css); }
		} else {
			if (result) { obj.removeClass(css); } else { obj.addClass(css); }
		}
		
		return {
			error: result,
			message: errorTxt
		};
	};
	
	// CUSTOMIZE HERE or overwrite by sending option parameter
	$.formValidator.defaults = {
		onSuccess		:	null,
		onError			:	null,
		scope			:	'',
		errorClass		:	'error-input',
		errorDiv		:	'#warn',
		errorMsg		: 	{
								reqString		:	'Fill in the required fields',
								reqDate			:	'Date not valid!',
								reqNum			:	'You can enter only numbers',
								reqMailNotValid	:	'E-mail is not valid!',
								reqVal			:	'E-mail is already added!',
								reqVals			:	'User name already added!',
								reqMailEmpty	:	'Please Enter E-mail',
								reqSame			:	'Password & Confirm Password should be same!',
								reqBoth			:	'You must fill in the appropriate fields!',
								reqMin			:	'You must enter a minimum of 6 characters'
							},
		customErrMsg	:	'',
		extraBoolMsg	:	'Check the form carefully!',
		dateSeperator	:	'.',
		extraBool		:	function() { return true; }
	};
})(jQuery);

// FORM VALIDATOR JQUERY PLUGIN - END

