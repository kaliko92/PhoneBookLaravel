<script>
    function SaveSubmit(){
        var name = $('#txtName').val();

        $.ajax({
            data: {
                name: name
            },
            url: "{{ url('api/contactType') }}",
            type: "POST",
            dataType: 'json',
            success: function(data){
                $('#form').trigger('reset');
                $('#modal').modal('hide');
                window.location.replace("{{ url('admin/contactType/') }}");
            },
            error: function(data){
                console.log('Error:', data);                    
                if(data.status === 422){
                    var myjson = data.responseJSON.errors;                            
                    $.each(myjson, function(key, val){
                        $('#alert').show();
                        $('#message').html(val);
                    });    
                }
                $('#btnSave').html('Save');
            }
        });
    }
   
</script>