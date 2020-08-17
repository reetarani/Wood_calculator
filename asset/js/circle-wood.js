      $(document).ready(function(){
          var $length = $('#txt1'),
          $gln = $('#txt2'),
          $gin = $('#txt3'),
          $answer1 = $('#txtans1'),
          $answer2 = $('#txtans2'),
          $answer3 = $('#txtans3');

          var $popuplength = $('#popuplength'),
          $popupgln = $('#popupgln'),
          $popupgin = $('#popupgin'),

          $popupanswer1 = $('#popupanswer1'),
          $popupanswer2 = $('#popupanswer2'),
          $popupanswer3 = $('#popupanswer3');

          $length.on('keypress', function(e){
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)){
              e.stopImmediatePropagation();
              return false;
            }
          }).on('keyup', function(e) {
              console.log('keyup');
              calculate()
            });

          $gln.on('keypress', function(e){
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)){
              e.stopImmediatePropagation();
              return false;
            }
          }).on('keyup', function(e) {
              console.log('keyup');
              calculate()
            });

          $gin.on('keypress', function(e){
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)){
              e.stopImmediatePropagation();
              return false;
            }
          }).on('keyup', function(e) {
              console.log('keyup');
              calculate()
            });


          $popuplength.on('keypress', function(e){
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)){
              e.stopImmediatePropagation();
              return false;
            }
          }).on('keyup', function(e) {
              console.log('keyup');
              popcalculate()
            });

          $popupgln.on('keypress', function(e){
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)){
              e.stopImmediatePropagation();
              return false;
            }
          }).on('keyup', function(e) {
              console.log('keyup');
              popcalculate()
            });

          $popupgin.on('keypress', function(e){
            if (e.which != 8 && e.which != 0 && (e.which < 48 || e.which > 57)){
              e.stopImmediatePropagation();
              return false;
            }
          }).on('keyup', function(e) {
              console.log('keyup');
              popcalculate();
            });

          function calculate(){
              if ($length.val().length > 0 && $gln.val().length > 0 && $gin.val().length > 0) {
                  var $temp = 0;
                  // to find GR
                  $temp = $gln.val() * 12;
                  $temp = parseInt($temp) + parseInt($gin.val());
                  $temp = parseInt($temp) / 4;
                  $temp = $temp * $temp;
                  $answer1.val($temp);

                  // to CFT
                  $temp = $length.val() * $temp / 144;
                  $answer2.val($temp);

                  // To CMT
                  $temp = $temp / 35.335;
                  $answer3.val($temp);
              }
          }

          function popcalculate(){
              if ($popuplength.val().length > 0 && $popupgln.val().length > 0 && $popupgin.val().length > 0) {
                  var $temp = 0;
                  // to find GR
                  $temp = $popupgln.val() * 12;
                  $temp = parseInt($temp) + parseInt($popupgin.val());
                  $temp = parseInt($temp) / 4;
                  $temp = $temp * $temp;
                  $popupanswer1.val($temp);

                  // to CFT
                  $temp = $popuplength.val() * $temp / 144;
                  $popupanswer2.val($temp);

                  // To CMT
                  $temp = $temp / 35.335;
                  $popupanswer3.val($temp);
                }            
          }

      });

    $(document).ready(function () {
      $('#myModal').on('show.bs.modal', function (event) { // id of the modal with event
        var button = $(event.relatedTarget) // Button that triggered the modal
        var id = button.data('id') // Extract info from data-* attributes
        var length = button.data('length')
        var gln = button.data('gln')
        var gin = button.data('gin')
        var client = button.data('client')

        // Update the modal's content.
        var modal = $(this)
        modal.find('.id').val(id)
        modal.find('.length').val(length)
        modal.find('.gln').val(gln)
        modal.find('.gin').val(gin)
        modal.find('.client').val(client)

        // And if you wish to pass the productid to modal's 'Yes' button for further processing
        //modal.find('button.btn-danger').val(productid)
      });
    });

    $('.alert').click(function(){
      window.location.href='circle-wood.php';
    })