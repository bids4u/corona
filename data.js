async function mainData(){
    const respose = await fetch('https://api.nepalcovid19.org/data.json');
    const data = await respose.json();
    var d = new Date();
    var months = ["January","February","March","April","May","June","July","August","September","October","November","December"];

    const date = data["cases_time_series"][data["cases_time_series"].length-1]['date'];
    var totalconfirmed= data["cases_time_series"][data["cases_time_series"].length-1]['totalconfirmed'];
    var totalrecovered = data["cases_time_series"][data["cases_time_series"].length-1]['totalrecovered'];
    var totaldeath = data["cases_time_series"][data["cases_time_series"].length-1]['totaldeceased'];
    var dailyconfirmed= data["cases_time_series"][data["cases_time_series"].length-1]['dailyconfirmed'];
    var dailyrecovered = data["cases_time_series"][data["cases_time_series"].length-1]['dailyrecovered'];
    var dailydeath = data["cases_time_series"][data["cases_time_series"].length-1]['dailydeceased'];

    var totalsamplestested = data["tested"][data["tested"].length-1]['totalsamplestested'];
    var totalpositivecases = data["tested"][data["tested"].length-1]['totalpositivecases'];
    var totalnegativetested = data["tested"][data["tested"].length-1]['totalnegativetested'];
    document.getElementById("d1").innerHTML = totalconfirmed;
    document.getElementById("d2").innerHTML = totalrecovered;
    document.getElementById("d3").innerHTML = totaldeath;
    document.getElementById("d4").innerHTML = totalsamplestested;
    document.getElementById("d5").innerHTML = totalpositivecases;
    document.getElementById("d6").innerHTML = totalnegativetested;

    document.getElementById("d11").innerHTML = dailyconfirmed;
    document.getElementById("d22").innerHTML = dailyrecovered;
    document.getElementById("d33").innerHTML = dailydeath;
    document.getElementById("d44").innerHTML = date;

    }
    async function mainData1(){
      const respose1 = await fetch('https://api.covid19api.com/summary');
      const data1 = await respose1.json();
      console.log(data1);
      document.getElementById("d111").innerHTML = data1['Global']['TotalConfirmed'];
      document.getElementById("d222").innerHTML = data1['Global']['TotalRecovered'];
      document.getElementById("d333").innerHTML = data1['Global']['TotalDeaths'];
    }
    

function topFunction(){ 
  document.body.scrollTop=0;
  document.documentElement.scrollTop = 0;  
}

async function stateData(){
    const respose = await fetch('https://api.nepalcovid19.org/data.json');
    const data = await respose.json();
    console.log(data);
        var tbval = document.getElementById('tbval');
        for (var i=1;i<(data["statewise"].length);i++){
            var x = tbval.insertRow();
            x.insertCell(0);
            tbval.rows[i].cells[0].innerHTML  = data["statewise"][i]["state"];
              
            tbval.rows[i]. cells[0].style.background = '#7a4a91';
            tbval.rows[i]. cells[0].style.color = '#fff ';

            x.insertCell(1);
            tbval.rows[i].cells[1].innerHTML  = data["statewise"][i]["active"];
            tbval.rows[i]. cells[1].style.background = '#4bb7d8';

            x.insertCell(2);
            tbval.rows[i].cells[2].innerHTML  = data["statewise"][i]["confirmed"];
            tbval.rows[i]. cells[2].style.background = '#4bb7d8';
            

            x.insertCell(3);
            tbval.rows[i].cells[3].innerHTML  = data["statewise"][i]["recovered"];
            tbval.rows[i]. cells[3].style.background = '#f36e23';
            

            x.insertCell(4);
            tbval.rows[i].cells[4].innerHTML  = data["statewise"][i]["deaths"];
            tbval.rows[i]. cells[4].style.background = '#4bb7d8';
           

            x.insertCell(5);
            tbval.rows[i].cells[5].innerHTML  = data["statewise"][i]["lastupdatedtime"];
            tbval.rows[i]. cells[5].style.background = '#9cc850';
            
        }}

