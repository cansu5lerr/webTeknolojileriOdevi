function giris(){
    var kullanici = document.getElementById("kullanici").value;
    var sifre = document.getElementById("sifre").value;
    var error_message = document.getElementById("error_message");
    error_message.style.padding = "10px";
    var text;
    if(kullanici ==''){
      text = "Adınızı giriniz";
      error_message.innerHTML = text;
      document.getElementById("myform").reset();
      return false;
    }
    else{
      if(kullanici.indexOf("@") == -1 || kullanici.length < 6){
        text = "E mail adresinizi doğru formatta giriniz.";
        error_message.innerHTML = text;
        document.getElementById("myform").reset();
        return false;
      }
    }
    if(sifre==''){
      text = "Şifreyi giriniz";
      error_message.innerHTML = text;
      document.getElementById("myform").reset();
      return false;
    }
    if(sifre!= "1234"||kullanici!="g201210084@gmail.com"){
      text = "Kullanıcı adı veya şifreden biri hatalı.";
      error_message.innerHTML = text;
      document.getElementById("myform").reset();
      return false;
    }
    return true;
  }