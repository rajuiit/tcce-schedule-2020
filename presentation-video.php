
  
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Keynote Speakers</title>
    <?php include 'include.php'; ?>
    <link href="css/speaker.css" rel="stylesheet"/>
</head>
<body>
<?php include 'navbar_non_static.php';?>
<div class="container">

    <div class="row presentation presentation-video">
          <div class="col-md-12">
              <div class="card">
                <video id="myVideo" controls="controls" height="auto" width="740">
                  <source id="video_player" src="" type="video/mp4"></source>
                </video>
                <div class="session-information">
                    <h3 id="sessin_name"></h3>
                    <h5 class="card-title"></h5>
                    <p class="card-text" ><strong>Paper IDs</strong>:  <span id="paper_ids"></span></p>
                    <p class="card-text"><strong>Time</strong>: <span id="p_time"></span></p>
                    <p class="card-text"><strong>Zoom Link</strong>: <a href="" id="zoom_link" target="_blank"></a></p>
                </div>
                <div class="clearfix">

                </div>
              </div>
          </div>
    </div>
    <div class="row">
      <div class="col-md-12 pre-head pre-head-video">
         <div class="text-container">
           <h3><i class="fa fa-television" aria-hidden="true"></i> SESSION PRESENTATION</h3>
         </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 abstraxct">
        <div class="icon_before">
          <i class="fa fa-thumb-tack" aria-hidden="true"></i>
        </div>
        <h3>TITLE</h3>
        <p id="absreact_des"></p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-8 abstraxct">
        <div class="icon_before">
          <i class="fa fa-user" aria-hidden="true"></i>
        </div>
        <h3>PRESENTOR</h3>
        <h4 id="author_name" style="font-weight:bold"></h3>
        <p><strong>Authors:</strong> <span id="a_author"></span></p>
        <p><strong>Email:</strong> <span id="a_email"></span></p>
        <p><strong>Contact Person:</strong> <span id="a_person"></span></p>
      </div>
    </div>


    <div class="list-of-presentation">

    </div>


    </div>
</div>
<?php include 'footer.php';?>
</body>



<script type="text/javascript">


    <?php echo 'var paperID="'. $_GET['paperID'].'";' ?>

    var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        var myObj = JSON.parse(this.responseText);

          for(var i in myObj['papers']){
              if(myObj['papers'][i].paper_id == paperID){
                  
                  let title = myObj['papers'][i].description.split(",");

                $("#absreact_des").text(title[title.length - 1]);
                
                let suthors = '';
                for(var j=0;j<title.length - 1;j++){
                    if(title.length - 2 == j){
                        suthors = suthors + title[j];
                    }else{
                        suthors = suthors + title[j] + ",";
                    }
                    
                }
                
                $("#a_author").text(suthors);
                
                $("#paper_ids").text(myObj['papers'][i].paper_id);
                $("#a_email").text(myObj['papers'][i].author_email);
                $("#a_person").text(myObj['papers'][i].contact_person);

              }

            }
        }
    };
    xmlhttp.open("GET", "json/papers.json" , true);
    xmlhttp.send();


</script>


<script type="text/javascript">

  <?php echo 'var sessionID="'. $_GET['sessionID'].'";' ?>

    var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        var myObj = JSON.parse(this.responseText);

          for(var i in myObj){
              if(myObj[i].session_ID == sessionID){

                  $("#sessin_name").text(myObj[i]['session']);
                  $(".card-title").text(myObj[i]['description']);
                  $("#p_time").text(myObj[i]['Time']);
                  $("#zoom_link").text(myObj[i]['Zoom']);
                  $("#zoom_link").attr("href",myObj[i]['Zoom']);
              }

            }
        }
    };
    xmlhttp.open("GET", "json/session.json" , true);
    xmlhttp.send();


</script>


<script>


var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
    var myObj = JSON.parse(this.responseText);

    <?php echo 'var paperID="'. $_GET['paperID'].'";' ?>


    for(var i in myObj){

      if(myObj[i]['Paper ID'] == paperID){

          $("#author_name").text(myObj[i]['Reg'][' Author']);
          $("#video_player").attr("src",myObj[i]['video Link']);
          document.getElementById("myVideo").load();

      }
    }
  }
};
xmlhttp.open("GET", "json/presentation.json" , true);
xmlhttp.send();


</script>


</html>