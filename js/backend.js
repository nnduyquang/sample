if ($('#content').length) {
    CKEDITOR.replace('content', {
        height: 800,
        language: 'vi',
        format_tags: 'p;h1;h2;h3;pre',
        filebrowserImageBrowseUrl: '../../js/ckfinder/ckfinder.html?Type=images',
        filebrowserFlashBrowseUrl: '../../js/ckfinder/ckfinder.html?Type=flash',
        filebrowserImageUploadUrl: '../../js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
        filebrowserFlashUploadUrl: '../../js/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Flash',
    });
}
if ($('#btnBrowse').length) {
    var button1 = document.getElementById('btnBrowse');

    button1.onclick = function () {
        selectFileWithCKFinder('path');
    }
}
;
if ($('#path').val() == '')
    $('#showHinhDaiDien').hide();
else
    $('#showHinhDaiDien').show();

function selectFileWithCKFinder(elementId) {
    CKFinder.popup({
        chooseFiles: true,
        width: 800,
        height: 600,
        onInit: function (finder) {
            finder.on('files:choose', function (evt) {
                var file = evt.data.files.first();
                var output = document.getElementById(elementId);
                output.value = file.getUrl();
                $('#showHinhDaiDien').show();
                $('#showHinhDaiDien').fadeIn("fast").attr('src', file.getUrl());
            });

            finder.on('file:choose:resizedImage', function (evt) {
                var output = document.getElementById(elementId);
                output.value = evt.data.resizedUrl;
                $('#showHinhDaiDien').show();
                $('#showHinhDaiDien').fadeIn("fast").attr('src', file.getUrl());
            });
        }
    });
}

$('#btnSearchTinTuc').click(function(){
    if($('#txtSearch').val().trim()=='')
        return;
    if($('#txtSearch').val().trim().replace(/ +(?= )/g,'')==$("input[name='hdKeyword']").val())
        return;
    $('#formSearchNews').submit();
});
