// Accordion Functionality
const accordionItems = document.querySelectorAll( '.custom-development-example-accordion-item' );

accordionItems.forEach( item => {
	const header = item.querySelector( '.custom-development-example-accordion-item-header' );
	const content = item.querySelector( '.custom-development-example-accordion-item-content' );

	if ( ! header || ! content ) return;

	// Set initial ARIA state
	header.setAttribute( 'role', 'button' );
	header.setAttribute( 'tabindex', '0' );
	header.setAttribute( 'aria-expanded', 'false' );

	function toggleAccordion() {
		const isActive = header.classList.contains( 'active' );

		// Collapse all items
		accordionItems.forEach( otherItem => {
			const otherHeader = otherItem.querySelector( '.custom-development-example-accordion-item-header' );
			if ( otherHeader ) {
				otherHeader.classList.remove( 'active' );
				otherHeader.setAttribute( 'aria-expanded', 'false' );
			}
		} );

		// If it wasn't active, open it
		if ( ! isActive ) {
			header.classList.add( 'active' );
			header.setAttribute( 'aria-expanded', 'true' );
		}
	}

	header.addEventListener( 'click', toggleAccordion );

	header.addEventListener( 'keydown', ( e ) => {
		if ( e.key === 'Enter' || e.key === ' ' ) {
			e.preventDefault();
			toggleAccordion();
		}
	} );
} );
