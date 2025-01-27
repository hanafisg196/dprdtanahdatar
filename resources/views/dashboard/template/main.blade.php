<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - @yield('title', 'Tanah Datar')</title>
    <meta name="description" content="@yield('description')">
    <meta name="keywords" content="@yield('keywords')">
    <meta name="og:url" content="@yield('ogurl', 'https://tanahdatar.go.id')" />
    <meta name="og:title" content="@yield('ogtitle', 'Tanah Datar')" />
    <meta name="og:type" content="news" />
    <meta name="og:description" content="@yield('ogdesc')" />
    <meta name="og:image" content="@yield('ogimage')" />
    <script type="text/javascript" src="//code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="icon" href="/dist/assets/compiled/jpg/logotanahdatar.png" type="image/x-icon">
    <link rel="stylesheet" href="/dist/assets/compiled/css/app.css">
    <link rel="stylesheet" href="/dist/assets/compiled/css/custome.css">
    <link rel="stylesheet" href="/dist/assets/compiled/css/iconly.css">
    <link rel="stylesheet" href="/dist/assets/extensions/choices.js/public/assets/styles/choices.css">
    <link rel="stylesheet" href="/dist/assets/extensions/sweetalert2-11.12.4/dist/sweetalert2.min.css">
    <link rel="stylesheet" href="/dist/assets/extensions/filepond/dist/filepond.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/alertify.min.css" />
    <!-- Default theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/default.min.css" />
    <!-- Semantic UI theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/semantic.min.css" />
    <!-- Bootstrap theme -->
    <link rel="stylesheet" href="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/css/themes/bootstrap.min.css" />
    <link rel="stylesheet"
        href="/dist/assets/extensions/filepond/plugin/image-preview/dist/filepond-plugin-image-preview.css" />
    @livewireStyles
</head>

<style>
    /* Your CSS for .loader, .loader--hidden, and .loader::after */
    .loader {
  position: fixed;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
  background: #ffffff;
  z-index: 9999; /* Pastikan loader ada di atas */
  transition: opacity 0.75s, visibility 0.75s;
}


    .loader--hidden {
      opacity: 0;
      visibility: hidden;
    }

    .loader::after {
      content: "";
      width: 50px;
      height: 50px;
      border: 15px solid #dddddd;
      border-top-color: #435ebe;
      border-radius: 50%;
      animation: loading 0.75s ease infinite;
    }

    @keyframes loading {
      0% {
        transform: rotate(0deg);
      }
      100% {
        transform: rotate(360deg);
      }
    }
  </style>
    {{ timeMachine() }}
    <div class="loader"></div>
    <div id="app">
        <div id="main" class='layout-navbar navbar-fixed'>
            <header>
                @include('dashboard.template.header')
            </header>
            <div id="sidebar">
                <div class="sidebar-wrapper active">
                    <div class="sidebar-header position-relative">
                        <div class="d-flex justify-content-center">
                            <div class="logo d-flex flex-column align-items-center">
                                <img src="/dist/assets/compiled/jpg/logotanahdatar.png"
                                    style="width: 50px; height: 50px;" alt="Logo" class="mb-2">
                                <span style="font-size: 20px;">DPRD Tanah Datar</span>
                            </div>
                            <div class="sidebar-toggler x">
                                <a href="#" class="sidebar-hide d-xl-none d-block"><i
                                        class="bi bi-x bi-middle"></i></a>
                            </div>
                        </div>
                    </div>
                    @include('dashboard.template.sidebarmenu')
                </div>
            </div>
            <div id="main-content">
                @yield('content')
                @include('dashboard.template.footer')
                <livewire:clear-temporary>
            </div>
        </div>
    </div>
    <script>
        window.addEventListener("load", () => {
  const loader = document.querySelector(".loader");

  loader.classList.add("loader--hidden");

  loader.addEventListener("transitionend", () => {
    document.body.removeChild(loader);
  });
});
    </script>
    <script src="/dist/assets/extensions/filepond/plugin/image-preview/dist/filepond-plugin-image-preview.js"></script>
    <script src="/dist/assets/extensions/filepond/plugin/validate-size/dist/filepond-plugin-file-validate-size.js"></script>
    <script src="/dist/assets/extensions/filepond/plugin/validate-type/dist/filepond-plugin-file-validate-type.js"></script>
    <script src="/dist/assets/extensions/filepond/plugin/image-resize/dist/filepond-plugin-image-resize.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    <script src="/dist/assets/extensions/filepond/dist/filepond.js"></script>
    @yield('script')
    <script src="/dist/assets/extensions/sweetalert2-11.12.4/dist/sweetalert2.all.min.js"></script>
    <script src="/dist/assets/extensions/tinymce_5.10.9/js/tinymce/tinymce.min.js"></script>
    <script src="/dist/assets/extensions/perfect-scrollbar/perfect-scrollbar.min.js"></script>
    <script src="/dist/assets/compiled/js/app.js"></script>
    <script src="/dist/assets/extensions/choices.js/public/assets/scripts/choices.js"></script>
    <script src="/dist/assets/static/js/pages/form-element-select.js"></script>
    <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.14.0/build/alertify.min.js"></script>
    @include('dashboard.component.header')
    @include('dashboard.component.tinymce')
    @include('dashboard.component.toast')

    @livewireScripts

</body>

</html>
