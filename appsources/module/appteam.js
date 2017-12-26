document.addEventListener('contextmenu', event => event.preventDefault());
var getUrl 	= window.location;
var toUrl 	= getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
$('#formteam').submit(function(event){

    event.preventDefault();
    var form = new FormData(this);

// alert(toUrl);
// return;
    $.ajax({

        type:'POST',
        url:toUrl+'/team/saveteam',
        data:form,
        cache: false,
        contentType: false,
        processData: false,
        success:function(data){
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

function delete_team(team_id){
    var getUrl 	= window.location;
    var toUrl 	= getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
    $.ajax({
        
                type:'POST',
                url:toUrl+'/team/delete_team',
                data:{team_id:team_id},
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

function edit_team(team_id){
    var getUrl 	= window.location;
    var toUrl 	= getUrl .protocol + "//" + getUrl.host + "/" + getUrl.pathname.split('/')[1];
    $.ajax({
        
                type:'POST',
                url:toUrl+'/team/deleteteam',
                data:{team_id:team_id},
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
$('#formeditteam').submit(function(event){

    event.preventDefault();
    var form = new FormData(this);
    $.ajax({

        type:'POST',
        url:toUrl+'/team/save_edit_team',
        data:form,
        cache: false,
        contentType: false,
        processData: false,
        success:function(data){
            if (data=='sukses'){
                window.location.href=toUrl+"/team";
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