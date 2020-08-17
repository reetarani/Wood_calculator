      $(document).ready(function(){
          var $length = $('#txt1'),
          $width = $('#txt2'),
          $thick = $('#txt3'),
          $piece = $('#txt4'),
          $answer1 = $('#txtans1'),
          $answer2 = $('#txtans2');

          var $popuplength = $('#popuplength'),
          $popupwidth = $('#popupwidth'),
          $popupthick = $('#popupthick'),
          $popuppiece = $('#popuppiece'),

          $popupanswer2 = $('#popupanswer2'),
          $popupanswer3 = $('#popupanswer3');

          $length.on('keypress', function(e){
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)){
              e.stopImmediatePropagation();
              return false;
            }
          }).on('keyup', function(e) {
              calcualtion();
            });

          $width.on('keypress', function(e){
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)){
              e.stopImmediatePropagation();
              return false;
            }
          }).on('keyup', function(e) {
              console.log('keyup');
              calcualtion();
            });

          $thick.on('keypress', function(e){
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)){
              e.stopImmediatePropagation();
              return false;
            }
          }).on('keyup', function(e) {
              console.log('keyup');
              calcualtion();
            });


          $piece.on('keypress', function(e){
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)){
              e.stopImmediatePropagation();
              return false;
            }
          }).on('keyup', function(e) {
              console.log('keyup');
              calcualtion();
            });

          $popuplength.on('keypress', function(e){
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)){
              e.stopImmediatePropagation();
              return false;
            }
          }).on('keyup', function(e) {
              modalcalcualtion();
            });

          $popupwidth.on('keypress', function(e){
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)){
              e.stopImmediatePropagation();
              return false;
            }
          }).on('keyup', function(e) {
              console.log('keyup');
              modalcalcualtion();
            });

          $popupthick.on('keypress', function(e){
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)){
              e.stopImmediatePropagation();
              return false;
            }
          }).on('keyup', function(e) {
              console.log('keyup');
              modalcalcualtion();
            });

          $popuppiece.on('keypress', function(e){
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)){
              e.stopImmediatePropagation();
              return false;
            }
          }).on('keyup', function(e) {
              console.log('keyup');
              modalcalcualtion();
            });

          function calcualtion(){
              if ($length.val().length > 0 && $width.val().length > 0 && $thick.val().length > 0 && $piece.val().length > 0) {
                var $temp = 0;

                // to CFT
                $temp = ($length.val() * $width.val() * $thick.val() * $piece.val()) / 144;
                $answer1.val($temp);

                // To CMT
                $temp = $temp / 35.335;
                $answer2.val($temp);
              }
          };
          function modalcalcualtion(){
              if ($popuplength.val().length > 0 && $popupwidth.val().length > 0 && $popupthick.val().length > 0 && $popuppiece.val().length > 0) {
                var $temp = 0;

                // to CFT
                $temp = ($popuplength.val() * $popupwidth.val() * $popupthick.val() * $popuppiece.val()) / 144;
                $popupanswer2.val($temp);

                // To CMT
                $temp = $temp / 35.335;
                $popupanswer3.val($temp);
              }
          };
      });

    $(document).ready(function () {
      $('#myModal').on('show.bs.modal', function (event) { // id of the modal with event
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id') // Extract info from data-* attributes
        var length = button.data('length')
        var width = button.data('width')
        var thick = button.data('thick')
        var piece = button.data('piece')
        var client = button.data('client')

        // Update the modal's content.
        var modal = $(this)
        modal.find('.id').val(id)
        modal.find('.length').val(length)
        modal.find('.width').val(width)
        modal.find('.thick').val(thick)
        modal.find('.piece').val(piece)
        modal.find('.client').val(client)

        // And if you wish to pass the productid to modal's 'Yes' button for further processing
        //modal.find('button.btn-danger').val(productid)
      });
    });

    $('.alert').click(function(){
      window.location.href='cut-piece.php';
    })