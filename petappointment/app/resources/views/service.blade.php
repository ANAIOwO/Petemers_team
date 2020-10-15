<!DOCTYPE html>
<html>
  <style>
    * {
      box-sizing: border-box;
    }
  </style>

  <head>
    <title>選擇服務</title>
    <link rel="shortcut icon" href="#"/>
    <link rel="stylesheet" href="../css/service.css" type="text/css" />
  </head>

  
  <body>
    <div class="loader">
      <img src="../images/loader.gif" alt="Loading..."/>
    </div>
    <div class="tit">
      <br>
    <strong><p>選擇您需要的服務</p></strong>
    </div>

    
  <div class="row">
      <div class="column">
    <!--into petappointment page -->
    <div class="cardbutton">
      <img src="images/appointmentbutton-comp3.jpg" alt="" >
      <div class="info">
        <br><br><br><br>
        <input type='button' value='點擊掛號' onclick="javascript: location.href='/appointment/create'">
          <p>進入掛號表單</p>
        
      </div>
    </div>
  </div>

    <!--into Medical record page-->
  <div class="column">
    <div class="cardbutton">
      <img src="images/Medicalrecord-comp.jpg" alt="" >
      <div class="info">
        <br><br><br><br>
        <input type='button' value='查看病歷' onclick="javascript: location.href='medicalrecord'">
        <input type='button' value='看診預約' onclick="javascript: location.href='appointmentrecord'">
        <p>進入寵物病歷</p>
      </div>
    </div>
  </div>
</div>


<script>
  window.addEventListener("load",function(){
    const loader = document.querySelector(".loader");
    loader.className += " hidden"; //class "loader hidden"
  });
</script>
</body>

</html>
