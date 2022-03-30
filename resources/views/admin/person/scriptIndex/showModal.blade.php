<script>
    $(document).ready(function(){            
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $('#btnCreate').on('click', function(){
            $('#modalTitle').html("Add Person");
            $('#btnSave').val("Create");
            $('#btnSave').html("Create");
            $('#form').trigger("reset");
            $('#modal').modal('show');
        });

        $('#btnSave').on('click', function(){
            $('#form').submit();
        });

        $('#form').submit(function(e){
            e.preventDefault();
            $('#btnSave').html('Sending...');

            if($('#btnSave').val()=="Create"){
                SaveSubmit();            
            }else if($('#btnSave').val()=="Edit"){
                UpdateSubmit();  
                
            }else{
                alert('error'+$('#btnSave').val());
            }
        });


        $('.close').on('click', function(){
            $('#alert').toggle();
        })

    }); 

    
</script>