document.addEventListener('contextmenu', event => event.preventDefault());
var getUrl 	= window.location;
var toUrl 	= getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
$('#formclient').submit(function(event){

    event.preventDefault();
    var form = $('#formclient');

// alert(toUrl);
// return;
    $.ajax({

        type:'POST',
        url:toUrl+'/client/saveclient',
        data:form.serialize(),
        success:function(data){
            alert(data);
            return;
            if (data=='sukses'){
                window.location.href=toUrl+"/Dashboard";
            }
            else{
                $("#password").val("");
                alert("Password atau username salah");

            }

        },error: function(xhr, ajaxOptions, thrownError){            
			alert(xhr.responseText);
			$("#loginbutton").html('<button class="btn waves-effect waves-light col s12">Login</button>');
		}
    })
})