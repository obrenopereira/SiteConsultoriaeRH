(function($) {
    showSwal = function(type, msg) {
      'use strict';
      if (type === 'basic') {
        swal({
          text: 'Any fool can use a computer',
          button: {
            text: "OK",
            value: true,
            visible: true,
            className: "btn btn-primary"
          }
        })
  
      } else if (type === 'title-and-text') {
        swal({
          title: 'Read the alert!',
          text: 'Click OK to close this alert',
          button: {
            text: "OK",
            value: true,
            visible: true,
            className: "btn btn-primary"
          }
        })
  
      } else if (type === 'success-message') {
        swal({
          title: 'Parabéns!',
          text: msg,
          icon: 'success',
          timer: 2000,
          button: false
        }).then(
            function() {},
            // handling the promise rejection
            function(dismiss) {
              if (dismiss === 'timer') {
              }
            }
        )
      } 
      else if (type === 'danger-message') {
        swal({
          title: 'Que pena!',
          text: msg,
          icon: 'warning',
          timer: 2000,
          button: false
        }).then(
            function() {},
            // handling the promise rejection
            function(dismiss) {
              if (dismiss === 'timer') {
              }
            }
        )
      }
      else if (type === 'auto-close') {
        swal({
          title: 'Auto close alert!',
          text: 'I will close in 2 seconds.',
          timer: 2000,
          button: false
        }).then(
          function() {},
          // handling the promise rejection
          function(dismiss) {
            if (dismiss === 'timer') {
              console.log('I was closed by the timer')
            }
          }
        )
      } else if (type === 'warning-message-and-cancel') {
        swal({
          title: 'Tem certeza disso?',
          text: "Você realmente deseja realizar essa ação?",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3f51b5',
          cancelButtonColor: '#ff4081',
          confirmButtonText: 'Great ',
          buttons: {
            cancel: {
              text: "Cancelar",
              value: null,
              visible: true,
              className: "btn btn-danger btnCancel",
              closeModal: true,
            },
            confirm: {
              text: "Continuar",
              value: true,
              visible: true,
              className: "btn btn-primary btnContinue",
              closeModal: true
            }
          }
        })
  
      } else if (type === 'custom-html') {
        swal({
          content: {
            element: "input",
            attributes: {
              placeholder: "Type your password",
              type: "password",
              class: 'form-control'
            },
          },
          button: {
            text: "OK",
            value: true,
            visible: true,
            className: "btn btn-primary"
          }
        })
      }
    }
  
  })(jQuery);