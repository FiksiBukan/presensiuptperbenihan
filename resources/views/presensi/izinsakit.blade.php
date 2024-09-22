@extends('layouts.admin.tabler')
@section('content')
<div class="page-header d-print-none">
    <div class="container-xl">
      <div class="row g-2 align-items-center">
        <div class="col">
          <!-- Page pre-title -->
          <h2 class="page-title">
            Data Izin / Sakit
          </h2>
        </div>
      </div>
    </div>
</div>
<div class="page-body">
    <div class="container xl">
        <div class="row">
            <div class="col-12">
                <form action="/presensi/izinsakit" method="GET" autocomplete="off">
                    <div class="row">
                        <div class="col-6">
                            <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                  <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-event"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                                    <path d="M16 3l0 4" />
                                    <path d="M8 3l0 4" />
                                    <path d="M4 11l16 0" />
                                    <path d="M8 15h2v2h-2z" />
                                </svg>
                                </span>
                                <input type="text" value="{{ request('dari') }}" id="dari" class="form-control" placeholder="Dari"  name="dari">
                              </div>
                        </div>
                        <div class="col-6">
                            <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                  <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-calendar-event"><path stroke="none" d="M0 0h24v24H0z" fill="none"/><path d="M4 5m0 2a2 2 0 0 1 2 -2h12a2 2 0 0 1 2 2v12a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2z" />
                                    <path d="M16 3l0 4" />
                                    <path d="M8 3l0 4" />
                                    <path d="M4 11l16 0" />
                                    <path d="M8 15h2v2h-2z" />
                                </svg>
                                </span>
                                <input type="text" value="{{ Request('sampai') }}" id="sampai" class="form-control" placeholder="Sampai"  name="sampai">
                              </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-3">
                            <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                  <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-shield-lock"><path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M12 3a12 12 0 0 0 8.5 3a12 12 0 0 1 -8.5 15a12 12 0 0 1 -8.5 -15a12 12 0 0 0 8.5 -3" />
                                    <path d="M12 11m-1 0a1 1 0 1 0 2 0a1 1 0 1 0 -2 0" />
                                    <path d="M12 12l0 2.5" />
                                </svg>
                                </span>
                                <input type="text" value="{{ Request('nik') }}" id="nik" class="form-control" placeholder="NIK"  name="nik">
                              </div>
                        </div>
                        <div class="col-3">
                            <div class="input-icon mb-3">
                                <span class="input-icon-addon">
                                  <!-- Download SVG icon from http://tabler-icons.io/i/user -->
                                  <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-users">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M9 7m-4 0a4 4 0 1 0 8 0a4 4 0 1 0 -8 0" />
                                    <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                    <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                                </svg>
                                </span>
                                <input type="text" value="{{ Request('nama_lengkap') }}" id="nama_lengkap" class="form-control" placeholder="Nama Karyawan"  name="nama_lengkap">
                              </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <select name="status_approved" id="status_approved" class="form-select">
                                    <option value="">Pilih Status</option>
                                    <option value="0" {{ Request('status_approved') === '0' ? 'selected': ''}}>Pending</option>
                                    <option value="1" {{ Request('status_approved') == 1 ? 'selected': ''}}>Disetujui</option>
                                    <option value="2" {{ Request('status_approved') == 2 ? 'selected': ''}}>Ditolak</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-3">
                            <div class="form-group">
                                <button class="btn btn-primary">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-search">
                                    <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                    <path d="M10 10m-7 0a7 7 0 1 0 14 0a7 7 0 1 0 -14 0" />
                                    <path d="M21 21l-6 -6" />
                                </svg>
                                Cari
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>NIK</th>
                            <th>Nama Karyawan</th>
                            <th>Jabatan</th>
                            <th>Status</th>
                            <th>Keterangan</th>
                            <th>Status Approve</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($izinsakit as $d)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ date('d-m-Y',strtotime($d->tgl_izin)) }}</td>
                            <td>{{ $d->nik }}</td>
                            <td>{{ $d->nama_lengkap }}</td>
                            <td>{{ $d->jabatan }}</td>
                            <td>{{ $d->status = "i" ? "Izin" : "Sakit" }}</td>
                            <td>{{ $d->keterangan }}</td>
                            <td>
                                @if($d->status_approved==1)
                                <span class="badge bg-success">Disetujui</span>
                                @elseif($d->status_approved==2)
                                <span class="badge bg-danger">Ditolak</span>
                                @else
                                <span class="badge bg-warning">Pending</span>
                                @endif
                            </td>
                            <td>
                                @if($d->status_approved==0)
                                <a href="#" class="btn btn-sm btn-primary" id="approve" id_izinsakit="{{ $d->id }}">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-circle-check">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                        <path d="M9 12l2 2l4 -4" />
                                    </svg>
                                </a>
                                @else
                                <a href="/presensi/{{ $d->id }}/batalkanizinsakit" class="btn btn-sm btn-danger">
                                    <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-circle-x">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                        <path d="M12 12m-9 0a9 9 0 1 0 18 0a9 9 0 1 0 -18 0" />
                                        <path d="M10 10l4 4m0 -4l-4 4" />
                                    </svg> Batalkan
                                </a>
                                @endif
                            </td>
                        </tr>

                        @endforeach
                    </tbody>
                </table>
                {{ $izinsakit->links('vendor.pagination.bootstrap-5') }}
            </div>
        </div>
    </div>
</div>
<div class="modal modal-blur fade" id="modal-izinsakit" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Izin Sakit</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="/presensi/approveizinsakit" method="POST">
                @csrf
                <input type="hidden" id="id_izinsakit_form" name="id_izinsakit_form">
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            <select name="status_approved" id="status_approved" class="form-select">
                                <option value="1">Disetujui</option>
                                <option value="2">Ditolak</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row mt-1">
                    <div class="col-12">
                        <div class="form-group">
                            <button class="btn btn-primary w-100" type="submit">
                                <svg  xmlns="http://www.w3.org/2000/svg"  width="24"  height="24"  viewBox="0 0 24 24"  fill="none"  stroke="currentColor"  stroke-width="2"  stroke-linecap="round"  stroke-linejoin="round"  class="icon icon-tabler icons-tabler-outline icon-tabler-send-2"><path stroke="none" d="M0 0h24v24H0z" fill="none"/>
                                <path d="M4.698 4.034l16.302 7.966l-16.302 7.966a.503 .503 0 0 1 -.546 -.124a.555 .555 0 0 1 -.12 -.568l2.468 -7.274l-2.468 -7.274a.555 .555 0 0 1 .12 -.568a.503 .503 0 0 1 .546 -.124z" />
                                <path d="M6.5 12h14.5" />
                            </svg>
                            Submit
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
</div>
@endsection

@push('myscript')
<script>
    $(function(){
        $("#approve").click(function(e){
            e.preventDefault();
            var id_izinsakit = $(this).attr("id_izinsakit");
            $("#id_izinsakit_form").val(id_izinsakit);
            $("#modal-izinsakit").modal("show");
        });

        $("#dari, #sampai").datepicker({
          autoclose: true,
          todayHighlight: true,
          format: 'yyyy-mm-dd'
    });
    });
</script>

@endpush
