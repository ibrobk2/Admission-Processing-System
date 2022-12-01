<!DOCTYPE html>
<html>
<head>
	<title>Countdown Timer</title>
	<style type="text/css">
		* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    width: 100%;
    font: normal bold 16px/normal tahoma;
}

article {
    width: 300px;
    text-align: center;
    background-color: #68b04d;
    border-radius: 10px;
    margin: 50px auto 20px;
    padding: 5px;
    overflow: hidden;
    box-shadow: 3px 3px 10px #ccc;
}

article h3 {
    padding: 10px;
    color: #fff;
}
article .count {
    padding: 5px;
}
article #timer{
    padding: 5px;
    color: crimson;
    background-color: aliceblue;
    border-radius: 2px;
}

	</style>
</head>
<body>
	<script type="text/javascript">
		
		var h3 = document.getElementsByTagName("h3");
h3[0].innerHTML = "Countdown Timer With JS";

var sec         = 1800,
    countDiv    = document.getElementById("timer"),
    secpass,
    countDown   = setInterval(function () {
        'use strict';
        
        secpass();
    }, 1000);

function secpass() {
    'use strict';
    
    var min     = Math.floor(sec / 60),
        remSec  = sec % 60;
    
    if (remSec < 10) {
        
        remSec = '0' + remSec;
    
    }
    if (min < 10) {
        
        min = '0' + min;
    
    }
    countDiv.innerHTML = min + ":" + remSec;
    
    if (sec > 0) {
        
        sec = sec - 1;
        
    } else {
        
        clearInterval(countDown);
        
        countDiv.innerHTML = 'countdown done';
        
    }
}

	</script>
	
	<!-- Creat Countdown Timer -->
<article class="clock" id="model3">
  <h3></h3>

  <div class="count">
    <div id="timer"></div>
  </div>
</article>


</body>
</html>