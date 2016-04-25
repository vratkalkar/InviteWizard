//Replace textareas with CKEditor
CKEDITOR.replace('message');

 CKEDITOR.replace('message', {
 	width: '80%',
 	height: '200%'
 });

 CKEDITOR.editorConfig = function( config ) {
	config.language = 'en';
	config.uiColor = '#F7B42C';
	config.height = '200%';
	config.toolbarCanCollapse = true;
};

