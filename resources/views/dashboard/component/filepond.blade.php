@section('script')
    <script>
        FilePond.registerPlugin(
            FilePondPluginImagePreview,
            FilePondPluginFileValidateType,
            FilePondPluginImageResize
        );
        const inputElements = document.querySelectorAll('input[type="file"]');
        const subMit = document.getElementById('send');
        const load = document.getElementById('loading');

        inputElements.forEach(inputElement => {
            const pond = FilePond.create(inputElement, {
                labelIdle: `<span class="filepond--label-action">Upload Gambar</span>`,
                acceptedFileTypes: ['image/jpeg','image/png'],
                maxFileSize: '10MB',
                allowMultiple: false,
                labelFileTypeNotAllowed: 'Format file tidak didukung.',
                fileValidateTypeLabelExpectedTypes: 'Jenis file yang diperbolehkan: {allTypes}',
                labelFileProcessingError: 'Ukuran File Teralau Besar',
                server: {
                    process: '/upload',
                    revert: '/delete',
                    headers: {
                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                    }
                }
            });

            pond.on('addfilestart', (e) => {
                subMit.style.display = 'none';
                load.style.display = 'block';
            });

            pond.on('processfile', (error, file) => {
                if (!error) {
                    load.style.display = 'none';
                    subMit.style.display = 'block';
                }
            });
        });
    </script>
@endsection
