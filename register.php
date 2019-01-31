

<!-- Button trigger modal -->


<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog " role="document">
    <div class="modal-content">
   
      <div class="modal-body">
 <style>
     
.stepwizard-step p {
    margin-top: 10px;
}
.stepwizard-row {
    display: table-row;
}
.stepwizard {
    display: table;
    width: 50%;
    position: relative;
}

.stepwizard-row:before {
    top: 14px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 100%;
    height: 1px;
    background-color: #ccc;
    z-order: 0;
}
.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
   
}
.btn-circle {
    width: 30px;
    height: 30px;
    text-align: center;
    padding: 6px 0;
    font-size: 12px;
    line-height: 1.428571429;
    border-radius: 15px;
     margin-left: 40px;
}
 </style>           


  
<div style="display: none;" class="stepwizard col-xs-12 col-md-12 col-lg-12 col-md-offset-2 col-xs-offset-2 col-lg-offset-3">
    <div style="display: none;" class="stepwizard-row setup-panel col-xs-12 col-md-12 col-lg-12">
      <div class="stepwizard-step">
        <a href="#step-1" type="button" class="btn btn-primary btn-circle">1</a>
        
      </div>
      <div class="stepwizard-step">
        <a href="#step-2" type="button" class="btn btn-default btn-circle" disabled="disabled">2</a>
        
      </div>
      <div class="stepwizard-step">
        <a href="#step-3" type="button" class="btn btn-default btn-circle" disabled="disabled">3</a>
        
      </div>
    </div>
  </div>
  <div class="clearfix"></div>
  <form method="post" action="https://mws.ges.zuhrtech.com/account/register/go" id="reg"  role="form"  >
    <div class="row setup-content" id="step-1">
      <div class="col-xs-12 col-md-12 col-lg-12">
        <div class="col-md-12">
          <h3> Your Basic Information</h3>
           <div class="form-group">
            <label class="control-label">First Name</label>
            <input required  maxlength="100" type="text" name="fn" class="form-control"   />
          </div>
          <div class="form-group">
            <label class="control-label">Last Name</label>
            <input required maxlength="100" type="text" name="ln" class="form-control"  />
          </div>
           <div class="form-group">
            <label class="control-label">Birth Date</label>
            <input required type="date" class="form-control" name="dob" />
          </div>
           <div class="form-group">
            <label class="control-label">Email Address</label>
            <input required maxlength="200" type="email" name="em" class="form-control"  />
          </div>
          <div class="form-group">
            <label class="control-label">Password</label>
            <input required maxlength="200" type="password" name="pd" class="form-control"   />
          </div>
          <div class="form-group">
            <label class="control-label">Register As :</label>
            
             <select required name="type"  class=" form-control">
                 
                 <option>Student</option>
                 <option>Teacher</option>
                 <option>Both</option>
                 </select>
          </div>
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-2">
      <div class="col-xs-12 col-md-12 col-lg-12">
        <div class="col-md-12">
          <h3>Your Profile Information</h3>
          
          
          <div class="form-group">
            <label class="control-label">Mobile No#</label>
            <input required maxlength="200" type="number" name="ph" class="form-control"  />
          </div>
         
          <div class="form-group">
            <label class="control-label">Country :</label>
            <input required type="text" name="country" class="form-control"  />
          </div>
          <div class="form-group">
            <label class="control-label">State :</label>
            <input required type="text" name="state" class="form-control"  />
          </div>
           <div class="form-group">
            <label class="control-label">City :</label>
            <input required type="text" name="city" class="form-control"  />
          </div>
           <div class="form-group">
            <label class="control-label">Zip Code :</label>
            <input required type="number" name="zip" class="form-control"  />
          </div>
          <div class="form-group">
            <label class="control-label">Address 1:</label>
            <textarea required class="form-control" name="add1" ></textarea>
          </div>
           <div class="form-group">
            <label class="control-label">Address 2:</label>
            <textarea required class="form-control" name="add2" ></textarea>
          </div>
         
          <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" >Next</button>
        </div>
      </div>
    </div>
    <div class="row setup-content" id="step-3">
      <div class="col-xs-12 col-md-12 col-lg-12">
        <div class="col-md-12">
          <h3> Your Account Information</h3>
          
          
          <div class="form-group">
            <label class="control-label">Creadit Card Number#</label>
            <input required maxlength="11" type="number" name="cn" class="form-control"  />
          </div>
          <div class="form-group">
            <label class="control-label">Exp Date</label>
            <input required type="date" class="form-control" name="exp" />
          </div>
         
          <div class="form-group">
            <label class="control-label">CVC Code:</label>
            <input required maxlength="3" type="number" name="cvc" class="form-control"   />
          </div>
          <div class="form-group">
            <label class="control-label">Bank Information:</label>
           <select required name="btype"  class=" form-control" name="binfo">
           
               <option>PayPal</option>
               <option>Visa</option>
               <option>Master</option>
               </select>
          </div>
          <div class="form-group">
            <label class="control-label">Billing Terms And Conditions:</label>
             <input required type="checkbox" name="agree" value='yes' >
          </div>
          
          
          <button class="btn btn-success btn-lg pull-right" type="submit">Submit</button>
        </div>
      </div>
    </div>
  </form>
  

 
      </div>
      
      <script>
          $(document).ready(function () {
              

              
              
  var navListItems = $('div.setup-panel div a'),
          allWells = $('.setup-content'),
          allNextBtn = $('.nextBtn');

  allWells.hide();

  navListItems.click(function (e) {
      e.preventDefault();
      var $target = $($(this).attr('href')),
              $item = $(this);

      if (!$item.hasClass('disabled')) {
          navListItems.removeClass('btn-primary').addClass('btn-default');
          $item.addClass('btn-primary');
          allWells.hide();
          $target.show();
          $target.find('input:eq(0)').focus();
      }
  });

  allNextBtn.click(function(){
      var curStep = $(this).closest(".setup-content"),
          curStepBtn = curStep.attr("id"),
          nextStepWizard = $('div.setup-panel div a[href="#' + curStepBtn + '"]').parent().next().children("a"),
         curInputs = curStep.find("input, textarea,select,date"),
          isValid = true;

      $(".form-group").removeClass("has-error");
      for(var i=0; i<curInputs.length; i++){
          if (!curInputs[i].validity.valid){
              isValid = false;
              $(curInputs[i]).closest(".form-group").addClass("has-error");
          }
      }

      if (isValid)
          nextStepWizard.removeAttr('disabled').trigger('click');
  });

  $('div.setup-panel div a.btn-primary').trigger('click');

              
//////////////// ajax work

$("#reg").submit(function(event) {
 
  event.preventDefault();
  var f = $("#reg").serialize();
  var action = $("#reg").attr("action");
  var method = $("#reg").attr("method");
    
    $.ajax({
        method:method,
        dataType:"json",
        url:action,
        data:f,
        async: true,
        success: function(res)
        { 
              $('#myModal').modal('toggle');
            if(res.status == 200){
                $.notify(res.msg, "success");
                window.location.reload();
                
            }else{
               $.notify(res.msg, "error");
            }
        
        }
       
        
    });
    
    
     
});
  


}); // ready












      </script>
    </div>
  </div>
</div>
