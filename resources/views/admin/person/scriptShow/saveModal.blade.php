<script>
    function SaveSubmit(){
        var contactTypeId = $('#slctContactType').val();
        var value = $('#txtValue').val();
        var personId = $('#personId').val();

        $.ajax({
            data: {
                contactTypeId:contactTypeId,
                value:value,
                personId:personId
            },
            url: "{{ url('api/contact') }}",
            type: "POST",
            dataType: 'json',
            success: function(data){
                $('#form').trigger('reset');
                $('#modal').modal('hide');
                window.location.replace("{{ url('admin/person/') }}" + "/" + personId);
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