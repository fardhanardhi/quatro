// $('#trumbowyg-demo').trumbowyg();

$('#editor')
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

// setEditorContent();

function getEditorContent() {
    var isi = $('#editor').trumbowyg('html');
    return isi;
}

function setEditorContent() {
    var content = $('#isiSoalDb').val();
    $('#editor').trumbowyg('html', content);
}

function clearEditorContent() {
    var content = $('#isiSoal').val();
    $('#editor').trumbowyg('html', "");
}

$('#btnReset').click(function () {
    setEditorContent();
});
$('#btnClear').click(function () {
    clearEditorContent();
});

function DoSubmit() {
    document.rte.isiSoal.value = getEditorContent();
    return true;
}