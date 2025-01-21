<div>
    {{-- If your happiness depends on money, you will never be happy with yourself. --}}
    @foreach ($jabatan->tags as $tag)
    <span class="badge bg-primary mb-1" style="font-size: 0.8rem;">
      {{ $tag->name }}
      <button class="btn-close btn-close-white ms-2 "
      wire:click.prevent="detachJabatan('{{ $tag->name }}')"
      aria-label="delete">
     </button>

    </span>
    @endforeach
</div>
