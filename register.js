$(document).ready(function(){
    
  
    $("#btnsave").click(function(){
        $name=$("#name").val();
        $email=$("#email").val();
        $phone=$("#phone").val();
        $address=$("#address").val();
        $location=$("#location").val();
        $guests=$("#guests").val();
        $arrival=$("#arrival").val();
        $leaving=$("#leaving").val();

        $.ajax({
            url:'register.php',
            data:{'name':$name,'email':$email,'phone':$phone,'address':$address,'location':$location,'guests':$guests,'arrival':$arrival,'leaving':$leaving},
            type:'get',
            dataType:'json',
            success:function(d){
                
               if(d.status)
               {
                alert(d.msg)
               }
               else{
                alert(d.msg)
               }

                
                
            },error:function(d1)
            {
                console.log(d1);
            }
        });
    });

});