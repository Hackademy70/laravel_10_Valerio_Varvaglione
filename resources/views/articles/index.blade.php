<x-layout>

    <div class="container my-4">
        <div class="row">
            <div class="col-12">
                
                
                <h1>Lista Articoli</h1>

            </div>
        </div>
    </div>

    <div class="container my-2">
        <div class="row">
            <div class="col-12">
              <livewire:articles-table :articles="$articles" />
            </div>
        </div>
    </div>


</x-layout>