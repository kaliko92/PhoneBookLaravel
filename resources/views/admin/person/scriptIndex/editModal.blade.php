<script>
   function editPerson(id){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.get("{{ url('api/person') }}" + "/" + id, function(data){
            $('#modalTitle').html("Edit Person");
            $('#btnSave').val("Edit");
            $('#btnSave').html("Edit");
            $('#modal').modal('show');
            $('#personId').val(data.successResult.id);
            // alert(id);
            $('#txtName').val(data.successResult.name);
        });
    }
    
</script>