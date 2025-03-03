<script>
    document.addEventListener('DOMContentLoaded', function() {
        var textRemove = new Choices(
          document.getElementById('choices-text-remove-button'),
          {
            allowHTML: true,
            delimiter: ',',
            editItems: true,
            maxItemCount: 10,
            removeItemButton: true,
            placeholderValue: '',
          }
        );
     });
 </script>
