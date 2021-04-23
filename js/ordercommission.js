
function checkform(){
    var email = document.getElementById("emaila").value;
    var desc = document.getElementById("desc").value;
    var type = document.getElementById("selection").value;

    if (email&&desc!=null){
        if (type=="Logo"){
            paypalcheck25();
        }else if(type=="photo"){
            paypalcheck25();
        }else if(type=="Audio"){
            paypalcheck10();
        }
        else if(type=="Video"){
            paypalcheck40();
        }


    }else{
        alert("Make sure to fill out email & Desc")
    }
}

function submitorder(){
    var email = document.getElementById("emaila").value;
    var desc = document.getElementById("desc").value;
    var type = document.getElementById("selection").value;
    var filename = document.getElementById("fileToUpload");
    var res = filename.value.replace("C:\\fakepath\\","")
    $.ajax({ type: 'GET',
        url: '../../file/submit.php',
        data: {
            email: email,
            filename:res,
            desc: desc,
            type:type
        },
        async: true,
        success : function(text){
            var file_data = $('#fileToUpload').prop('files')[0];

            var form_data = new FormData();

            form_data.append('file', file_data);

            $.ajax({
                url: '../../file/upload.php', // point to server-side PHP script
                dataType: 'text',  // what to expect back from the PHP script, if anything
                cache: false,
                contentType: false,
                processData: false,
                data: form_data,
                type: 'post',
                success: function(php_script_response){
                }
            });
            alert(text)
        }
    });
}
window.addEventListener("load", function(){
    $.ajax({ type: 'GET',   //Loads catagory For add member
        url: "../../database/loadcompletecommission.php",
        data: {
        },
        async: true,
        success : function(text){
            //  $('#cata').html(text);
            $('#done').html(text);

        }
    });
});

