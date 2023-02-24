@if ($paginator->hasPages())
    @php
        $total = $paginator->lastPage();
        $current = $paginator->currentPage();
        $b = ($current / $total) * 100;
        $a = round($b);
    @endphp
    <h6>Progress Anda {{ $a }} %</h6>
    <div class="progress mb-4" style="height: 30px">
        <div class="progress-bar progress-bar-striped bg-success" role="progressbar" aria-label="Success striped example"
            style="font-size: 16px ;width: {{ $a }}%">
            {{ $paginator->currentPage() }} / {{ $paginator->lastPage() }} Halaman
        </div>
    </div>
@endif
