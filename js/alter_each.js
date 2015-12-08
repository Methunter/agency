/* 
* @Author: m32sa
* @Date:   2015-12-07 07:43:57
* @Last Modified by:   m32sa
* @Last Modified time: 2015-12-07 07:44:03
*/

(function($){

// maintain a to the existing function
var oldEachFn = $.fn.each;

$.fn.each = function() {

    // original behavior - use function.apply to preserve context
    var ret = oldEachFn.apply(this, arguments);
	
	// add custom behaviour
	try {
		// change background colour
		$(this).css({'background-color':'orange'});
		
		// add a message
		var msg = 'Danger high voltage!';
		$(this).prepend(msg);
	}
	catch(e) 
	{
		console.log(e);
	}
	
    // preserve return value (probably the jQuery object...)
    return ret;
}

// run the $.fn.each function as normal
$('p').each(function(i,v)
{
    console.log(i,v);
});
//output: all paragrahs on page now appear with orange background and high voltage!

})(jQuery);