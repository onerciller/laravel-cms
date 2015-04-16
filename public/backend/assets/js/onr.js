 $(document).ready(function () {
        $('form[data-remote]').on('submit', function (e) {
            var form = $(this);
            var method = form.find('input[name="_method"]').val() || 'POST';
            var url =  form.prop('action');

            $.ajax({
                type:method,
                url:url,
                data:form.serialize(),
                success:function(){

                }
            });

            $(this).parents("tr").fadeTo(300,0).slideUp('300', function() {
                $(this).remove();
            });

            $(this).parent('li').fadeTo(300).slideUp('300',function(){
                  $(this).remove();
            });

            e.preventDefault();
        });


        window.setTimeout(function() {
            $(".alert-message").fadeTo(500, 0).slideUp(500, function(){
                $(this).remove();
            });
        }, 2000);

    });