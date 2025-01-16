<script>
document.addEventListener('DOMContentLoaded', function () {
    function confirmDelete(formId) {
        const form = document.getElementById(formId);
        if (!form) {
            console.error(`Form with ID ${formId} not found.`);
            return;
        }
        Swal.fire({
            title: "Apa Anda Yakin?",
            text: "Data yang telah dihapus tidak bisa dikembalikan",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Ya, Hapus!",
            cancelButtonText: "Tidak"
        }).then((result) => {
            if (result.isConfirmed) {
                form.submit();
            }
        });
    }
    window.confirmDelete = confirmDelete;
});

</script>
