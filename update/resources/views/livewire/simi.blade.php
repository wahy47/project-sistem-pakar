<div class="inputggroup">
    {{ $items->links('livewire.pagiprg') }}
    @php
        $x = false;
    @endphp
    @foreach ($items as $item)
        @foreach ($check as $key)
            @if ($item->id == $key->gejala_id)
                @php
                    $x = true;
                @endphp
            @endif
        @endforeach

        @if ($x == true)
            <input type="checkbox" class="box-hover box-none checked mb-3" id="gejala{{ $item->id }}" name="tesgejala[]"
                value="{{ $item->id }}" onchange="tesCheck(value)" checked>
            <label for="gejala{{ $item->id }}" class="btn btn-outline-success d-flex tes-box mb-2">{{ $item->gejala }}
                <span id="inputLabelIcon{{ $item->id }}" class="ms-auto"><i
                        class="far fa-check-circle"></i></span></label>
        @else
            <input type="checkbox" class="box-hover box-none checked mb-3" id="gejala{{ $item->id }}"
                name="tesgejala[]" value="{{ $item->id }}" onchange="tesCheck(value)">
            <label for="gejala{{ $item->id }}"
                class="btn btn-outline-success d-flex tes-box mb-2">{{ $item->gejala }}
                <span id="inputLabelIcon{{ $item->id }}" class="ms-auto"><i
                        class="far fa-circle"></i></span></label>
        @endif
        @php
            $x = false;
        @endphp
    @endforeach

    {{ $items->links('livewire.pagibtn') }}
</div>
