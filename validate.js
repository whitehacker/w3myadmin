function validate_user(){
  var user=document.getElementById('user');
  if(user.value==" " || user.value==null){
    document.getElementById('user_error').innerHTML="Username Required";
    document.getElementById('user_error').className='error';

  }
  else if(user.value.length < 5) {
    document.getElementById('user_error').innerHTML="Username is too small";  document.getElementById('user_error').className='error';
  }
  else {
    document.getElementById('user_error').innerHTML="Great Job! Everything is Fine";  document.getElementById('user_error').className='success';
  }

}
function user_name(){
    document.getElementById('user_error').placeHolder="Your desired Username!";

}
