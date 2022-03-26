<script>
    function SaveSubmit(){
        var name = $('#txtName').val();
        var phone = $('#txtPhone').val();                
        var note = $('#txtNote').val();

        $.ajax({
            // data: $('#form').serialize(),
            data: {
                name: name,
                phone: phone,
                note: note
            },
            url: "{{ url('api/person/store') }}",
            type: "POST",
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