<script>
   function editContactType(id){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.get("{{ url('api/contactType') }}" + "/" + id, function(data){
            $('#modalTitle').html("Edit Contact Type");
            $('#btnSave').val("Edit");
            $('#btnSave').html("Edit");
            $('#modal').modal('show');
            $('#contactTypeId').val(data.successResult.id);
            // alert(id);
            $('#txtName').val(data.successResult.name);
        });
    }
    
</script>