
  <a class="btn btn-primary dropdown-toggle" type="button" id="dropdownMenuButton" data-bs-toggle="dropdown" aria-expanded="false">
    Action
  </a>
  <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
    <li>
        <a class="btn btn-lg dropdown-item" href="{{ route('pages.category.edit', $category->uuid) }}">
            <i class="material-icons text-sm">edit</i> Edit
            </a>
    </li>
    <li>
        <a onclick="confirm('Apakah anda yakin untuk menghapus category ini ?')
                ? document.getElementById('destroy-category-form-{{ $category->uuid }}').submit() : null"
            class="btn btn-lg dropdown-item">
            <i class="material-icons text-sm">delete</i>
            Delete
        </a>
    </li>
  </ul>

<form id="destroy-category-form-{{ $category->uuid }}" action="{{ route('pages.category.destroy', ['category' => $category->uuid]) }}"
    method="POST" style="display: none;">
    @csrf
    @method('DELETE')

</form>
