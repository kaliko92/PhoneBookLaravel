<script>
    function UpdateSubmit(){
        var id = $('#personId').val();
        var name = $('#txtName').val();
        var _token = $('meta[name="csrf-token"]').attr('content');
        $.ajax({
            data: {
                id:id,
                _token:_token,                            
                name: name,
            },
            url: "{{ url('api/person') }}" + "/" + id,
            type: "PUT",
            cache:false,
            dataType: 'json',
            success: function(data){
                $('#form').trigger('reset');
                $('#modal').modal('hide');
                // adding to treeview with id or code
                window.location.replace("{{ url('admin/person/') }}");
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