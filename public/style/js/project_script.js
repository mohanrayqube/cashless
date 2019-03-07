

    $('#datepairExample .time').timepicker({
        'showDuration': true,
        'timeFormat': 'g:ia'
    });


        function task_activity_list($id) {
            console.log($id);
            $.ajax({                
                type: 'get',
                url: '/task_activity_list/'+$id,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function($data, $status, $test){
                    // console.log($data);
                    $("#task_activity_list").html($data);
                }
            });
            
        }
   

        function task_activity_list($id) {
            console.log($id);
            $.ajax({                
                type: 'get',
                url: 'task_activity_list/'+$id,
                success: function($data, $status, $test){
                    // console.log($data);
                    $("#task_activity_list").html($data);
                }
            });
            
        }




    function task_description($id){
        $('#task_description_'+$id).html('<div class="form-group"><textarea type="textarea" name="description" id="change_task_description_'+$id+'" rows="5" cols="80" onChange="change_task_description('+$id+')">'+$('#task_description_'+$id).text()+'</textarea></div>');
    }

    function change_task_description($id){
        $.ajax({
            type: "post",
            url: "/task/update",
            data: {'description':$('#change_task_description_'+$id).val(), 'task_id':$id, 'changed_field':'Description'},
            dataType: "json",
            headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(){

                $('#task_description_'+$id).html($('#change_task_description_'+$id).val());
                Lobibox.notify('info', {
                delay: 15000,
                title: '',
                msg: 'Successfullu update!!!!!!!!',
                position: 'top right',
                size: 'mini'
            });
            },
            error: function() {
                console.log('dddddddddd');
                task_activity_list($id);
                Lobibox.notify('info', {
                    delay: 15000,
                    title: '',
                    msg: 'Successfullu update!!!!!!!!',
                    position: 'top right',
                    size: 'mini'
                });
            }
        });
    };


    function task_status($id, $status){
        $('#task_status_'+$id).html('<div class="form-group"><select name="status" id="change_task_status_'+$id+'" onChange="change_task_status('+$id+','+$status+')"><option value="1">Open</option><option value="0">Close</option><option value="2">In progress</option></select></div>');
    }
    function change_task_status($id, $status){
        console.log('sssssss');
        if($status == 1){ var oldStatus = 'Open';}
        if($status == 0){ var oldStatus = 'Close';}
        if($status == 2){ var oldStatus = 'In progress';}
        if($('#change_task_status_'+$id).val() == 1){ var newStatus = 'Open';}
        if($('#change_task_status_'+$id).val() == 0){ var newStatus = 'Close';}
        if($('#change_task_status_'+$id).val() == 2){ var newStatus = 'In progress';}
        $.ajax({
            type: "post",
            url: "/task/update",
            data: {'status':$('#change_task_status_'+$id).val(), 'task_id':$id, 'changed_field':'status change '+oldStatus+' to '+newStatus },
            dataType: "json",
            headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(){
                $('#task_status_'+$id).html($('#change_task_status_'+$id).val());
                Lobibox.notify('info', {
                delay: false,
                title: 'Info title',
                msg: 'Lorem ipsum dolor sit amet against apennine any created, spend loveliest, building stripes.'
            });
            }
        });
    }
    function task_start_date($id){
        $('#task_start_date_'+$id).html('<span> <div class="form-group data-custon-pick" id="data_4"><div class="input-group date"><span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" name="start_date" id="change_task_start_date_'+$id+'" value=""  placeholder="Start date" onChange="change_task_start_date('+$id+')"></div></div></span>');
    }
    function change_task_start_date($id){

        console.log('sssssss');
        $.ajax({
            type: "post",
            url: "/task/update",
            data: {'start_date':$('#change_task_start_date_'+$id).val(), 'task_id':$id, 'changed_field':'start_date'},
            dataType: "json",
            headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(){
                $('#task_start_date_'+$id).html($('#change_task_start_date_'+$id).val());
                Lobibox.notify('info', {
                delay: false,
                title: 'Info title',
                msg: 'Lorem ipsum dolor sit amet against apennine any created, spend loveliest, building stripes.'
            });
            }
        });
    }
    function task_end_date($id){
        $('#task_end_date_'+$id).html('<span> <div class="form-group data-custon-pick" id="data_1"><div class="input-group date"><span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" name="end_date" id="change_task_end_date_'+$id+'" value="" placeholder="End date" onChange="change_task_responsible('+$id+')"></div></div></span>');
    }
    function change_task_end_date($id){
        console.log('sssssss');
        $.ajax({
            type: "post",
            url: "/task/update",
            data: {'end_date':$('#change_task_end_date_'+$id).val(), 'task_id':$id, 'changed_field':'end_date'},
            dataType: "json",
            headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(){
                $('#task_end_date_'+$id).html($('#change_task_end_date_'+$id).val());
                Lobibox.notify('info', {
                delay: false,
                title: 'Info title',
                msg: 'Lorem ipsum dolor sit amet against apennine any created, spend loveliest, building stripes.'
            });
            }
        });
    }
    function task_responsible($id, $responsible){
        
        $('#task_responsible_'+$id).html('<select data-placeholder="Choose members..." class="chosen-select form-control" tabindex="-1" name="responsible" id="change_task_responsible_'+$id+'" onChange="change_task_responsible('+$id+','+$responsible+')"">{{user_select_list()}}</select>');
    }
    function change_task_responsible($id, $responsible){
        console.log('sssssss');
        $.ajax({
            type: "post",
            url: "/task/update",
            data: {'responsible':$('#change_task_responsible_'+$id).val(), 'task_id':$id, 'changed_field':'Responsible'},
            dataType: "json",
            headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(){
                $('#task_responsible_'+$id).html($('#change_task_responsible_'+$id).val());
                Lobibox.notify('info', {
                delay: false,
                title: 'Info title',
                msg: 'Lorem ipsum dolor sit amet against apennine any created, spend loveliest, building stripes.'
            });
            }
        });
    }
    function task_assignee($id, $assignee){
        
        $('#task_assignee_'+$id).html('<select data-placeholder="Choose members..." class="chosen-select form-control" tabindex="-1" name="assignee" id="change_task_assignee_'+$id+'" onChange="change_task_assignee('+$id+','+$assignee+')"">{{user_select_list()}}</select>');
    }
    function change_task_assignee($id, $assignee){
        console.log('sssssss');
        $.ajax({
            type: "post",
            url: "/task/update",
            data: {'assignee':$('#change_task_assignee_'+$id).val(), 'task_id':$id, 'changed_field':'Assignee'},
            dataType: "json",
            headers: {
                  'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function(){
                $('#task_assignee_'+$id).html($('#change_task_assignee_'+$id).val());
                Lobibox.notify('info', {
                delay: false,
                title: 'Info title',
                msg: 'Lorem ipsum dolor sit amet against apennine any created, spend loveliest, building stripes.'
            });
            }
        });
    }
      
        $("#view_task_list").on("change", function(){
            $id = $("#view_task_list").val();
            if($id == ''){
                $("#task_list").text('');
                $("#task_activity_list").text('');
            }else{
                $.ajax({                
                    type: 'get',
                    url: 'tasks/'+$id,
                    success: function($data, $status, $test){
                        // console.log($data);
                        $("#task_list").html($data);
                    }
                });
                $.ajax({                
                    type: 'get',
                    url: 'task_activity_list/'+$id,
                    success: function($data, $status, $test){
                        // console.log($data);
                        $("#task_activity_list").html($data);
                    }
                });
            }
        }); 

        
        $("#view_task_list").on("change", function(){
            $id = $("#view_task_list").val();
            if($id == ''){
                $("#task_list").text('');
                $("#task_activity_list").text('');
            }else{
                $.ajax({                
                    type: 'get',
                    url: 'tasks/'+$id,
                    success: function($data, $status, $test){
                        // console.log($data);
                        $("#task_list").html($data);
                    }
                });
            }
        }); 
        
