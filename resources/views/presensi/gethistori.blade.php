@if($histori->isEmpty())
<div class="alert alert-warning">
    <p>Data Belum Ada</p>
</div>
@endif
@foreach($histori as $d)
<ul class="listview image-listview">
    <li>
        <div class="item">
            @php
                $path = Storage::url('uploads/absensi/'.$d->foto_in);
            @endphp
            <img src="{{ $path }}" alt="image" class="image">
            <div class="in">
                <div>
                    <b>{{ date("d-m-Y",strtotime($d->tgl_presensi)) }}</b><br>
                {{-- <small class="text-muted">{{ $d->jabatan }}--}}
                </div>
                <span class=" badge {{ $d->jam_in < "07:00" ? "bg-success" : "bg-success" }}">
                    {{ $d->jam_in }}
                </span>
                <span class=" badge bg-danger "> {{ $d->jam_out }} </span>
            </div>
        </div>
    </li>
</ul>
@endforeach
