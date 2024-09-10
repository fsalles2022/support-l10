// Importa CKEditor do CDN
import ClassicEditor from '@ckeditor/ckeditor5-build-classic';

// Configura e inicializa o CKEditor
ClassicEditor
    .create(document.querySelector('#editor'), {
        toolbar: [
            { name: 'basicstyles', items: ['Bold', 'Italic'] },
            { name: 'paragraph', items: ['NumberedList', 'BulletedList'] },
            { name: 'insert', items: ['Image', 'Link'] },
        ],
        height: 500
    })
    .catch(error => {
        console.error(error);
    });
