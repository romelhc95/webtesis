//Script version 5

$("#faculty").change(function(event){
    $.get("careers/"+event.target.value+"",function(response,faculty){
        $("#career").empty();
        for(i=0; i<response.length; i++){
            $('#career').append("<option value='"+response[i].id+"'> "+response[i].description+"</option>");
        }
    });
});

$("#career").change(function(event){
    $.get("areas/"+event.target.value+"",function(response,career){
        $("#area").empty();
        for(i=0; i<response.length; i++){
            $('#area').append("<option value='"+response[i].id+"'> "+response[i].description+"</option>");
        }
    });
});

$("#area").change(function(event){
    $.get("lines/"+event.target.value+"",function(response,area){
        $("#line").empty();
        for(i=0; i<response.length; i++){
            $('#line').append("<option value='"+response[i].id+"'> "+response[i].description+"</option>");
        }
    });
});

//Script Actual
/*$("#faculty").change(event => {
    $.get(`careers/${event.target.value}`,function(res, facul){
        $("#career").empty();
        res.forEach(element => {
           $("#career") .append(`<option value=${element.id}> ${element.description} </option>`);
        });
    });
});*/

