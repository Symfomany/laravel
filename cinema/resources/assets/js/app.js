
$(document).ready(function(){

   init.push(function () {


      $('#commentselect').change(function(){

         var opt = $(this);

         $('#commentable :checked').each(function(index){

            if(opt.val() == 0){
               $(this).parents('tr').fadeTo('slow', 0.5).fadeTo('slow', 1.0).addClass('bg-danger');
            }else if(opt.val() == 1){
               $(this).parents('tr').fadeTo('slow', 0.5).fadeTo('slow', 1.0).addClass('bg-warning');
            }else{
               $(this).parents('tr').fadeTo('slow', 0.5).fadeTo('slow', 1.0).addClass('bg-success');
            }

         });

      });

      $('input.date').datepicker({
         format: 'dd/mm/yyyy',
         todayBtn: 'linked'
      });

      //$("#masked-inputs-examples-phone").mask("(999) 999-9999");

      $('.wyswyg').summernote({
         height: 200,
         tabsize: 2,
         codemirror: {
            theme: 'monokai'
         }
      });


      $("[multiple]").select2();

      $(".form-horizontal").validate({
         focusInvalid: false,
         messages: {
            'required': 'Ce champs est obligatoire'
         }
      });

         //$(".textonly").mask("aaa");
         //$("#masked-inputs-examples-phone").mask("(999) 999-9999");
         //$("#masked-inputs-examples-ssn").mask("999-99-9999");
         //$("#masked-inputs-examples-product-key").mask("a*-999-a999", {
         //   placeholder: " ",
         //   completed: function(){
         //      alert("You typed the following: " + this.val());
         //   }
         //});

      //$(".textarea-label").limiter(100, { label: $(this).parent().find('.limiter-count') });



      //$('.wyswyg').summernote({
      //   height: 200,
      //   tabsize: 2,
      //   codemirror: {
      //      theme: 'monokai'
      //   }
      //});
      //
      //
      $('#jq-datatables-example').dataTable();
      $('#jq-datatables-example_wrapper .table-caption').text('');
      $('#jq-datatables-example_wrapper .dataTables_filter input').attr('placeholder', 'Rechercher...');
   });

});