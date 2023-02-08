function validateForm() {
    var username = document.getElementById("username").value;
    var email = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    var password_confirm = document.getElementById("password_confirm").value;
    var can_submit = true;
    document.getElementById("username_error").innerHTML = "";
    document.getElementById("email_error").innerHTML = "";
    document.getElementById("password_error").innerHTML = "";
    document.getElementById("password_confirm_error").innerHTML = "";
    
    if (username === '') {
        document.getElementById("username_error").innerHTML = "  Name cannot be empty";
        can_submit = false;
    }
    if (email === '') {
        document.getElementById("email_error").innerHTML = "  Email cannot be empty";
        can_submit = false;
    }
    else if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(email))){
        document.getElementById("email_error").innerHTML = "  Invalid email format";
        can_submit = false;
    }
    if (password === '') {
        document.getElementById("password_error").innerHTML = "  Password cannot be empty";
        can_submit = false;
    }
    else if (password.length < 10) {
        document.getElementById("password_error").innerHTML = "  Password cannot be less than 10 characters";
        can_submit = false;
    }
    
    if (!(password === password_confirm)) {
        document.getElementById("password_confirm_error").innerHTML = "  Password must be the same";
        can_submit = false;
    }
    
    if (can_submit) {
        document.form.encrypt.value = encrypt_rsa(password);
        document.form.name_s.value = username;
        document.form.email_s.value = email;
        return true;
    }
    else {
        return false;
    }
}
function valideUpload() {
   
 try{
      var foodname = document.getElementById("name").value;
  var location = document.getElementById("location").value;
  var description = document.getElementById("description").value;
  var image = document.getElementById("image_input").value;

  if (foodname == "") {
    document.getElementById("foodname_error").innerHTML = "Please enter food name";
    document.getElementById("name").focus();
    return false;
  }
  if (location == "") {
    document.getElementById("location_error").innerHTML = "Please enter location";
    document.getElementById("location").focus();
    return false;
  }
  if (description == "") {
    document.getElementById("description_error").innerHTML = "Please enter description";
    document.getElementById("description").focus();
    return false;
  }
  if (image == "") {
    document.getElementById("image_error").innerHTML = "Please choose an image";
    document.getElementById("image_input").focus();
    return false;
  }
  return true;
 }
 catch (error) {
        document.write(error.message);
    }
    
}
function stopcomplaining(){
    var subject = document.getElementById("subject").value;
    var description = document.getElementById("description").value;

    
    var can_submit = true;
    if (subject == "") {
    document.getElementById("subject_error").innerHTML = "Please choose a subject!";
    document.getElementById("subject").focus();
    return false;
  }
 else if (description == "") {
    document.getElementById("desc_error").innerHTML = "Please enter Message!";
    document.getElementById("description").focus();
    return false;
  }else{
      return true;
  }
    
}
  
function validateLogin() {
    try {
    var username = document.getElementById("email").value;
    var password = document.getElementById("password").value;
    document.getElementById("name_error").innerHTML = "";
    document.getElementById("password_error").innerHTML = "";
    var can_submit = true;
    if (username == '') {
        document.getElementById("name_error").innerHTML = "    " +"Email cannot be empty";
        can_submit = false;
    }
    if (password == '') {
        document.getElementById("password_error").innerHTML = "    " +"Password cannot be empty";
        can_submit = false;
    }
    if (can_submit) {
        return true;
    }
    else {
        return false;
    }
    }
    catch (error) {
        document.write(error.message);
    }
    if (can_submit) {
        return true;
    }
    else 
        return false;
}

function encrypt_rsa(password) {
                var pub_key = 'MIGfMA0GCSqGSIb3DQEBAQUAA4GNADCBiQKBgQDmLv6TyOEeXcYEt5uePwSsql7G cPGqxhD9ot8LjzS6NPM3OeDywez0TIsmvznrKMoTV0rDvLAceuL7a+S+dEEpPMrM FmcMLcMQ7iLXSQBo7ZaMVJT+pHHxZuwkMxJIIhp9cTVC8ieAMTwNwzq44zYG6X/c A/VBONc/FRtAN7UfNQIDAQAB';
                var pri_key = 'MIIBVQIBADANBgkqhkiG9w0BAQEFAASCAT8wggE7AgEAAkEA2BpawIX8sEE9wykuOWbTuEL/EC2Q3JXRL9Dh8M9uLcKUcXbE589ay2qtH6SWHyuvEvPJqOnw1F4kM0jZi6v2/wIDAQABAkEAx/jTQ9Z49wzYP1FLIfkCMD9m0ayooUbNlWbAvVrlxNbXDx7x8D0FCUdKoyprDQ9T0GqjzD3llFItWTRAY55+gQIhAPjq6IBP42fdIpYu6js/tfzQBMA68nmWElytbEe0ukC/AiEA3kBtbifM26YtKHx+mx+DENCuwznPSdAb2AW1juoxmcECIAYAQ9K0GltqrWbJgsQi6RRLP5IS2b2srIyncbDY3pSpAiAiVTmSZruSwtz/ABxewkNw+YvFxMxszqU+fcNKTItVAQIhAOkWPF4IwQx5BR78oIuPs/ewa9rSSlAOkcmza9rO7NPv';
                try {
                    var encrypt = new JSEncrypt();
                    encrypt.setPublicKey((pub_key));
                    var encrypted = encrypt.encrypt((password));
                    return encrypted;

                }
                catch (error) {
                }
            }