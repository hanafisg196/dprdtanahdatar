@if (session()->has('errors'))
<script>
    Swal.fire({
        toast: true,
        position: 'top-end',
        icon: 'error',
        title: "Terjadi Error karena anda tolol",
        showConfirmButton: false,
        timerProgressBar: true,
        timer: 3000
    });
</script>
@endif
