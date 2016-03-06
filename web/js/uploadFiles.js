$("input[type=file]").change(function () {
    if (this.files && this.files[0]) {
        var $this = $(this);
        var reader = new FileReader();
        reader.onload = function (e) {
            $('label[for=' + $this.attr('id') + '] img').attr('src', e.target.result);
        };

        reader.readAsDataURL(this.files[0]);

        $('[class*=img-preview]').attr('src', $('img.img-upload:first-child').attr('src'))
    }
});

$(document).ready(function() {
    $(document).on('click', '.image-trash', function () {
        $('#slide-removeimage').val(1);
        $('.form-image').attr('src','/images/no_image.jpg');
    });
    $(document).on('click', '.form-image', function () {
        $('#slide-removeimage').val(0);
    });
});