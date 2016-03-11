$(document).ready(function() {

    var processStatusRequest = false;
    $(document).on('click', '.status-button', function () {
        if(!processStatusRequest) {
            processStatusRequest = true;
            var $this = $(this);
            if(confirm("Change status?")) {
                $.ajax({
                    type: 'get',
                    dataType: 'json',
                    url: $this.closest('.grid').data('url'),
                    data: {
                        id: $this.closest('tr').data('key')
                    },
                    success: function (response) {
                        $this.removeClass('status-active');
                        $this.removeClass('status-inactive');
                        $this.addClass(response);
                        processStatusRequest = false;
                    }
                });
            } else {
                processStatusRequest = false;
            }
        }
    });

    var sendFlag = false;
    var deleteFlag = false;
    $(document).on("click", '.image-add', function() {
        var $this = $(this);
        var index = $(".upload-image-block").last().data('index')+1;
        if(!index) {
            index = 0;
        }
        if(!sendFlag) {
            sendFlag = true;
            $.ajax({
                url: $this.data('url'),
                data: {
                    index: index
                },
                success: function(response) {
                    $(".image-container").append(JSON.parse(response));
                    sendFlag = false;
                }
            });
        }
    });
    $(document).on("click", '.upload-image-block .image-trash', function() {
        $(this).closest(".col-md-4").remove();
    });
    $(document).on("click", '.uploaded-image-block .image-trash', function() {
        var $this = $(this);
        var id = $this.data('id');
        if(!deleteFlag) {
            deleteFlag = true;
            if(confirm('Delete this image?')) {
                $.ajax({
                    url: $this.data('url'),
                    data: {
                        id: id
                    },
                    success: function () {
                        $this.closest(".col-md-4").remove();
                        deleteFlag = false;
                    }
                });
            }
        }
    });
});