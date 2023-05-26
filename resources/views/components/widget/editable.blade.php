<script src="{{ asset('vendor/laravel-admin-ext/editable/jquery.editable.min.js') }}"></script>
<script>
    $(function(){
        if($(".editable").length) {
            $('.editable').editable({
                toggleFontSize :true,
                callback : function( data ) {
                    let selector = data.$el[0];
                    if (selector.hasAttributes()) {
                        var attrs = selector.attributes;
                        for(var i = attrs.length - 1; i >= 0; i--) {
                            if(attrs[i].name == 'block'){
                                $.ajax({
                                    url: '{{ route('admin.text.ui.updated') }}',         /* Куда пойдет запрос */
                                    method: 'get',             /* Метод передачи (post или get) */
                                    dataType: 'html',          /* Тип данных в ответе (xml, json, script, html). */
                                    data: {val:data.content,text:attrs[i].value},     /* Параметры передаваемые в запросе. */
                                    success: function(data){   /* функция которая будет выполнена после успешного запроса.  */
                                        console.log(data);        /* В переменной data содержится ответ от index.php. */
                                    }
                                });
                            }
                        }
                    }
                }
            });
        }
    });
</script>
