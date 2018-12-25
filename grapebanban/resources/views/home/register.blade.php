@extends('layouts.app')

@section('content')

  
<form>

  <div class="form-row">
    <div class="form-group col-md-6">
      <label for="inputEmail4">อีเมล์</label>
      <input type="email" class="form-control" id="inputEmail" placeholder="Email">
     
    </div>
    <div class="form-group col-md-6">
      <label for="inputPassword4">รหัสผ่าน</label>
      <input type="password" class="form-control" id="password" placeholder="Password">
    </div>
  </div>
  <div class="form-row">
  <div class="form-group col-md-6">
    <label for="inputAddress">ชื่อจริง</label>
    <input type="text" class="form-control" id="inputFirsname" placeholder="ชื่อจริง">
  </div>
  <div class="form-group col-md-6">
    <label for="inputAddress2">นามสกุล</label>
    <input type="text" class="form-control" id="inputLastname" placeholder="นามสกุล">
  </div>
  </div>
 
 

  <button type="button" id="btn" class="btn btn-primary">ยืนยัน</button>
</form>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function() {

 $(document).on('click', '#btn', function(){

        var email = $("#inputEmail").val();
        var pass = $("#password").val();
        var firs = $("#inputFirsname").val();
        var last = $("#inputLastname").val();



    $.ajax({
          type: 'post',
          url: '/registerz',
          data: {
              '_token': $('input[name=_token]').val(),
              'email': $('#inputEmail').val(),
              'password': $('#password').val(),
              'firstname': $('#inputFirsname').val(),
              'surname': $('#inputLastname').val(),

          },
          success: function(data) {
           
            if(data=="success"){
                location.reload();

            }
            

          }
      });


    



 });


});

</script>

@endsection