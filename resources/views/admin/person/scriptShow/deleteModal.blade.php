<script>
    function deleteContact(id){        
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        var personId = $('#personId').val();        

        if(confirm("Are you sure want to delete!")){
            $.ajax({
                type:"DELETE",
                url: "{{ url('api/contact') }}" + "/" + id,
                success: function(data){
                    window.location.replace("{{ url('admin/person/') }}" + "/" + personId);
                },
                error: function(data){
                    console.log('Error:', data);
                }
            });
        }        
    }
     
</script>