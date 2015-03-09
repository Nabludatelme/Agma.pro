/* global ajaxurl, wpAjax, tagsl10n, showNotice, validateForm */

jQuery(document).ready(function($) {

	$( '#the-list' ).on( 'click', '.delete-tag', function() {
		var t = $(this), tr = t.parents('tr'), r = true, data;
		if ( 'undefined' != showNotice )
			r = showNotice.warn();
		if ( r ) {
			data = t.attr('href').replace(/[^?]*\?/, '').replace(/action=delete/, 'action=delete-tag');
			$.post(ajaxurl, data, function(r){
				if ( '1' == r ) {
					$('#ajax-response').empty();
					tr.fadeOut('normal', function(){ tr.remove(); });
					// Remove the term from the parent box and tag cloud
					$('select#parent option[value="' + data.match(/tag_ID=(\d+)/)[1] + '"]').remove();
					$('a.tag-link-' + data.match(/tag_ID=(\d+)/)[1]).remove();
				} else if ( '-1' == r ) {
					$('#ajax-response').empty().append('<div class="error"><p>' + tagsl10n.noPerm + '</p></div>');
					tr.children().css('backgroundColor', '');
				} else {
					$('#ajax-response').empty().append('<div class="error"><p>' + tagsl10n.broken + '</p></div>');
					tr.children().css('backgroundColor', '');
				}
			});
			tr.children().css('backgroundColor', '#f33');
		}
		return false;
	});

	$('#submit').click(function(){
		var form = $(this).parents('form');

		if ( ! validateForm( form ) )
			return false;

		$.post(ajaxurl, $('#addtag')