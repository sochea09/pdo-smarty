/**
 * Created by tsc on 4/1/16.
 */

function getPost(){
    $.ajax({
        /*url: '/'+module+'/'+action+'.html',*/
        url: '/'+'index.php?module=post&action=default',
        type: "GET",
        success: function(data) {
            $('#pageContent').html(data);
        }
    });
}

function getFormPost(id){
    if(id){
        $.ajax({
            /*url: '/'+module+'/'+action+'.html',*/
            url: '/' + 'index.php?module=post&action=edit',
            type: "GET",
            data: {id: id},
            success: function (data) {
                $('#pageContent').html(data);
            }
        });
    }else {
        $.ajax({
            /*url: '/'+module+'/'+action+'.html',*/
            url: '/' + 'index.php?module=post&action=create',
            type: "GET",
            success: function (data) {
                $('#pageContent').html(data);
            }
        });
    }
}
function postCreatePost(){
    $.ajax({
        /*url: '/'+module+'/'+action+'.html',*/
        url: '/'+'index.php?module=post&action=create',
        type: "POST",
        dataType: "json",
        data: $("#create-post").serialize(),
        success: function(data) {
            if(data['status'] == 'false'){
                $('#error').html(data['error']);
            }else{
                getPost();
            }
        }
    });
}
function postUpdatePost(){
    $.ajax({
        /*url: '/'+module+'/'+action+'.html',*/
        url: '/'+'index.php?module=post&action=edit',
        type: "POST",
        dataType: "json",
        data: $("#update-post").serialize(),
        success: function(data) {
            if(data['status'] == 'false'){
                $('#error').html(data['error']);
            }else{
                getPost();
            }
        }
    });
}

