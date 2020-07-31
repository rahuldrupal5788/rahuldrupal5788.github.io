$(document).ready(function(){
  // Get Opt-in User Lists
  $("#optinusers").click(function(){
    $.ajax({
      url: 'https://api.gupshup.io/sm/api/v1/users/VelocisDemoAccessAPI',
      headers: {
        'apikey':'c77a9947118e4d37cd6098f4b6dbb9aa'
      },
      method: 'GET',
      dataType: 'json',
    	success: function(response){
        var data = response['users'];
        //var myJSON = JSON.stringify(data);

        var table_body = '<table border="1">';
        table_body+= '<tr><th id="name" colspan="6">Get Opt-in User List</th></tr>';
        table_body+= '<tr style="color:white; background-color:#4CAF50;"><td>Country Code</td><td>Phone number</td><td>Optin Source</td><td>Optin Status</td><td>Optin Timestamp</td><td>Last MSG Timestamp</td></tr>';
        data.forEach(element => {
          table_body+='<tr>';
            // Country Code
            table_body +='<td>';
            table_body += element.countryCode;
            table_body +='</td>';
            // Phone
            table_body +='<td>';
            table_body += element.phoneCode;
            table_body +='</td>';
            // Optin Source
            table_body +='<td>';
            table_body += element.optinSource;
            table_body +='</td>';
            // Optin Status
            table_body +='<td>';
            table_body += element.optinStatus;
            table_body +='</td>';
            // Optin Timestamp
            table_body +='<td>';
            table_body += element.optinTimeStamp;
            table_body +='</td>';
            // Last MSG Timestamp
            table_body +='<td>';
            table_body += element.lastMessageTimeStamp;
            table_body +='</td>';    
          table_body+='</tr>';
        });
        table_body+='</table>';
       
        $('.mainData').html(table_body);
        //$('.mainData').replaceWith(JSON.stringify(data));
    	},
    	error: function(e){
    		console.log(e);
    	}
    });
  });


});
