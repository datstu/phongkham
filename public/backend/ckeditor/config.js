/**
 * @license Copyright (c) 2003-2022, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	config.language = 'vn';
   


	// Remove some buttons provided by the standard plugins, which are
	// not needed in the Standard(s) toolbar.
	//config.removeButtons = 'Underline,Subscript,Superscript';

	config.filebrowserBrowseUrl= 'https://www.diaocthienphu.com.vn/public/backend/ckfinder/ckfinder.html';
    config.filebrowserUploadUrl='https://www.diaocthienphu.com.vn/public/backend/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files';

};
