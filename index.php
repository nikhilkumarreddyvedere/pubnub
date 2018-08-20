<!DOCTYPE html>
<html>
  <head>
    <meta charset=utf-8 />
    <title>EON Maps</title>
    <meta name='viewport' content='initial-scale=1,maximum-scale=1,user-scalable=no' />
    <style>
      body {
        margin: 0;
        padding: 0;
      }
      #map {
        position:absolute;
        top:0;
        bottom:0;
        width:60%;
      }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script type="text/javascript" src="https://pubnub.github.io/eon/v/eon/1.1.0/eon.js"></script>
    <link type="text/css" rel="stylesheet" href="https://pubnub.github.io/eon/v/eon/1.1.0/eon.css"/>
    <script src="https://cdn.pubnub.com/pubnub.min.js"></script>

  </head>
  <body>
      
     
    <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    margin-left: 830px;
    width: 38%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

</style>
<script charset="utf-8">
      (function(){
    
        var livetrack = PUBNUB.init({
          publish_key: 'pub-c-20702885-c7ff-4c42-bb66-99655bb60112',
          subscribe_key: 'sub-c-44d802bc-9d51-11e8-9a7c-62794ce13da1',
          ssl : (('https:' == document.location.protocol) ? true : false) });
       
        livetrack.subscribe({
          channel: 'livetracking',
          message: function(m){
			 
			 setTimeout(function(){
	

			    if(m["deviceCode"] == null){
			     $('#output').empty().append(m["pyld_alarmType"]);
			  }
			 else if(m["deviceCode"]== 864504031502210){
			     $('#output1').empty().append(m["pyld_alarmType"]," ,"," "," ",m["location_wardName"]);

			  }
			  else if(m["deviceCode"]==863977033888558){
			     $('#output2').empty().append(m["pyld_alarmType"]," ,"," "," ",m["location_wardName"]);
			  }
			  else if(m["deviceCode"]==863977033764239){
			     $('#output3').empty().append(m["pyld_alarmType"]," ,"," "," ",m["location_wardName"]);
			  }
			  else if(m["deviceCode"]==864504031205202){
			     $('#output4').empty().append(m["pyld_alarmType"]," ,"," "," ",m["location_wardName"]);
			  }
			   else if(m["deviceCode"]==864504031234988){
			     $('#output5').empty().append(m["pyld_alarmType"]," ,"," "," ",m["location_wardName"]);
			  }
			    else if(m["deviceCode"]==863977033713764){
			     $('#output6').empty().append(m["pyld_alarmType"]," ,"," "," ",m["location_wardName"]);
			  }
			else  if(m["deviceCode"]==864504031260694){
			     $('#output7').empty().append(m["pyld_alarmType"]," ,"," "," ",m["location_wardName"]);
			  }
			else   if(m["deviceCode"]==863977033907911){
			     $('#output8').empty().append(m["pyld_alarmType"]," ,"," "," ",m["location_wardName"]);
			  }
			 else  if(m["deviceCode"]==863977033766374){
			     $('#output9').empty().append(m["pyld_alarmType"]," ,"," "," ",m["location_wardName"]);
			  }
			  else if(m["deviceCode"]==864504031782226){
			     $('#output10').empty().append(m["pyld_alarmType"]," ,"," "," ",m["location_wardName"]);
			  }
			  else if(m["deviceCode"]==862010039078304){
			     $('#output11').empty().append(m["pyld_alarmType"]," ,"," "," ",m["location_wardName"]);
			  }
			  else if(m["deviceCode"]==863977033703997){
			     $('#output12').empty().append(m["pyld_alarmType"]," ,"," "," ",m["location_wardName"]);
			  }
			   else if(m["deviceCode"]==863977033802534){
			     $('#output13').empty().append(m["pyld_alarmType"]," ,"," "," ",m["location_wardName"]);
			  }
			   else if(m["deviceCode"]==864504031819929){
			     $('#output14').empty().append(m["pyld_alarmType"]," ,"," "," ",m["location_wardName"]);
			  }
			else   if(m["deviceCode"]==864504031235647){
			     $('#output15').empty().append(m["pyld_alarmType"]," ,"," "," ",m["location_wardName"]);
			  }
			 else  if(m["deviceCode"]==864504031432707){
			     $('#output16').empty().append(m["pyld_alarmType"]," ,"," "," ",m["location_wardName"]);
			  }
			 else  if(m["deviceCode"]==863977033715231){
			     $('#output17').empty().append(m["pyld_alarmType"]," ,"," "," ",m["location_wardName"]);
			  }
			else   if(m["deviceCode"]==864504031218007){
			     $('#output18').empty().append(m["pyld_alarmType"]," ,"," "," ",m["location_wardName"]);
			  }
			 else  if(m["deviceCode"]==863977033612396){
			     $('#output19').empty().append(m["pyld_alarmType"]," ,"," "," ",m["location_wardName"]);
			  }
			 else  if(m["deviceCode"]==863977033828794){
			     $('#output20').empty().append(m["pyld_alarmType"]," ,"," "," ",m["location_wardName"]);
			  }
			 else  if(m["deviceCode"]==863977033827523){
			     $('#output21').empty().append(m["pyld_alarmType"]," ,"," "," ",m["location_wardName"]);
			  }
			 else   if(m["deviceCode"]==864504031035658){
			     $('#output22').empty().append(m["pyld_alarmType"]," ,"," "," ",m["location_wardName"]);
			  }
			 else   if(m["deviceCode"]==863977033835484){
			     $('#output23').empty().append(m["pyld_alarmType"]," ,"," "," ",m["location_wardName"]);
			  }
			else    if(m["deviceCode"]==863977033895017){
			     $('#output24').empty().append(m["pyld_alarmType"]," ,"," "," ",m["location_wardName"]);
			  }
			else    if(m["deviceCode"]==863977033828919){
			     $('#output25').empty().append(m["pyld_alarmType"]," ,"," "," ",m["location_wardName"]);			
			  } 
			else  if(m["deviceCode"]==863083037582683){
			     $('#output26').empty().append(m["pyld_alarmType"]," ,"," "," ",m["location_wardName"]);
			  }
			 
			 }, 10000);
              
			},
          connect : publish
        });
        
        function publish() {
          livetrack.publish({
            channel: 'livetracking',
            message:{deviceCode: 864504031502210, location_latitude: 12.9875059128, location_longitude: 77.7405853271, location_wardName: "other", pyld_alarmType: "HMW"},


          });
        }
        
      })();
    </script>
    <div id='map'></div>
    <table>
  <tr>
    <th>Device ID</th>
    <th>Alarm Type & Ward name</th>
   
  </tr>
  <tr>
    <td>864504031502210</td>
    <td id="output1"></td>
  </tr>
  <tr>
    <td>863977033888558</td>
    <td id="output2"></td>
  </tr>
  <tr>
    <td>863977033764239</td>
    <td id="output3"></td>
  </tr>
  <tr>
    <td>864504031205202</td>
    <td id="output4"></td>
  </tr>
   <tr>
    <td>864504031234988</td>
    <td id="output5"></td>
  </tr>
   <tr>
    <td>863977033713764</td>
    <td id="output6"></td>
  </tr>
  <tr>
    <td>864504031260694</td>
    <td id="output7"></td>
  </tr>
  <tr>
    <td>863977033907911</td>
    <td id="output8"></td>
  </tr>
  <tr>
    <td>863977033766374</td>
    <td id="output9"></td>
  </tr>
   <tr>
    <td>864504031782226</td>
    <td id="output10"></td>
  </tr>
   <tr>
    <td>862010039078304</td>
    <td id="output11"></td>
  </tr>
   <tr>
    <td>863977033703997</td>
    <td id="output12"></td>
  </tr>
  <tr>
    <td>863977033802534</td>
    <td id="output13"></td>
  </tr>
    <tr>
    <td>864504031819929</td>
    <td id="output14"></td>
  </tr>
   <tr>
    <td>864504031235647</td>
    <td id="output15"></td>
  </tr>
   <tr>
    <td>864504031432707</td>
    <td id="output16"></td>
  </tr>
  <tr>
    <td>863977033715231</td>
    <td id="output17"></td>
  </tr>
    <tr>
    <td>864504031218007</td>
    <td id="output18"></td>
  </tr>
    <tr>
    <td>863977033612396</td>
    <td id="output19"></td>
  </tr>
  <tr>
    <td>863977033828794</td>
    <td id="output20"></td>
  </tr>
   <tr>
    <td>863977033827523</td>
    <td id="output21"></td>
  </tr>
  <tr>
    <td>864504031035658</td>
    <td id="output22"></td>
  </tr>
  <tr>
    <td>863977033835484</td>
    <td id="output23"></td>
  </tr>
   <tr>
    <td>863977033895017</td>
    <td id="output24"></td>
  </tr>
   <tr>
    <td>863977033828919</td>
    <td id="output25"></td>
  </tr>
   <tr>
    <td>863083037582683</td>
    <td id="output26"></td>
  </tr>
