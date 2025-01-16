<script>
    document.addEventListener('DOMContentLoaded', function() {
        const menuGroups = document.querySelectorAll('.specialForm');

        menuGroups.forEach(group => {
            const singleMenu = group.querySelector('.singleMenuUpdate');
            const multipleMenu = group.querySelector('.multipleMenuUpdate');
            const extraInput = group.querySelector('.dataInput');
            if (!singleMenu || !multipleMenu || !extraInput) {
                console.warn('Required elements are missing in:', group);
                return;
            }

            function toggleInput() {
                if (singleMenu.checked) {
                    extraInput.value = extraInput.dataset.id;
                    extraInput.hidden = false;
                } else if (multipleMenu.checked) {
                    extraInput.hidden = true;
                    extraInput.value = '#';
                }
            }

            singleMenu.addEventListener('change', toggleInput);
            multipleMenu.addEventListener('change', toggleInput);
            toggleInput();
        });
    });
</script>
