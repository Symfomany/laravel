
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
$(document).ready(function(){
   console.log('ok');
});
$(document).ready(function(){


   /**
    * 1ere méthode en GET
    */

   //ciblage de lelement + evenement dessus
   $('table#list .btn-danger').click(function(e){
      e.preventDefault(); //annuler l'évenemnt href de mes liens
      console.log('vous avez cliquez dessus :)');

      // je recuoere le liens sur lequel j'ai cliquez
      var elt = $(this);

      //moduel ajax
      $.ajax({
         url: elt.attr('href') //url de mon href du lien sur lequel j'ai cliquez
      }).done(function() {
         elt.parents('tr').fadeOut('slow');
      });


   });



   // Ciblage de mon bon element
   // + Greffage de mon événement
   $('#actionslist').change(function(e){

      console.log('Coucou, tu veux mon projet?');
      var selection = $(this).val();
      // recupere la vaeur de 'option selectonné
      console.log(selection);

      //si je veux supprimer (option 1)
      if(selection == "1"){

         // boucle en jquery : pour chaque bouton coché
         $('#list :checked').each(function(index){

            var elt = $(this);

            // Envoyer une requete ajax de suppression
            // pour chaque film coché
            $.ajax({
               url: elt.attr('data-url') //url de mon href du lien sur lequel j'ai cliquez
            }).done(function() {
               elt.parents('tr').fadeOut('slow');
            });



         });

      }

   });


   /**
    * e : Evenement
    */
   $('form#addcomment').submit(function(e){
      e.preventDefault();
      console.log('Mon evenement!');

      var elt = $(this);

      console.log(elt);
      console.log(elt.attr('action'));
      console.log(elt.serialize());

      //if($("#toto").length > 0)

      //
      $.ajax({
         url: elt.attr('action'),
         method: "POST", // Methode d'envoi de ma requete
         data: elt.serialize()
         // data: envoyer des données
      }).done(function(data) {
         //console.log(data.reponse);
         var html = '<li>' + elt.find('textarea').val() + '</li>';
         elt.parents('#content-wrapper').find('ul:last').append(html);
         elt.find('textarea').val("");
      });
      console.log('coucou');

   });


   $('form#addMovie').submit(function(e){
      e.preventDefault();
      console.log('Mon evenement!');

      var elt = $(this);

      console.log(elt);
      console.log(elt.attr('action'));
      console.log(elt.serialize());


      $.ajax({
         url: elt.attr('action'),
         method: "POST", // Methode d'envoi de ma requete
         data: elt.serialize()
         // data: envoyer des données
      }).done(function() {
         elt.parents('.panel').fadeOut('slow');
         $.growl.warning({ title: "Bravo!", message: "Film ajouté!", duration: 5000 });

      });
      console.log('coucou');


   });











   });


















$(document).ready(function(){

   setInterval(function () {
     console.log('Ready for next..');

         //appel ajax
         $.ajax({
            url: $('#panelajax').attr('data-url')
         }).done(function(data){
            $('#dashboard-recent').html(data);
         });

      }, 3000);









});


















//# sourceMappingURL=all.js.map