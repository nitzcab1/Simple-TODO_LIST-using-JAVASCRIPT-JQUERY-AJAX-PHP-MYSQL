$('#update_btn').hide();
get_task();

function add_task(){
    var task = $('#task').val();
    if(task==''){
        $('#msg').html('INPUT TASK<br>');
    }
    else{
        $.post('php/add_task.php',{ptask:task},function(data){
            var data = JSON.parse(data);
            $('#msg').html(data.msg+'<br>');
            $('#task').val('');
            get_task();
        });
    }
}

function get_task(){
    $.get('php/get_task.php',function(data){
        var data = JSON.parse(data);
        $('#todolist').html(data.data[0]);
        if(data.data.status==0){
            $('#todolist').html("<h3 style='text-align:center;'>"+data.data.msg+"</h3>");       
            $('#msg').html('');
        }
        if(data.status == 1){
            var i;
            var html;
            for(i = 0; i < data.data.length; i++){
                html+= "<tr><td class='col-md-8'><input type='hidden' value="+data.data[i].id+"><p>"+data.data[i].description+"</p></td>";
                html+= "<td class='col-md-4'><input type='button' class='btnedit btn-y' value='Edit' onClick='edit_task();'><input type='button' class='btndelete btn-danger' value='Delete' onClick='delete_task();'></td></tr>";
            }
        $('#todolist').html(html);
        }
    });
}

function edit_task(){
    $('#msg').html('');
    $('#add_btn').hide();
    $('#update_btn').show();
    var id = event.target.parentNode.parentNode.childNodes[0].childNodes[0].value;
   //console.log(event.target.className);
     $.post('php/get_edit_task.php',{pid:id},function(data){
        var data = JSON.parse(data);
        $('#id_task').val(data.data[0].id);
        $('#task').val(data.data[0].description);
    });
}

function delete_task(){
    var id = event.target.parentNode.parentNode.childNodes[0].childNodes[0].value;
    $.get('php/delete_task.php',{pid:id},function(data){
        var data = JSON.parse(data);
        $('#msg').html(data.msg+'<br>');
        get_task();
    });
}

function update_task(){
    $('#add_btn').show();
    $('#update_btn').hide();
    var task = $('#task').val();
    var id = $('#id_task').val();
    if(task==''){
        $('#msg').html('INPUT TASK<br>');
    }
    else{
        $.post('php/update_task.php',{ptask:task,pid:id},function(data){
            var data = JSON.parse(data);
            $('#msg').html(data.msg+'<br>');
            $('#task').val('');
            get_task();
        });
    }   
}