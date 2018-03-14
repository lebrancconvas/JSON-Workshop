<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>JSON Workshop</title>
  <script>
    function get_json(){
      var hr = new XMLHttpRequest();
      hr.open("GET","user.json",true);
      hr.onreadystatechange = function(){
        if(hr.readyState === 4 && hr.status === 200){
          var data = JSON.parse(hr.responseText);
          var result = document.getElementById("result");
          result.innerHTML = data.song[0];
        }
      }
      hr.send(null);
      document.getElementById("result").innerHTML = "รอแปปนึงนะจ๊ะ";
    }
  </script>
</head>
<body>
  <h1>Hello JSON</h1>
  <div id="result"></div>
  <script>get_json();</script>
</body>
</html>
