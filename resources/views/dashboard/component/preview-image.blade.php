<script>
    function previewImage(event) {
        const reader = new FileReader();
        reader.onload = function(){
            const imgPreview = document.getElementById('imgPreview');
            imgPreview.src = reader.result;
        };
        reader.readAsDataURL(event.target.files[0]);
    }
</script>
