	/**
 * jQuery-Plugin "relCopy"
 * 
 * @version: 1.1.0, 25.02.2010
 * 
 * @author: Andres Vidal
 *          code@andresvidal.com
 *          http://www.andresvidal.com
 *
 * Instructions: Call $(selector).relCopy(options) on an element with a jQuery type selector 
 * defined in the attribute "rel" tag. This defines the DOM element to copy.
 * @example: $('a.copy').relCopy({limit: 5}); // <a href="example.com" class="copy" rel=".phone">Copy Phone</a>
 *
 * @param: string	excludeSelector - A jQuery selector used to exclude an element and its children
 * @param: integer	limit - The number of allowed copies. Default: 0 is unlimited
 * @param: string	append - HTML to attach at the end of each copy. Default: remove link
 * @param: string	copyClass - A class to attach to each copy
 * @param: boolean	clearInputs - Option to clear each copies text input fields or textarea
 * 
 */

(function($) {

	$.fn.relCopy = function(options) {
		var settings = jQuery.extend({
			excludeSelector: ".exclude",
			emptySelector: ".empty",
			copyClass: "copy",
			append: '',
			clearInputs: true,
			limit: 0 // 0 = unlimited
		}, options);
		
		settings.limit = parseInt(settings.limit);
		
		// loop each element
		this.each(function() {
			
			// set click action
			$(this).click(function(){
				var rel = $(this).attr('rel'); // rel in jquery selector format				
				var pcounter = $(rel).length;				
				var counter	= $("#mylength").val();//document.getElementById('mylength').value;	
				//alert(counter);
				// stop limit
				if (settings.limit != 0 && pcounter >= settings.limit){
					return false;
				};
				
				var master = $(rel+":first");
				var parent = $(master).parent();						
				var clone = $(master).clone(true).addClass(settings.copyClass+counter).append(settings.append);
				
				//Remove Elements with excludeSelector
				if (settings.excludeSelector){
					$(clone).find(settings.excludeSelector).remove();
				};
				
				//Empty Elements with emptySelector
				if (settings.emptySelector){
					$(clone).find(settings.emptySelector).empty();
				};			
				
				var v = eval(parseInt(counter) +1);
				var v1 = eval(parseInt(counter) +1);
				// Increment Clone IDs
				if ( $(clone).attr('id') ){
					var newid = $(clone).attr('id') + v;
					$(clone).attr('id', newid);
				};
				
				// Increment Clone name Ids
				//if ( $(clone).attr('name') ){
//					var newname = $(clone).attr('name') + (counter +1);
//					$(clone).attr('name', newname);
//				};
				
				// Increment Clone Children IDs
				$(clone).find('[id]').each(function(){
					var newid = $(this).attr('id') + v;
					$(this).attr('id', newid);	
					if(newid == 'sdate'+v || newid == 'edate'+v )
					{
						$(this).attr('class','');
						$(this).attr('class','select req-string');
					}
									//alert(v);
				//$("#sdate"+v).datepicker();
				//$("#edate"+v).datepicker();	

				});
				// Increment Clone Children Name Ids
				//$(clone).find('[name]').each(function(){
//					var newname = $(this).attr('name') + (counter +1);
//					$(this).attr('name', newname);
//				});
				
				//Clear Inputs/Textarea
				if (settings.clearInputs){
					$(clone).find(':input').each(function(){
						var type = $(this).attr('type');
						switch(type)
						{
							case "button":
								break;
							case "reset":
								break;
							case "submit":
								break;
							case "checkbox":
								$(this).attr('checked', '');
								break;
							default:
							  $(this).val("");
						}						
					});					
				};
				
				$(parent).find(rel+':last').before(clone);
				$("#mylength").val(v);
				//alert(document.getElementById('sdate'+v));
				//alert(typeof(document.getElementById('sdate')) + $("#sdate"+v));
				if(document.getElementById('sdate'+v) != null && document.getElementById('edate'+v) != null)
				{
					$("#sdate"+v).datepicker();
					$("#edate"+v).datepicker();	
				}
				return false;
				
			}); // end click action
			
		}); //end each loop
		
		return this; // return to jQuery
	};
	
})(jQuery);