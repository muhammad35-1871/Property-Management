function SendData(){


    var Email_address =  document.getElementById('Email_address').value;
   var password =  document.getElementById('password').value;



var url="/insertData"
var data={email:Email_address,pass:password};

axios.post(url,data)
  .then(function (response) {
    alert(response.data);
  })
  .catch(function (error) {
    alert("Error");
  });
}