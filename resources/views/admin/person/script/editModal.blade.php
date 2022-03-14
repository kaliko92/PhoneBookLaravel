<script>
   function editPerson(id){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        //var categoryId = id;
        $.get("{{ url('api/person/') }}" + "/" + id, function(data){
            $('#modalTitle').html("Edit Person");
            $('#btnSave').val("Edit");
            $('#btnSave').html("Edit");
            $('#modal').modal('show');
            $('#personId').val(data.id);
            // $('#txtCode').val(data.code);
            $('#txtName').val(data.name);
            $('#txtPhone').val(data.phone);
            $('#txtNote').val(data.note);
            // $('#slctCategory option[id='+data.categoryId+']').attr('selected', 'selected');      
        });
    }
    
</script>