
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

    <div class="row presentation">
          <div class="col-md-12">
              <div class="card">
                <h4 class="card-header" style="font-size: 16px;font-weight:bold;color:#47A0DD"></h4>
                <hr style="margin:0;padding:0;">
                <div class="card-body">
                    <h5 class="card-title">2nd International Conference on Trends in Computational and Cognitive Engineering(TCCE-2020)</h5>
                    <p class="card-text"><strong>Paper IDs</strong><span class="card-id"></span></p>
                    <p class="card-text"><strong>Time</strong><span class="card-time"></span></p>
                </div>
              </div>
          </div>
    </div>
    <div class="row">
      <div class="col-md-12 pre-head">
         <div class="text-container">
           <h3><i class="fa fa-television" aria-hidden="true"></i> SESSION PRESENTATIONS</h3>
         </div>
      </div>
    </div>


    <div class="list-of-presentation">

    </div>


    </div>
</div>
<?php include 'footer.php';?>
</body>



<script type="text/javascript">


    <?php echo 'var sessionID='. $_GET['session'].';' ?>

    var xmlhttp = new XMLHttpRequest();
        xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
        var myObj = JSON.parse(this.responseText);

        <?php echo 'var session='. $_GET['session'].';' ?>

          for(var i in myObj){
              if(myObj[i].session_ID == sessionID){

                  $(".card-header").text(myObj[i]['session']);
                  $(".card-title").text(myObj[i]['description']);
                  $(".card-id").text(myObj[i]['Paper IDs']);
                  $(".card-time").text(myObj[i]['Time']);
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

    <?php echo 'var session='. $_GET['session'].';' ?>

    for(var i in myObj){

      let html = '';

      if(myObj[i].Session == session){
        html = '<div class="row">'+
          '<div class="col-md-12">'+
              '<div class="card presentation-list">'+
                '<a href="presentation-video.php?paperID='+myObj[i]['Paper ID']+'&&sessionID='+myObj[i]['Session']+'">'+
                  '<div class="card-body">'+
                    '<div class="row">'+
                      '<div class="col-md-3">'+
                        '<img src="img/presentation-img/'+myObj[i]['img']+'" class="img-responsive" alt="">'+
                      '</div>'+
                      '<div class="col-md-8">'+
                        '<p class="card-text"><strong>Paper IDs</strong>: '+myObj[i]['Paper ID']+'</p>'+
                        '<p class="card-text"><strong>Presentation File Name</strong>: '+myObj[i]['Presentation File Name']+'</p>'+
                        '<p class="card-text"><strong>Reg. Author</strong>: '+myObj[i]['Reg'][' Author']+'</p>'+
                        '<p class="card-text"><strong>Country</strong>: '+myObj[i]['Country']+'</p>'+
                      '</div>'+
                    '</div>'+
                  '</div>'+
                '</a>'+
              '</div>'+
          '</div>'+
        '</div>';
      }


      $(".list-of-presentation").append(html);


    }
    }
};
xmlhttp.open("GET", "json/presentation.json" , true);
xmlhttp.send();



</script>


</html>