async function patientData(){
          const respose = await fetch('https://api.nepalcovid19.org/raw_data.json');
          const data = await respose.json();
          console.log(data["raw_data"][0]["patientnumber"]);
              var tbval = document.getElementById('tbval');
              for (var i=1;i<(data["raw_data"].length);i++){
                  var x = tbval.insertRow();
                  x.insertCell(0);
                  tbval.rows[i].cells[0].innerHTML  = data["raw_data"][i-1]["patientnumber"];
                    
                  tbval.rows[i]. cells[0].style.background = '#7a4a91';
                  tbval.rows[i]. cells[0].style.color = '#fff ';
  
                  x.insertCell(1);
                  tbval.rows[i].cells[1].innerHTML  = data["raw_data"][i-1]["currentstatus"];
                  tbval.rows[i]. cells[1].style.background = '#4bb7d8';
  
                  x.insertCell(2);
                  tbval.rows[i].cells[2].innerHTML  = data["raw_data"][i-1]["agebracket"];
                  tbval.rows[i]. cells[2].style.background = '#4bb7d8';
                  
  
                  x.insertCell(3);
                  tbval.rows[i].cells[3].innerHTML  = data["raw_data"][i-1]["gender"];
                  tbval.rows[i]. cells[3].style.background = '#f36e23';
                  
  
                  x.insertCell(4);
                  tbval.rows[i].cells[4].innerHTML  = data["raw_data"][i-1]["detecteddistrict"];
                  tbval.rows[i]. cells[4].style.background = '#4bb7d8';
                 
  
                  x.insertCell(5);
                  tbval.rows[i].cells[5].innerHTML  = data["raw_data"][i-1]["notes"];
                  tbval.rows[i]. cells[5].style.background = '#9cc850';
                  
                  
}}

async function districtData(){
  const respose = await fetch('https://api.nepalcovid19.org/state_district_wise.json');
  const data = await respose.json();
  var tbval = document.getElementById('tbval');
  for (z in data) {
      for (y in data[z]["districtData"]){
  document.getElementById("tbval").innerHTML += "<tr>"+"<td>"+z +"</td>"+"<td>"+y+"</td>"+"<td>"+data[z]["districtData"][y]["confirmed"]+"</td>"+"</tr>";
  }
  }
}

async function worldData(){
  
  const respose = await fetch('https://api.covid19api.com/summary');
  const data = await respose.json();
  var tbval1 = document.getElementById('tbval1');
      var y = tbval1.insertRow();
      y.insertCell(0);
      tbval1.rows[1].cells[0].innerHTML  = data['Global']['TotalConfirmed'];
      y.insertCell(1);
      tbval1.rows[1].cells[1].innerHTML  = data['Global']['TotalRecovered'];
      y.insertCell(2);
      tbval1.rows[1].cells[2].innerHTML  = data['Global']['TotalDeaths'];
      y.insertCell(3);
      tbval1.rows[1].cells[3].innerHTML  = data['Global']['NewConfirmed'];
      y.insertCell(4);
      tbval1.rows[1].cells[4].innerHTML  = data['Global']['NewRecovered'];
      y.insertCell(5);
      tbval1.rows[1].cells[5].innerHTML  = data['Global']['NewDeaths'];

      var tbval = document.getElementById('tbval');
      for (var i=1;i<(data['Countries'].length);i++){
          var x = tbval.insertRow();
          x.insertCell(0);
          tbval.rows[i].cells[0].innerHTML  = data['Countries'][i-1]['Country'];
            
          tbval.rows[i]. cells[0].style.background = '#7a4a91';
          tbval.rows[i]. cells[0].style.color = '#fff ';

          x.insertCell(1);
          tbval.rows[i].cells[1].innerHTML  = data['Countries'][i-1]['TotalConfirmed'];
          tbval.rows[i]. cells[1].style.background = '#4bb7d8';

          x.insertCell(2);
          tbval.rows[i].cells[2].innerHTML  = data['Countries'][i-1]['TotalRecovered'];
          tbval.rows[i]. cells[2].style.background = '#4bb7d8';
          

          x.insertCell(3);
          tbval.rows[i].cells[3].innerHTML  = data['Countries'][i-1]['TotalDeaths'];
          tbval.rows[i]. cells[3].style.background = '#f36e23';
          

          x.insertCell(4);
          tbval.rows[i].cells[4].innerHTML  = data['Countries'][i-1]['NewConfirmed'];
          tbval.rows[i]. cells[4].style.background = '#4bb7d8';
         

          x.insertCell(5);
          tbval.rows[i].cells[5].innerHTML  = data['Countries'][i-1]['NewRecovered'];
          tbval.rows[i]. cells[5].style.background = '#9cc850';
          
          
          x.insertCell(6);
          tbval.rows[i].cells[6].innerHTML  = data['Countries'][i-1]['NewDeaths'];
          tbval.rows[i]. cells[6].style.background = '#f36e23';
          
      }}