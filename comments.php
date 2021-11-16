<?php
date_default_timezone_set('Africa/Lagos');
?>
<html>
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<title>NationalTimes</title>
<meta name="viewport"content="width-device-width,initial-scale=1" />
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4,7.0/css/font-awesome.min.css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<link href="style.css"rel="stylesheet" />
 <link href="stylee.css"rel="stylesheet" />   
</head>

<body>
<div class='container'>
<form method="post" id='comment_form'>
    <div class="form-group">
    <input type='text' name="comment_name" id="comment_name" class="form-control" placeholder="Enter name" />
        
    
    </div>
    <div class="form-group">
    <textarea name="comment_content" id="comment_content" class="form-control" placeholder="Enter comment" rows='5'></textarea>
        
    
    </div>
    <input type='hidden' name='date' class='btn btn-primary' value="<?php echo date('Y-m-d h:i:s') ?>">
    <div class="form-group">
    <input type = "hidden" name="comment_id" id="comment_id" value="0" />
   <input type="submit" id="submit" name="submit" class="btn btn-info" value="submit">
    </div>
</form>
<span id="comment_message"></span>
<br>
<div id="display_comment"></div>
</div>
</body>
</html>
<script>
$(document).ready(function(){
    $('#comment_form').on('submit', function(event){
      event.preventDefault();
        var form_data = $(this).serialize();
        $.ajax({
            url:"add_comment.php",
            method:"POST",
            data:form_data,
            dataType:"JSON",
            success:function(data){
                if(data.error !=''){
                    $('#comment_form')[0].reset();
                    $('#comment_message').html(data.error);
                    $('#comment_id').val('0');
                    load_comment();
                }
            }
        })
    });
});
    load_comment();
    
    function load_comment(){
        $.ajax({
            url:"fetch_comment.php",
            method:"POST",
            success:function(data){
                $('#display_comment').html(data);
            }
        })
    }
    $(document).on('click','.reply', function(){
        var comment_id = $(this).attr("id");
        $('#comment_id').val(comment_id);
        $('#comment_name').focus();
    });
    

</script>
