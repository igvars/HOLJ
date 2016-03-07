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
                    url: '/slide/change-status',
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

});