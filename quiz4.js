/**
 * Below is a sample function that is called when a form is submitted. Its
 * purpose is to validate that none of the input fields are empty before
 * allowing the form to be submitted. It loops through the fields, and if it
 * finds an empty one, it returns false (which stops the form submission). If
 * none of them meet the empty criteria, it returns true, and the form is
 * submitted.
 *
 * Explain why the function as written below will not work, and suggest any
 * changes needed to make it work.
 */

	function confirm_fields() {

		$( 'input' ).each( function() {
			if ( $( this ).val() == '' ) {
				return false;
			}
		} );

		return true;

	}

/**
 * 	Answers:
 *  Return false inside .each() only breaks the loop, not the parent function
 */

// Should be like this:
function confirm_fields() {
    let isValid = true;

    $('input').each(function() {
        if ($(this).val() === '') {
            isValid = false;
            return false;  // Breaks out of the each loop
        }
    });

    return isValid;  // Return false if any input is empty
}