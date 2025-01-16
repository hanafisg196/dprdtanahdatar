<div class="accordion mt-3" id="innerAccordion-{{ $item->id }}">
    <div class="accordion-item">
        <h2 class="accordion-header" id="innerHeading-{{ $item->id }}">
            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                data-bs-target="#innerCollapse-{{ $item->id }}" aria-expanded="false"
                aria-controls="innerCollapse-{{ $item->id }}">
                {{ $item->name . ' ' . '-' . ' '. "Single Menu" }}
            </button>
        </h2>
        <div id="innerCollapse-{{ $item->id }}" class="accordion-collapse collapse"
            aria-labelledby="innerHeading-{{ $item->id }}" data-bs-parent="#innerAccordion-{{ $item->id }}">
            <div class="accordion-body">
                <div class="mb-2">
                    <p>Link - {{ $item->link }}</p>
                    <button type="button" class="btn btn-sm btn-success"
                    data-bs-toggle="modal" data-bs-target="#modal-updateMenu-{{ $item->id }}">
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
        </div>
     </div>
  </div>
</div>

