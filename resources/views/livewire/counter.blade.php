
<div class="border border-success p-3">
    <div class="d-flex">
        <button class="btn btn-success mx-3" wire:click='increment'>+</button>
        <button class="btn btn-warning mx-3" wire:click='decrement'>-</button>
        <button class="btn btn-warning mx-3" wire:click='incrementByNumber(5)'>+5</button>
        <button class="btn btn-success mx-3" wire:click='decrementByNumber(5)'>-5</button>
        <label class="my-2" for="">Aggiungi un numero al counter</label>
        <input class="mx-3" type="text" wire:model="numberToAdd">
        <p class="lead my-2 mx-3">{{$numberToAdd}}</p>
        <button class="btn btn-primary" wire:click='addToCounter'>Aggiungi</button>
        <h2 class="mx-auto">{{$count}}</h2>
    </div>
</div>
