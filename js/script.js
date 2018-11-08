// $('#trumbowyg-demo').trumbowyg();

$('#trumbowyg-demo')
    .trumbowyg({
        btns: [
            ['viewHTML'],
            ['formatting'],
            ['strong', 'em'],
            ['justifyLeft', 'justifyCenter', 'justifyRight', 'justifyFull'],
            ['unorderedList', 'orderedList'],
            ['horizontalRule'],
            ['removeformat'],
            ['fullscreen']
        ]
    });

function getEditorContent() {
    var isi = $('#trumbowyg-demo').trumbowyg('html');
    return isi;
}

$('#submit1').click(function () {
    $('#isi').val(getEditorContent());
});