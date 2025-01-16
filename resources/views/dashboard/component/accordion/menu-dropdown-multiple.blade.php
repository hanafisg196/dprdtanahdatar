<div class="accordion mt-3" id="innerAccordion-{{ $item->id }}">
    <div class="accordion-item">
        <h2 class="accordion-header" id="innerHeading-{{ $item->id }}">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#innerCollapse-{{ $item->id }}" aria-expanded="false"
                aria-controls="innerCollapse-{{ $item->id }}">
                {{ $item->name . ' ' . '-' . ' ' . 'Multiple Menu' }}
            </button>
        </h2>
        <div id="innerCollapse-{{ $item->id }}" class="accordion-collapse collapse"
            aria-labelledby="innerHeading-{{ $item->id }}" data-bs-parent="#innerAccordion-{{ $item->id }}">
            <div class="accordion-body">
                <!-- Konten utama -->
                <div class="mb-2">
                    <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal"
                        data-bs-target="#modal-addSubMenu-{{ $item->id }}">
                        Tambah Sub Menu
                    </button>
                    <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal"
                        data-bs-target="#modal-updateMenu-{{ $item->id }}">
                        <i class="bi bi-pencil-square"></i>
                    </button>
                    <button type="button" class="btn btn-danger btn-sm"
                        onclick="confirmDelete('{{ $item->id }}')">
                        <i class="bi bi-trash"></i>
                    </button>
                    <form id="{{ $item->id }}" action="{{ route('dashboard.settings.menu.delete', $item->id) }}"
                        method="POST">
                        @csrf
                    </form>
                </div>
                <!-- Nested accordion -->
                <div class="accordion mt-3" id="nestedAccordion-{{ $item->id }}">
                    @foreach ($item->subMenus as $subMenu)
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="nestedHeading-{{ $subMenu->id }}">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#nestedCollapse-{{ $subMenu->id }}" aria-expanded="false"
                                    aria-controls="nestedCollapse-{{ $subMenu->id }}"> {{ $subMenu->sub_name }}
                                </button>
                            </h2>
                            <div id="nestedCollapse-{{ $subMenu->id }}" class="accordion-collapse collapse"
                                aria-labelledby="nestedHeading-{{ $subMenu->id }}"data-bs-parent="#nestedAccordion-{{ $item->id }}">
                                <div class="accordion-body">
                                    <p>Link - {{ $subMenu->sub_link }}</p>
                                    <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal"
                                        data-bs-target="#modal-updateSubmenu-{{ $subMenu->id }}">
                                        <i class="bi bi-pencil-square"></i>
                                    </button>
                                    <button type="button" class="btn btn-danger btn-sm"
                                        onclick="confirmDeleteTwo('{{ $subMenu->id }}')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                    <form id="{{ $subMenu->id }}"
                                        action="{{ route('dashboard.settings.submenu.delete', $subMenu->id) }}"
                                        method="POST">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                        @include('dashboard.component.modals.modal-update-submenu')
                    @endforeach
                </div>
                <!-- Akhir Nested accordion -->
            </div>
        </div>
    </div>
</div>
