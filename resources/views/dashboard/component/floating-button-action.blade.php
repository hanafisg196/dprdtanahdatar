<style>
.image-container {
    position: relative;
}

.floating-buttons-action {
    position: absolute;
    top: 10px; /* Jarak dari atas gambar */
    right: 10px; /* Jarak dari sisi kanan gambar */
    display: flex;
    flex-direction: column;
    gap: 5px; /* Spasi antar tombol */
}

.floating-buttons-action .btn {
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
    z-index: ; /* Memastikan tombol berada di atas elemen lain */
}

</style>
