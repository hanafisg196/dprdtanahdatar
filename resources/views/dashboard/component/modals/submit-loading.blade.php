<script>
    document.addEventListener('livewire:navigated', () => {
       var form = document.getElementById('form-modal-add');
       var sendButton = document.getElementById('send');
       var loading = document.getElementById('loading');

       form.addEventListener('submit', function() {
           sendButton.style.display = 'none';
           loading.style.display = 'block';
       });

   });
</script>
