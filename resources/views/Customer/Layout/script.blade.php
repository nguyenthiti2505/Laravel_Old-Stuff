<script src="natucam/layout/scripts/jquery.min.js"></script>
<script src="natucam/layout/scripts/jquery.backtotop.js"></script>
<script src="natucam/layout/scripts/jquery.mobilemenu.js"></script>
<script src="natucam/layout/scripts/jquery.fitvids.js"></script>
<!-- <script src="../resources/js/app.js"></script>
<script src="../resources/js/bootstrap.js"></script> -->
{{-- <script>

    $(function() {
    $('#dang-nhap').click(function(e) {
    e.preventDefault();
    $.ajaxSetup({
           headers: {
               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
           }
    });
    $.ajax({
    'url' : 'login',
    'data': {
    'email' : $('#email').val(),
    'password' : $('#password').val()
    },
    'type' : 'POST',
    success: function (data) {
     console.log(data);
     
     //Kiểm tra có lỗi hay không
    if (data.error != false) { 
    $('.error').hide();
    if (data.message.email != undefined) {
    $('.errorEmail').show().text(data.message.email[0]);
    }
    if (data.message.password != undefined) {
    $('.errorPassword').show().text(data.message.password[0]);
    }
    if (data.message.errorlogin != undefined) {
    $('.errorLogin').show().text(data.message.errorlogin[0]);
    }
    } else {
    window.location.href = "index"
    }
    }
    });
    })
    });
</script> --}}
<script>

   $(function() {
   $('#dang-nhap').click(function(e) {
   e.preventDefault();
   $.ajaxSetup({
          headers: {
              'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
          }
   });
   $.ajax({
   'url' : 'login',
   'data': {
   'email' : $('#email').val(),
   'password' : $('#password').val()
   },
   'type' : 'POST',
   success: function (data) {
    console.log(data);
    
    //Kiểm tra có lỗi hay không
   if (data.error != false) { 
   $('.error').hide();
   if (data.message.email != undefined) {
   $('.errorEmail').show().text(data.message.email[0]);
   }
   if (data.message.password != undefined) {
   $('.errorPassword').show().text(data.message.password[0]);
   }
   if (data.message.errorlogin != undefined) {
   $('.errorLogin').show().text(data.message.errorlogin[0]);
   }
   } else {
   window.location.href = "index"
   }
   }
   });
   })
   });
   </script>
<script>
    $('#category').on('change',function(e){
    //console.log(e);
    var cat_id = e.target.value;
    
    $.get('baidang?cat_id=' + cat_id, function(data){
    
    $('#subcategory').empty();
    $.each(data, function(index, subcatObj){
    
    $('#subcategory').append('<option value='+subcatObj.id+'>'+subcatObj.name+'</option>');
    
    });
    console.log(data);
    });
    });
    </script>