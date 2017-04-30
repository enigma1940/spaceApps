<div>
  <input type="text" value="2014-02-01" class="time" />
  <input type="text" class="longI" placeholder="longitude" />
  <input type="text" class="latI" placeholder="latitude" /><input type="button" class="test" value="test" /><br />

  <iframe class="myImage" style="height: 400px; width: 600px;"></iframe>
</div>
<script src="js/jquery-3.1.1.min.js"></script>
<script>
  var im = $('.myImage');
  $('.test').click(function(){
    alert('ll');
    im.attr('src', 'https://api.data.gov/nasa/planetary/earth/imagery?lon='+$('.longI').val()+'&lat='+$('.latI').val()+'&date='+$('.time').val()+'&cloud_score=True&api_key=DEMO_KEY');
  });
</script>
