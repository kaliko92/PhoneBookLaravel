<script>
    function deletePerson(id){
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        if(confirm("Are you sure want to delete!")){
            $.ajax({
                type:"DELETE",
                url: "{{ url('api/person') }}" + "/" + id,
                success: function(data){
                    window.location.replace("{{ url('admin/person/') }}");
                },
                error: function(data){
                    console.log('Error:', data);
                }
            });
        }        
    }
     
</script>