<script>
    var editor_config = {
        height: 1000,
        path_absolute: "/",
        selector: 'textarea.my-editor',
        skin: 'CUSTOM',
        relative_urls: false,
        plugins: [
            "advlist autolink lists link image charmap print preview hr anchor pagebreak",
            "searchreplace wordcount visualblocks visualchars code fullscreen",
            "insertdatetime media nonbreaking save table directionality",
            "emoticons template paste textpattern"
        ],
        toolbar: "insertfile undo redo | styleselect | bold italic | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | link image media",
        file_picker_callback: function(callback, value, meta) {
            tinyMCE.activeEditor.windowManager.open({
                title: 'Pilih metode upload',
                body: {
                    type: 'panel',
                    items: [{
                            type: 'button',
                            name: 'upload_computer',
                            text: 'Dari Komputer',
                            primary: true
                        },
                        {
                            type: 'button',
                            name: 'file_manager',
                            text: 'File Manager',
                        }
                    ]
                },
                buttons: [],
                onAction: function(dialogApi, actionData) {
                    if (actionData.name === 'upload_computer') {
                        dialogApi.close();

                        const input = document.createElement('input');
                        input.setAttribute('type', 'file');
                        input.setAttribute('accept', meta.filetype === 'image' ? 'image/*' : '*');
                        input.onchange = function() {
                            const file = this.files[0];
                            const formData = new FormData();
                            formData.append('file', file);
                            fetch('/editor/upload', {
                                    method: 'POST',
                                    body: formData,
                                    headers: {
                                        'X-CSRF-TOKEN': '{{ csrf_token() }}'
                                    }
                                })
                                .then(response => response.json())
                                .then(data => {
                                    if (data.url) {
                                    callback(data.url);
                                    alertify
                                    .alert('Success', 'File sukses di upload' , function() {
                                     alertify.set('notifier','position', 'top-center');
                                     alertify.success('Upload Berhasil');
                                    });
                                    } else {
                                    alertify
                                    .alert('Error', 'Opps, ada kesalahan saat proses upload' , function() {
                                    alertify.message('Upload Gagal');
                                    });
                                    }
                                })
                                .catch(() => {
                                    alertify
                                    .alert('Error', 'Opps, ada kesalahan saat proses upload' , function() {
                                    alertify.message('Upload Gagal');
                                    });
                                });
                        };
                        input.click();
                    } else if (actionData.name === 'file_manager') {
                        dialogApi.close();

                        var x = window.innerWidth || document.documentElement.clientWidth ||
                            document.getElementsByTagName('body')[0].clientWidth;
                        var y = window.innerHeight || document.documentElement.clientHeight ||
                            document.getElementsByTagName('body')[0].clientHeight;

                        var cmsURL = editor_config.path_absolute + 'laravel-filemanager?editor=' +
                            meta.fieldname;
                        if (meta.filetype === 'image') {
                            cmsURL = cmsURL + "&type=Images";
                        } else {
                            cmsURL = cmsURL + "&type=Files";
                        }

                        tinyMCE.activeEditor.windowManager.openUrl({
                            url: cmsURL,
                            title: 'Filemanager',
                            width: x * 0.8,
                            height: y * 0.8,
                            resizable: "yes",
                            close_previous: "no",
                            onMessage: (api, message) => {
                                callback(message.content);
                            }
                        });
                    }
                }
            });
        }
    };

    tinymce.init(editor_config);
</script>
