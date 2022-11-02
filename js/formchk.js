
function check(form)
{

 if((form.name.value=="")||(form.email.value=="")||(form.text_message.value==""))
 {

 alert("Accept my apologizes, but you have to fill all mandatory fields!");

 return false;
 }

 else

 return true;
}
