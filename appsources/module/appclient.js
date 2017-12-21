document.addEventListener('contextmenu', event => event.preventDefault());
var getUrl 	= window.location;
var toUrl 	= getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
$('#formclient').submit(function(event){

    event.preventDefault();
    var form = new FormData(this);    

// alert(toUrl);
// return;
    $.ajax({

        type:'POST',
        url:toUrl+'/client/saveclient',
        data:form,
        cache: false,
        contentType: false,
        processData: false,
        success:function(data){
            if (data=='sukses'){
                window.location.href="client";
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
function delete_client(id_client){
    var getUrl 	= window.location;
    var toUrl 	= getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
    $.ajax({
        
                type:'POST',
                url:toUrl+'/client/delete_client',
                data:{id_client:id_client},
                success:function(data){
                    if (data="sukses"){
                        window.location.reload();
                    }else
                    {
                        alert("gagal delete");
                    }
                },error: function(xhr, ajaxOptions, thrownError){
                    alert(xhr.responseText);
                }
            })

}
function edit_client(id_client){
    var getUrl 	= window.location;
    var toUrl 	= getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
    $.ajax({
        
                type:'POST',
                url:toUrl+'/client/deleteclient',
                data:{id_client:id_client},
                success:function(data){
                    if(data="sukses"){
                        window.location.reload();
                    }else{
                        alert("gagal delete");
                    }

                },error: function(xhr, ajaxOptions, thrownError){            
                    alert(xhr.responseText);
                }
            })
}

document.addEventListener('contextmenu', event => event.preventDefault());
var getUrl 	= window.location;
var toUrl 	= getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
$('#formeditclient').submit(function(event){

    event.preventDefault();
    var form = new FormData(this);
    
    $.ajax({
        url:toUrl+'/client/save_edit_client',
        type: "POST",             // Type of request to be send, called as method
        data: new FormData(this), // Data sent to server, a set of key/value pairs (i.e. form fields and values)
        contentType: false,       // The content type used when sending data to the server.
        cache: false,             // To unable request pages to be cached
        processData:false,
        success:function(data){
            // alert(data);
            if (data=='sukses'){
                window.location.href=toUrl+"/client";
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