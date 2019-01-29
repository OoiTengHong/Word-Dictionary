$(function() {
   $('.draggable').draggable({ revert: true });
   $('.droppable').droppable({
      hoverClass: 'active',
      drop: function(e, ui) {
         $(this).html(ui.draggable.remove().html());
         $(this).droppable('destroy');
         $( this )
            .addClass( "ui-state-highlight" )
            .find( "p" )
            .html( "i'm destroyed!" );
         }
   });
});