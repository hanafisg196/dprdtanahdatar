<script>
    document.addEventListener('DOMContentLoaded', function () {
        const singleMenu = document.getElementById('singleMenu');
        const multipleMenu = document.getElementById('multipleMenu');
        const extraInput = document.getElementById('extraInput');

        function toggleInput() {
            if (singleMenu.checked) {
                extraInput.hidden = false;
                extraInput.value = '';
            } else if (multipleMenu.checked) {
                extraInput.hidden = true
                extraInput.value = '';
                extraInput.value = '#';
            }
        }

        singleMenu.addEventListener('change', toggleInput);
        multipleMenu.addEventListener('change', toggleInput);
        toggleInput();
    });
</script>
