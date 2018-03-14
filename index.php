<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JSON Workshop</title>
  <script>
    function get_json(){
      var hr = new XMLHttpRequest();
      hr.open("GET","my_json.php",true);
      hr.onreadystatechange = function(){
        if(hr.readyState === 4 && hr.status === 200){
          var data = JSON.parse(hr.responseText);
          var result = document.getElementById("result");
          result.innerHTML = "";
          for(var obj in data){
            result.innerHTML += data[obj].name + " : "+ data[obj].age + " years old" +"<br>" + "<br>";
          }
        }
      }
      hr.send(null);
      document.getElementById("result").innerHTML = "รอแป๊ปนึงนะจ๊ะ กรุณารอสักครู่";
    }
  </script>
</head>
<body>
  <h1>Hello JSON</h1>
  <div id="result"></div>
  <script>get_json();</script>
</body>
</html>
