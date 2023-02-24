@if ($paginator->hasPages())

    <ul class="d-flex justify-content-evenly" style="list-style-type: none; margin-top: 20px">
        @if ($paginator->onFirstpage())
        @else
            <li><button type="button" wire:click="previousPage" class="btn btn-secondary"><i class="fas fa-arrow-left"></i>
                    Sebelumnya</button></li>
            <script></script>
        @endif
        @if ($paginator->hasMorePages())
            <li><button type="button" wire:click="nextPage" class="btn btn-primary">Selanjutnya <i
                        class="fas fa-arrow-right"></i></button></li>
        @else
            <li><button class="btn btn-success" type="button" onclick="submitTes()">Hasil <i
                        class="fas fa-arrow-right"></i></button></li>
        @endif
    </ul>
@endif
