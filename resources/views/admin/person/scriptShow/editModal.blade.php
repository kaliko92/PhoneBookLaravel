<script>
   function editContact(id){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $.get("{{ url('api/contact') }}" + "/" + id, function(data){
            $('#modalTitle').html("Edit Contact");
            $('#btnSave').val("Edit");
            $('#btnSave').html("Edit");
            $('#modal').modal('show');
            $('#personId').val(data.successResult.personId);
            $('#contactId').val(data.successResult.id);
            // alert(id);
            // $('#slctType').val(data.successResult.type);
            $('#slctType').val(data.successResult.type.toLowerCase());

            // alert($('#slctType').options.length.toString());
            // for (let index = 0; index < $('#slctType').options.length; index++) {
            //     alert('pass ' + index + ' ' + $('#slctType').options[index].value);
            //     if($('#slctType').options[index].value.toLowerCase() === data.successResult.type.toLowerCase()){
            //         $('#slctType').selectedIndex = index;
            //         break;
            //     }

            // }
            $('#txtValue').val(data.successResult.value);
        });
    }
    
</script>