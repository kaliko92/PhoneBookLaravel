<script>
    function UpdateSubmit(){
        var id = $('#contactId').val();
        var personId = $('#personId').val();        
        var type = $('#slctType').val();
        var value = $('#txtValue').val();
        var _token = $('meta[name="csrf-token"]').attr('content');

        alert(type);

        $.ajax({
            data: {
                id:id,
                _token:_token,                            
                type: type,
                value: value,
                personId: personId,
            },
            url: "{{ url('api/contact') }}" + "/" + id,
            type: "PUT",
            cache:false,
            dataType: 'json',
            success: function(data){
                $('#form').trigger('reset');
                $('#modal').modal('hide');
                // adding to treeview with id or code
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