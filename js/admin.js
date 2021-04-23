function finishcommission(){
    var id = document.getElementById("id").value;
    var filename = document.getElementById("fileToUpload");
    var res = filename.value.replace("C:\\fakepath\\","")
    $.ajax({ type: 'GET',
        url: '../../database/finishcommission.php',
        data: {
            id: id,
            filename:res,
        },
        async: true,
        success : function(text){
            var file_data = $('#fileToUpload').prop('files')[0];

            var form_data = new FormData();

            form_data.append('file', file_data);

            $.ajax({
                url: '../../file/uploadadmin.php', // point to server-side PHP script
                dataType: 'text',  // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function(php_script_response){

                    alert("Commission uploaded")
                }
            });}
    })}
window.addEventListener("load", function(){
$.ajax({ type: 'GET',   //Loads catagory For add member
    url: "../../database/getallcomissions.php",
    data: {
    },
    async: true,
    success : function(text){
        //  $('#cata').html(text);
        $('#Commsionall').html(text);

    }
});
$.ajax({ type: 'GET',   //Loads catagory For add member
    url: "../../database/getactivecommissons.php",
    data: {
    },
    async: true,
    success : function(text){
        //  $('#cata').html(text);
        $('#Commsion').html(text);

    }
});});
