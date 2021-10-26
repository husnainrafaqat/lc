/* globals Stepper:false */

(function () {
    'use strict'
  
    var stepperFormEl = document.querySelector('#stepperForm')
    window.stepperForm = new Stepper(stepperFormEl, {
      animation: true,
      linear: true
    })
  
    var btnNextList = [].slice.call(document.querySelectorAll('.btn-next-form'))
    var stepperPanList = [].slice.call(stepperFormEl.querySelectorAll('.bs-stepper-pane'))
    var inputPasswordForm = document.getElementById('inputPasswordForm')
    var form = stepperFormEl.querySelector('.bs-stepper-content form')
  
    btnNextList.forEach(function (btn) {
      btn.addEventListener('click', function () {
        window.stepperForm.next()
      })
    })
  
    stepperFormEl.addEventListener('show.bs-stepper', function (event) {
      form.classList.remove('was-validated')
      var nextStep = event.detail.indexStep
      var currentStep = nextStep
  
      if (currentStep > 0) {
        currentStep--
      }
  
      var stepperPan = stepperPanList[currentStep]
      
      
      if (stepperPan.getAttribute('id') === 'c-form') {
        var c_no = $("#contract_no").val();
        if(c_no==""){
          event.preventDefault()
          form.classList.add('was-validated')
        }else{
          var cform = $('#c-form').serialize();
          console.log(cform);
          return false;
          $.ajax({
            url : "add",
            data: {'test':"1"},
            type: "post",
            success:function(res){
                alert(res);
            }
        });
        }
      }
      /*if ((stepperPan.getAttribute('id') === 'test-form-1' && !c_no.length) ||
      (stepperPan.getAttribute('id') === 'test-form-2' && !inputPasswordForm.value.length)) {
        event.preventDefault()
        form.classList.add('was-validated')
      }*/
    })
  })(jQuery);