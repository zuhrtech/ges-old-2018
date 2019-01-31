function getcoursees(id){
    
      $.ajax({
        method:'get',
        dataType:"json",
        url:'https://mws.ges.zuhrtech.com/account/__getallcat__/Params',
        async: true,
        success: function(res)
        { 
            if(res.status == 200){
             
             
             data = res.data;
        
        
           for(i in res.data){
            var selbox = document.getElementById(id) ;
            var o1 = new Option(res.data[i].name,res.data[i].id);
            selbox.options[selbox.options.length] = o1;

           }
             
             
             
            }else{
            $.notify('This Service is Not Available', "error");
           // console.log('hyno');
            }
        
        }
       
        
    });
}


function getsubcat(id,cid){
    
    
    
    
      $.ajax({
        method:'get',
        dataType:"json",
        url:'https://mws.ges.zuhrtech.com/account/__getsubcat__/?id='+cid,
        async: true,
        success: function(res)
        { 
            if(res.status == 200){
             
             
             data = res.data;
       var n = document.getElementById(id) ;
        n.innerHTML = '';
           for(i in res.data){
         var selbox = document.getElementById(id) ;
           var o1 = new Option(res.data[i].name,res.data[i].id);
           selbox.options[selbox.options.length] = o1;
           }
            }else{
            $.notify('There no sub category found', "error");
           // console.log('hyno');
            }
        
        }
       
        
    });
}


function addcatfunc(){
    
    
    
    
  var f = $("#addcat").serialize();
  var action = $("#addcat").attr("action");
  var method = $("#addcat").attr("method");
   
      
    $.ajax({
        method:method,
        dataType:"json",
        url:action,
        data:f,
        async: true,
        success: function(res)
        { 
            if(res.status == 200){
                $.notify(res.msg, "success");
                window.location.reload(true);
               
            }else{
               $('#logmein').trigger("reset");
                $.notify(res.msg, "error");
                  
            }
        
        }
       
        
    });
    
    
}