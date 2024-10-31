(function( $ ) {
	'use strict';

	/**
	 * All of the code for your admin-facing JavaScript source
	 * should reside in this file.
	 *
	 * Note: It has been assumed you will write jQuery code here, so the
	 * $ function reference has been prepared for usage within the scope
	 * of this function.
	 *
	 * This enables you to define handlers, for when the DOM is ready:
	 *
	 * $(function() {
	 *
	 * });
	 *
	 * When the window is loaded:
	 *
	 * $( window ).load(function() {
	 *
	 * });
	 *
	 * ...and/or other possibilities.
	 *
	 * Ideally, it is not considered best practise to attach more than a
	 * single DOM-ready or window-load handler for a particular page.
	 * Although scripts in the WordPress core, Plugins and Themes may be
	 * practising this, we should strive to set a better example in our own work.
	 */
	$(document).ready(function() { 

		const currentDomain = window.location.hostname;
        // URL of the JSON data
        const jsonDataUrl = 'https://www.rabbitseo.com/getDomainKeywordsGuest?domain='+currentDomain;


        // Fetch and display the JSON data
        $.getJSON(jsonDataUrl, function(data) {
         
            // Assuming the data contains a 'list' array
            let tableContent = `
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Keyword Name</th>
                        </tr>
                    </thead>
                    <tbody>`;

            // Loop through the list and create table rows
            tableContent += data.list.map((item, index) => `
                <tr>
                    <td>${index + 1}</td>
                    <td>${item}</td>
                </tr>`).join('');

            tableContent += `
                    </tbody>
                </table>`;

            // Set the HTML content of the div
            $('#keywordDataList').html(tableContent);
        }).fail(function() {
            $('#keywordDataList').text('Failed to load data.');
        });
    });
})( jQuery );
