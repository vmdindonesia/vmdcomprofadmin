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