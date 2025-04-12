@extends('layouts.app')

@section('content')
<div class="container-form">
    <div class="form-card">
      <h1 class="form-title">Formulir Undangan Metatah</h1>
  
      <form method="POST" action="{{ route('invitation.store') }}">
        @csrf
        <div class="form-group">
          <label for="name">Nama</label>
          <input id="name" type="text" name="name" required autofocus placeholder="Abi">
          @error('name')
            <span class="error-message">{{ $message }}</span>
          @enderror
        </div>
  
        <div class="form-group">
          <label for="phone">Nomor Telepon</label>
          <input id="phone" type="number" name="phone" required placeholder="087891182272">
          @error('phone')
            <span class="error-message">{{ $message }}</span>
          @enderror
        </div>
  
        <div class="form-submit">
          <button type="submit">Submit</button>
        </div>
      </form>
    </div>
  
    <div class="table-card">
      <table class="data-table" style="overflow-y:scroll; ">
        <thead>
          <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Telepon</th>
            <th>Aksi</th>
          </tr>
        </thead>
        <tbody>
          @php $counter = 1; @endphp
          @foreach ($invitations as $invitation)
          <tr>
            <td>{{ $counter }}</td>
            <td>{{ $invitation->name }}</td>
            <td>{{ $invitation->phone }}</td>
            <td class="action-buttons">
              <a href="{{ route('invitation.edit', ['id' => $invitation->id]) }}">Edit</a>
              <a href="https://api.whatsapp.com/send?phone={{ $invitation->phone }}&text=%2AKepada%20Yth.%2A%0A%2ABapak%2FIbu%2FSaudara%2Fi%2A%0A%0A%2AOm%20Swastyastu%2A%2C%0A%0ATanpa%20mengurangi%20rasa%20hormat%2C%20perkenankan%20kami%20mengundang%20Bapak%2FIbu%2FSaudara%2Fi%2C%20teman%20sekaligus%20sahabat%2C%20untuk%20menghadiri%20acara%20pernikahan%20kami%20%3A%0A%0ABerikut%20link%20undangan%20kami%20untuk%20info%20lengkap%20dari%20acara%20bisa%20kunjungi%20%3A%0A%0A{{ urlencode(url('/' . $invitation->name)) }}%0A%0AMerupakan%20suatu%20kebahagiaan%20bagi%20kami%20apabila%20Bapak%2FIbu%2FSaudara%2Fi%20berkenan%20untuk%20hadir%20dan%20memberikan%20doa%20restu.%0A%0AMohon%20maaf%20perihal%20undangan%20hanya%20di%20bagikan%20melalui%20pesan%20ini.%0A%0ATerima%20kasih%20banyak%20atas%20perhatiannya.%0A%0A%2AOm%20Shanti%2C%20Shanti%2C%20Shanti%2C%20Om.%2A" target="_blank">
                WhatsApp
            </a>
            
            
              <a href="{{ route('invitation.show', ['invitation' => $invitation->name]) }}">View</a>
              <form action="{{ route('invitation.destroy', [$invitation->id, $invitation->id]) }}" method="POST" onsubmit="return confirm('Confirm Delete?')">
                @csrf
                @method('DELETE')
                <button type="submit">Delete</button>
              </form>
            </td>
          </tr>
          @php $counter++; @endphp
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
  
@endsection
