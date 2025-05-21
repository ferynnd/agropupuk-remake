<h3>5 Commit Terbaru</h3>

@if(isset($error))
    <p style="color:red;">{{ $error }}</p>
@endif

{{-- Untuk list 5 commit --}}
@if(isset($commits) && count($commits) > 0)
    <ul>
        @foreach($commits as $commit)
            <li>
                <strong>{{ $commit['hash'] }}</strong> - {{ $commit['message'] }}<br>
                <small>oleh {{ $commit['author'] }} • {{ $commit['date'] }} ({{ $commit['full_date'] }})</small>
            </li>
        @endforeach
    </ul>
@elseif(isset($lastUpdateInfo))
    {{-- Untuk 1 commit terakhir --}}
    <p>
        <strong>{{ $lastUpdateInfo['hash'] }}</strong> - {{ $lastUpdateInfo['message'] }}<br>
        <small>oleh {{ $lastUpdateInfo['author'] }} • {{ $lastUpdateInfo['date'] }} ({{ $lastUpdateInfo['full_date'] }})</small>
    </p>
@else
    <p>Tidak ada data commit.</p>
@endif
