  
            $(document).ready(function() { 
                $("#nav-input").on("keyup", function() { 
                    var value = $(this).val().toLowerCase(); 
                    $("#tablebody tr").filter(function() { 
                        $(this).toggle($(this).text() 
                        .toLowerCase().indexOf(value) > -1) 
                    }); 
                }); 
            }); 
        