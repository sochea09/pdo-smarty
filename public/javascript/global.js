function ajaxDelete(module, action, id){
        var parent = $('#'+id+'').parent().parent();
        var id = id;
        if(id){
            if(confirm('Are you sure you want to delete?')){
                $.ajax({
                    url: '/'+module+'/'+action+'.html',
                    type: "post",
                    data: {'id': id},
                    success: function(data) {
                        parent.slideUp(300, function () {
                            parent.remove();
                        });
                    }
                });
                return false;
            }else{
                return false;
            }
        }
}
