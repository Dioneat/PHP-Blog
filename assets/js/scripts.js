ClassicEditor
    .create( document.querySelector( '.editor' ), {
        simpleUpload:
            {
                uploadUrl: 'http://localhost/BlogDinamic/uploadImage.php'
            }
    } )
    .then( editor => {
        window.editor = editor;
        console.log(editor);
    } )
    .catch( handleSampleError );

function handleSampleError( error ) {
    const issueUrl = 'https://github.com/ckeditor/ckeditor5/issues';

    const message = [
        'Oops, something went wrong!',
        `Please, report the following error on ${ issueUrl } with the build id "h772978gzbmv-5b0ahoa1fprn" and the error stack trace:`
    ].join( '\n' );

    console.error( message );
    console.error( error );
}
