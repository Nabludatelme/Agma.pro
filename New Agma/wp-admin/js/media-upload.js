/* global tinymce, QTags */
// send html to the post editor

var wpActiveEditor, send_to_editor;

send_to_editor = function( html ) {
	var editor,
		hasTinymce = typeof tinymce !== 'undefined',
		hasQuicktags = typeof QTags !== 'undefined';

	if ( ! wpActiveEditor ) {
		if ( hasTinymce && tinymce.activeEditor ) {
			editor = tinymce.activeEditor;
			wpActiveEditor = editor.id;
		} else if ( ! hasQuicktags ) {
			return false;
		}
	} else if ( hasTinymce ) {
		editor = tinymce.get( wpActiveEditor );
	}

	if ( editor && ! editor.isHidden() ) {
		editor.execCommand( 'mceInsertContent', false, html );
	} else if ( hasQuicktags ) {
		QTags.insertContent( html );
	} else {
		document.getElementById( wpActiveEditor ).value += html;
	}

	// If the old thickbox remove function exists, call it
	if ( window.tb_remove ) {
		try { window.tb_remove(); } catch( e ) {}
	}
};

// thickbox settings
var tb_position;
(function($) {
	tb_position = function() {
		var tbWindow = $('#TB_window'),
			width = $(window).width(),
			H = $(window).height(),
			W = ( 833 < width ) ? 833 : width,
			adminbar_height = 0;

		if ( $('#wpadminbar').length ) {
			adminbar_height = parseInt( $('#wpadminbar').css('height'), 10 );
		}

		if ( tbWindow.size() ) {
			tbWindow.width( W - 50 ).height( H - 45 - adminbar_height );
	