</table>
    <script>
      function getNonZeroRandomNumber(){
        var random = Math.floor(Math.random()*199) - 99;
        if(random==0) return getNonZeroRandomNumber();
        return random;
      }
    </script>
	
    <script>
    		var data;
        var myvar;
      var pubnub = new PubNub({
        publishKey: 'pub-c-20702885-c7ff-4c42-bb66-99655bb60112',
        subscribeKey: 'sub-c-44d802bc-9d51-11e8-9a7c-62794ce13da1',
          ssl : (('https:' == document.location.protocol) ? true : false),
           ssl: true,

      });
		    var livetrack = PUBNUB.init({
          publish_key: 'pub-c-20702885-c7ff-4c42-bb66-99655bb60112',
          subscribe_key: 'sub-c-44d802bc-9d51-11e8-9a7c-62794ce13da1'
        });
      var channel = 'livetracking' + getNonZeroRandomNumber();
      

      
      eon.map({
        pubnub: pubnub,
        id: 'map',
        mbToken: 'pk.eyJ1Ijoic3VjaGl0MjAxOCIsImEiOiJjamtwcDc1ZGkwYXByM3F0OWlxdHhuZmV2In0.6pVwbpgGx4Fqdfm1b5uXtw',
        mbId: 'suchit2018.90qj9ulh', 
        channels: [channel],
        connect: connect,
      
        options: {
          zoomAnimation: false,
        },
         marker: function (latlng, data) {
        var marker = new L.marker(latlng, {
          icon: L.mapbox.marker.icon({
        iconUrl: 'https://www.pubnub.com/wp-content/uploads/2016/05/airplane.png',
        iconSize: [24, 24]
      })
        })
        .bindPopup('<p class="trigger">Device id="864504031218007"</p><br><p class="trigger"></p>');

        return marker;
    }
      });
      function connect() {
        var point = {
          latlng: [12.9716, 77.5946]

        };
		
        setInterval(function(){		
              var new_point = JSON.parse(JSON.stringify(point));

        livetrack.subscribe({
          channel: 'livetracking',
          message:function(m){
             
			if(m["deviceCode"] =863977033715231){
          myvar = [
			m["location_latitude"],m["location_longitude"]
			];
			data = [m["deviceCode"]];
		  }},
          connect : publish
        });
        function publish() {
          livetrack.publish({
            channel: 'livetracking',
            message: {deviceCode: 863977033715231, location_latitude: 12.9875059128, location_longitude: 77.7405853271, location_wardName: "other", pyld_alarmType: "HMW"},
          });
        }
 new_point.latlng = [myvar[0],myvar[1]];       
 

	   pubnub.publish({
            channel: channel,
            message: {
              point_1: new_point
              }
          });
        }, 500);
		<!--------------End of first device-------------------------->
		
          map.on('error', e => {
    // Hide those annoying non-error errors
    if (e && e.error !== 'Error: Not Found')
        console.error(e);
});

        
      setInterval(function(){		
               var new_point = JSON.parse(JSON.stringify(point));

        livetrack.subscribe({
          channel: 'livetracking',
          message:function(m){
			if(m["deviceCode"] =864504031502210){
          myvar = [
			m["location_latitude"],m["location_longitude"]
			];
			
		  }},
          connect : publish
        });
        function publish() {
          livetrack.publish({
            channel: 'livetracking',
            message: {location_latitude: 12.9949226379, location_wardName: "Hudi", pyld_alarmType: "Overspeed", location_longitude: 77.7268447876, deviceCode: 864504031502210},
          });
        }
 new_point.latlng = [myvar[0],myvar[1]];       
 

	   pubnub.publish({
            channel: channel,
            message: {
              point_2: new_point
            }
          });
        }, 500);
	  		<!--------------End of second device-------------------------->
 setInterval(function(){		
               var new_point = JSON.parse(JSON.stringify(point));
        livetrack.subscribe({
          channel: 'livetracking',
          message:function(m){
			if(m["deviceCode"] =863977033764239){
          myvar = [
			m["location_latitude"],m["location_longitude"]
			];
			
		  }},
          connect : publish
        });
        function publish() {
          livetrack.publish({
            channel: 'livetracking',
            message: {location_latitude: 12.9345026016, location_wardName: "Bellanduru", pyld_alarmType: "HMW", location_longitude: 77.6900253296, deviceCode: 863977033764239},
          });
        }
 new_point.latlng = [myvar[0],myvar[1]];       
 

	   pubnub.publish({
            channel: channel,
            message: {
              point_3: new_point
            }
          });
        }, 500);
	  		<!--------------End of third device-------------------------->
setInterval(function(){		
               var new_point = JSON.parse(JSON.stringify(point));
        livetrack.subscribe({
          channel: 'livetracking',
          message:function(m){
			if(m["deviceCode"] =864504031205202){
          myvar = [
			m["location_latitude"],m["location_longitude"]
			];
			
		  }},
          connect : publish
        });
        function publish() {
          livetrack.publish({
            channel: 'livetracking',
            message: {location_latitude: 12.9345026016, location_wardName: "Bellanduru", pyld_alarmType: "HMW", location_longitude: 77.6900253296, deviceCode: 864504031205202},
          });
        }
 new_point.latlng = [myvar[0],myvar[1]];       
 

	   pubnub.publish({
            channel: channel,
            message: {
              point_4: new_point
            }
          });
        }, 500);
        	  		<!--------------End of fourth device-------------------------->

        setInterval(function(){		
               var new_point = JSON.parse(JSON.stringify(point));
        livetrack.subscribe({
          channel: 'livetracking',
          message:function(m){
			if(m["deviceCode"] =864504031234988){
          myvar = [
			m["location_latitude"],m["location_longitude"]
			];
			
		  }},
          connect : publish
        });
        function publish() {
          livetrack.publish({
            channel: 'livetracking',
            message: {location_latitude: 12.9345026016, location_wardName: "Bellanduru", pyld_alarmType: "HMW", location_longitude: 77.6900253296, deviceCode: 864504031234988},
          });
        }
 new_point.latlng = [myvar[0],myvar[1]];       
 

	   pubnub.publish({
            channel: channel,
            message: {
              point_5: new_point
            }
          });
        }, 500);
        	  		<!--------------End of fifth device-------------------------->
        	  		
setInterval(function(){		
               var new_point = JSON.parse(JSON.stringify(point));
        livetrack.subscribe({
          channel: 'livetracking',
          message:function(m){
			if(m["deviceCode"] =863977033713764){
          myvar = [
			m["location_latitude"],m["location_longitude"]
			];
			
		  }},
          connect : publish
        });
        function publish() {
          livetrack.publish({
            channel: 'livetracking',
            message: {location_latitude: 12.9345026016, location_wardName: "Bellanduru", pyld_alarmType: "HMW", location_longitude: 77.6900253296, deviceCode: 863977033713764},
          });
        }
 new_point.latlng = [myvar[0],myvar[1]];       
 

	   pubnub.publish({
            channel: channel,
            message: {
              point_6: new_point
            }
          });
        }, 500);
        	  		<!--------------End of sixth device-------------------------->        	  		
        	  		
        setInterval(function(){		
               var new_point = JSON.parse(JSON.stringify(point));
        livetrack.subscribe({
          channel: 'livetracking',
          message:function(m){
			if(m["deviceCode"] =864504031260694){
          myvar = [
			m["location_latitude"],m["location_longitude"]
			];
			
		  }},
          connect : publish
        });
        function publish() {
          livetrack.publish({
            channel: 'livetracking',
            message: {location_latitude: 12.9345026016, location_wardName: "Bellanduru", pyld_alarmType: "HMW", location_longitude: 77.6900253296, deviceCode: 864504031260694},
          });
        }
 new_point.latlng = [myvar[0],myvar[1]];       
 

	   pubnub.publish({
            channel: channel,
            message: {
              point_7: new_point
            }
          });
        }, 500);
        	  		<!--------------End of seventh device-------------------------->
        setInterval(function(){		
               var new_point = JSON.parse(JSON.stringify(point));
        livetrack.subscribe({
          channel: 'livetracking',
          message:function(m){
			if(m["deviceCode"] =863977033907911){
          myvar = [
			m["location_latitude"],m["location_longitude"]
			];
			
		  }},
          connect : publish
        });
        function publish() {
          livetrack.publish({
            channel: 'livetracking',
            message: {location_latitude: 12.9345026016, location_wardName: "Bellanduru", pyld_alarmType: "HMW", location_longitude: 77.6900253296, deviceCode: 863977033907911},
          });
        }
 new_point.latlng = [myvar[0],myvar[1]];       
 

	   pubnub.publish({
            channel: channel,
            message: {
              point_8: new_point
            }
          });
        }, 500);
        	  		<!--------------End of eigth device-------------------------->
        setInterval(function(){		
               var new_point = JSON.parse(JSON.stringify(point));
        livetrack.subscribe({
          channel: 'livetracking',
          message:function(m){
			if(m["deviceCode"] =863977033766374){
          myvar = [
			m["location_latitude"],m["location_longitude"]
			];
			
		  }},
          connect : publish
        });
        function publish() {
          livetrack.publish({
            channel: 'livetracking',
            message: {location_latitude: 12.9345026016, location_wardName: "Bellanduru", pyld_alarmType: "HMW", location_longitude: 77.6900253296, deviceCode: 863977033766374},
          });
        }
 new_point.latlng = [myvar[0],myvar[1]];       
 

	   pubnub.publish({
            channel: channel,
            message: {
              point_9: new_point
            }
          });
        }, 500);
        	  		<!--------------End of ninth device-------------------------->	  		
        	  		 setInterval(function(){		
               var new_point = JSON.parse(JSON.stringify(point));
        livetrack.subscribe({
          channel: 'livetracking',
          message:function(m){
			if(m["deviceCode"] =864504031782226){
          myvar = [
			m["location_latitude"],m["location_longitude"]
			];
			
		  }},
          connect : publish
        });
        function publish() {
          livetrack.publish({
            channel: 'livetracking',
            message: {location_latitude: 12.9345026016, location_wardName: "Bellanduru", pyld_alarmType: "HMW", location_longitude: 77.6900253296, deviceCode: 864504031782226},
          });
        }
 new_point.latlng = [myvar[0],myvar[1]];       
 

	   pubnub.publish({
            channel: channel,
            message: {
              point_10: new_point
            }
          });
        }, 500);
        	  		<!--------------End of tenth device-------------------------->	
        	  		
        	  		 setInterval(function(){		
               var new_point = JSON.parse(JSON.stringify(point));
        livetrack.subscribe({
          channel: 'livetracking',
          message:function(m){
			if(m["deviceCode"] =862010039078304){
          myvar = [
			m["location_latitude"],m["location_longitude"]
			];
			
		  }},
          connect : publish
        });
        function publish() {
          livetrack.publish({
            channel: 'livetracking',
            message: {location_latitude: 12.9345026016, location_wardName: "Bellanduru", pyld_alarmType: "HMW", location_longitude: 77.6900253296, deviceCode: 862010039078304},
          });
        }
 new_point.latlng = [myvar[0],myvar[1]];       
 

	   pubnub.publish({
            channel: channel,
            message: {
              point_11: new_point
            }
          });
        }, 500);
        	  		<!--------------End of 11th device-------------------------->	
        	  		
        	  		 setInterval(function(){		
               var new_point = JSON.parse(JSON.stringify(point));
        livetrack.subscribe({
          channel: 'livetracking',
          message:function(m){
			if(m["deviceCode"] =863977033703997){
          myvar = [
			m["location_latitude"],m["location_longitude"]
			];
			
		  }},
          connect : publish
        });
        function publish() {
          livetrack.publish({
            channel: 'livetracking',
            message: {location_latitude: 12.9345026016, location_wardName: "Bellanduru", pyld_alarmType: "HMW", location_longitude: 77.6900253296, deviceCode: 863977033703997},
          });
        }
 new_point.latlng = [myvar[0],myvar[1]];       
 

	   pubnub.publish({
            channel: channel,
            message: {
              point_12: new_point
            }
          });
        }, 500);
        	  		<!--------------End of 12th device-------------------------->			
    	
        	  		 setInterval(function(){		
               var new_point = JSON.parse(JSON.stringify(point));
        livetrack.subscribe({
          channel: 'livetracking',
          message:function(m){
			if(m["deviceCode"] =863977033802534){
          myvar = [
			m["location_latitude"],m["location_longitude"]
			];
			
		  }},
          connect : publish
        });
        function publish() {
          livetrack.publish({
            channel: 'livetracking',
            message: {location_latitude: 12.9345026016, location_wardName: "Bellanduru", pyld_alarmType: "HMW", location_longitude: 77.6900253296, deviceCode: 863977033802534},
          });
        }
 new_point.latlng = [myvar[0],myvar[1]];       
 

	   pubnub.publish({
            channel: channel,
            message: {
              point_13: new_point
            }
          });
        }, 500);
        	  		<!--------------End of 13th device-------------------------->
        	  		
    	
        	  		 setInterval(function(){		
               var new_point = JSON.parse(JSON.stringify(point));
        livetrack.subscribe({
          channel: 'livetracking',
          message:function(m){
			if(m["deviceCode"] =864504031819929){
          myvar = [
			m["location_latitude"],m["location_longitude"]
			];
			
		  }},
          connect : publish
        });
        function publish() {
          livetrack.publish({
            channel: 'livetracking',
            message: {location_latitude: 12.9345026016, location_wardName: "Bellanduru", pyld_alarmType: "HMW", location_longitude: 77.6900253296, deviceCode: 864504031819929},
          });
        }
 new_point.latlng = [myvar[0],myvar[1]];       
 

	   pubnub.publish({
            channel: channel,
            message: {
              point_14: new_point
            }
          });
        }, 500);
        	  		<!--------------End of 14th device-------------------------->			
    	
        	  		 setInterval(function(){		
               var new_point = JSON.parse(JSON.stringify(point));
        livetrack.subscribe({
          channel: 'livetracking',
          message:function(m){
			if(m["deviceCode"] =864504031235647){
          myvar = [
			m["location_latitude"],m["location_longitude"]
			];
			
		  }},
          connect : publish
        });
        function publish() {
          livetrack.publish({
            channel: 'livetracking',
            message: {location_latitude: 12.9345026016, location_wardName: "Bellanduru", pyld_alarmType: "HMW", location_longitude: 77.6900253296, deviceCode: 864504031235647},
          });
        }
 new_point.latlng = [myvar[0],myvar[1]];       
 

	   pubnub.publish({
            channel: channel,
            message: {
              point_15: new_point
            }
          });
        }, 500);
        	  		<!--------------End of 15th device-------------------------->			
       	
        	  		 setInterval(function(){		
               var new_point = JSON.parse(JSON.stringify(point));
        livetrack.subscribe({
          channel: 'livetracking',
          message:function(m){
			if(m["deviceCode"] =864504031432707){
          myvar = [
			m["location_latitude"],m["location_longitude"]
			];
			
		  }},
          connect : publish
        });
        function publish() {
          livetrack.publish({
            channel: 'livetracking',
            message: {location_latitude: 12.9345026016, location_wardName: "Bellanduru", pyld_alarmType: "HMW", location_longitude: 77.6900253296, deviceCode: 864504031432707},
          });
        }
 new_point.latlng = [myvar[0],myvar[1]];       
 

	   pubnub.publish({
            channel: channel,
            message: {
              point_16: new_point
            }
          });
        }, 500);
        	  		<!--------------End of 16th device-------------------------->			
        	
        	  		 setInterval(function(){		
               var new_point = JSON.parse(JSON.stringify(point));
        livetrack.subscribe({
          channel: 'livetracking',
          message:function(m){
			if(m["deviceCode"] =863977033715231){
          myvar = [
			m["location_latitude"],m["location_longitude"]
			];
			
		  }},
          connect : publish
        });
        function publish() {
          livetrack.publish({
            channel: 'livetracking',
            message: {location_latitude: 12.9345026016, location_wardName: "Bellanduru", pyld_alarmType: "HMW", location_longitude: 77.6900253296, deviceCode: 863977033715231},
          });
        }
 new_point.latlng = [myvar[0],myvar[1]];       
 

	   pubnub.publish({
            channel: channel,
            message: {
              point_17: new_point
            }
          });
        }, 500);
        	  		<!--------------End of 17th device-------------------------->	
     	
        	  		 setInterval(function(){		
               var new_point = JSON.parse(JSON.stringify(point));
        livetrack.subscribe({
          channel: 'livetracking',
          message:function(m){
			if(m["deviceCode"] =864504031218007){
          myvar = [
			m["location_latitude"],m["location_longitude"]
			];
			
		  }},
          connect : publish
        });
        function publish() {
          livetrack.publish({
            channel: 'livetracking',
            message: {location_latitude: 12.9345026016, location_wardName: "Bellanduru", pyld_alarmType: "HMW", location_longitude: 77.6900253296, deviceCode: 864504031218007},
          });
        }
 new_point.latlng = [myvar[0],myvar[1]];       
 

	   pubnub.publish({
            channel: channel,
            message: {
              point_18: new_point
            }
          });
        }, 500);
        	  		<!--------------End of 18th device-------------------------->			
        	  		   	  		
    	
        	  		 setInterval(function(){		
               var new_point = JSON.parse(JSON.stringify(point));
        livetrack.subscribe({
          channel: 'livetracking',
          message:function(m){
			if(m["deviceCode"] =863977033612396){
          myvar = [
			m["location_latitude"],m["location_longitude"]
			];
			
		  }},
          connect : publish
        });
        function publish() {
          livetrack.publish({
            channel: 'livetracking',
            message: {location_latitude: 12.9345026016, location_wardName: "Bellanduru", pyld_alarmType: "HMW", location_longitude: 77.6900253296, deviceCode: 863977033612396},
          });
        }
 new_point.latlng = [myvar[0],myvar[1]];       
 

	   pubnub.publish({
            channel: channel,
            message: {
              point_19: new_point
            }
          });
        }, 500);
        	  		<!--------------End of 19th device-------------------------->			
     	
        	  		 setInterval(function(){		
               var new_point = JSON.parse(JSON.stringify(point));
        livetrack.subscribe({
          channel: 'livetracking',
          message:function(m){
			if(m["deviceCode"] =863977033828794){
          myvar = [
			m["location_latitude"],m["location_longitude"]
			];
			
		  }},
          connect : publish
        });
        function publish() {
          livetrack.publish({
            channel: 'livetracking',
            message: {location_latitude: 12.9345026016, location_wardName: "Bellanduru", pyld_alarmType: "HMW", location_longitude: 77.6900253296, deviceCode: 863977033828794},
          });
        }
 new_point.latlng = [myvar[0],myvar[1]];       
 

	   pubnub.publish({
            channel: channel,
            message: {
              point_20: new_point
            }
          });
        }, 500);
        	  		<!--------------End of 20th device-------------------------->			
        	
        	  		 setInterval(function(){		
               var new_point = JSON.parse(JSON.stringify(point));
        livetrack.subscribe({
          channel: 'livetracking',
          message:function(m){
			if(m["deviceCode"] =863977033827523){
          myvar = [
			m["location_latitude"],m["location_longitude"]
			];
			
		  }},
          connect : publish
        });
        function publish() {
          livetrack.publish({
            channel: 'livetracking',
            message: {location_latitude: 12.9345026016, location_wardName: "Bellanduru", pyld_alarmType: "HMW", location_longitude: 77.6900253296, deviceCode: 863977033827523},
          });
        }
 new_point.latlng = [myvar[0],myvar[1]];       
 

	   pubnub.publish({
            channel: channel,
            message: {
              point_21: new_point
            }
          });
        }, 500);
        	  		<!--------------End of 21th device-------------------------->			
       
        	  		 setInterval(function(){		
               var new_point = JSON.parse(JSON.stringify(point));
        livetrack.subscribe({
          channel: 'livetracking',
          message:function(m){
			if(m["deviceCode"] =864504031035658){
          myvar = [
			m["location_latitude"],m["location_longitude"]
			];
			
		  }},
          connect : publish
        });
        function publish() {
          livetrack.publish({
            channel: 'livetracking',
            message: {location_latitude: 12.9345026016, location_wardName: "Bellanduru", pyld_alarmType: "HMW", location_longitude: 77.6900253296, deviceCode: 864504031035658},
          });
        }
 new_point.latlng = [myvar[0],myvar[1]];       
 

	   pubnub.publish({
            channel: channel,
            message: {
              point_22: new_point
            }
          });
        }, 500);
        	  		<!--------------End of 22th device-------------------------->	 
        	  		
    
        	  		 setInterval(function(){		
               var new_point = JSON.parse(JSON.stringify(point));
        livetrack.subscribe({
          channel: 'livetracking',
          message:function(m){
			if(m["deviceCode"] =863977033835484){
          myvar = [
			m["location_latitude"],m["location_longitude"]
			];
			
		  }},
          connect : publish
        });
        function publish() {
          livetrack.publish({
            channel: 'livetracking',
            message: {location_latitude: 12.9345026016, location_wardName: "Bellanduru", pyld_alarmType: "HMW", location_longitude: 77.6900253296, deviceCode: 863977033835484},
          });
        }
 new_point.latlng = [myvar[0],myvar[1]];       
 

	   pubnub.publish({
            channel: channel,
            message: {
              point_23: new_point
            }
          });
        }, 500);
        	  		<!--------------End of 23rd device-------------------------->
    
        	  		 setInterval(function(){		
               var new_point = JSON.parse(JSON.stringify(point));
        livetrack.subscribe({
          channel: 'livetracking',
          message:function(m){
			if(m["deviceCode"] =863977033895017){
          myvar = [
			m["location_latitude"],m["location_longitude"]
			];
			
		  }},
          connect : publish
        });
        function publish() {
          livetrack.publish({
            channel: 'livetracking',
            message: {location_latitude: 12.9345026016, location_wardName: "Bellanduru", pyld_alarmType: "HMW", location_longitude: 77.6900253296, deviceCode: 863977033895017},
          });
        }
 new_point.latlng = [myvar[0],myvar[1]];       
 

	   pubnub.publish({
            channel: channel,
            message: {
              point_24: new_point
            }
          });
        }, 500);
        	  		<!--------------End of 24rd device-------------------------->	
    	 setInterval(function(){		
               var new_point = JSON.parse(JSON.stringify(point));
        livetrack.subscribe({
          channel: 'livetracking',
          message:function(m){
			if(m["deviceCode"] =863977033828919){
          myvar = [
			m["location_latitude"],m["location_longitude"]
			];
			
		  }},
          connect : publish
        });
        function publish() {
          livetrack.publish({
            channel: 'livetracking',
            message: {location_latitude: 12.9345026016, location_wardName: "Bellanduru", pyld_alarmType: "HMW", location_longitude: 77.6900253296, deviceCode: 863977033828919},
          });
        }
 new_point.latlng = [myvar[0],myvar[1]];       
 

	   pubnub.publish({
            channel: channel,
            message: {
              point_25: new_point
            }
          });
        }, 500);
        	  		<!--------------End of 25th device-------------------------->	 
        	  		
        	  		
    	 setInterval(function(){		
               var new_point = JSON.parse(JSON.stringify(point));
        livetrack.subscribe({
          channel: 'livetracking',
          message:function(m){
			if(m["deviceCode"] =863083037582683){
          myvar = [
			m["location_latitude"],m["location_longitude"]
			];
			
		  }},
          connect : publish
        });
        function publish() {
          livetrack.publish({
            channel: 'livetracking',
            message: {location_latitude: 12.9345026016, location_wardName: "Bellanduru", pyld_alarmType: "HMW", location_longitude: 77.6900253296, deviceCode: 863083037582683},
          });
        }
 new_point.latlng = [myvar[0],myvar[1]];       
 

	   pubnub.publish({
            channel: channel,
            message: {
              point_26: new_point
            }
          });
        }, 500);
        	  		<!--------------End of 26th device-------------------------->
        	  		
        	  		
    	 
	  <!----------End of connect funtion----------------------------->
	  };
    </script>
  </body>
</html>
